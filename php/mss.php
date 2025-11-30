<div class="message">
    <div class="ms">
        <img src="../img/clo.png" id="scl" class="clo"
            style="height: 40px; width: 40px; border-radius: 50%; margin-left: 720px; margin-top: -5px;  box-shadow: 0px 0px 10px white; cursor: pointer;">

        <div class="ob" id="ob" style="margin-top: -40px;">
            <img src="../img/bn.png" class="im1">
            <img src="../img/open.png" class="im">
            <h2 class="msms">Messaging.</h2>
        </div>
        <div class="msb">
            <input type="number" name="nnnu" id="nnnu" placeholder="Search Number's">
        </div>
        <div class="msb1"></div>


        <div class="mmsss">

            <?php
    include "./conn.php";
    $sql3 = "SELECT * FROM send_money WHERE number2 = '{$phone}'";
    $query3 = mysqli_query($con, $sql3) or die('query unsucessful');
    if (mysqli_num_rows($query3) > 0) {
?>
            <table>
                <tbody>
                    <?php
                    while ($row3 = mysqli_fetch_assoc($query3)) {
                ?>
                    <tr>
                        <td>
                            <div class="msb2">
                                <h3 id="mo">Open Bank.</h3>
                                <h4 id="mos">Send Money.</h4>
                                <hr>
                                <p id="ac">Account Number : <span id="tex"> <?php echo $row3['number']; ?></span></p>
                                <p id="ac">Amount : <span id="tex1"> <?php echo $row3['tk']; ?></span> .Tk</p>
                                <p id="ac">Transaction ID : <span id="tex2"> <?php echo $row3['transaction']; ?></span>
                                </p>
                                <p id="ac">Date Time : <span id="tex3"> <?php echo $row3['date']; ?></span></p>
                                <input type="hidden" name="id3" id="id8" value="<?php echo $row3['id']; ?>">
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            ?>
                </tbody>
            </table>
            <?php
    }
?>

            <?php
    $sql4 = "SELECT * FROM send_money WHERE number = '{$phone}'";
    $query4 = mysqli_query($con, $sql4) or die('query unsucessful');
    if (mysqli_num_rows($query4) > 0) {
?>
            <table>
                <tbody>
                    <?php
                    while ($row4 = mysqli_fetch_assoc($query4)) {
                ?>
                    <tr>
                        <td>
                            <div class="msb3">
                                <h3 id="mo">Open Bank.</h3>
                                <h4 id="mos">Send Money.</h4>
                                <hr>
                                <p id="ac">Account Number : <span id="tex"> <?php echo $row4['number2']; ?></span></p>
                                <p id="ac">Amount : <span id="tex1"> <?php echo $row4['tk']; ?></span> .Tk</p>
                                <p id="ac">Transaction ID : <span id="tex2"> <?php echo $row4['transaction']; ?></span>
                                </p>
                                <p id="ac">Date Time : <span id="tex3"> <?php echo $row4['date']; ?></span></p>
                                <input type="hidden" name="id4" id="id8" value="<?php echo $row4['id']; ?>">
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            ?>
                </tbody>
            </table>
            <?php
    }
?>








            <?php
    $sql5 = "SELECT * FROM cash_out WHERE number2 = '{$phone}'";
    $query5 = mysqli_query($con, $sql5) or die('query unsucessful');
    if (mysqli_num_rows($query5) > 0) {
?>
            <table>
                <tbody>
                    <?php
                    while ($row5 = mysqli_fetch_assoc($query5)) {
                ?>
                    <tr>
                        <td>
                            <div class="msb2">
                                <h3 id="mo">Open Bank.</h3>
                                <h4 id="mos1">Cash Out.</h4>
                                <hr>
                                <p id="ac">Account Number : <span id="tex"> <?php echo $row5['number']; ?></span></p>
                                <p id="ac">Amount : <span id="tex1"> <?php echo $row5['tk']; ?></span> .Tk</p>
                                <p id="ac">Transaction ID : <span id="tex2"> <?php echo $row5['transaction']; ?></span>
                                </p>
                                <p id="ac">Date Time : <span id="tex3"> <?php echo $row5['date']; ?></span></p>
                                <input type="hidden" name="id5" id="id8" value="<?php echo $row5['id']; ?>">
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            ?>
                </tbody>
            </table>
            <?php
    }
?>


            <?php
    $sql6 = "SELECT * FROM cash_out WHERE number = '{$phone}'";
    $query6 = mysqli_query($con, $sql6) or die('query unsucessful');
    if (mysqli_num_rows($query6) > 0) {
?>
            <table>
                <tbody>
                    <?php
                    while ($row6 = mysqli_fetch_assoc($query6)) {
                ?>
                    <tr>
                        <td>
                            <div class="msb3">
                                <h3 id="mo">Open Bank.</h3>
                                <h4 id="mos1">Cash Out.</h4>
                                <hr>
                                <p id="ac">Account Number : <span id="tex"> <?php echo $row6['number2']; ?></span></p>
                                <p id="ac">Amount : <span id="tex1"> <?php echo $row6['tk']; ?></span> .Tk</p>
                                <p id="ac">Transaction ID : <span id="tex2"> <?php echo $row6['transaction']; ?></span>
                                </p>
                                <p id="ac">Date Time : <span id="tex3"> <?php echo $row6['date']; ?></span></p>
                                <input type="hidden" name="id6" id="id8" value="<?php echo $row6['id']; ?>">
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            ?>
                </tbody>
            </table>
            <?php
    }
?>








            <?php
    $sql7 = "SELECT * FROM massege WHERE number = '{$phone}'";
    $query7 = mysqli_query($con, $sql7) or die('query unsucessful');
    if (mysqli_num_rows($query7) > 0) {
?>
            <table>
                <tbody>
                    <?php
                    while ($row7 = mysqli_fetch_assoc($query7)) {
                ?>
                    <tr>
                        <td>
                            <div class="msb2">
                                <h3 id="mo">Open Bank.</h3>
                                <h4 id="mos1"><?php echo $row7['number2']; ?></h4>
                                <hr>
                                <p id="ac"><span id="tex2"><?php echo $row7['text']; ?></span></p>
                                <p id="ac" style="font-size: 12px;">Date Time : <span id="tex3"
                                        style="font-size: 12px;">
                                        <?php echo $row7['date']; ?></span></p>
                                <input type="hidden" name="id7" id="id8" value="<?php echo $row7['id']; ?>">
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            ?>
                </tbody>
            </table>
            <?php
    }
?>


            <?php
    $sql8 = "SELECT * FROM massege WHERE number2 = '{$phone}'";
    $query8 = mysqli_query($con, $sql8) or die('query unsucessful');
    if (mysqli_num_rows($query8) > 0) {
?>
            <table>
                <tbody>
                    <?php
                    while ($row8 = mysqli_fetch_assoc($query8)) {
                ?>
                    <tr>
                        <td>
                            <div class=" msb3">
                                <h3 id="mo">Open Bank.</h3>
                                <h4 id="mos1" style="color:yellow;"><?php echo $row8['name']." :- ". $row8['number']; ?>
                                </h4>
                                <hr>
                                <p id="ac"><span id="tex2"><?php echo $row8['text']; ?></span></p>
                                <p id="ac" style="font-size: 12px;">Date Time : <span id="tex3"
                                        style="font-size: 12px;">
                                        <?php echo $row8['date']; ?></span></p>
                                <input type="hidden" name="id8" id="id8" value="<?php echo $row8['id']; ?>">
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            ?>
                </tbody>
            </table>
            <?php
    }
?>

        </div>



        <div class=" sp"></div>
    </div>


    <div class="mms">
        <input type="text" name="text" id="text" placeholder="Type a message">
        <button type="submit" name="snb" id="snb">
            <img id="snsn" src="../img/sn.png">
        </button>
    </div>

</div>


<script>
const snb = document.querySelector(" #snb");
snb.addEventListener('click', (e) => {

    let nnnu = document.getElementById("nnnu");
    let ssname = document.getElementById("ssname");
    let ssnumber = document.getElementById("ssnumber");
    let text = document.getElementById("text");


    if (nnnu.value == "" || text.value == "") {

        e.preventDefault();

    } else {

        let res = {
            phone2: nnnu.value,
            name: ssname.value,
            phone: ssnumber.value,
            text: text.value,
        }

        fetch('./mstx.php', {
                method: 'POST',
                body: JSON.stringify(res),
            })
            .then((data) => {
                data.json();
            })
            .then((data2) => {

            });

        setTimeout(() => {
            location.reload(true);
        }, 800);

    }

});
</script>