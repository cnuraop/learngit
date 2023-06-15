<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="test.php" method="post" enctype = "multipart/form-data">
<input type="text" name="name" placeholder="Enter your name" required/>
<input type="email" name="email" placeholder="Enter your Email" required/>
<input type="tel" name="phone" placeholder="Enter your phone number" required/>
<input type = "file"  name="image"/>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>

<?php
// $password= "Hello";

// //echo md5($password);
// $result = base64_encode($password);
// echo base64_decode($result);

?>