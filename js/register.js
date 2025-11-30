let error = document.querySelector(".error");

let name = document.querySelector("#name");
let phone = document.querySelector("#phone");
let email = document.querySelector("#email");
let password = document.querySelector("#password");
let address = document.querySelector("#address");
let up = document.querySelector("#up");

let data = () => {
  if (name.value === "") {
    error.style.visibility = "visible";
    error.innerHTML = "Please Enter Your Full Name...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (name.value.length < 3) {
    error.style.visibility = "visible";
    error.innerHTML = "Please Enter Your Full Name...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (name.value.length > 50) {
    error.style.visibility = "visible";
    error.innerHTML = "Invalid Username...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (phone.value === "") {
    error.style.visibility = "visible";
    error.innerHTML = "Please Enter Your Phone No...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (phone.value.length < 11) {
    error.style.visibility = "visible";
    error.innerHTML = "Invalid Phone No...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (phone.value.length > 11) {
    error.style.visibility = "visible";
    error.innerHTML = "Invalid Phone No...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (email.value == "") {
    error.style.visibility = "visible";
    error.innerHTML = "Please Enter Your Email Address...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (email.value.length < 4) {
    error.style.visibility = "visible";
    error.innerHTML = "Invalid Email Address...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (email.value.length > 100) {
    error.style.visibility = "visible";
    error.innerHTML = "Invalid Email Address...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (password.value === "") {
    error.style.visibility = "visible";
    error.innerHTML = "Please Enter Your Password Only Numbers...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (password.value.length > 8) {
    error.style.visibility = "visible";
    error.innerHTML = "Password (min 6 or max 8) Only Numbers...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (password.value.length < 6) {
    error.style.visibility = "visible";
    error.innerHTML = "Password (min 6 or max 8) Only Numbers...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (address.value === "") {
    error.style.visibility = "visible";
    error.innerHTML = "Please Enter Your Address...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (address.value.length < 5) {
    error.style.visibility = "visible";
    error.innerHTML = "Invalide Address...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (address.value.length > 120) {
    error.style.visibility = "visible";
    error.innerHTML = "Invalide Address...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  } else if (up.value === "") {
    error.style.visibility = "visible";
    error.innerHTML = "Please choose your profile picture...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    return false;
  }
};
let uplo2 = document.querySelector(".uplo2");
uplo2.addEventListener("click", data);

password.addEventListener("click", () => {
  if (password.type === "password") {
    password.type = "text";
  } else if (password.type === "text") {
    password.type = "password";
  }
});
