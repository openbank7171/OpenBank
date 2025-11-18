let depo = document.querySelector("#depo");
let deposit = document.querySelector(".deposit");
let con2 = document.querySelector(".con2");
depo.addEventListener("click", () => {
  deposit.style.visibility = "visible";
  con2.style.visibility = "visible";
});

let clo = document.querySelector("#clo");
clo.addEventListener("click", () => {
  deposit.style.visibility = "hidden";
  con2.style.visibility = "hidden";
});

let clo2 = document.querySelector(".clo");
let message = document.querySelector(".message");
clo2.addEventListener("click", () => {
  message.style.visibility = "hidden";
});
