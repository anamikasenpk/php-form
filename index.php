<?php
$insert = false;
if(isset($_POST['fullname'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connect to the database due to ". mysqli_connect_error());
    }

    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $dese = $_POST['dese'];
    
    $sql = "INSERT INTO `jobform`.`canditure` (`SL No`,`fullname`, `mobile`, `email`, `age`, `dese`) VALUES ('','$fullname', '$mobile', '$email', '$age', ' $dese')";
    
    if ($con->query($sql)== true) {
          $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP PROJECT</title>
</head>
<body>
    <img class="bg" src="image/bgform.jpg" alt="" srcset="">
    <div class="container">
        <h1> JOB REQUEST FORM </h1>
        <h5>PLease fill the correct information</h5>
        <?php
        if ($insert==true) {
            echo "<p class='submitmsg'>Form submited successfully</p>" ;
        }
        
        ?>
        <form action="index.php" method="post">
            <input type="text" name="fullname" id="fullname" placeholder="Enter Your Name">
            <input type="tel" name="mobile" id="mobile" placeholder="Enter Your Mobile">
            <input type="email" name="email" id="email" placeholder="Enter Your Email Id">
            <input type="age" name="age" id="age" placeholder="Enter Your Age">
            <textarea name="dese" id="dese" cols="30" rows="10" placeholder="write your bio"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="js/script.js"></script>
    <!-- INSERT INTO `canditure` (`SL No`, `name`, `mobile`, `age`, `email`, `desc`) VALUES ('1', 'Prasun samadder', '1234567801', '25', 'heloo@gmail.com', 'I seeking job'); -->

</body>
</html>