<?php
$pageTitle = "Home";
include '../layouts/header.php';
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

    <div class="main-content">
        <p>
            Valsix, atau <b> PT Valsix Kreasi Teknologi</b>, adalah perusahaan teknologi informasi yang didirikan pada
            tahun
            2009 dan berlokasi di Surabaya, yang bergerak di bidang pengembangan software dan solusi IT. Perusahaan ini
            menyediakan solusi yang dinamis, inovatif, dan terintegrasi melalui berbagai teknologi, seperti pengembangan
            situs web, aplikasi desktop kustom, aplikasi GIS, aplikasi iOS & Android, serta teknologi multimedia
            interaktif. 
        </p>
        <h2 class="section-title">WHY US?</h2>
        <section class="features">
            <div class="feature-item">
                <img src="../img/img1.png" alt="Industri Kreatif">
                <p><b>Lebih dari 16 Tahun</b><br>di Industri Kreatif</p>
            </div>
            <div class="feature-item">
                <img src="../img/img2.png" alt="Web Optimal">
                <p><b>Mengembangkan</b><br>Situs Web Secara Optimal</p>
            </div>
            <div class="feature-item">
                <img src="../img/img1.png" alt="Membantu Usaha">
                <p><b>Membantu Anda</b><br>Lebih Mudah Mengelola Usaha</p>
            </div>
        </section>

        <h2 class="section-title">LAYANAN KAMI</h2>

        <div class="service-card">
            <div class="service-icon">
                <img src="../img/www.png" alt="Desain Web">
            </div>
            <div class="service-content">
                <h3>CUSTOM BUILD DESKTOP</h3>
                <p>
                    Valsix memberikan layanan pengembangan aplikasi berbasis <b>Desktop, Website, GIS.</b>
                    Layanan kami dapat menyesuaikan kebutuhan konsumen ataupun mengintegrasikan dengan sistem yang sudah
                    ada.
                </p>
            </div>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="../img/maintenance.png" alt="Pemeliharaan Web">
            </div>
            <div class="service-content">
                <h3>WEBSITE COMPANY PROFILE</h3>
                <p>
                    Valsix memberikan layanan pembuatan website interaktif untuk perusahaan, instansi, maupun pribadi.
                    Layanan kami meliputi pengembangan website berbasis 2.0, email setting, hosting, dan domain
                    registration
                    serta optimalisasi website di internet (SEO).
                </p>
            </div>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="../img/maintenance.png" alt="Android App">
            </div>
            <div class="service-content">
                <h3>ANDROID APPLICATION</h3>
                <p>
                    Valsix memberikan layanan pengembangan aplikasi Java yang dapat berjalan pada platform Android.
                </p>
            </div>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="../img/maintenance.png" alt="Multimedia">
            </div>
            <div class="service-content">
                <h3>INTERACTIVE MULTIMEDIA TECHNOLOGY</h3>
                <p>
                    Valsix memberikan layanan pembuatan aplikasi multimedia interaktif mulai dari Company Profile, User
                    Guide,
                    hingga Media Digital interaktif.
                </p>
            </div>
        </div>
    </div>
</div>

<style>
.slider {
    position: relative;
    width: 100%;
    max-width: 1100px;
    height: 500px;
    margin: 20px auto;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.7);
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

.main-image {
    width: 100%;
    height: 600px;
    overflow: hidden;
    position: relative;
    border-radius: 0 0 12px 12px;
}

.main-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(70%);
}

.main-content {
    padding: 60px 80px;
    background-color: #f9fafb;
    color: #333;
}

.main-content p {
    font-size: 18px;
    line-height: 1.8;
    text-align: justify;
    margin-bottom: 40px;
}

.features {
    display: flex;
    justify-content: space-around;
    margin: 50px 0;
    text-align: center;
    gap: 20px;
}

.feature-item {
    background: #fff;
    border-radius: 12px;
    padding: 25px 20px;
    width: 30%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
}

.feature-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
}

.feature-item img {
    width: 100px;
    margin-bottom: 10px;
}

.feature-item p {
    text-align: center;
    font-size: 16px;
    color: #1A5551;
}

.section-title {
    text-align: center;
    margin: 50px 0 25px;
    font-weight: bold;
    color: #1A5551;
    font-size: 26px;
    position: relative;
}

.section-title::after {
    content: "";
    width: 60px;
    height: 4px;
    background: #4D9E41;
    display: block;
    margin: 10px auto 0;
    border-radius: 2px;
}

.service-card {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 25px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.7);
}

.service-icon img {
    width: 90px;
    margin-right: 25px;
}

.service-content h3 {
    margin-bottom: 10px;
    color: #1A5551;
}

.service-content p {
    text-align: justify;
    line-height: 1.7;
}

@media (max-width: 992px) {


    .main-content {
        padding: 40px 30px;
    }

    .features {
        flex-direction: column;
        align-items: center;
    }

    .feature-item {
        width: 70%;
        margin-bottom: 25px;
    }

    .service-card {
        flex-direction: column;
        text-align: center;
    }

    .service-icon img {
        margin-bottom: 15px;
        margin-right: 0;
    }

    .overlay h1 {
        font-size: 36px;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<?php
include('../layouts/footer.php');
?>