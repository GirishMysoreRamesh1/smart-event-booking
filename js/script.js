// === Public Header Menu Toggle (if needed in future) ===
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector('.spub-menu-toggle');
    const navList = document.querySelector('.spub-nav-list');
    
    if (menuToggle && navList) {
        menuToggle.addEventListener("click", () => {
            navList.classList.toggle("spub-show");
        });
    }
});

// === Private Header Menu Toggle (if mobile toggle added in future) ===
document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector('.spri-menu-toggle');
    const navList = document.querySelector('.spri-nav-list');

    if (toggle && navList) {
        toggle.addEventListener("click", () => {
            navList.classList.toggle("spri-show");
        });
    }
});

// === Client-side validation for login form ===
function validateRegisterForm() {
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirm_password").value.trim();

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters.");
        return false;
    }

    return true;
}

// === Client-side login form validation ===
function validateLoginForm() {
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    if (email === "" || password === "") {
        alert("Please fill in both email and password.");
        return false;
    }

    return true;
}

