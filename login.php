<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./script/style.css" />

</head>

<body class="black">

    <h1>login</h1>


    <?php
include"navbar.php";
?><br /><br />


    <form action="register.php" method="post" enctype="multipart/form-data">
        first name <input type="text" name="firstname" /><br /><br />
        email <input type="email" name="email" /> <br /><br />
        password <input type="" name="password" /> <br /><br />
        address <textarea rows=" 5" cols="50" name="address"> </textarea><br /><br />
        <input type="submit" value="ลงทะเบียณ" />


    </form>




</body>

</html>