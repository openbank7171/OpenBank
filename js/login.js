let rphone = document.querySelector("#rphone");
let rpassword = document.querySelector("#rpassword");
let uplo3 = document.querySelector(".uplo3");
let error = document.querySelector("#roni");

uplo3.addEventListener("click", (e) => {
  if (rphone.value == "") {
    error.style.visibility = "visible";
    error.innerHTML = "Please Enter Your Phone No...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    e.preventDefault();
  } else if (rphone.value.length < 11) {
    error.style.visibility = "visible";
    error.innerHTML = "Invalid Phone No...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    e.preventDefault();
  } else if (rphone.value.length > 11) {
    error.style.visibility = "visible";
    error.innerHTML = "Invalid Phone No...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    e.preventDefault();
  } else if (rpassword.value == "") {
    error.style.visibility = "visible";
    error.innerHTML = "Please Enter Your Password Only Numbers...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    e.preventDefault();
  } else if (rpassword.value.length > 8) {
    error.style.visibility = "visible";
    error.innerHTML = "Password (min 6 or max 8) Only Numbers...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    e.preventDefault();
  } else if (rpassword.value.length < 6) {
    error.style.visibility = "visible";
    error.innerHTML = "Password (min 6 or max 8) Only Numbers...!";
    setTimeout(() => {
      error.style.visibility = "hidden";
    }, 4000);
    e.preventDefault();
  }
});

rpassword.addEventListener("click", () => {
  if (rpassword.type === "password") {
    rpassword.type = "text";
  } else if (rpassword.type === "text") {
    rpassword.type = "password";
  }
});
