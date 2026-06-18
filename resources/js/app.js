const menuButton = document.querySelector('[data-menu-button]');
const menuPanel = document.querySelector('[data-menu-panel]');

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
        const previousIndex = currentIndex <= 0 ? 0 : currentIndex - 1;
        goTo(previousIndex);
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

const lightboxModal = document.querySelector('[data-lightbox-modal]');
if (lightboxModal) {
    const lightboxImage = lightboxModal.querySelector('[data-lightbox-image]');
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

    const applyZoom = () => {
        if (!lightboxImage) return;
        applyPan();
    };

    const applyPan = () => {
        if (!lightboxImage) return;
        lightboxImage.style.transform = `translate(${panTranslateX}px, ${panTranslateY}px) scale(${lightboxZoom})`;
        if (zoomLabel) {
            zoomLabel.textContent = `${Math.round(lightboxZoom * 100)}%`;
        }
    };

    const fitStageToImage = () => {
        if (!lightboxImage || !lightboxStage || !lightboxImage.naturalWidth || !lightboxImage.naturalHeight) return;

        const ratio = lightboxImage.naturalWidth / lightboxImage.naturalHeight;
        const viewportWidth = Math.min(window.innerWidth * 0.82, 1100);
        const viewportHeight = Math.min(window.innerHeight * 0.58, 720);
        let width = viewportWidth;
        let height = width / ratio;

        if (height > viewportHeight) {
            height = viewportHeight;
            width = height * ratio;
        }

        stageWidth = Math.round(width);
        stageHeight = Math.round(height);
        lightboxStage.style.width = `${stageWidth}px`;
        lightboxStage.style.height = `${stageHeight}px`;
    };

    const closeLightbox = () => {
        lightboxModal.classList.add('hidden');
        lightboxModal.classList.remove('flex');
        lightboxModal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');
        lightboxZoom = 1;
        if (lightboxImage) {
            panActive = false;
            panPointerId = null;
            panTranslateX = 0;
            panTranslateY = 0;
            lightboxImage.style.transform = 'translate(0px, 0px) scale(1)';
        }
        if (zoomLabel) {
            zoomLabel.textContent = '100%';
        }
        if (lightboxStage) {
            lightboxStage.style.width = '';
            lightboxStage.style.height = '';
        }
    };

    const openLightbox = (source, title, caption) => {
        if (!lightboxImage || !lightboxTitle || !lightboxCaption) return;

        lightboxImage.src = source;
        lightboxImage.alt = title ? `${title} de Agible Capital` : 'Imagen ampliada';
        lightboxTitle.textContent = title || 'Imagen';
        lightboxCaption.textContent = caption || '';
        lightboxZoom = 1;
        panTranslateX = 0;
        panTranslateY = 0;
        applyPan();
        if (zoomLabel) {
            zoomLabel.textContent = '100%';
        }
        lightboxModal.classList.remove('hidden');
        lightboxModal.classList.add('flex');
        lightboxModal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');

        const handleLoad = () => {
            fitStageToImage();
            if (lightboxImage) {
                lightboxImage.style.transform = 'translate(0px, 0px) scale(1)';
            }
        };

        if (lightboxImage.complete) {
            handleLoad();
        } else {
            lightboxImage.addEventListener('load', handleLoad, { once: true });
        }
    };

    document.querySelectorAll('[data-lightbox-open]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            openLightbox(
                trigger.getAttribute('data-lightbox-src') || '',
                trigger.getAttribute('data-lightbox-title') || '',
                trigger.getAttribute('data-lightbox-caption') || ''
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
            applyPan();
        },
        { passive: false }
    );

    const adjustZoom = (direction) => {
        lightboxZoom = Math.min(zoomMax, Math.max(zoomMin, lightboxZoom + direction * zoomStep));
        if (lightboxZoom === 1) {
            panTranslateX = 0;
            panTranslateY = 0;
        }
        applyPan();
    };

    zoomInButton?.addEventListener('click', () => adjustZoom(1));
    zoomOutButton?.addEventListener('click', () => adjustZoom(-1));

    lightboxViewport?.addEventListener('pointerdown', (event) => {
        if (!lightboxImage || lightboxZoom <= 1) return;
        panActive = true;
        panPointerId = event.pointerId;
        panStartX = event.clientX;
        panStartY = event.clientY;
        lightboxImage.setPointerCapture(event.pointerId);
        lightboxImage.classList.add('cursor-grabbing');
    });

    lightboxViewport?.addEventListener('pointermove', (event) => {
        if (!panActive || panPointerId !== event.pointerId || lightboxZoom <= 1) return;
        const deltaX = event.clientX - panStartX;
        const deltaY = event.clientY - panStartY;
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
        lightboxImage?.classList.remove('cursor-grabbing');
    };

    lightboxViewport?.addEventListener('pointerup', endPan);
    lightboxViewport?.addEventListener('pointercancel', endPan);
    lightboxViewport?.addEventListener('pointerleave', endPan);

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !lightboxModal.classList.contains('hidden')) {
            closeLightbox();
        }
    });

    lightboxModal.addEventListener('click', (event) => {
        if (event.target === lightboxModal) {
            closeLightbox();
        }
    });

    window.addEventListener('resize', () => {
        if (!lightboxModal.classList.contains('hidden')) {
            fitStageToImage();
        }
    });
}
