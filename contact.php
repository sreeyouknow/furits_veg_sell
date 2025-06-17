<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delta Misr Exporting</title>
    <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement(
                    {pageLanguage: 'en'}, 
                    'google_translate_element'
                );
            }
        </script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
/* Base Styles */
.contact-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 100px;
    padding: 20px;
    width: 89%;
    margin: 0 auto;
}

.map-container {
    flex: 1;
    min-width: 400px;
}

.address {
    flex: 1;
    max-width: 500px;
}
.address a {
    font-weight: 700;
    margin: 10px 11px;
    transition: color 0.3s ease;
}
.address h1 span{
    display: block;
}
/* Contact Form Styles */
.contact-form {
    background-color: #326699;
    color: white;
    padding: 20px;
    border-radius: 10px;
    max-width: 500px;
    margin: 230px auto 0 auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.contact-form h2 {
    text-align: center;
    color: #f06030;
    margin-bottom: 20px;
    font-size: 1.8rem;
}

/* Label Styles */
.contact-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

/* Input and Textarea Styles */
.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 2px solid #f06030;
    border-radius: 5px;
    background-color: white;
    color: #326699;
    font-size: 1rem;
}

.contact-form input::placeholder,
.contact-form textarea::placeholder {
    color: #326699;
    opacity: 0.8;
}

/* Input/textarea hover and focus styles */
.contact-form input:focus,
.contact-form textarea:focus {
    outline: none;
    border-color: #326699;
    background-color: #f9f9f9;
}

/* Button Styles */
.contact-form button {
    background-color: #f06030;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.2rem;
    width: 100%;
    transition: background-color 0.3s ease;
}

.contact-form button:hover {
    background-color: #326699;
    color: white;
}
#owner{
    border-radius: 50%;
    width: 218px;
    height: 207px;
    border-right: 3px solid #326699;
}
/* Mobile Responsiveness - Below 768px */
@media (max-width: 767.98px) {
    /* Contact Section */
    .contact-container {
        flex-direction: column;
        align-items: center;
        gap: 20px;
        padding: 10px;
    }

    /* Map */
    .map-container {
        width: 100%;
        min-width: unset;
        height: 250px; /* Adjust height for small screens */
    }
    main img {
        margin: 0;
    }
    /* Address */
    .address {
        width: 100%;
        text-align: center;
    }

    /* Form */
    .contact-form {
        margin: 0;
        width: 100%;
        max-width: unset;
        padding: 15px;
    }
    #owner{
        margin: 0;
    }
}

/* Tablet Responsiveness - Between 768px and 1024px */
@media (min-width: 768px) and (max-width: 1024px) {
    .contact-container {
        flex-direction: column;
        gap: 30px;
    }

    .map-container {
        width: 100%;
        min-width: unset;
        height: 300px;
    }
    main img {
        margin: 0;
    }
    .address {
        width: 100%;
        text-align: center;
    }

    .contact-form {
        margin: 0;
        width: 100%;
        max-width: unset;
    }
    #owner{
        margin: 0;
    }
}
/* Small Mobile Responsiveness - Below 375px */
@media (max-width: 375px) {
    .contact-container {
        flex-direction: column;
        gap: 15px;
        padding: 10px;
    }

    .map-container {
        width: 100%;
        min-width: unset;
        height: 200px; /* Smaller height for small screens */
    }
    main {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    main .footimg {
        display: none;
    }
    .address{
        margin: 0;
    width: 100%;
    }
    .address a{
        font-size: 14px;
        font-weight: 100;
        margin: 10px 0 10px -15px;
    }
    .address h1 {
    font-weight: 900;
    font-size: 19px;
    }
    .address h2 {
    font-size: 19px;
    }
    .address h3 span {
        font-size: 20px;
    }
    .address #icon01 a span{
        font-size: 12px;
        width: 100%;
    }
    .contact-form {
        margin: 0;
        width: 100%;
        max-width: unset;
        padding: 12px;
    }
    #owner{
        margin: 0;
    }

    .contact-form h2 {
        font-size: 1.5rem; /* Reduce heading size */
    }

    .contact-form input,
    .contact-form textarea {
        font-size: 0.9rem; /* Smaller input field text */
    }

    .contact-form button {
        font-size: 1rem; /* Slightly smaller button text */
    }
}

    </style>
