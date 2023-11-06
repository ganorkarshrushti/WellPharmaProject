document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("login-form");
    const errorMessage = document.getElementById("error-message");
    
    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();
        
        const username = loginForm.username.value;
        const password = loginForm.password.value;
        
        if (username === "user" && password === "password") {
            errorMessage.textContent = "Login successful!";
        } else {
            errorMessage.textContent = "Invalid username or password.";
        }
    });
});
