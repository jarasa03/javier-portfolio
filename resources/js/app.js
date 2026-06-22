const menuButton = document.querySelector('[data-menu-button]');
const menuPanel = document.querySelector('[data-menu-panel]');
const scrollTopButton = document.querySelector('[data-scroll-top]');

if (menuButton && menuPanel) {
    const setExpanded = (expanded) => {
        menuButton.setAttribute('aria-expanded', expanded ? 'true' : 'false');
        menuPanel.classList.toggle('hidden', !expanded);
    };

    menuButton.addEventListener('click', () => {
        const expanded = menuButton.getAttribute('aria-expanded') === 'true';
        setExpanded(!expanded);
    });

    menuPanel.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setExpanded(false));
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            setExpanded(false);
        }
    });
}

if (scrollTopButton) {
    scrollTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
        scrollTopButton.blur();
    });
}

document.querySelectorAll('[data-work-filter-bar]').forEach((filterBar) => {
    const buttons = Array.from(filterBar.querySelectorAll('[data-work-filter]'));
    const status = filterBar.querySelector('[data-work-filter-status]');
    const cards = Array.from(document.querySelectorAll('[data-work-card]'));

    if (!buttons.length || !cards.length) {
        return;
    }

    const activeButtonClasses = ['bg-brand', 'text-white', 'border-brand', 'shadow-sm', 'cursor-pointer'];
    const inactiveButtonClasses = [
        'bg-white',
        'text-slate-600',
        'border-slate-200',
        'cursor-pointer',
        'hover:border-brand-soft',
        'hover:bg-brand-soft/30',
        'hover:text-brand-strong',
    ];

    const setActiveButton = (activeValue) => {
        buttons.forEach((button) => {
            const isActive = button.getAttribute('data-work-filter') === activeValue;
            button.setAttribute('aria-pressed', isActive ? 'true' : 'false');
            button.classList.remove(...activeButtonClasses, ...inactiveButtonClasses);

            if (isActive) {
                button.classList.add(...activeButtonClasses);
            } else {
                button.classList.add(...inactiveButtonClasses);
            }
        });
    };

    const applyFilter = (filter) => {
        let visibleCount = 0;

        cards.forEach((card) => {
            const categories = (card.getAttribute('data-work-categories') || '')
                .split(',')
                .map((category) => category.trim())
                .filter(Boolean);
            const matches = filter === 'all' || categories.includes(filter);

            card.classList.toggle('hidden', !matches);

            if (matches) {
                visibleCount += 1;
            }
        });

        if (status) {
            status.textContent =
                filter === 'all'
                    ? `Mostrando ${visibleCount} trabajos.`
                    : `Mostrando ${visibleCount} trabajo${visibleCount === 1 ? '' : 's'} en esta categoría.`;
        }

        setActiveButton(filter);
    };

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            applyFilter(button.getAttribute('data-work-filter') || 'all');
        });
    });

    applyFilter('all');
});

document.querySelectorAll('[data-carousel]').forEach((carousel) => {
    const track = carousel.querySelector('[data-carousel-track]');
    const prevButton = carousel.querySelector('[data-carousel-prev]');
    const nextButton = carousel.querySelector('[data-carousel-next]');

    if (!track || !prevButton || !nextButton) {
        return;
    }

    const realSlides = Array.from(track.querySelectorAll('[data-carousel-slide]'));

    if (realSlides.length > 1) {
        const loopClone = realSlides[0].cloneNode(true);
        loopClone.setAttribute('data-carousel-clone', 'true');
        track.appendChild(loopClone);
    }

    const getSlides = () => Array.from(track.querySelectorAll('[data-carousel-slide]'));

    const getStep = () => {
        const firstSlide = track.querySelector('[data-carousel-slide]');
        return firstSlide ? firstSlide.getBoundingClientRect().width : track.clientWidth;
    };

    const getIndex = () => {
        const step = getStep();
        return step ? Math.round(track.scrollLeft / step) : 0;
    };

    const originalCount = realSlides.length;
    const cloneIndex = originalCount;
    const smoothDuration = 700;
    let isLoopJumping = false;

    const goTo = (index, behavior = 'smooth') => {
        if (isLoopJumping) return;
        const slides = getSlides();
        if (!slides.length) return;
        const bounded = Math.max(0, Math.min(index, cloneIndex));
        track.scrollTo({ left: bounded * getStep(), behavior });
    };

    const goForward = () => {
        const currentIndex = getIndex();
        if (currentIndex >= cloneIndex) {
            return;
        }

        const nextIndex = currentIndex + 1;
        goTo(nextIndex);

        window.clearTimeout(track._loopTimeout);
        track._loopTimeout = window.setTimeout(() => {
            if (nextIndex === cloneIndex) {
                isLoopJumping = true;
                track.style.scrollBehavior = 'auto';
                track.scrollLeft = 0;
                window.requestAnimationFrame(() => {
                    window.requestAnimationFrame(() => {
                        track.style.scrollBehavior = 'smooth';
                        isLoopJumping = false;
                    });
                });
            }
        }, smoothDuration);
    };

    track.style.scrollBehavior = 'smooth';

    prevButton.addEventListener('click', () => {
        const currentIndex = getIndex();
        if (currentIndex <= 0) {
            isLoopJumping = true;
            track.style.scrollBehavior = 'auto';
            track.scrollLeft = (cloneIndex - 1) * getStep();
            window.requestAnimationFrame(() => {
                window.requestAnimationFrame(() => {
                    track.style.scrollBehavior = 'smooth';
                    isLoopJumping = false;
                });
            });
            return;
        }

        goTo(currentIndex - 1);
    });

    nextButton.addEventListener('click', () => {
        goForward();
    });

    let intervalId = window.setInterval(() => {
        goForward();
    }, 5200);

    carousel.addEventListener('mouseenter', () => {
        window.clearInterval(intervalId);
    });

    carousel.addEventListener('mouseleave', () => {
        intervalId = window.setInterval(() => {
            goForward();
        }, 5200);
    });

});

