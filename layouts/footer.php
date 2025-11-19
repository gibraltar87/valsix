<script>
    let slides = document.querySelectorAll('.slide');
    let index = 0;

    const currentPage = window.location.pathname.split("/").pop();
    const menuLinks = document.querySelectorAll(".sidebar ul li a");

    menuLinks.forEach(link => {
        if (link.getAttribute("href") === currentPage) {
            link.parentElement.classList.add("active");
        }
    });

    const menuToggle = document.getElementById("menuToggle");
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("sidebarOverlay");

    menuToggle.addEventListener("click", () => {
        sidebar.classList.toggle("active");
        menuToggle.classList.toggle("active");
        overlay.classList.toggle("active");
        document.body.classList.toggle("sidebar-open");

        const icon = menuToggle.querySelector(".icon");
        icon.textContent = menuToggle.classList.contains("active") ? "✖" : "☰";
    });

    // Klik luar sidebar = tutup
    overlay.addEventListener("click", () => {
        sidebar.classList.remove("active");
        menuToggle.classList.remove("active");
        overlay.classList.remove("active");
        document.body.classList.remove("sidebar-open");

        // Ubah ikon hamburger kembali ke ☰
        const icon = menuToggle.querySelector(".icon");
        icon.textContent = "☰";
    });
</script>
</body>

</html>