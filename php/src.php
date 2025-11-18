<script>
const sendbox = document.querySelector('#sendbox');
const scl = document.querySelector('#scl3');

const un = document.querySelector('#un');
const ua = document.querySelector('#ua');
const up = document.querySelector('#up');
const senmo = document.querySelector('#senmo');

const er = document.querySelector('.er');
const er1 = document.querySelector('.er');



const send_money = () => {

    if (un.value == "") {
        er.style.visibility = "visible";
        er1.textContent = "Please enter your account number.";
        setTimeout(() => {
            er.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (un.value.length > 11) {
        er.style.visibility = "visible";
        er1.innerHTML = "Invalid account number.";
        setTimeout(() => {
            er.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (un.value.length < 11) {
        er.style.visibility = "visible";
        er1.innerHTML = "Invalid account number.";
        setTimeout(() => {
            er.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (ua.value == "") {
        er.style.visibility = "visible";
        er1.textContent = "Please enter the amount.";
        setTimeout(() => {
            er.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (ua.value.length < 1) {
        er.style.visibility = "visible";
        er1.innerHTML = "Minimu amount 1 Tk.";
        setTimeout(() => {
            er.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (ua.value.length > 9) {
        er.style.visibility = "visible";
        er1.innerHTML = "Maximum amount 100000000 Tk.";
        setTimeout(() => {
            er.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (up.value == "") {
        er.style.visibility = "visible";
        er1.textContent = "Please enter your Card PIN.";
        setTimeout(() => {
            er.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (up.value.length < 6) {
        er.style.visibility = "visible";
        er1.innerHTML = "Minimum 6 digit card PIN.";
        setTimeout(() => {
            er.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (up.value.length > 8) {
        er.style.visibility = "visible";
        er1.innerHTML = "Maximum 8 digit card PIN.";
        setTimeout(() => {
            er.style.visibility = "hidden";
        }, 4000);

        return false;
    }
}

senmo.addEventListener('click', send_money);


const click1 = document.querySelector('#click1');
click1.addEventListener('click', () => {
    sendbox.style.visibility = "visible";
    un.style.visibility = "visible";
    ua.style.visibility = "visible";
    up.style.visibility = "visible";
    senmo.style.visibility = "visible";
});

scl.addEventListener('click', () => {
    sendbox.style.visibility = "hidden";
    un.style.visibility = "hidden";
    ua.style.visibility = "hidden";
    up.style.visibility = "hidden";
    setTimeout(() => {
        senmo.style.visibility = "hidden";
        er.style.visibility = "hidden";
    }, 1);
});


const cashout = document.querySelector('.cashout');
const un1 = document.querySelector('#un1');
const ua1 = document.querySelector('#ua1');
const up1 = document.querySelector('#up1');
const cash = document.querySelector('#cash');

const err = document.querySelector('.err');
const err1 = document.querySelector('.err1');

const cashoutf = () => {
    if (un1.value == "") {
        err.style.visibility = "visible";
        err1.textContent = "Please enter your account number.";
        setTimeout(() => {
            err.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (un1.value.length > 11) {
        err.style.visibility = "visible";
        err1.innerHTML = "Invalid account number.";
        setTimeout(() => {
            err.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (un1.value.length < 11) {
        err.style.visibility = "visible";
        err1.innerHTML = "Invalid account number.";
        setTimeout(() => {
            err.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (ua1.value == "") {
        err.style.visibility = "visible";
        err1.textContent = "Please enter the amount.";
        setTimeout(() => {
            err.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (ua1.value.length < 1) {
        err.style.visibility = "visible";
        err1.innerHTML = "Minimu amount 1 Tk.";
        setTimeout(() => {
            err.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (ua1.value.length > 9) {
        err.style.visibility = "visible";
        err1.innerHTML = "Maximum amount 100000000 Tk.";
        setTimeout(() => {
            err.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (up1.value == "") {
        err.style.visibility = "visible";
        err1.textContent = "Please enter your Card PIN.";
        setTimeout(() => {
            err.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (up1.value.length < 6) {
        err.style.visibility = "visible";
        err1.innerHTML = "Minimum 6 digit card PIN.";
        setTimeout(() => {
            err.style.visibility = "hidden";
        }, 4000);
        return false;
    } else if (up1.value.length > 8) {
        err.style.visibility = "visible";
        err1.innerHTML = "Maximum 8 digit card PIN.";
        setTimeout(() => {
            err.style.visibility = "hidden";
        }, 4000);
        return false;
    }
}

cash.addEventListener('click', cashoutf);


const click2 = document.querySelector('#click2');
click2.addEventListener('click', () => {
    cashout.style.visibility = "visible";
    un1.style.visibility = "visible";
    ua1.style.visibility = "visible";
    up1.style.visibility = "visible";
    cash.style.visibility = "visible";
});

const scl1 = document.querySelector('.scl');
scl1.addEventListener('click', () => {
    cashout.style.visibility = "hidden";
    un1.style.visibility = "hidden";
    ua1.style.visibility = "hidden";
    up1.style.visibility = "hidden";
    setTimeout(() => {
        cash.style.visibility = "hidden";
        err.style.visibility = "hidden";
    }, 1);
});


const click3 = document.querySelector("#click3");
click3.addEventListener("click", () => {
    message.style.visibility = "visible";
});

const click4 = document.querySelector("#click4");
click4.addEventListener("click", () => {
    loan.style.visibility = "visible";
});


const click5 = document.querySelector("#click5");
const b = document.querySelector("#ssname").value;
const bonus = document.querySelector(".bonus");


click5.addEventListener("click", () => {

    localStorage.setItem(b, 1);

    click5.style.visibility = "hidden";

    setTimeout(() => {
        location.reload(true);
    }, 800);

});


if (localStorage.getItem(b) == 1) {

    let n = document.getElementById('ssnumber').value;

    let bl = {
        user_phone: n,
        user_tk: 100,
    }

    fetch('../api/balance_update.php', {
            method: 'POST',
            body: JSON.stringify(bl),
        })
        .then((balance) => balance.json())
        .then((balance2) => {

        });

    click5.style.visibility = "hidden";

    localStorage.setItem(b, 0);

    setTimeout(() => {
        location.reload(true);
    }, 800);

} else if (localStorage.getItem(b) == 0) {

    click5.style.visibility = "hidden";

    setTimeout(() => {
        localStorage.setItem(b, 2);
        setTimeout(() => {
            location.reload(true);
        }, 800);
    }, 86400000);


} else if (localStorage.getItem(b) == 2) {

    localStorage.setItem(b, 3);

    click5.style.visibility = "visible";

} else {

    click5.style.visibility = "visible";

}
</script>