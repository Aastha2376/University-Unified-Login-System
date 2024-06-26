const loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit', function(event) {
    event.preventDefault();
    // Redirect to login.php for form submission
    loginForm.submit();
});
