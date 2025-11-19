<?php
$pageTitle = "Portofolio";
include('../layouts/header.php');
?>

<div class="content">
    <div class="slider">
        <div class="slides">
            <div class="slide active">
                <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg" alt="Meeting">
                <div class="overlay">
                    <h1>PT Valsix Kreasi Teknologi</h1>
                </div>
            </div>
            <div class="slide">
                <img src="https://images.pexels.com/photos/3184296/pexels-photo-3184296.jpeg" alt="Developer Team">
                <div class="overlay">
                    <h1>Solusi Digital Terintegrasi</h1>
                </div>
            </div>
            <div class="slide">
                <img src="https://images.pexels.com/photos/3861958/pexels-photo-3861958.jpeg" alt="Office Work">
                <div class="overlay">
                    <h1>Kreativitas dan Inovasi Teknologi</h1>
                </div>
            </div>
        </div>

        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>
    <section class="portfolio-section">
        <h2>PORTOFOLIO</h2>
        <p class="intro-text">
            Proyek yang Kami kerjakan selama ini merupakan usaha dalam mengembangkan layanan, solusi IT dan produk
            inovatif dalam pengembangan industri IT.
            Beberapa proyek yang telah kami kerjakan dapat berjalan dengan baik sesuai harapan klien.
            Sebagian portofolio tidak dapat kami publikasikan karena merupakan hasil kerja sama dengan pihak lain.
        </p>
        <h2>KLIEN KAMI</h2>
        <p class="intro-text">
            Ini adalah beberapa kilen kami
        </p>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="../img/Pelindo.png" alt="Proyek 1">
                <div class="overlay-portofolio">
                    <p>PT Pelabuhan Indonesia III (PERSERO)</p>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="../img/perkapalan.png" alt="Proyek 2">
                <div class="overlay-portofolio">
                    <p>PT DOK dan Perkapalan Surabaya (PERSERO)
                    </p>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="../img/iki.png" alt="Proyek 3">
                <div class="overlay-portofolio">
                    <p>PT Industri Kapal Indonesia (PERSERO)</p>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="../img/aquamarine.png" alt="Proyek 3">
                <div class="overlay-portofolio">
                    <p>PT Aquamarine Divindo Inspection</p>
                </div>
            </div>

        </div>
    </section>
</div>

<style>
.slider {
    position: relative;
    width: 100%;
    max-width: 1100px;
    height: 320px;
    /* tinggi seperti contoh Desktop-1 */
    margin: 40px auto;
    /* beri jarak luar dan center di tengah */
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
}

.slides {
    position: relative;
    height: 100%;
}

.slide {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}

.slide.active {
    opacity: 1;
    z-index: 1;
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(70%);
    border-radius: 12px;
}


.portfolio-section {
    text-align: center;
    padding: 0px 40px;
    background: linear-gradient(180deg, #ffffff, #f9f9f9);
}

.portfolio-section h2 {
    position: relative;
    display: inline-block;
    font-size: 40px;
    margin-bottom: 70px;
    background: linear-gradient(90deg, #1A5551, #4d9e41);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 800;
    letter-spacing: 1px;
}

/* Garis bawah di bawah judul */
.portfolio-section h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #1A5551, #4d9e41);
    margin: 12px auto 0;
    border-radius: 2px;
}

.portfolio-section .intro-text {
    max-width: 850px;
    margin: 0 auto 60px;
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    opacity: 0.9;
}

.portfolio-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    justify-items: center;
}

.portfolio-box {
    position: relative;
    width: 100%;
    border-radius: 18px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 5px 18px rgba(0, 0, 0, 0.5);
    transition: all 0.4s ease;
    animation: fadeInUp 0.8s ease both;
}

.portfolio-box img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    border-radius: 18px;
    transition: transform 0.5s ease, filter 0.5s ease;
}

.portfolio-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.overlay-portofolio {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.65), transparent);
    color: #1A5551;
    padding: 15px 20px;
    text-align: left;
    font-size: 14px;
    line-height: 1.5;
    opacity: 1;
    transform: translateY(0);
    transition: all 0.4s ease;
}

.portfolio-box:hover .overlay-portofolio {
    opacity: 0;
    transform: translateY(30px);
}

.portfolio-box:hover img {
    transform: scale(1.05);
    filter: brightness(1.05);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(25px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .portfolio-section {
        padding: 60px 20px;
    }

    .portfolio-section h2 {
        font-size: 30px;
    }

    .portfolio-section .intro-text {
        font-size: 14px;
    }

    .portfolio-box img {
        height: 210px;
    }
}
</style>

<?php include('../layouts/footer.php'); ?>