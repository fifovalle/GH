const toggleresetPassword = document.getElementById("toggle-reset");
const resetpasswordInput = document.getElementById("reset_password");

toggleresetPassword.addEventListener("click", function () {
  const type =
    resetpasswordInput.getAttribute("type") === "password"
      ? "text"
      : "password";
  resetpasswordInput.setAttribute("type", type);
  if (type === "password") {
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  } else {
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  }
});

const toggleconfirmPassword = document.getElementById("toggle-confirm");
const confirmpasswordInput = document.getElementById("confirm_password");

toggleconfirmPassword.addEventListener("click", function () {
  const type =
    confirmpasswordInput.getAttribute("type") === "password"
      ? "text"
      : "password";
  confirmpasswordInput.setAttribute("type", type);
  if (type === "password") {
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  } else {
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  }
});
