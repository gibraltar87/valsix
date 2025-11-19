<?php
$pageTitle = "About Us";
include('../layouts/header.php');
?>

<div class="content">
    <div class="slider">
        <div class="slides">

            <div class="slide">
                <img src="https://images.pexels.com/photos/3184296/pexels-photo-3184296.jpeg" alt="Developer Team">
                <div class="overlay">
                    <h1>Solusi Digital Terintegrasi</h1>
                </div>
            </div>

        </div>

        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>

    <div class="main-content">
        <h2>TENTANG KAMI</h2>
        <div class="card animate">
            <p>
                <b>Valsix</b> adalah perusahaan pengembang perangkat lunak yang bergerak di bidang solusi berbasis IT
                yang dinamis, inovatif, dan terintegrasi. Perusahaan ini menawarkan berbagai layanan teknologi,
                termasuk pengembangan website dinamis, aplikasi desktop kustom, aplikasi GIS (Geographic Information
                System), aplikasi Android, dan multimedia interaktif.
                <br><br>
                Valsix bertujuan untuk memberikan solusi yang efisien dan efektif bagi bisnis pelanggan mereka.
            </p>

            <h3>Layanan Utama:</h3>
            <ul>
                <li>Pengembangan website dinamis</li>
                <li>Pengembangan aplikasi desktop kustom</li>
                <li>Pengembangan aplikasi GIS</li>
                <li>Pengembangan aplikasi Android</li>
                <li>Teknologi multimedia interaktif</li>
            </ul>

            <h3>Misi:</h3>
            <p>
                Memberikan solusi efisiensi dan efektivitas untuk kegiatan bisnis melalui teknologi.
            </p>

            <h3>Profil Singkat:</h3>
            <p>
                <b>Nama Perusahaan:</b> PT Valsix Kreasi Teknologi<br>
                <b>Fokus:</b> Pengembangan software dan penyediaan solusi IT.
            </p>

            <h3>Alamat:</h3>
            <p>
                Jl. Kendang Sari VI No.2A, Kendangsari, Kec. Tenggilis Mejoyo, Surabaya, Jawa Timur 60292
            </p>
        </div>
    </div>
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

    .main-content h2 {
        text-align: center;
        width: 100%;
        font-size: 40px;
        margin: 70px auto 50px;
        background: linear-gradient(90deg, #1A5551, #4d9e41);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 800;
        letter-spacing: 1px;
        position: relative;
    }

    /* Garis bawah */
    .main-content h2::after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #1A5551, #4d9e41);
        margin: 12px auto 0;
        border-radius: 2px;
    }


    .main-image {
        width: 100%;
        height: 500px;
        overflow: hidden;
        position: relative;
        border-radius: 0 0 12px 12px;
    }

    .main-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(65%);
        transition: transform 1.2s ease;
    }

    .main-image:hover img {
        transform: scale(1.05);
    }

    .main-content {
        padding: 0px 90px;
        background-color: #e0e0e0ff;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-bottom: 30px;
    }

    .card {
        background: #fff;
        padding: 50px 60px;
        border-radius: 14px;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.5);
        max-width: 900px;
        width: 100%;
        animation: fadeInUp 1s ease;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 28px rgba(0, 0, 0, 1);
    }

    .main-content p {
        font-size: 18px;
        line-height: 1.8;
        text-align: justify;
        color: #333;
    }

    .main-content h3 {
        margin-top: 30px;
        margin-bottom: 12px;
        color: #1A5551;
        font-size: 22px;
        position: relative;
    }

    .main-content h3::after {
        content: "";
        display: block;
        width: 60px;
        height: 3px;
        background-color: #4D9E41;
        border-radius: 2px;
        margin-top: 6px;
    }

    .main-content ul {
        margin-left: 25px;
        list-style-type: disc;
        color: #333;
    }

    .main-content ul li {
        margin-bottom: 8px;
        font-size: 17px;
    }

    @media (max-width: 992px) {
        .overlay {
            left: 30px;
            bottom: 40px;
        }

        .overlay h1 {
            font-size: 36px;
        }

        .overlay p {
            font-size: 16px;
        }

        .main-content {
            padding: 40px 20px;
        }

        .card {
            padding: 30px 25px;
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