</head>
<body>
    <div class="rectangle01"></div>
    <div class="rectangle02"></div>
<header>
    <div class="logo">
        <img src="assets/logo.png" alt="DELTA MISR EXPORT IMPORT">
    </div>
    <div>
        <h2>دلتا مصر للتنمية والاستثمار الزراعى والاستيراد والتصدير</h2>
        <p>Delta Misr Development & Agricultural Investment - Export & Import</p>
    </div>
</header>
<nav>
    <button class="toggle-btn" aria-expanded="false" aria-controls="nav-menu">
        ☰
    </button>
    <ul class="nav-menu" id="nav-menu">
        <li><a href="index.html" id="home-btn">Home</a></li>
        <li><a href="product.html" id="product-btn">Product</a></li>
        <li><a href="gallery.html" id="gallery-btn">Gallery</a></li>
        <li><a href="contact.php" id="contact-btn">Contact</a></li>
    </ul>
</nav>
<main id="contact">
    <div class="form">
        <section class="contact-form">
            <h2>Contact Us</h2>
            <form action="send_mail.php" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
        
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
        
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
        
                <button type="submit">Send</button>
            </form>
        </section>
    </div>
    
    <div><br><br><br>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <section class="address">
            <img src="assets/owner.jpeg" id="owner"alt="Owner Image">
            <h1><span>Owner:</span> Mr. M. Ghoneim</h1>
            <h3>Delta Misr Development & Agricultural Investment - Export & Import.</h3>
            <h2>Fresh Fruits & Vegetable Exporter</h2>
            <h3><span>Office:</span> #1A - Andel Tower - Highway - Tanta, Egypt.</h3>
            <h3><span>Factory:</span> Banha Free Zone. Qalyubiyya. Egypt.</h3>
            
            
            <div id="icon01">
                <a href="tel:+201097767789" class="phone">
                    <i class="fa fa-phone"></i> <span>+201097767789</span>
                </a>
                <a href="tel:+201143685655" class="phone">
                    <i class="fa fa-phone"></i> <span>+201143685655</span>
                </a>
                <a href="tel:+201151467768" class="phone">
                    <i class="fa fa-phone"></i> <span>+201151467768</span>
                </a>
            </div>
            <div id="icon01">
                <a href="mailto:info@agrodeltamisr.com" class="email">
                    <i class="fa fa-envelope"></i> <span>info@agrodeltamisr.com</span>
                </a>
                <a href="mailto:ghoneim.gt@oulook.com" class="email">
                    <i class="fa fa-envelope"></i> <span>ghoneim.gt@oulook.com</span>
                </a>
            </div>
        </section>       
    </div>
</main>
<main id="contact">
    <section class="contact-container">
        <!-- Left: Google Map -->
        <div class="map-container">
            <iframe 
                src="https://maps.google.com/maps?q=Delta%20Misr%20Development%20%26%20Agricultural%20Investment&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>

        <!-- Right: Address Details -->
       
    </section>
</main>

<footer>
    <div class="footer-content">
        <p>© 2025 Delta Misr Exporting. All rights reserved. Powered by <a href="https://www.royallipstech.com/" target="_blank">Royallips Technologies</a></p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the status and message from PHP
        const status = "<?php echo isset($_GET['status']) ? htmlspecialchars($_GET['status']) : ''; ?>";
        const message = "<?php echo isset($_GET['message']) ? htmlspecialchars($_GET['message']) : ''; ?>";

        if (status && message) {
            Swal.fire({
                icon: status === "success" ? "success" : "error",
                title: status === "success" ? "Success" : "Error",
                text: message,
            });
        }

        // Clean the URL by removing query parameters without reloading the page
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.pathname);
        }
    });
</script>

</body>
</html>
<div class="rectangle04"></div>
<div class="rectangle05"></div>
<div class="rectangle06"></div>
<div id="google_translate_element"></div>