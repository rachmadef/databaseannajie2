<link rel="stylesheet" href="css/style.css">
<menu>
    <nav class="navbar">
        <div class="logo">
            <a href="index.php" style="text-decoration: none;">
                <img src="img/logo.png" alt="">
            </a>
        </div>
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="#">KTS</a></li>
            <li><a href="coba_form.php">Form Pendaftaran</a></li>
            <li><a href="#contact">Hubungi Kami</a></li>
        </ul>
    </nav>
</menu>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const hamburger = document.querySelector(".hamburger");
        const menu = document.querySelector(".navbar ul");

        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            menu.classList.toggle("active");
        });
    });
</script>