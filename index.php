<?php
//$insert = false;
if(isset($_POST['submit'])){
//$submit= true;
$server ="localhost";
$username ="root";
$password ="";

$con = mysqli_connect ($server,$username,$password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];  
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql = " INSERT INTO `trip`.`trip` (`Name`, `Age`, `Gender`, `Email`, `Phone Numbe`, `Other`, `DT`)VALUES('$name', '$age', '$gender', '$email', '$phone', '$desc',current_timestamp());";


 //echo $sql;

 if($con->query($sql) == true){
    // echo "Successfully inserted";
    $insert =true;
}
else {
    echo "ERROR: $sql<br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <img class = "img" src="rk.jpg" alt="R.k desai">
    <div class="container">
        <h1> Welcome to R.K Desai Collage US Trip Form </h1>
        <p>Enter your details and submit this form to confrim your participation in the trip</p>
        
        <?php
        //if($insert==true)
        {
        echo "<p class='submitMgs'> Thanks for submitting your form . we are happy to see you joing us for 
        the US trip </p>";
    }
        ?>

      <form action="index.php" method="POST">

        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder ="Enter any other information here"></textarea>
        <input type="submit" name="submit" value="submit">
        <label for="shivam" class="rohan"> By Suryavnshi shivam</label>
        
    
    
    
    </form>

      
    </div>
    <script src="index.js"></script>

  
</body>
</html>
