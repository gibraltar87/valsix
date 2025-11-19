<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= isset($pageTitle) ? $pageTitle . ' | Valsix Technology' : 'Valsix Technology'; ?></title>
    <link rel="shortcut icon" href="../img/Valsix-x.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <button class="menu-toggle" id="menuToggle">
        <span class="icon">
            ☰
        </span>
    </button>

    <div class="sidebar" id="sidebar">

        <img src="../img/valsix.png" alt="Logo Valsix">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about-us.php">TENTANG</a></li>
            <li><a href="service.php">LAYANAN</a></li>
            <li><a href="portofolio.php">PORTOFOLIO</a></li>
            <li><a href="contact.php">KONTAK</a></li>
        </ul>
        <div class="copyright">
            <p>© 2025 Valsix Technology</p>
            <p>All rights reserved.</p>
        </div>
    </div>
    <div id="sidebarOverlay" class="sidebar-overlay"></div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Montserrat", Verdana, Geneva, Tahoma, sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: #e0e0e0ff;
            overflow-x: hidden;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #1A5551;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .sidebar img {
            width: 200px;
            margin-bottom: 50px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            flex: 1;
        }

        .sidebar ul li {
            margin-bottom: 40px;
            font-size: 18px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #ffffffff;
            font-weight: 500;
            font-size: 17px;
            transition: color 0.3s;
        }

        .sidebar ul li a:hover {
            color: #4D9E41;
        }

        .sidebar ul li.active a {
            font-weight: bold;
            color: #4D9E41;
        }

        .sidebar-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.3);
            display: none;
            z-index: 900;
        }

        .sidebar-overlay.active {
            display: block;
        }

        .copyright {
            width: 100%;
            text-align: center;
            font-size: 15px;
            color: #e0e0e0ff;
            padding: 20px 0;
            border-top: 1px solid #ddd;
            line-height: 1.4;
        }

        .content {
            margin-left: 250px;
            flex: 1;
            overflow-y: auto;
            width: 100%;
            transition: all 0.3s ease;
        }

        body.sidebar-open .content {
            filter: blur(2px);
        }

        .menu-toggle {
            display: none;
        }

        .menu-toggle.active {
            left: auto;
            right: 20px;
        }

        .menu-toggle.active .icon {
            font-size: 26px;
        }

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


        @media (max-width: 992px) {

            .sidebar {
                left: -260px;
            }

            .sidebar.active {
                left: 0;
            }

            .content {
                margin-left: 0;
            }

            .menu-toggle {
                display: block;
                position: fixed;
                top: 20px;
                left: 20px;
                background: #1A5551;
                color: white;
                border: none;
                font-size: 24px;
                border-radius: 8px;
                padding: 8px 12px;
                z-index: 2100;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .menu-toggle.active {
                left: auto;
                right: 20px;
            }

            body.sidebar-open .content {
                filter: blur(2px);
                transition: filter 0.5s;
            }

            .overlay h1 {
                font-size: 32px;
            }

            .prev,
            .next {
                font-size: 20px;
                padding: 10px 12px;
            }

            .slider {
                width: auto;
                height: 50%;
            }
        }
    </style>