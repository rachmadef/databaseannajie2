<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body {
        margin: 0;
    }
    /* Contact Section */
    #contact {
        background: var(--third-bg-color);
        padding: 3rem 0;
    }

    #contact h1 {
        margin: 0;
        margin-bottom: 20px;
        font-family: var(--primary-font-family);
        color: white;
        text-align: center;
        font-size: 40px;
        text-transform: uppercase;
    }

    .contact {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 3rem;
        margin: 0 auto;
    }

    .contact-left {
        padding: 10px;
    }

    .contact-form div {
        margin-bottom: 1.4rem;
    }

    .contact-form input, .contact-form textarea {
        width: 90%;
        padding: .75rem 1.3rem;
        font-family: var(--secondary-font-family);
        background: white;
        border: 0px solid var(--primary-bg-color);
        border-radius: 3px;
        resize: none;
    }

    .contact-form input::placeholder, .contact-form textarea::placeholder {
        color: #9d9fa1;
        font-size: 15px;
    }

    .contact-form input:focus, .contact-form textarea:focus {
        outline: none;
        border: 1px solid #7d7d7d;
    }

    .btn-submit {
        font-size: 15px;
        width: 90%;
        padding: .75rem 1.3rem;
        background-color: var(--primary-bg-color);
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: 0.2s ease-in-out;
        text-align: center;
    }

    .btn-submit:hover {
        background: var(--primary-hover-color);
    }

    /* Contact Section */
    .contact-right {
        padding: 10px;
    }
    .contact-item a {
        background: white;
        display: flex;
        margin-bottom: 1rem;
        padding: 1rem 1rem 1rem;
        border-radius: 10px;
        gap: 1rem;
        align-items: center;
        text-decoration: none;
    }


    .contact-item-icon {
        background: #f5f5ff;
        border-radius: 5px;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contact-item-icon svg {
        fill: var(--primary-bg-color);
    }

    .contact-item-detail {
        color: black;
    }

    .contact-item-detail p {
        opacity: 50%;
        margin: 0;
        text-decoration: none;
    }

    .contact-item-detail h4 {
        margin: 0;
        text-decoration: none;
    }


    /* Footer Section */
    footer {
        padding: 2rem 0 ;
        background-color: var(--forth-bg-color);
        text-align: center;
        color: white;
    }

    footer p {
        margin: 3px;
    }

    @media (max-width: 412px) {
        .contact {
            margin: 0 15px;
        }
    }
</style>
<body>
    <!-- Contact -->
    <section id="contact">
        <h1>Hubungi Kami</h1>
        <div class="contact main-container">
            <div class="contact-left">
                <form class="contact-form" action="https://formspree.io/f/xeojywnl" method="POST">
                    <div>
                        <input type="text" placeholder="Name" name="name">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div>
                        <textarea name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="btn-submit">
                        Send Message
                    </div>
                </form>
            </div>
            <div class="contact-right">
                <!-- Contact Item 1 -->
                <div class="contact-item">
                    <a href="">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3c2.131 0 4 1.73 4 3.702 0 2.05-1.714 4.941-4 8.561-2.286-3.62-4-6.511-4-8.561 0-1.972 1.869-3.702 4-3.702zm0-2c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z"/></svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Address</h4>
                                <p>PP. An - Najiyah 2 Bahrul Ulum Tambakberas Jombang</p>
                        </div>
                    </a>
                </div>
            
                <!-- Contact Item 2 -->
                <div class="contact-item">
                    <a href="https://api.whatsapp.com/send?phone=6285755969705&text=Assalamu%27alaikum%0ASalam%20Kenal?">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.176 1.322l2.844-1.322 4.041 7.89-2.724 1.341c-.538 1.259 2.159 6.289 3.297 6.372.09-.058 2.671-1.328 2.671-1.328l4.11 7.932s-2.764 1.354-2.854 1.396c-7.862 3.591-19.103-18.258-11.385-22.281zm1.929 1.274l-1.023.504c-5.294 2.762 4.177 21.185 9.648 18.686l.971-.474-2.271-4.383-1.026.5c-3.163 1.547-8.262-8.219-5.055-9.938l1.007-.497-2.251-4.398z"/></svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Phone</h4>
                            <p>+62 857-5596-9705</p>
                        </div>
                    </a>
                </div>

                <!-- Contact Item 3 -->
                <div class="contact-item">
                    <a href="https://www.instagram.com/annajiyah2.bu/">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Instagram</h4>
                            <p>@annajiyah2.bu</p>
                        </div>
                    </a>
                </div>
    
                <!-- Contact Item 4 -->
                <div class="contact-item">
                    <a href="">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"/></svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Email</h4>
                            <p>annajiyahputrabu2004@gmail.com</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
     </section>
    <!-- End of Contact -->

    <!-- Footer -->
     <footer>
        <p>Pondok Pesantren An - Najiyah 2 Bahrul Ulum</p>
        <p>Tambakberas Jombang Jawa Timur</p>
        <p>&#169; 2024 - Made by Er Grafis</p>
     </footer>
    <!-- End of Footer -->
</body>
</html>