<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{margin :0;
     padding: 0;
    box-sizing :border-sodium_crypto_box;
}

.container {
    max-width:  80%;
    background-color: rgb(150, 132, 132);
    margin:auto;
    padding : 23px;

}

</style>

<body>
     <div class = "container">
     <h1> Lets learn about PHP</h1> 
     <p> your party status here:<p>   
     
        <?php
        $age = 6;
        if($age>18){
            echo "you can go to party";
        }
        else if ($age==7){
            echo "you are 7 year old";
        }
        else if ($age==6){
            echo "you are 6 year old";
        }
            else {
             echo "you can not go to party";
            }        
        
           // arrays in php 
        $languages = array("python","c++","php","node js");
        // echo count ($languages);
        // echo $languages[0];
       
        // loops in php 
         $a=0;
        while ($a<=10){
             echo "<br> the value of a";
             echo $a;
             $a++;
        }

        // Iterating arrayin PHP using while loop 
        $a=0;
       while ($a <count ($languages)){
        echo "<br> the  value of languages: ";
            echo $languages [$a];
            $a++;
       }

       //  do  while loop 
       $a=0;
     do {
       echo "<br> the  value of a is : ";
           echo $a;
           $a++;
      }
      while ($a< 10);

       //  for while loop 
       $a=200;
     for ($a=0; $a <23 ; $a++) { 
         echo "<br> the value of for loop:";
         echo $a;
     }
    foreach ($languages as $value){
        echo "<br>the value is foreach loop";
        echo $value;
    }
        function print5(){
            echo "FIVE";
        }

        print5();
        function print_number($number){
            echo "<br> your number is";
            echo $number;
        }
          
        print_number (45);
        print_number (5);
        print_number (405);
        print_number (495);
        print_number (645);
?>


 
</div> 
</body>
</html>