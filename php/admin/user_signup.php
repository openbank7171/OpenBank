<?php
include './session.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../../css/style.css'>
    <link rel='shortcut icon' href='../../img/bn.png' type='image/x-icon'>
    <title>Open Bank</title>
</head>

<body>

    <?php
include '../conn.php';
$sql = 'SELECT * FROM signup';
$query = mysqli_query( $con, $sql ) or die ( 'Query unsucessful' );
if ( mysqli_num_rows( $query ) > 0 ) {

    ?>
    <div class='h2'>
        <div class='gruf'>
            <img class='logo' src='../../img/bn.png' alt='logo'>
            <img class='open1' src='../../img/open.png' alt='open-bank'>
        </div>
        <h2>User Register Data....</h2>
        <ul class='ul1'>
            <li class='li1'><a href='../register.php'>ADD USER</a></li>
            <li class='li1'><a href='./logout.php'>LogOut</a></li>
        </ul>
    </div>
    <div class='search'>
        <form action='./search.php' method='post'>
            <input type='text' name='search' id='search' placeholder='Search by ID'>
            <input type='submit' value='search' name='submit' id='sub'>
            <input type='text' name='sea' id='search2' placeholder='Search by Phone No.'>
            <input type='submit' value='search' name='sub' id='sub2'>
        </form>
    </div>
    <div class='fl'>
        <div class='fl2'>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <tbody>
                    <?php
    while( $row = mysqli_fetch_assoc( $query ) ) {
        ?>
                    <tr>
                        <td class='td1'><?php echo $row[ 'id' ];
        ?></td>
                        <td class='td8'
                            style='padding: 5px; display: flex; justify-content: center; align-items: center;'>
                            <img style='height: 50px;  width: 50px; border-radius: 5px;'
                                src="../<?php echo $row['image']; ?>">
                        </td>
                        <td class='td2'><?php echo $row[ 'name' ];
        ?></td>
                        <td class='td3'><?php echo $row[ 'phone' ];
        ?></td>
                        <td class='td4'><?php echo $row[ 'email' ];
        ?></td>
                        <td class='td5'><?php echo $row[ 'password' ];
        ?></td>
                        <td class='td6'><?php echo $row[ 'gender' ];
        ?></td>
                        <td class='td7'><?php echo $row[ 'address' ];
        ?></td>

                        <td class='td8'><?php echo $row[ 'date' ];
        ?></td>

                        <td class='g' style='padding: 0px;'><a href="./update.php?id=<?php echo $row['id']; ?>"
                                style='padding: 0px;  display: flex; justify-content: center; align-items: center;'><img
                                    style='border-radius: 50%;' src='../../img/update.gif'></a>
                        </td>

                        <td class='r' style='padding: 0px;'><a
                                style='padding: 0px;  display: flex; justify-content: center; align-items: center;'
                                href="./delete.php?id=<?php echo $row['id']; ?>"><img src='../../img/delete.png'
                                    style='border-radius: 50%;'></a></td>
                    </tr>
                    <?php }
        ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    } else {
        ?>
    <div class='er'>
        <div class='h2'>
            <div class='gruf'>
                <img class='logo' src='../../img/bn.png' alt='logo'>
                <img class='open1' src='../../img/open.png' alt='open-bank'>
            </div>
            <h2>User SignUp Data....</h2>
            <ul class='ul1'>
                <li class='li1'><a href='../register.php'>ADD USER</a></li>
            </ul>
        </div>

        <div class='err'>
            <h2 class='err2'><?php echo 'No records founs';
        ?></h2>
        </div>
    </div>
    <?php
    }
    ?>

    <div class='offcon'
        style='transition: 0.3s; position:fixed; margin-top: -850px; margin-left: 10px; border-radius: 5px;'>
        <img style='border-radius: 5px;' src='../../img/menu.gif' id='off'>
    </div>
    <div class='offcan'
        style='visibility: hidden; transition: 0.3s; border-radius: 5px; box-shadow: 0px 0px 5px rgba(00, 00, 00, 1); padding: 2px; height: 100vh; width: 16rem; position:fixed; margin-top: -860px;'>
        <div
            style='display: flex; align-items: center; flex-direction: column; box-shadow: 0px 0px 5px rgba(00, 00, 00, 0.5); height: 100vh; width: 100%; padding: 5px; background: rgba(00, 00, 00, 0.9); border-radius: 5px;'>
            <img id='clos' src='../../img/clo.png'
                style='height: 35px; width: 35px; border-radius: 50%; margin-left: 205px; box-shadow: 0px 0px 10px white; cursor: pointer;'>

            <div>
                <h2 style=' color: rgb(0, 204, 255); text-align: center; margin-top: 10px;'>
                    <= All User Data=>
                        <p style=' color: rgba(242, 255, 0, 1); text-align: center;'>-----------------</p>
                </h2>
            </div>

            <ul class=' offul'>
                <li class='offli'
                    style='background: rgba(230, 230, 230, 1); padding: 10px 40px; cursor: pointer; border: 3px solid black; margin-top: 15px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;'>
                    <a style='color: rgba(10, 122, 0, 1);' href='./castomar.php' class='offa'>Users message <span
                            style='color: red;' id='casnum'> ( <span style='color: black;' id='usm'>0</span> )
                        </span></a>
                </li>

                <li class='offli'
                    style='padding: 10px 40px; cursor: pointer; border: 3px solid black; margin-top: 20px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;'>
                    <a style='color: white;' href='./user_deposit.php' class='offa'>User Deposit</a>
                </li>

                <li class='offli'
                    style='background: rgba(255, 191, 0, 1); padding: 10px 40px; cursor: pointer; border: 3px solid black; margin-top: 15px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;'>
                    <a style='color: rgba(0, 81, 255, 1);' href='./balance.php' class='offa'>User Balance</a>
                </li>

                <li class='offli'
                    style='background: rgba(0, 255, 195, 1); padding: 10px 40px; cursor: pointer; border: 3px solid black; margin-top: 15px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;'>
                    <a style='color: rgba(0, 0, 0, 1);' href='./send_money.php' class='offa'>User Send money</a>
                </li>

                <li class='offli'
                    style='background: rgba(0, 187, 255, 1); padding: 10px 40px; cursor: pointer; border: 3px solid black; margin-top: 15px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;'>
                    <a style='color: rgba(206, 243, 241, 1);' href='./cash_out.php' class='offa'>User Cash out</a>
                </li>

                <li class='offli'
                    style='background: rgba(1, 187, 122, 1); padding: 10px 40px; cursor: pointer; border: 3px solid black; margin-top: 15px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;'>
                    <a style='color: rgba(255, 234, 0, 1);' href='./loan.php' class='offa'>User Loan EMI
                        <span style='color: red;' id='casnum'> ( <span style='color: black;' id='uloan'>0</span> )
                        </span></a>
                </li>

                <li class='offli'
                    style='background: rgba(255, 68, 0, 1); padding: 10px 40px; cursor: pointer; border: 3px solid black; margin-top: 15px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;'>
                    <a style='color: rgba(206, 243, 241, 1);' href='./bonus-i.php' class='offa'>Condition</a>
                </li>

                <li class='offli'
                    style='background: rgba(255, 0, 98, 1); padding: 10px 40px; cursor: pointer; border: 3px solid black; margin-top: 15px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;'>
                    <a style='color: rgba(0, 0, 0, 1);' href='../signin.php' class='offa'>User Log_In Page</a>
                </li>

                <li class='offli'
                    style='background: rgba(255, 132, 0, 1); padding: 10px 40px; cursor: pointer; border: 3px solid black; margin-top: 15px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;'>
                    <a style='color: rgba(36, 35, 35, 1);' href='../register.php' class='offa'>User Register Page</a>
                </li>

                <li class='offli'
                    style='background: rgba(3, 147, 65, 1); padding: 10px 40px; cursor: pointer; border: 3px solid black; margin-top: 15px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;'>
                    <a style='color: rgba(255, 255, 255, 1);' href='./logout.php' class='offa'>Log_Out Now</a>
                </li>
            </ul>
        </div>
    </div>
    <script>
    let off = document.getElementById('off');
    let offcan = document.querySelector('.offcan');
    let offcon = document.querySelector('.offcon');
    let clos = document.querySelector('#clos');
    off.onclick = function() {
        offcan.style.visibility = 'visible';
        offcon.style.visibility = 'hidden';
    }

    clos.onclick = function() {
        offcan.style.visibility = 'hidden';
        offcon.style.visibility = 'visible';
    }


    let usm = document.getElementById("usm");
    fetch('../../api/castomar.php', {
            method: 'GET',
        })
        .then((data) => data.json())
        .then((data2) => {

            if (data2.length) {
                usm.innerText = data2.length;
            } else {
                usm.innerText = 0;
            }
        });


    let uloan = document.getElementById("uloan");
    fetch('../../api/lone.php', {
            method: 'GET',
        })
        .then((data3) => data3.json())
        .then((data4) => {

            if (data4.length) {
                uloan.innerText = data4.length;
            } else {
                uloan.innerText = 0;
            }
        });
    </script>
</body>

</html>