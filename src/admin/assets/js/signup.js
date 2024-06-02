let currentStep = 1;
showStep(currentStep);

function showStep(step) {
  let steps = document.getElementsByClassName("step");
  for (let i = 0; i < steps.length; i++) {
    steps[i].style.display = "none";
  }
  steps[step - 1].style.display = "block";

  if (step === 1) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }

  if (step === steps.length) {
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("submitBtn").style.display = "inline";
  } else {
    document.getElementById("nextBtn").style.display = "inline";
    document.getElementById("submitBtn").style.display = "none";
  }
}

function nextStep() {
  currentStep++;
  showStep(currentStep);
}

function prevStep() {
  currentStep--;
  showStep(currentStep);
}

function submitForm() {
  // Handle form submission
}

const togglePassword1 = document.getElementById("toggle-signup");
const passwordInput1 = document.getElementById("password-signup");

togglePassword1.addEventListener("click", function () {
  const type =
    passwordInput1.getAttribute("type") === "password" ? "text" : "password";
  passwordInput1.setAttribute("type", type);
  if (type === "password") {
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  } else {
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  }
});

const togglePassword2 = document.getElementById("toggle-csignup");
const passwordInput2 = document.getElementById("cpassword-signup");

togglePassword2.addEventListener("click", function () {
  const type =
    passwordInput2.getAttribute("type") === "password" ? "text" : "password";
  passwordInput2.setAttribute("type", type);
  if (type === "password") {
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  } else {
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  }
});
