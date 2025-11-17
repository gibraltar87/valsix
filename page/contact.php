<?php
$pageTitle = "Contact";
include('../layouts/header.php');

?>

<div class="content">
    <section class="slider">
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
    </section>
    <section class="contact-section">
        <h2>HUBUNGI KAMI</h2>
        <p class="intro-text">
            Kami siap membantu Anda dalam berbagai kebutuhan teknologi informasi dan solusi digital.
            Silakan hubungi kami melalui form di bawah ini atau datang langsung ke kantor kami.
        </p>

        <div class="contact-container">
            <div class="contact-info">
                <h3>Informasi Kontak</h3>
                <p><strong>Alamat:</strong><br> Jl. Kendang Sari VI No.2A, Kendangsari, Kec. Tenggilis Mejoyo, Surabaya,
                    Jawa Timur 60292</p>
                <p><strong>Email:</strong><br> marketing.care@valsix.co.id</p>
                <p><strong>Telepon:</strong><br>031-847 4350</p>
            </div>

            <div class="contact-form">
                <form method="post" action="send_mail.php">
                    <div class="input-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email aktif" required>
                    </div>
                    <div class="input-group">
                        <label for="pesan">Pesan Anda</label>
                        <textarea id="pesan" name="pesan" placeholder="Tulis pesan Anda di sini..." rows="5"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">KIRIM PESAN</button>
                </form>
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

/* overlay teks di tengah */
.overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    text-shadow: 0 3px 10px rgba(0, 0, 0, 0.6);
    font-family: "Montserrat", sans-serif;
}

.overlay h1 {
    font-size: 28px;
    font-weight: 700;
    letter-spacing: 1px;
}

.contact-section {
    text-align: center;
    padding: 0px 50px;
    background: linear-gradient(180deg, #ffffff, #f9f9f9);
}

.contact-section h2 {
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

/* Garis bawah dekoratif */
.contact-section h2::after {
    content: "";
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    border-radius: 3px;
    background: linear-gradient(90deg, #2e8b57, #4d9e41);
}

.contact-section .intro-text {
    max-width: 750px;
    margin: 0 auto 60px;
    font-size: 16px;
    line-height: 1.7;
    color: #555;
}

.contact-container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 60px;
    flex-wrap: wrap;
}

.contact-info {
    flex: 1;
    min-width: 280px;
    background: #fff;
    padding: 35px;
    border-radius: 20px;
    text-align: left;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.5);
    animation: fadeInLeft 0.8s ease;
}

.contact-info h3 {
    font-size: 22px;
    color: #1A5551;
    margin-bottom: 20px;
}

.contact-info p {
    color: #444;
    font-size: 15px;
    line-height: 1.7;
    margin-bottom: 20px;
}

.contact-form {
    flex: 1;
    min-width: 320px;
    background: #fff;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.5);
    animation: fadeInRight 0.8s ease;
}

.contact-form .input-group {
    margin-bottom: 20px;
    text-align: left;
}

.contact-form label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #1a5551;
    font-size: 15px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 14px;
    border: 1.5px solid #ccc;
    border-radius: 10px;
    font-size: 15px;
    outline: none;
    transition: 0.3s ease;
    font-family: 'Poppins', sans-serif;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #4D9E41;
    box-shadow: 0 0 6px rgba(77, 158, 65, 0.3);
}

.btn-submit {
    background-color: #1A5551;
    color: #fff;
    padding: 14px 30px;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
}

.btn-submit:hover {
    background-color: #4D9E41;
    transform: translateY(-3px);
}

.alert {
    margin: 20px auto;
    padding: 15px 20px;
    border-radius: 8px;
    font-weight: 500;
    max-width: 700px;
}

.success {
    background: #d4edda;
    color: #155724;
}

.error {
    background: #f8d7da;
    color: #721c24;
}

@media (max-width: 768px) {
    .contact-section {
        padding: 60px 25px;
    }

    .contact-section h2 {
        font-size: 30px;
    }

    .contact-section h2::after {
        width: 80px;
        height: 3px;
    }

    .contact-container {
        gap: 35px;
    }

    .contact-form,
    .contact-info {
        padding: 25px;
    }
}
</style>


<?php include('../layouts/footer.php'); ?>