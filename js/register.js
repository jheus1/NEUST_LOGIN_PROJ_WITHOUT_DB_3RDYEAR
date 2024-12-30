const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

  togglePassword.addEventListener("click", function () {
  
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);

      this.classList.toggle("bi-eye");
  });


  const toggleCPassword = document.querySelector("#toggleCPassword");
  const cpassword = document.querySelector("#cpassword");

  toggleCPassword.addEventListener("click", function () {

      const type = cpassword.getAttribute("type") === "password" ? "text" : "password";
      cpassword.setAttribute("type", type);


      this.classList.toggle("bi-eye");
  });

  const form = document.querySelector("form");
  form.addEventListener('submit', function (e) {
      e.preventDefault();
  });