
<!DOCTYPE html>
<html>
<head>
    <title>Info</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>

<body>
<div id="center">
    <fieldset>
        <legend>Billing Information</legend>
        <p>Name:<?php echo($_POST["name"])?></p>
        <p>Address:<?php echo($_POST["address"]) ?></p>
        <p>City:<?php echo($_POST["city"]) ?></p>
        <p>State:<?php echo($_POST["state"]) ?></p>
        <p>Zip:<?php echo($_POST["Zip"]) ?></p>
        <p>Country:<?php echo($_POST["country"]) ?></p>
        <p>Phone:<?php echo($_POST["phone"]) ?></p>
        <p>E-mail:<?php echo($_POST["email"]) ?></p>
        <p>Comment:<?php echo($_POST["comment"]) ?> </p>
    </fieldset>

    <fieldset>
        <legend>Shipping Information</legend>
        <p><?php echo($_POST["sname"])?></p>
        <p><?php echo($_POST["saddress"]) ?></p>
        <p><?php echo($_POST["scity"]) ?></p>
        <p><?php echo($_POST["sstate"]) ?></p>
        <p><?php echo($_POST["szip"]) ?></p>
        <p><?php echo($_POST["scountry"]) ?></p>
    </fieldset>
</div>
</body>
</html>