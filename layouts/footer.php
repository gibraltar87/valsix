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

menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("active");
    menuToggle.classList.toggle("active");
    document.body.classList.toggle("sidebar-open");

    const icon = menuToggle.querySelector(".icon");
    icon.textContent = menuToggle.classList.contains("active") ? "✖" : "☰";
});
</script>
</body>

</html>