document.querySelectorAll('[data-tech-marquee]').forEach((marquee) => {
    const track = marquee.querySelector('[data-tech-marquee-track]');
    const template = marquee.querySelector('[data-tech-marquee-group]');

    if (!track || !template) {
        return;
    }

    const speed = 28;
    let offset = 0;
    let lastTimestamp = 0;
    let cycleWidth = 0;
    let rafId = null;
    let resizeRafId = null;
    let paused = false;

    const setTrackPosition = () => {
        track.style.transform = `translate3d(${-offset}px, 0, 0)`;
    };

    const clearClones = () => {
        track.querySelectorAll('[data-tech-marquee-clone="true"]').forEach((node) => node.remove());
    };

    const measureCycleWidth = () => {
        const groupWidth = template.getBoundingClientRect().width;
        const computedStyles = window.getComputedStyle(track);
        const gap = parseFloat(computedStyles.columnGap || computedStyles.gap || '0') || 0;
        return groupWidth + gap;
    };

    const fillTrack = () => {
        clearClones();
        track.style.animation = 'none';
        track.style.willChange = 'transform';
        track.style.width = 'max-content';
        offset = 0;
        cycleWidth = measureCycleWidth();

        if (!cycleWidth) {
            return;
        }

        const viewportWidth = marquee.getBoundingClientRect().width;
        while (track.scrollWidth < viewportWidth + cycleWidth) {
            const clone = template.cloneNode(true);
            clone.setAttribute('data-tech-marquee-clone', 'true');
            clone.setAttribute('aria-hidden', 'true');
            track.appendChild(clone);
        }

        setTrackPosition();
    };

    const stop = () => {
        if (rafId !== null) {
            window.cancelAnimationFrame(rafId);
            rafId = null;
        }
        lastTimestamp = 0;
    };

    const step = (timestamp) => {
        if (paused) {
            lastTimestamp = timestamp;
            rafId = window.requestAnimationFrame(step);
            return;
        }

        if (!lastTimestamp) {
            lastTimestamp = timestamp;
        }

        const delta = timestamp - lastTimestamp;
        lastTimestamp = timestamp;

        if (cycleWidth > 0) {
            offset = (offset + speed * (delta / 1000)) % cycleWidth;
            setTrackPosition();
        }

        rafId = window.requestAnimationFrame(step);
    };

    const start = () => {
        stop();
        rafId = window.requestAnimationFrame(step);
    };

    const rebuild = () => {
        stop();
        fillTrack();
        start();
    };

    const scheduleRebuild = () => {
        if (resizeRafId !== null) {
            window.cancelAnimationFrame(resizeRafId);
        }

        resizeRafId = window.requestAnimationFrame(() => {
            resizeRafId = null;
            rebuild();
        });
    };

    marquee.addEventListener('mouseenter', () => {
        paused = true;
    });

    marquee.addEventListener('mouseleave', () => {
        paused = false;
    });

    window.addEventListener('resize', scheduleRebuild);

    if ('ResizeObserver' in window) {
        const observer = new ResizeObserver(scheduleRebuild);
        observer.observe(marquee);
        marquee._techMarqueeObserver = observer;
    }

    rebuild();
});

