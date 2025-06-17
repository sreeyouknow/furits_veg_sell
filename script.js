document.addEventListener("DOMContentLoaded", function () {
    // ---- Navbar Active Link ----
    const menuLinks = document.querySelectorAll(".nav-menu a");

    function setActiveLink() {
        const currentPage = window.location.pathname.split("/").pop();
        menuLinks.forEach(link => link.classList.remove("active"));

        menuLinks.forEach(link => {
            if (link.getAttribute("href") === currentPage) {
                link.classList.add("active");
                localStorage.setItem("activePage", currentPage);
            }
        });
    }

    function restoreActiveLink() {
        const savedPage = localStorage.getItem("activePage");
        if (savedPage) {
            menuLinks.forEach(link => {
                if (link.getAttribute("href") === savedPage) {
                    link.classList.add("active");
                }
            });
        }
    }

    setActiveLink();
    restoreActiveLink();

    // ---- Toggle Navigation Menu (Mobile) ----
    const toggleBtn = document.querySelector(".toggle-btn");
    const navMenu = document.querySelector(".nav-menu");

    if (toggleBtn && navMenu) {
        toggleBtn.addEventListener("click", function () {
            navMenu.classList.toggle("show");
        });
    }

 // ---- Vegetables & Fruits Section Toggle ----
const vegBtn = document.getElementById("vegBtn");
const fruitBtn = document.getElementById("fruitBtn");
const vegetables = document.getElementById("vegetables");
const fruits = document.getElementById("fruits");

if (vegBtn && fruitBtn && vegetables && fruits) {
    // Show Vegetables and hide Fruits when clicking Veg button
    vegBtn.addEventListener("click", function () {
        vegetables.style.display = "flex";  // For desktop
        fruits.style.display = "none";
        vegBtn.classList.add("active");
        fruitBtn.classList.remove("active");
    });

    // Show Fruits and hide Vegetables when clicking Fruit button
    fruitBtn.addEventListener("click", function () {
        vegetables.style.display = "none";
        fruits.style.display = "flex";  // For desktop
        fruitBtn.classList.add("active");
        vegBtn.classList.remove("active");
    });
}
});
document.addEventListener("DOMContentLoaded", function () {
    // ---- Gallery Image Zoom ----
    const vegBtn = document.getElementById("vegBtn");
    const fruitBtn = document.getElementById("fruitBtn");
    const vegetables = document.getElementById("vegetables");
    const fruits = document.getElementById("fruits");

    if (vegBtn && fruitBtn && vegetables && fruits) {
        vegBtn.addEventListener("click", function () {
            vegetables.style.display = "flex";
            fruits.style.display = "none";
        });

        fruitBtn.addEventListener("click", function () {
            vegetables.style.display = "none";
            fruits.style.display = "flex";
        });
    }

    // ---- Product Modal (Popup) ----
    const productImages = document.querySelectorAll(".product-image");
    const modal = document.getElementById("product-modal");
    const modalImage = document.getElementById("modal-image");
    const closeBtn = document.querySelector(".close-btn");
    const productName = document.getElementById("product-name");
    const productDescription = document.getElementById("product-description");
    const productOffer = document.getElementById("product-offer");

    // Check if modal elements exist before running the script
    if (productImages.length > 0 && modal && modalImage && closeBtn) {
        // Product details
        const productDetails = {
            1: { src: "assets/p01.png", name: "Tropical Mangoes", description: "Delicious mangoes from the tropics.", offer: "15% off" },
            2: { src: "assets/p02.png", name: "Golden Dates", description: "Fresh dates harvested from the best farms.", offer: "10% off" },
            3: { src: "assets/p03.png", name: "Exotic Avocados", description: "Rich and creamy avocados.", offer: "20% off" },
            4: { src: "assets/p04.png", name: "Fresh Strawberries", description: "Sweet and juicy strawberries.", offer: "25% off" },
            5: { src: "assets/p05.png", name: "Crispy Apples", description: "Crisp apples picked at peak freshness.", offer: "30% off" },
            6: { src: "assets/p06.png", name: "Organic Carrots", description: "Freshly harvested organic carrots.", offer: "5% off" },
            7: { src: "assets/p07.png", name: "Delicious Pineapples", description: "Sweet and tangy pineapples.", offer: "15% off" },
            8: { src: "assets/p08.png", name: "Succulent Grapes", description: "Juicy grapes packed with flavor.", offer: "10% off" },
            9: { src: "assets/p09.png", name: "Fresh Tomatoes", description: "Ripe tomatoes for all your needs.", offer: "20% off" }
        };

        // Open modal when an image is clicked
        productImages.forEach(function (image) {
            image.addEventListener("click", function () {
                const productId = image.getAttribute("data-id");
                const product = productDetails[productId];

                if (product) {
                    modal.style.display = "block";
                    modalImage.src = product.src;
                    productName.textContent = product.name;
                    productDescription.textContent = product.description;
                    productOffer.textContent = product.offer;
                    modal.style.opacity = 1; // Fade-in effect
                }
            });
        });

        // Close the modal
        closeBtn.addEventListener("click", function () {
            modal.style.display = "none";
            modal.style.opacity = 0; // Fade-out effect
        });

        // Close the modal if clicked outside the content
        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
                modal.style.opacity = 0;
            }
        });
    }
});
