<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dps.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="shortcut icon" href="../img/bn.png" type="image/x-icon">
    <title>Open Bank</title>
</head>

<body>
    <div id="dps">

        <div class="tiloan"
            style="margin-bottom: 0px; margin-top: 0px; display: flex; justify-content: center; align-items: center;">
            <img class="logo" src="../img/bn.png" alt="logo">
            <img class="title" src="../img/open.png"
                style="box-shadow: 0px 0px 10px white; border-radius: 5px; background: rgba(4, 218, 189, 1); padding: 5px; height: 50px; width: 250px;">
        </div>
        <hr>

        <div class="dps2">
            <div class="dhoron">

                <h1 id="dpss">DPS.
                    <hr>
                </h1>


                <form action="./dps2.php" method="post">


                    <div class="select">
                        <select name="dhoron" id="dhoron" class="opt">
                            <option id="dhor">ধরন বেছে নিন</option>
                            <option id="val1" value="সাপ্তাহিক">সাপ্তাহিক</option>
                            <option id="val2" value="মাসিক">মাসিক</option>
                        </select>

                        <select name="dhoron2" id="dhoron2" class="opt">
                            <option id="dhor2">মেয়াদ বেছে নিন</option>
                            <option id="val1" value="৬ মাস">৬ মাস</option>
                            <option id="val3" value="১২ মাস">১২ মাস</option>
                            <option id="val1" value="২৪ মাস">২৪ মাস</option>
                            <option id="val3" value="৩৬ মাস">৩৬ মাস</option>
                            <option id="val1" value="৪৮ মাস">৪৮ মাস</option>
                            <option id="val3" value="১ বছর">১ বছর</option>
                            <option id="val1" value="৩ বছর">৩ বছর</option>
                            <option id="val3" value="৫ বছর">৫ বছর</option>
                            <option id="val1" value="৮ বছর">৮ বছর</option>
                            <option id="val3" value="১০ বছর">১০ বছর</option>
                        </select>

                        <select name="dhoron3" id="dhoron3" class="opt">
                            <option id="dhor3">জমার পরিমাণ বেছে নিন</option>
                            <option id="val4" value="৫০০">৫০০</option>
                            <option id="val5" value="১০০০">১০০০</option>
                            <option id="val4" value="১৫০০">১৫০০</option>
                            <option id="val5" value="২০০০">২০০০</option>
                            <option id="val4" value="২৫০০">২৫০০</option>
                            <option id="val5" value="৩০০০">৩০০০</option>
                            <option id="val4" value="৫০০০">৫০০০</option>
                            <option id="val5" value="৮০০০">৮০০০</option>
                            <option id="val4" value="১০০০০">১০০০০</option>
                        </select>
                    </div>


                    <div class="select">
                        <input type="text" name="name" id="name" class="input" placeholder="
আপনার নাম :">
                        <input type="number" name="phone" id="phone" class="input" placeholder="
অ্যাকাউন্ট নম্বর :">
                        <input type="number" name="amount" id="amount" class="input" placeholder="টাকার পরিমাণ :">
                    </div>

                    <div class="bbb" style="display: flex; justify-content: center; align-items: center;">
                        <button id="dps_btn" name="dps_btn">Submit now</button>
                    </div>


                </form>


                <p id="dbbldepo">
                    Open Bank’s Deposit Pension Scheme (DPS) allows customers to save a fixed amount every month and
                    earn a 9% profit rate. With flexible tenure options and secure monthly deposits, the DPS helps
                    customers build a strong financial foundation. At maturity, the customer receives a lump-sum amount
                    including the deposited money and accumulated profit.

                    Key Features:

                    Fixed monthly installment

                    9% attractive profit rate

                    Flexible tenure (e.g., 3, 5, 8, or 10 years)

                    Auto-deduction from bank account

                    Safe long-term savings plan

                    <br><br>
                    ✅ ওপেন ব্যাংক ডিপিএস বর্ণনা (৯% মুনাফা হারসহ) – বাংলা

                    ওপেন ব্যাংকের ডিপিএস (Deposit Pension Scheme) হলো একটি মাসিক সঞ্চয় পরিকল্পনা, যেখানে গ্রাহক প্রতি
                    মাসে নির্দিষ্ট পরিমাণ টাকা জমা দিয়ে ৯% মুনাফা হারে সঞ্চয় বৃদ্ধি করতে পারেন। নির্দিষ্ট মেয়াদ শেষে
                    গ্রাহক জমাকৃত অর্থসহ মুনাফা পেয়ে এককালীন একটি পরিমাণ টাকা গ্রহণ করেন।

                    মূল বৈশিষ্ট্য:

                    নির্দিষ্ট মাসিক কিস্তি

                    ৯% আকর্ষণীয় মুনাফা হার

                    পছন্দমতো মেয়াদ (যেমন: ৩, ৫, ৮ বা ১০ বছর)

                    অ্যাকাউন্ট থেকে অটো-ডেবিট সুবিধা

                    নিরাপদ দীর্ঘমেয়াদি সঞ্চয়
                </p>

            </div>
        </div>


    </div>


    <script>
    let dhoron = document.getElementById("dhoron");
    let dhoron2 = document.getElementById("dhoron2");
    let dhoron3 = document.getElementById("dhoron3");
    let name = document.getElementById("name");
    let phone = document.getElementById("phone");
    let amount = document.getElementById("amount");

    let dps_btn = document.getElementById("dps_btn");

    dps_btn.addEventListener('click', (e) => {

        if (name.value.length < 3) {
            e.preventDefault();
        } else if (phone.value.length < 11) {
            e.preventDefault();
        } else if (phone.value.length > 11) {
            e.preventDefault();
        } else if (amount.value == "") {
            e.preventDefault();
        } else {

            setTimeout(() => {
                location.reload(true);
            }, 800);

        }

    });
    </script>
</body>

</html>