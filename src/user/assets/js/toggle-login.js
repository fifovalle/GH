const togglePassword = document.getElementById("toggle-login");
const passwordInput = document.getElementById("password");

togglePassword.addEventListener("click", function () {
  const type =
    passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);
  if (type === "password") {
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  } else {
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  }
});
