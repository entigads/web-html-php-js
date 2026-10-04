
<?php
include 'pure_php.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 3101</title>
</head>
<body>


<h3>Username: <u id=getuser><?php echo $username ?></u>
<br>    
User Id:<u id=getid> <?php echo $user_id ?></u>
<br>
Email: <u id=getemail><?php echo $email ?></u>
<br>
Password: <u id="getpass"><?php echo $password ?></u>
<br>
Subject: <u id="getsub"><?php echo $subject ?></u>
</h3>

<button type="button" onclick="greetUser()">Greet User</button>
<script src="external.js"></script>
</body>
</html>