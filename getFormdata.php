<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form id="my" ACTION="displayForm.php" method="post">
    <div id="center">
        <fieldset>
            <legend>Billing Information</legend>
            <label for="name">Name</label>
            <input type="text" name="name" value=
            "<?php
            if(empty($_POST["name"])){
                header("Location:index.php");
            }
            else{
                echo($_POST["name"]);
            }
            ?>">
            <br>
            <label for="address">Address</label>
            <input type="text" name="address" value=
            "<?php
            if(empty($_POST["address"])){
                header("Location:index.php");
            }
            else{
                echo($_POST["address"]);
            }
            ?>">
            <br>
            <label for="city">City</label>
            <input type="text" name="city" value=
            "<?php
            if(empty($_POST["city"])){
                header("Location:index.php");
            }
            else{
                echo($_POST["city"]);
            }
            ?>">
            <br>
            <label for="state">State</label>
            <input type="text" name="state" value="
            <?php
            if(empty($_POST["state"])){
                header("Location:index.php");
            }
            else{
                echo($_POST["state"]);
            }
            ?>">
            <br>
            <label for="Zip">Zip</label>
            <input type="text" name="Zip" value=
            "<?php
            if(empty($_POST["zip"])){
                header("Location:index.php");
            }
            else{
                echo($_POST["zip"]);
            }
            ?>">
            <br>
            <label for="country">Country</label>
            <input type="text" name="country" value=
            "<?php
            if(empty($_POST["country"])){
                header("Location:index.php");
            }
            else{
                echo($_POST["country"]);
            }
            ?>">
            <br>
            <label for="phone">Phone</label>
            <input type="text" name="phone" value=
            "<?php
            if(empty($_POST["phone"])){
                header("Location:index.php");
            }
            else{
                echo($_POST["phone"]);
            }
            ?>">
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" value=
            "<?php
            if(empty($_POST["email"])){
                header("Location:index.php");
            }
            else{
                echo($_POST["email"]);
            }
            ?>">
            <br>
            <label for="comment" style="margin-top: 20px">Questions or Comments</label>
            <br>
            <textarea name="comment"><?php echo($_POST["comment"])?></textarea>
        </fieldset>

        <fieldset>
            <legend>Shipping Information</legend>
            <label for="name">Name</label>
            <input type="text" name="sname" value="<?php if(empty($_POST["sname"])){
                echo($_POST["name"]);
            }else{
                echo($_POST["sname"]);
            } ?>">
            <br>
            <label for="address">Address</label>
            <input type="text" name="saddress" value="<?php if(empty($_POST["saddress"])){
                echo($_POST["address"]);
            }else{
                echo($_POST["saddress"]);
            }?>">
            <br>
            <label for="city">City</label>
            <input type="text" name="scity" value="<?php if(empty($_POST["scity"])){
                echo($_POST["city"]);
            }else{
                echo($_POST["scity"]);
            }?>">
            <br>
            <label for="state">State</label>
            <input type="text" name="sstate" value="<?php if(empty($_POST["sstate"])){
                echo($_POST["state"]);
            }else{
                echo($_POST["sstate"]);
            } ?>"
            <br>
            <label for="Zip">Zip</label>
            <input type="text" name="szip" value="<?php if(empty($_POST["szip"])){
                echo($_POST["zip"]);
            }else{
                echo($_POST["szip"]);
            }?>">
            <br>
            <label for="country">Country</label>
            <input type="text" name="scountry" value="<?php if(empty($_POST["scountry"])){
                echo($_POST["country"]);
            }else{
                echo($_POST["scountry"]);
            } ?>">
        </fieldset>
    </div>
    <fieldset>
        <button type="submit">Proceed</button>
    </fieldset>
</form>
</body>
</html>