<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 

include "../model/query.php";

$obj = new employee();
$obj->connect();
$data1 = $obj->query1();
$data2 = $obj->query2();
$data3 = $obj->query3();
$data4 = $obj->query4();
$data5 = $obj->query5();
$data6 = $obj->query6();
$data7 = $obj->query7();


?>


<table>
    <?php

    echo "<h2>Query to list employee first name with salary greater than 50k</h2>";
    $i=0;
while($data1[$i]["first_name"]!=NULL){
    ?>
    
    <tr>
        <td><?php echo $data1[$i]["first_name"];?></td>
    </tr>
   
    <?php
    ++$i;

}
?>

<table>
    <?php
    echo "<h2>Query to list employee last name with graduation percentile greater than 70%</h2>";
    $j=0;
while($data2[$j]["employee_last_name"]!=NULL){
    ?>
    
    <tr>
        <td><?php echo $data2[$j]["employee_last_name"];?></td>
    </tr>
   
    <?php
    ++$j;

}
?>


<table>
    <?php
    echo "<h2>Query to list all employee code name with graduation percentile less than 70%</h2>";
    $k=0;
while($data3[$k]["employee_code_name"]!=NULL){
    ?>
    
    <tr>
        <td><?php echo $data3[$k]["employee_code_name"];?></td>
    </tr>
   
    <?php
    ++$k;

}
?>


<table>
    <?php
    echo "<h2>Query to list all employee's fullname that are not of domain java</h2>";
    $l=0;
while($data4[$l]["Fullname"]!=NULL){
    ?>
    
    <tr>
        <td><?php echo $data4[$l]["Fullname"];?></td>
    </tr>
   
    <?php
    ++$l;

}
?>


<table>
    <?php
    echo "<h2>Query ro list all employee_domain with sum of it's salary</h2>";
    $m=0;
while($data5[$m]["employee_domain"]!=NULL){
    ?>
    
    <tr>
        <td><?php echo $data5[$m]["employee_domain"];?></td>
        <td><?php echo $data5[$m]["sum_of_salary"];?></td>
    </tr>
   
    <?php
    ++$m;

}
?>

<table>
    <?php
    echo "<h2>write the about query again but don't include salaries which is less than 30k</h2>";
    $n=0;
while($data6[$n]["employee_domain"]!=NULL){
    ?>
    
    <tr>
        <td><?php echo $data6[$n]["employee_domain"];?></td>
        <td><?php echo $data6[$n]["sum_of_salary"];?></td>
    </tr>
   
    <?php
    ++$n;

}
?>

<table>
    <?php
    echo "<h2>Query to list all employee id which has not been assigned employee code</h2>";
    $o=0;
while($data7[$o]["id_of_Unassigned_employee_code"]!=NULL){
    ?>
    
    <tr>
        <td><?php echo $data7[$o]["id_of_Unassigned_employee_code"];?></td>
        
    </tr>
   
    <?php
    ++$o;

}
?>
</table>
</body>
</html>

