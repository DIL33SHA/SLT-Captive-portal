// Function to toggle password visibility
function togglePasswordVisibility() {
const passwordInput = document.getElementById('password');
const currentType = passwordInput.getAttribute('type');
const newType = currentType === 'password' ? 'text' : 'password';
passwordInput.setAttribute('type', newType);
}

function ealert() {
    const data = document.getElementById("password").value;

    if (data == "") {
        alert("Password must be filled out");
        return false;
      }
}