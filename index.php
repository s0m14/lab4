<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form id="my" action="getFormdata.php"  method="post">
    <div id="center">
        <fieldset>
            <legend>Billing Information</legend>
            <label for="name">Name</label>
            <input type="text" name="name">
            <br>
            <label for="address">Address</label>
            <input type="text" name="address">
            <br>
            <label for="city">City</label>
            <input type="text" name="city">
            <br>
            <label for="state">State</label>
            <input type="text" name="state">
            <br>
            <label for="Zip">Zip</label>
            <input type="text" name="zip">
            <br>
            <label for="country">Country</label>
            <input type="text" name="country">
            <br>
            <label for="phone">Phone</label>
            <input type="text" name="phone">
            <br>
            <label for="email">Email</label>
            <input type="text" name="email">
            <br>
            <label for="comment" style="margin-top: 20px">Questions or Comments</label>
            <br>
            <textarea name="comment"></textarea>
        </fieldset>

        <fieldset>
            <legend>Shipping Information</legend>
            <label for="name">Name</label>
            <input type="text" name="sname">
            <br>
            <label for="address">Address</label>
            <input type="text" name="saddress">
            <br>
            <label for="city">City</label>
            <input type="text" name="scity">
            <br>
            <label for="state">State</label>
            <input type="text" name="sstate">
            <br>
            <label for="Zip">Zip</label>
            <input type="text" name="szip">
            <br>
            <label for="country">Country</label>
            <input type="text" name="scountry">
        </fieldset>
    </div>
    <fieldset>
        <button type="submit">Proceed</button>
    </fieldset>
</form>
</body>
</html>