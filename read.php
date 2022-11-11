<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data From Database</title>
</head>
<body>
    <table width="1000" border="5" align="center">
        <caption> View From Database </caption>
        <tr>
            <th> name  </th>
            <th> age </th>
            <th> gender </th>
            <th> email </th>
            <th> phone  </th>
            <th> other</th>
            <th> DT</th>
            <th> Update </th>
            <th> Delete </th>
        </tr>
    <?php
global $connectingDB;
$sql="SELECT * FROM trip";
$stmt =$connectingDB->query($sql);
while ($DataRows=$stmt->fetch())
{
  $name=$DataRows["name"];
  $age=$DataRows["age"];
 $gender=$DataRows["gender"];
  $email=$DataRows["email"];
  $phone=$DataRows["phone"];
  $other =$DataRows["other"];
  $DT =$DataRows["DT"];
?>
<tr>
<td> <?php echo $name; ?> </td>
<td> <?php echo $age; ?> </td>
<td> <?php echo $gender; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $phone; ?> </td>
<td> <?php echo $other; ?> </td>
<td> <?php echo $DT; ?> </td>
<td> <a href="Upadte.php? name=<?php echo $name;?>"> Update </td>
<td> <a href="Delete.php? name=<?php echo $name;?>"> Delete </td>
</tr>
<?php  }?>

</table>
    
    
    
    
</body>
</html>