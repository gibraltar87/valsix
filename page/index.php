<?php
$pageTitle = "Home";
include '../layouts/header.php';
?>

<div class="content">
    <div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg" alt="Meeting">
                <div class="overlay">
                    <h1>PT Valsix Kreasi Teknologi</h1>
                </div>
            </div>
        </div>


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
                <div class="feature-icon-wrapper">
                    <img src="../img/img1.png" alt="Industri Kreatif">
                </div>
                <p><b>Lebih dari 16 Tahun</b><br>di Industri Kreatif</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon-wrapper">
                    <img src="../img/img2.png" alt="Web Optimal">
                </div>
                <p><b>Mengembangkan</b><br>Situs Web Secara Optimal</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon-wrapper">
                    <img src="../img/img1.png" alt="Membantu Usaha">
                </div>
                <p><b>Membantu Anda</b><br>Lebih Mudah Mengelola Usaha</p>
            </div>
        </section>

        <h2 class="section-title">LAYANAN KAMI</h2>

        <div class="service-card">
            <div class="icon-wrapper">
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
            <div class="icon-wrapper">
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
            <div class="icon-wrapper">
                <img src="../img/mobile.png" alt="Android App">
            </div>
            <div class="service-content">
                <h3>ANDROID APPLICATION</h3>
                <p>
                    Valsix memberikan layanan pengembangan aplikasi Java yang dapat berjalan pada platform Android.
                </p>
            </div>
        </div>

        <div class="service-card">
            <div class="icon-wrapper">
                <img src="../img/multimedia.png" alt="Multimedia">
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

    <footer class="contact-footer">
        <div class="footer-col">
            <div class="footer-icon">
                <i class="fa fa-phone"></i>
            </div>
            <h3>Hubungi Kami</h3>
            <p>
                Landline : <br>
                +62 31 847 4350<br><br>
                WhatsApp:<br>
                +62 812 3456 7890
            </p>
        </div>

        <div class="footer-col">
            <div class="footer-icon">
                <i class="fa fa-pencil"></i>
            </div>
            <h3>Email</h3>
            <p>marketing.care@valsix.co.id</p>
        </div>

        <div class="footer-col">
            <div class="footer-icon">
                <i class="fa fa-map-marker"></i>
            </div>
            <h3>Cari Kami</h3>
            <p>
                Jl. Kendang Sari VI No.2A <br>
                Kendangsari, Kec. Tenggilis Mejoyo <br>
                Surabaya - Jawa Timur 60292
            </p>
        </div>
    </footer>

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
        opacity: 1;
        transition: opacity 1s ease-in-out;
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
        background-color: #e0e0e0ff;
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

    .feature-icon-wrapper {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        background: #E8FFE4;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        flex-shrink: 0;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.25);
        transition: 0.3s ease;
    }

    .feature-icon-wrapper img {
        width: 60%;
        height: auto;
        display: block;
        filter: invert(25%) sepia(50%) saturate(600%) hue-rotate(90deg);
    }

    .feature-item:hover .feature-icon-wrapper {
        transform: scale(1.05);
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

    .icon-wrapper {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        background: #E8FFE4;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 25px;
        flex-shrink: 0;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.25);
        transition: 0.3s ease;
    }


    .service-card:hover .icon-wrapper {
        transform: scale(1.05);
    }


    .icon-wrapper img {
        width: 70px;
        filter: invert(25%) sepia(50%) saturate(600%) hue-rotate(90deg);
    }


    .service-content h3 {
        margin-bottom: 10px;
        color: #1A5551;
    }

    .service-content p {
        text-align: justify;
        line-height: 1.7;
    }

    .contact-footer {
        width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: start;
        padding: 70px 20px;
        background: #1A5551;
        color: #333;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        border-top: 1px solid #eee;
    }

    .contact-footer .footer-col {
        width: 30%;
        max-width: 350px;
    }

    .contact-footer .footer-col h3 {
        font-size: 22px;
        margin-top: 10px;
        font-weight: 600;
        color: #e0e0e0ff;
    }

    .contact-footer .footer-col p {
        font-size: 15px;
        margin-top: 8px;
        line-height: 1.6;
        color: #e0e0e0ff;
    }

    .footer-icon {
        font-size: 38px;
        color: #e0e0e0ff;
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

        .icon-wrapper {
            margin: 0 auto 15px;
        }

        .overlay h1 {
            font-size: 36px;
        }

        .contact-footer {
            flex-direction: column;
            text-align: center;
            gap: 40px;
        }

        .contact-footer .footer-col {
            width: 100%;
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