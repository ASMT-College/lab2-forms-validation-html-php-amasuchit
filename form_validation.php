<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if(isset($_GET['Submit']))
    {
        $email2= $_GET['email2'];
        $emailRegex = "/[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z0-9]{2,3}/";
        if(preg_match($emailRegex,$email2)){
            echo"Valid;Signup completed; Insert to db";
        }
        else{
            echo"Invalid email2";
        }
    }
?>

<body>
    <form action="" method="get" onsubmit="return validateForm()">
        <div>
            <h3>Signup</h3>
        </div>
        <div>
            First Name:
            <input type="text" name="fn" id="fn" required>
            Last Name:
            <input type="text" name="ln" id="ln" required>
        </div>
        <div>
            Username:
            <input type="text" name="un" id="un" required minlength="6">
        </div>
        <div>
            Email1:
            <input type="email" name="email1" id="email1" required>
        </div>
        <div>
            Email2:
            <input type="text" name="email2" id="email2">
        </div>
        <div>
            Password:
            <input type="password" name="pw" id="pw" required>
        </div>
        <div id="emailError"></div>
        <br>
        <div><input type="submit" value="Signup" name="Submit"></div>

    </form>
    <script>
    function validateForm() {

        var emailRegex = /[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/;
        var email2 = document.getElementByID('email2').value
        if (emailRegex.test(email2)) {
            return true
        } else {
            document.getElementById("emailError").innerHTML = "Invalid email2"
            return false;
        }
    }
    </script>
</body>

</html>
<!-- comparison betn c,js 
-->