const lightboxModal = document.querySelector('[data-lightbox-modal]');
if (lightboxModal) {
    const lightboxImage = lightboxModal.querySelector('[data-lightbox-image]');
    const lightboxIframe = lightboxModal.querySelector('[data-lightbox-iframe]');
    const lightboxViewport = lightboxModal.querySelector('[data-lightbox-viewport]');
    const lightboxStage = lightboxModal.querySelector('[data-lightbox-stage]');
    const lightboxTitle = lightboxModal.querySelector('[data-lightbox-title]');
    const lightboxCaption = lightboxModal.querySelector('[data-lightbox-caption]');
    const lightboxClose = lightboxModal.querySelector('[data-lightbox-close]');
    const lightboxBackdrop = lightboxModal.querySelector('[data-lightbox-backdrop]');
    const zoomInButton = lightboxModal.querySelector('[data-lightbox-zoom-in]');
    const zoomOutButton = lightboxModal.querySelector('[data-lightbox-zoom-out]');
    const zoomLabel = lightboxModal.querySelector('[data-lightbox-zoom-label]');
    let lightboxZoom = 1;
    const zoomStep = 0.12;
    const zoomMin = 1;
    const zoomMax = 2.8;
    let panActive = false;
    let panPointerId = null;
    let panStartX = 0;
    let panStartY = 0;
    let panTranslateX = 0;
    let panTranslateY = 0;
    let stageWidth = 0;
    let stageHeight = 0;
    let activeViewerType = 'image';
    let ctrlZoomMode = false;

    const applyZoom = () => {
        if (activeViewerType === 'pdf') {
            if (!lightboxIframe) return;
            lightboxIframe.style.transformOrigin = 'top center';
            lightboxIframe.style.transform = `scale(${lightboxZoom})`;
        } else if (lightboxImage) {
            applyPan();
        }
        if (zoomLabel) {
            zoomLabel.textContent = `${Math.round(lightboxZoom * 100)}%`;
        }
    };

    const applyPan = () => {
        if (!lightboxImage) return;
        lightboxImage.style.transform = `translate(${panTranslateX}px, ${panTranslateY}px) scale(${lightboxZoom})`;
        if (zoomLabel) {
            zoomLabel.textContent = `${Math.round(lightboxZoom * 100)}%`;
        }
    };

    const getPanMultiplier = () => Math.max(1.2, lightboxZoom);

    const fitImageStage = () => {
        if (!lightboxStage || activeViewerType !== 'image') return;

        const viewportWidth = Math.min(window.innerWidth * 0.94, 1500);
        const viewportHeight = Math.min(window.innerHeight * 0.82, 980);

        stageWidth = Math.round(viewportWidth);
        stageHeight = Math.round(viewportHeight);
        lightboxStage.style.width = `${stageWidth}px`;
        lightboxStage.style.height = `${stageHeight}px`;
        lightboxStage.style.minHeight = `${stageHeight}px`;
    };

    const closeLightbox = () => {
        lightboxModal.classList.add('hidden');
        lightboxModal.classList.remove('flex');
        lightboxModal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');
        activeViewerType = 'image';
        lightboxZoom = 1;
        if (lightboxImage) {
            panActive = false;
            panPointerId = null;
            panTranslateX = 0;
            panTranslateY = 0;
            lightboxImage.style.transform = 'translate(0px, 0px) scale(1)';
        }
        if (lightboxIframe) {
            lightboxIframe.src = '';
            lightboxIframe.classList.add('hidden');
            lightboxIframe.style.transform = '';
            lightboxIframe.style.transformOrigin = '';
            lightboxIframe.classList.remove('pointer-events-none');
        }
        if (lightboxImage) {
            lightboxImage.classList.remove('hidden');
            lightboxImage.style.transform = 'translate(0px, 0px) scale(1)';
        }
        if (zoomLabel) {
            zoomLabel.textContent = '100%';
        }
        if (lightboxStage) {
            lightboxStage.style.width = '';
            lightboxStage.style.height = '';
            lightboxStage.style.minHeight = '';
        }
    };

    const openLightbox = (source, title, caption, type = 'image') => {
        if (!lightboxImage || !lightboxTitle || !lightboxCaption) return;

        activeViewerType = type;
        lightboxTitle.textContent = title || 'Imagen';
        lightboxCaption.textContent = caption || '';
        lightboxZoom = 1;
        panTranslateX = 0;
        panTranslateY = 0;
        applyPan();
        if (zoomLabel) {
            zoomLabel.textContent = '100%';
        }

        if (type === 'pdf') {
            lightboxImage.classList.add('hidden');
            if (lightboxIframe) {
                lightboxIframe.classList.remove('hidden');
                lightboxIframe.src = `${source}#view=FitH&page=1&toolbar=0&navpanes=0`;
                lightboxIframe.style.transformOrigin = 'top center';
                lightboxIframe.style.transform = 'scale(1)';
                lightboxIframe.classList.toggle('pointer-events-none', ctrlZoomMode);
            }
            if (lightboxStage) {
                lightboxStage.style.width = 'min(92vw, 1400px)';
                lightboxStage.style.height = 'min(78vh, 960px)';
                lightboxStage.style.minHeight = 'min(78vh, 960px)';
            }
        } else {
            lightboxImage.classList.remove('hidden');
            if (lightboxIframe) {
                lightboxIframe.classList.add('hidden');
                lightboxIframe.src = '';
                lightboxIframe.style.transform = '';
                lightboxIframe.style.transformOrigin = '';
                lightboxIframe.classList.remove('pointer-events-none');
            }
            fitImageStage();
            lightboxImage.src = source;
            lightboxImage.alt = title || 'Imagen ampliada';
        }

        lightboxModal.classList.remove('hidden');
        lightboxModal.classList.add('flex');
        lightboxModal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');

        if (type !== 'pdf' && lightboxImage) {
            lightboxImage.style.transform = 'translate(0px, 0px) scale(1)';
        }
    };

    document.querySelectorAll('[data-lightbox-open]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            const type = trigger.getAttribute('data-lightbox-type') || 'image';
            openLightbox(
                trigger.getAttribute('data-lightbox-src') || '',
                trigger.getAttribute('data-lightbox-title') || '',
                trigger.getAttribute('data-lightbox-caption') || '',
                type
            );
        });
    });

    lightboxClose?.addEventListener('click', closeLightbox);
    lightboxBackdrop?.addEventListener('click', closeLightbox);

    lightboxViewport?.addEventListener(
        'wheel',
        (event) => {
            event.preventDefault();
            const delta = event.deltaY < 0 ? zoomStep : -zoomStep;
            lightboxZoom = Math.min(zoomMax, Math.max(zoomMin, lightboxZoom + delta));
            applyZoom();
        },
        { passive: false }
    );

    const adjustZoom = (direction) => {
        lightboxZoom = Math.min(zoomMax, Math.max(zoomMin, lightboxZoom + direction * zoomStep));
        if (lightboxZoom === 1) {
            panTranslateX = 0;
            panTranslateY = 0;
        }
        applyZoom();
    };

    const setCtrlZoomMode = (enabled) => {
        ctrlZoomMode = enabled;
        if (activeViewerType === 'pdf' && lightboxIframe) {
            lightboxIframe.classList.toggle('pointer-events-none', enabled);
        }
    };

    zoomInButton?.addEventListener('click', () => adjustZoom(1));
    zoomOutButton?.addEventListener('click', () => adjustZoom(-1));

    lightboxViewport?.addEventListener('pointerdown', (event) => {
        if (!lightboxImage || lightboxZoom <= 1) return;
        event.preventDefault();
        panActive = true;
        panPointerId = event.pointerId;
        panStartX = event.clientX;
        panStartY = event.clientY;
        lightboxImage.setPointerCapture(event.pointerId);
        lightboxViewport.classList.add('cursor-grabbing');
        lightboxImage.classList.add('cursor-grabbing');
    });

    lightboxViewport?.addEventListener('pointermove', (event) => {
        if (!panActive || panPointerId !== event.pointerId || lightboxZoom <= 1) return;
        const deltaX = (event.clientX - panStartX) * getPanMultiplier();
        const deltaY = (event.clientY - panStartY) * getPanMultiplier();
        panTranslateX += deltaX;
        panTranslateY += deltaY;
        panStartX = event.clientX;
        panStartY = event.clientY;
        applyPan();
    });

    const endPan = (event) => {
        if (panPointerId !== null && event?.pointerId !== undefined && panPointerId !== event.pointerId) return;
        panActive = false;
        panPointerId = null;
        lightboxViewport?.classList.remove('cursor-grabbing');
        lightboxImage?.classList.remove('cursor-grabbing');
    };

    lightboxViewport?.addEventListener('pointerup', endPan);
    lightboxViewport?.addEventListener('pointercancel', endPan);
    window.addEventListener('keydown', (event) => {
        if (event.key === 'Control') {
            setCtrlZoomMode(true);
        }
        if (event.key === 'Escape' && !lightboxModal.classList.contains('hidden')) {
            closeLightbox();
        }
    });

    window.addEventListener('keyup', (event) => {
        if (event.key === 'Control') {
            setCtrlZoomMode(false);
        }
    });

    window.addEventListener('blur', () => {
        setCtrlZoomMode(false);
    });

    window.addEventListener('resize', () => {
        if (!lightboxModal.classList.contains('hidden')) {
            if (activeViewerType === 'image') {
                fitImageStage();
            }
        }
    });

    lightboxModal.addEventListener('click', (event) => {
        if (event.target === lightboxModal) {
            closeLightbox();
        }
    });
}
