document.addEventListener("DOMContentLoaded", function () {
// ----------------toggle show password-------------

function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    if (input.type === "password") {
      input.type = "text";
    } else {
      input.type = "password";
    }
  }
  const eyeIcon =document.getElementById("eye-icon")
  eyeIcon.addEventListener('click',()=>{togglePassword("password")})

  const confirmEyeIcon =document.getElementById("confirm-eye-icon")
  confirmEyeIcon.addEventListener('click',()=>{togglePassword("confirm-password")})
})