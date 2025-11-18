<div class="loan">
    <img src="../img/clo.png" id="loancc"
        style="height: 40px; width: 40px; border-radius: 50%; margin-left: 97%; margin-top: 10px;  box-shadow: 0px 0px 10px white; cursor: pointer;">

    <div class="tiloan"
        style="margin-bottom: 0px; margin-top: -50px; display: flex; justify-content: center; align-items: center;">
        <img class="logo" src="../img/bn.png" alt="logo">
        <img class="title" src="../img/open.png"
            style="box-shadow: 0px 0px 10px white; border-radius: 5px; background: rgba(4, 218, 189, 1); padding: 5px; height: 50px; width: 250px;">
    </div>
    <hr>

    <div id="loa">
        <h2 style="color: rgba(255, 255, 255, 1);">💰 Loan EMI</h2>
    </div>

    <div class="loand">
        <h4 style="margin-bottom: 10px; color: rgba(3, 131, 42, 1);">🏦 লোন বিবরণ (Loan Description) :</h4>
        <p style="color: rgba(0, 0, 0, 1);">
            আমাদের লোন পরিষেবার মাধ্যমে আপনি সহজ শর্তে প্রয়োজনীয় অর্থ পেতে পারেন। লোন আবেদন করতে আপনার অ্যাকাউন্টে
            ন্যূনতম ১,০০০ টাকা থাকতে হবে। প্রয়োজনীয় তথ্য যাচাই শেষে দ্রুততম সময়ে আপনার লোন অনুমোদন করা হবে।
        </p>
    </div>

    <div class="formloan">
        <div class="loanfoerm">
            <h3 style="text-align: center; text-decoration: 2px double underline green;">আপনার ব্যক্তিগত তথ্য দিন।</h3>

            <form action="./loan2.php" method="post" enctype="multipart/form-data">
                <div class="lform">
                    <input type="text" name="loan_name" id="loan_name" class="allloan" placeholder="Enter your name.">
                    <input type="number" name="loan_number" id="loan_number" class="allloan"
                        placeholder="Enter your account number.">
                    <input type="number" name="loan_amount" id="loan_amount" class="allloan"
                        placeholder="Enter the amount of money.">
                    <input type="text" name="loan_loan" id="loan_loan" class="allloan"
                        placeholder="What day will you take the loan?.">


                    <input type="file" style="display: none;" name="loan_pic" id="loan_pic" class="allloan">
                    <input type="file" style="display: none;" name="nid_f" id="nid_f" class="allloan">
                    <input type="file" style="display: none;" name="nid_b" id="nid_b" class="allloan">

                    <label for="loan_pic" id="loan_pic" class="allloan">Choose your picture.</label>
                    <label for="nid_f" id="nid_f" class="allloan">Your NID card font picture.</label>
                    <label for="nid_b" id="nid_b" class="allloan">Your NID card back picture.</label>

                    <input type="submit" name="submitbtn" value="Submit now" id="loan_btn" class="allloan">
                </div>
            </form>

        </div>
    </div>
</div>



<script>
let loancc = document.getElementById("loancc");
let loan = document.querySelector(".loan");
loancc.addEventListener('click', () => {

    loan.style.visibility = "hidden";

});




let loan_btn = document.getElementById("loan_btn");
loan_btn.addEventListener('click', (e) => {

    let loan_name = document.getElementById("loan_name");
    let loan_number = document.getElementById("loan_number");
    let loan_amount = document.getElementById("loan_amount");
    let loan_loan = document.getElementById("loan_loan");
    let loan_pic = document.getElementById("loan_pic");
    let nid_f = document.getElementById("nid_f");
    let nid_b = document.getElementById("nid_b");

    let eerr = document.getElementById("eerr");

    if (loan_name.value == "") {
        e.preventDefault();
    } else if (loan_number.value == "") {
        e.preventDefault();
    } else if (loan_amount.value == "") {
        e.preventDefault();
    } else if (loan_loan.value == "") {
        e.preventDefault();
    } else if (loan_name.value.length < 3) {
        e.preventDefault();
    } else if (loan_number.value.length < 11) {
        e.preventDefault();
    } else if (loan_number.value.length > 11) {
        e.preventDefault();
    } else if (loan_pic.value == "") {
        e.preventDefault();
    } else if (nid_f.value == "") {
        e.preventDefault();
    } else if (nid_b.value == "") {
        e.preventDefault();
    }

});
</script>