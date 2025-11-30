<script>
let card = document.querySelector(".card");
let backg = document.querySelector(".backg");
let hide = document.querySelector("#hide");
let cardcolor = document.querySelector('.cardcolor');
let card2 = document.querySelector(".card2");
let card3 = document.querySelector(".card3");
let card4 = document.querySelector(".card4");
let card5 = document.querySelector(".card5");
let card6 = document.querySelector(".card6");
let card7 = document.querySelector(".card7");
let card8 = document.querySelector(".card8");
let card9 = document.querySelector(".card9");
let card10 = document.querySelector(".card10");
let sen1 = document.querySelector(".sen1");
let sen2 = document.querySelector(".sen2");



setTimeout(() => {
    cardcolor.style.visibility = "hidden";
}, 7500);



if (localStorage.getItem(<?php echo $phone2; ?>) == 2) {
    card.classList.add("ccard2");
    backg.classList.add("bbackg2");
} else if (localStorage.getItem(<?php echo $phone2; ?>) == 3) {
    card.classList.add("ccard3");
    backg.classList.add("bbackg3");
} else if (localStorage.getItem(<?php echo $phone2; ?>) == 4) {
    card.classList.add("ccard4");
    backg.classList.add("bbackg4");
} else if (localStorage.getItem(<?php echo $phone2; ?>) == 5) {
    card.classList.add("ccard5");
    backg.classList.add("bbackg5");
} else if (localStorage.getItem(<?php echo $phone2; ?>) == 6) {
    card.classList.add("ccard6");
    backg.classList.add("bbackg6");
} else if (localStorage.getItem(<?php echo $phone2; ?>) == 7) {
    card.classList.add("ccard7");
    backg.classList.add("bbackg7");
} else if (localStorage.getItem(<?php echo $phone2; ?>) == 8) {
    card.classList.add("ccard8");
    backg.classList.add("bbackg8");
} else if (localStorage.getItem(<?php echo $phone2; ?>) == 9) {
    card.classList.add("ccard9");
    backg.classList.add("bbackg9");
} else if (localStorage.getItem(<?php echo $phone2; ?>) == 10) {
    card.classList.add("ccard10");
    backg.classList.add("bbackg10");
}


card2.addEventListener('click', () => {
    localStorage.setItem(<?php echo $phone2; ?>, 2);

    card.classList.remove("ccard3");
    card.classList.remove("ccard4");
    card.classList.remove("ccard5");
    card.classList.remove("ccard6");
    card.classList.remove("ccard7");
    card.classList.remove("ccard8");
    card.classList.remove("ccard9");
    card.classList.remove("ccard10");


    backg.classList.remove("bbackg3");
    backg.classList.remove("bbackg4");
    backg.classList.remove("bbackg5");
    backg.classList.remove("bbackg6");
    backg.classList.remove("bbackg7");
    backg.classList.remove("bbackg8");
    backg.classList.remove("bbackg9");
    backg.classList.remove("bbackg10");

    card.classList.add("ccard2");
    backg.classList.add("bbackg2");
});

card3.addEventListener('click', () => {
    localStorage.setItem(<?php echo $phone2; ?>, 3);

    card.classList.remove("ccard2");
    card.classList.remove("ccard4");
    card.classList.remove("ccard5");
    card.classList.remove("ccard6");
    card.classList.remove("ccard7");
    card.classList.remove("ccard8");
    card.classList.remove("ccard9");
    card.classList.remove("ccard10");


    backg.classList.remove("bbackg2");
    backg.classList.remove("bbackg4");
    backg.classList.remove("bbackg5");
    backg.classList.remove("bbackg6");
    backg.classList.remove("bbackg7");
    backg.classList.remove("bbackg8");
    backg.classList.remove("bbackg9");
    backg.classList.remove("bbackg10");

    card.classList.add("ccard3");
    backg.classList.add("bbackg3");
});

card4.addEventListener('click', () => {
    localStorage.setItem(<?php echo $phone2; ?>, 4);

    card.classList.remove("ccard2");
    card.classList.remove("ccard3");
    card.classList.remove("ccard5");
    card.classList.remove("ccard6");
    card.classList.remove("ccard7");
    card.classList.remove("ccard8");
    card.classList.remove("ccard9");
    card.classList.remove("ccard10");


    backg.classList.remove("bbackg2");
    backg.classList.remove("bbackg3");
    backg.classList.remove("bbackg5");
    backg.classList.remove("bbackg6");
    backg.classList.remove("bbackg7");
    backg.classList.remove("bbackg8");
    backg.classList.remove("bbackg9");
    backg.classList.remove("bbackg10");

    card.classList.add("ccard4");
    backg.classList.add("bbackg4");
});

card5.addEventListener('click', () => {
    localStorage.setItem(<?php echo $phone2; ?>, 5);

    card.classList.remove("ccard2");
    card.classList.remove("ccard3");
    card.classList.remove("ccard4");
    card.classList.remove("ccard6");
    card.classList.remove("ccard7");
    card.classList.remove("ccard8");
    card.classList.remove("ccard9");
    card.classList.remove("ccard10");


    backg.classList.remove("bbackg2");
    backg.classList.remove("bbackg3");
    backg.classList.remove("bbackg4");
    backg.classList.remove("bbackg6");
    backg.classList.remove("bbackg7");
    backg.classList.remove("bbackg8");
    backg.classList.remove("bbackg9");
    backg.classList.remove("bbackg10");

    card.classList.add("ccard5");
    backg.classList.add("bbackg5");
});

