    <?php
    $pageTitle = "Service";
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
        <section class="services-section">
            <h2>LAYANAN KAMI</h2>

            <div class="services-container">
                <div class="service-box">
                    <div class="icon-wrapper">
                        <img src="../img/www.png" alt="Desain Web">
                    </div>
                    <h3>CUSTOM BUILD DESKTOP</h3>
                    <p>
                        Valsix memberikan layanan pengembangan aplikasi berbasis <b>Desktop, Website, GIS.</b> Layanan
                        kami dapat menyesuaikan kebutuhan konsumen ataupun mengintegrasikan dengan sistem yang sudah
                        ada.
                    </p>
                </div>

                <div class="service-box">
                    <div class="icon-wrapper">
                        <img src="../img/maintenance.png" alt="Pemeliharaan Web">
                    </div>
                    <h3>WEBSITE COMPANY PROFILE</h3>
                    <p>
                        Valsix memberikan layanan pembuatan website interaktif untuk perusahaan, instansi, maupun
                        pribadi. Layanan kami meliputi pengembangan website berbasis 2.0, email setting, hosting, dan
                        domain registration dan optimalisasi website di internet (search engine optimization).
                    </p>
                </div>

                <div class="service-box">
                    <div class="icon-wrapper">
                        <img src="../img/hosting.png" alt="Hosting">
                    </div>
                    <h3>ANDROID APPLICATION</h3>
                    <p>
                        Valsix memberikan layanan pengembangan aplikasi java yang dapat berjalan pada platform Android.
                    </p>
                </div>
                <div class="service-box">
                    <div class="icon-wrapper">
                        <img src="../img/hosting.png" alt="Hosting">
                    </div>
                    <h3>INTERACTIVE MULTIMEDIA TECHNOLOGY</h3>
                    <p>
                        Valsix memberikan layanan pembuatan aplikasi multimedia interaktif mulai dari Company Profile,
                        User Guide, sampai dengan Media Digital interaktif.
                    </p>
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
    margin: 40px auto;
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

.services-section {
    text-align: center;
    padding: 0px 50px;
    background: linear-gradient(to bottom, #ffffff, #f8f8f8);
}

.services-section h2 {
    position: relative;
    display: inline-block;
    font-size: 40px;
    margin-bottom: 70px;
    background: linear-gradient(90deg, #2e8b57, #4d9e41);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 800;
    letter-spacing: 1px;
}

/* Garis bawah di bawah judul */
.services-section h2::after {
    content: "";
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    border-radius: 2px;
    background: linear-gradient(90deg, #2e8b57, #4d9e41);
}

.services-container {
    display: flex;
    justify-content: center;
    align-items: stretch;
    gap: 50px;
    flex-wrap: wrap;
}

.service-box {
    background: #fff;
    border-radius: 14px;
    padding: 40px 25px;
    width: 300px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    transition: all 0.3s ease;
    animation: fadeInUp 0.8s ease;
}

.service-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 1);
}

.icon-wrapper {
    background: #f0fdf4;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin: 0 auto 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: transform 0.3s ease;
}

.service-box:hover .icon-wrapper {
    transform: scale(1.1);
    background: #e6ffe6;
}

.icon-wrapper img {
    width: 70px;
    filter: invert(25%) sepia(50%) saturate(600%) hue-rotate(90deg);
}

.service-box h3 {
    font-size: 20px;
    font-weight: bold;
    color: #1a5551;
    margin-bottom: 15px;
}

.service-box p {
    font-size: 15.5px;
    line-height: 1.8;
    color: #444;
    text-align: justify;
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

@media (max-width: 992px) {
    .services-container {
        gap: 35px;
    }

    .service-box {
        width: 270px;
    }
}

@media (max-width: 600px) {
    .services-section {
        padding: 70px 20px;
    }

    .services-section h2 {
        font-size: 30px;
        margin-bottom: 50px;
    }

    .services-section h2::after {
        width: 80px;
        height: 3px;
    }

    .service-box {
        width: 100%;
        padding: 30px 20px;
    }

    .icon-wrapper {
        width: 100px;
        height: 100px;
    }

    .icon-wrapper img {
        width: 60px;
    }
}
    </style>


    <?php
    include('../layouts/footer.php');
    ?>