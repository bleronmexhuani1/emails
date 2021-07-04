<?php 

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom= $_POST['email'];
    $message=$_POST['text'];

    $mailto="bleronmexhuani@student.uni-pr.edu";
    $headers="From : ". $mailfrom;
    $txt="You have recevied an e mail from". $name.".\n\n".$message;

    mail($mailto,$subject,$txt,$headers);
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>
<body>
<form action="" method="post">
    <p>Username : </p>
    <input type="text" name="name">
    <p>Email : </p>
    <input type="email" name="email">
    <p>Subject : </p>
    <input type="text" name="subject">
    <p>Text : </p>
    <input type="text" name="text">
    <button name="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>
