<?php
    $uname2 = $_POST['uname'];
    $uphone2 = $_POST['unumber'];
    include "./conn.php";
    $sql2 = "SELECT * FROM signup WHERE phone = '{$uphone2}' AND phone = '{$uphone2}'";
    $query2 = mysqli_query($con,$sql2) or die("Query unsucessful");
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query2)){
                    
?>


<div class="boxxx"
    style="visibility: hidden; background: rgba(0, 0, 0, 0.6); position:fixed; height: 100vh; width: 100%; margin-top: -100px; display: flex; justify-content: center; align-items: center;">
    <div class="boxxx2"
        style=" border-radius: 5px; padding: 5px; background: rgba(175, 101, 3, 1); height: 700px; width: 650px;">
        <img src="../img/clo.png" id="pcc"
            style="height: 40px; width: 40px; border-radius: 50%; margin-left: 600px;  box-shadow: 0px 0px 10px white; cursor: pointer;">




        <div class="ti" style="margin-bottom: 40px; display: flex; justify-content: center; align-items: center;">
            <img class="title" src="../img/open.png"
                style="box-shadow: 0px 0px 10px white; border-radius: 5px; background: rgba(175, 101, 3, 1); padding: 5px; height: 50px; width: 250px;">
        </div>

        <form action="./profile_up.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">

            <div style="margin-bottom: 20px; display: flex; justify-content: center; align-items: center; gap: 20px;">
                <label for="uplod2"
                    style="box-shadow: 0px 0px 5px rgba(00, 00, 00, 1); padding: 5px; border-radius:50%; display: flex; justify-content: center; align-items: center;">
                    <img name="im"
                        style="box-shadow: 0px 0px 5px rgba(00, 00, 00, 0.8); height: 120px; width: 120px; border: 3px solid yellow; border-radius: 50%;"
                        src="<?php echo $row['image']; ?>" alt="user">
                </label>
                <input type="file" name="uplod2" id="uplod2" style="display: none;">
            </div>


            <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                <input type="text" name="uname" id="uname" value="<?php echo $row['name']; ?>"
                    placeholder="Update your name *"
                    style="height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
            </div>


            <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                <input type="number" name="unumber" id="unumber" value="<?php echo $row['phone']; ?>" placeholder="
                        Update your phone No. *"
                    style="height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
            </div>


            <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                <input type="email" name="uemail" id="uemail" value="<?php echo $row['email']; ?>" placeholder="
                        Update your email address *"
                    style="height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
            </div>


            <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                <input type="password" name="upassword" id="upassword" value="<?php echo $row['password']; ?>"
                    placeholder="Update your password *"
                    style="height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
            </div>


            <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                <input type="text" name="ugender" id="ugender" value="<?php echo $row['gender']; ?>"
                    placeholder="Update your gender *"
                    style="height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
            </div>


            <div style="display: flex; justify-content: center; align-items: center; gap: 20px;">
                <input type="text" name="uaddress" id="uaddress" value="<?php echo $row['address']; ?>"
                    placeholder="Update your home address *"
                    style="height: 35px; width: 400px; outline: none; padding-left: 15px; box-shadow: 0px 0px 5px black; border-radius: 5px; border: none; font-weight: 600px; font-size: 16px; -webkit-text-fill-color: rgba(0, 0, 0, 1); margin-bottom: 20px;">
            </div>


            <div style="display: flex; justify-content: center; align-items: center;">
                <a href="./profile_up.php?id=<?php echo $row['id']; ?>" name="update" id="update"
                    style="display: flex; justify-content: center; align-items: center; padding: 5px; height: 40px; width: 200px; border-radius: 5px; border: none; background: green; color: white; box-shadow: 0px 0px 5px black; font-size: 18px; cursor: pointer; text-shadow: 0px 0px 5px rgba(0, 0, 0, 1);">Update
                    now</a>
            </div>
        </form>
    </div>
</div>

<?php
    if (isset($_POST['update'])) {
        $uname = $_POST['uname'];
        $uphone = $_POST['unumber'];
        $uemail = $_POST['uemail'];
        $upassword = $_POST['upassword'];
        $ugender = $_POST['ugender'];
        $uaddress = $_POST['uaddress'];
        $id = $_GET['id'];

        $uplod = $_FILES['uplod2']['name'];
        $fol = "../img/img/".$uplod;
        $tmp = $_FILES['uplod2']['tmp_name'];
        $path = pathinfo($uplod,PATHINFO_EXTENSION);
        $low = strtolower($path);
        $ext = ['png','jpg','jpeg','gif','webp'];

                    
        if (empty($uname) || empty($uphone) || empty($uemail) || empty($upassword ) || empty($ugender) || empty($uaddress)) {
            header("Location: err3.php");
            return false;
        }else{

            if (!in_array($low,$ext)) {
                echo "";
            return false;
            }else{
                $mov = move_uploaded_file($tmp,$fol);
            }

        

            include "./conn.php";
            $sql = "UPDATE signup SET `name`='{$uname}',`phone`='{$uphone}',`email`='{$uemail}',`password`='{$password}',`gender`='{$ugender}',`address`='$uaddress',`image`='{$fol}' WHERE id = {$id}";
            $query = mysqli_query($con,$sql) or die ("query unsucessful");

            header("Location: signin.php");
            mysqli_close($con);
        }
          
    }
?>


<?php
                }
            }
?>