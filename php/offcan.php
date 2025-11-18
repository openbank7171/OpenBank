<div class="offcon"
    style="cursor: pointer; transition: 0.3s; position:fixed; margin-top: -10px; margin-left: 10px; border-radius: 5px;">
    <img style="border-radius: 5px;" src="../img/menu.gif" id="off">
</div>

<div class="offcan"
    style="visibility: hidden; transition: 0.3s; border-radius: 5px; box-shadow: 0px 0px 5px rgba(00, 00, 00, 1); padding: 2px; height: 100vh; width: 16rem; position:fixed; margin-top: -18px;">
    <div
        style="display: flex; align-items: center; flex-direction: column; box-shadow: 0px 0px 5px rgba(00, 00, 00, 0.5); height: 100vh; width: 100%; padding: 5px; background: rgba(00, 00, 00, 0.9); border-radius: 5px;">
        <img id="clos" src="../img/clo.png"
            style="height: 35px; width: 35px; border-radius: 50%; margin-left: 205px; box-shadow: 0px 0px 10px white; cursor: pointer;">

        <div>
            <h2 style=" color: rgb(0, 204, 255); text-align: center; margin-top: 10px;">
                <=Open Bank=>
                    <p style=" color: rgba(255, 102, 0, 1); text-align: center;">-----------------</p>
            </h2>
        </div>

        <ul class=" offul">
            <li class="offli"
                style="padding: 10px 60px; cursor: pointer; border: 3px solid rgba(255, 255, 255, 1);; margin-top: 10px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;">
                <h4 style=" color: white; cursor: pointer;" class="offh4">Your profile</h4>
            </li>

            <li class="offli"
                style="padding: 10px 60px; cursor: pointer; border: 3px solid black; background: rgba(203, 39, 2, 1); margin-top: 20px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;">
                <h4 style=" color: rgba(255, 255, 255, 1); cursor: pointer;" class="offh6">Your
                    Card color</h4>
            </li>

            <li class="offli"
                style="padding: 10px 60px; cursor: pointer; border: 3px solid black; background: rgba(2, 203, 146, 1); margin-top: 20px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;">
                <h4 style=" color: rgba(255, 255, 255, 1); cursor: pointer;" class="offh7">Messaging</h4>
            </li>

            <li class="offli"
                style="padding: 10px 60px; cursor: pointer; border: 3px solid black; background: rgba(217, 224, 2, 1); margin-top: 20px; list-style: none; box-shadow: 0px 0px 8px white; text-align: center; border-radius: 5px;">
                <a style=" color: rgba(2, 156, 191, 1);" href="signin.php" class="offa">LogOut</a>
            </li>
        </ul>
    </div>
</div>




<script>
    let offh7 = document.querySelector(".offh7");
    offh7.onclick = function() {
   message.style.visibility = "visible";
}
</script>