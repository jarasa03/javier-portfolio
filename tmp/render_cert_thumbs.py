from pathlib import Path

import fitz


BASE = Path(r"C:\Users\javie\Herd\javier-portfolio\public\certificates")
OUT = BASE / "thumbs"
OUT.mkdir(parents=True, exist_ok=True)

FILES = [
    ("master-artificial-intelligence-big-school.pdf", "master-artificial-intelligence-big-school.png"),
    ("master-artificial-intelligence-universidad-isabel-i.pdf", "master-artificial-intelligence-universidad-isabel-i.png"),
    ("honors-diploma-daw.pdf", "honors-diploma-daw.png"),
    ("diploma-erasmus.pdf", "diploma-erasmus.png"),
    ("technician-diploma-it-systems-and-networks.pdf", "technician-diploma-it-systems-and-networks.png"),
]

for src_name, dst_name in FILES:
    src = BASE / src_name
    if not src.exists():
        print(f"missing {src_name}")
        continue

    doc = fitz.open(src)
    page = doc.load_page(0)
    pix = page.get_pixmap(matrix=fitz.Matrix(2, 2), alpha=False)
    pix.save(str(OUT / dst_name))
    print(f"wrote {dst_name} {pix.width}x{pix.height}")
