<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php
       define ('PI', 3.14);

    // single line comment 
    /* this 
       is multi line 
       comment */  
     
       


    $variable1=9;
    $variable2=5;
    echo $variable1;
    echo $variable2;

    echo $variable1+$variable2;

    //Operators in PHP

    // Arithmetic operators

    echo "The value of variable1+variable2";
     echo "<br>";
     echo $variable1 + $variable2;
     echo "The value of variable1-variable2";
     echo "<br>";
     echo $variable1 - $variable2;
     echo "The value of variable1*variable2";
     echo "<br>";
     echo $variable1 * $variable2;
     echo "The value of variable1/variable2";
     echo "<br>";
     echo $variable1 / $variable2;
     
    // Assignment operators

    $NewVar=$variable1;
    //$NewVar=1;
    //$NewVar +=1;
    //$NewVar -=1;
    $NewVar *=2;
    echo "The value of new variable is";
    echo $NewVar;
    echo "<br>";

   // Comparison operators
     // echo "<h1> Comparison opreatore</h>";

      echo "The value of 1==4 is ";
      echo var_dump(1==4); 
      echo "<br>";
      echo "The value of 1!=4 is ";
      echo var_dump(1!=4); 
      echo "<br>";
      echo "The value of 1>=4 is ";
      echo var_dump(1>=4); 
      echo "<br>";
      echo "The value of 1<=4 is ";
      echo var_dump(1<=4); 
      echo "<br>";


   // Increment/Decrement operators
     //echo   $variable1++;
     //echo "<br>";
     //echo $variable1;
     //echo   $variable1--;
     //echo "<br>";
     //echo $variable1;
     //echo   ++$variable1;
     //echo "<br>";
     //echo $variable1;
     echo   --$variable1;
     echo "<br>";
     echo $variable1;

    // Logical operatores
      //  and (&&)
      //  or (||)
      //  xor 
      //  ! 
      
      // $myvar = (true) and (true);
      // echo "<br>";
      // echo var_dump($myvar);
      // $myvar = (false) and (false);
      // echo "<br>";
      // echo var_dump($myvar);
      $myvar = (true) and (false);
      echo "<br>";
      echo var_dump($myvar);
?>
      <?php
      
      // Data type in php 

      // 1.String
      // 2.Integer
      // 3.Float
      // 4.Boolean
      // 5.Array
      // 6.Object
      
      echo "Data type <br>";
      $var = "This is a string";
      echo var_dump($var);
      echo "<br>";

      $var = 67;
      echo var_dump($var);
      echo "<br>";

      $var = 6.8;
      echo var_dump($var);
      echo "<br>";

      $var = true;
      echo var_dump($var);
      echo "<br>";
      echo PI;
      
      
      
      
      
      
      ?>






</body>
</html>