card6.addEventListener('click', () => {
    localStorage.setItem(<?php echo $phone2; ?>, 6);

    card.classList.remove("ccard2");
    card.classList.remove("ccard3");
    card.classList.remove("ccard4");
    card.classList.remove("ccard5");
    card.classList.remove("ccard7");
    card.classList.remove("ccard8");
    card.classList.remove("ccard9");
    card.classList.remove("ccard10");


    backg.classList.remove("bbackg2");
    backg.classList.remove("bbackg3");
    backg.classList.remove("bbackg4");
    backg.classList.remove("bbackg5");
    backg.classList.remove("bbackg7");
    backg.classList.remove("bbackg8");
    backg.classList.remove("bbackg9");
    backg.classList.remove("bbackg10");

    card.classList.add("ccard6");
    backg.classList.add("bbackg6");
});

card7.addEventListener('click', () => {
    localStorage.setItem(<?php echo $phone2; ?>, 7);

    card.classList.remove("ccard2");
    card.classList.remove("ccard3");
    card.classList.remove("ccard4");
    card.classList.remove("ccard5");
    card.classList.remove("ccard6");
    card.classList.remove("ccard8");
    card.classList.remove("ccard9");
    card.classList.remove("ccard10");


    backg.classList.remove("bbackg2");
    backg.classList.remove("bbackg3");
    backg.classList.remove("bbackg4");
    backg.classList.remove("bbackg5");
    backg.classList.remove("bbackg6");
    backg.classList.remove("bbackg8");
    backg.classList.remove("bbackg9");
    backg.classList.remove("bbackg10");

    card.classList.add("ccard7");
    backg.classList.add("bbackg7");
});

card8.addEventListener('click', () => {
    localStorage.setItem(<?php echo $phone2; ?>, 8);

    card.classList.remove("ccard2");
    card.classList.remove("ccard3");
    card.classList.remove("ccard4");
    card.classList.remove("ccard5");
    card.classList.remove("ccard6");
    card.classList.remove("ccard7");
    card.classList.remove("ccard9");
    card.classList.remove("ccard10");


    backg.classList.remove("bbackg2");
    backg.classList.remove("bbackg3");
    backg.classList.remove("bbackg4");
    backg.classList.remove("bbackg5");
    backg.classList.remove("bbackg6");
    backg.classList.remove("bbackg7");
    backg.classList.remove("bbackg9");
    backg.classList.remove("bbackg10");

    card.classList.add("ccard8");
    backg.classList.add("bbackg8");
});

card9.addEventListener('click', () => {
    localStorage.setItem(<?php echo $phone2; ?>, 9);

    card.classList.remove("ccard2");
    card.classList.remove("ccard3");
    card.classList.remove("ccard4");
    card.classList.remove("ccard5");
    card.classList.remove("ccard6");
    card.classList.remove("ccard7");
    card.classList.remove("ccard8");
    card.classList.remove("ccard10");


    backg.classList.remove("bbackg2");
    backg.classList.remove("bbackg3");
    backg.classList.remove("bbackg4");
    backg.classList.remove("bbackg5");
    backg.classList.remove("bbackg6");
    backg.classList.remove("bbackg7");
    backg.classList.remove("bbackg8");
    backg.classList.remove("bbackg10");

    card.classList.add("ccard9");
    backg.classList.add("bbackg9");
});

card10.addEventListener('click', () => {
    localStorage.setItem(<?php echo $phone2; ?>, 10);

    card.classList.remove("ccard2");
    card.classList.remove("ccard3");
    card.classList.remove("ccard4");
    card.classList.remove("ccard5");
    card.classList.remove("ccard6");
    card.classList.remove("ccard7");
    card.classList.remove("ccard8");
    card.classList.remove("ccard9");


    backg.classList.remove("bbackg2");
    backg.classList.remove("bbackg3");
    backg.classList.remove("bbackg4");
    backg.classList.remove("bbackg5");
    backg.classList.remove("bbackg6");
    backg.classList.remove("bbackg7");
    backg.classList.remove("bbackg8");
    backg.classList.remove("bbackg9");

    card.classList.add("ccard10");
    backg.classList.add("bbackg10");

});





hide.addEventListener('click', () => {
    cardcolor.style.visibility = "hidden";
});


card.addEventListener('click', () => {
    card.style.visibility = "hidden";
});


backg.addEventListener('click', () => {
    card.style.visibility = "visible";
});



let off = document.getElementById("off");
let offcan = document.querySelector(".offcan");
let offcon = document.querySelector(".offcon");
let clos = document.querySelector("#clos");
let pcc2 = document.querySelector("#pcc2");
let boxxx = document.querySelector(".boxxx");
let boxxx1 = document.querySelector(".boxxx1");
let li2 = document.querySelector(".li2");
let offh4 = document.querySelector(".offh4");
let update = document.querySelector("#update");
let offh5 = document.querySelector(".offh5");
let offli = document.querySelector(".offul");
let offh6 = document.querySelector('.offh6');

let num = document.querySelector("#num");
let time = document.querySelector("#time");
let claim = document.querySelector("#claim");


offh6.addEventListener('click', () => {
    cardcolor.style.visibility = "visible";
})


offli.onclick = function() {
    offcan.style.visibility = "hidden";
    offcon.style.visibility = "visible";
}


off.onclick = function() {
    offcan.style.visibility = "visible";
    offcon.style.visibility = "hidden";
}

clos.onclick = function() {
    offcan.style.visibility = "hidden";
    offcon.style.visibility = "visible";
}

li2.onclick = function() {
    boxxx.style.visibility = "visible";
}

offh4.onclick = function() {
    boxxx.style.visibility = "visible";
}

update.onclick = function() {
    boxxx.style.visibility = "hidden";
}
</script>