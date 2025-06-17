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
    // ---- Gallery Image Toggle ----
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

// Check if modal elements exist before running the script
if (productImages.length > 0 && modal && modalImage && closeBtn) {
    // Product details without offers
    const productDetails = {
        1: { src: "assets/vegetables/Artichoke.jpeg", name: "Artichoke", description: "A nutritious and tasty vegetable." },
        2: { src: "assets/vegetables/Broccoli.gif", name: "Broccoli", description: "A rich source of vitamins and fiber." },
        3: { src: "assets/vegetables/Cabbage.jpeg", name: "Cabbage", description: "A leafy vegetable used in many dishes." },
        4: { src: "assets/vegetables/chilli.jpeg", name: "Chilli", description: "Spicy and flavorful ingredient." },
        5: { src: "assets/vegetables/garlic.jpeg", name: "Garlic", description: "Aromatic and healthy seasoning." },
        7: { src: "assets/vegetables/lemon.jpeg", name: "Lemon", description: "Citrus fruit packed with Vitamin C." },
        8: { src: "assets/vegetables/Lettuce.jpeg", name: "Lettuce", description: "A fresh and crisp leafy vegetable." },
        9: { src: "assets/vegetables/onion.jpeg", name: "Onion", description: "A staple ingredient in many dishes." },
        10: { src: "assets/vegetables/Potato.jpeg", name: "Potato", description: "A versatile and filling vegetable." },
        11: { src: "assets/vegetables/Capsicum.jpeg", name: "Capsicum", description: "A colorful and crunchy vegetable." },
        12: { src: "assets/vegetables/tamatos.jpeg", name: "Tomatoes", description: "Juicy and great for cooking." },
        13: { src: "assets/fruits/grapes.jpeg", name: "Grapes", description: "Sweet and juicy fruit." },
        14: { src: "assets/fruits/mandarin.jpeg", name: "Mandarin", description: "Small and sweet citrus fruit." },
        15: { src: "assets/fruits/mango.jpeg", name: "Mango", description: "The king of fruits, sweet and tropical." },
        16: { src: "assets/fruits/oranges.jpeg", name: "Oranges", description: "Rich in Vitamin C and refreshing." },
        17: { src: "assets/fruits/pear.gif", name: "Pear", description: "Soft and juicy fruit with a mild sweetness." },
        18: { src: "assets/fruits/pomegranate.jpeg", name: "Pomegranate", description: "Rich in antioxidants, full of flavor." },
        19: { src: "assets/fruits/strawberry.jpeg", name: "Strawberry", description: "Bright red and packed with sweetness." }
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
