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

include "../model/model.php";

$obj = new employee();
$obj->connect();
$data1 = $obj->displayData('employee_code_table');
$data2 = $obj->displayData('employee_salary_table');
$data3 = $obj->displayData('employee_details_table');

// var_dump($data1);
$i=0;
?>
<h2>employee_code_table</h2>
<table>
    <?php
while($data1[$i]["employee_code"]!=NULL){
    ?>
    
    <tr>
        <td><?php echo $data1[$i]["employee_code"];?></td>

           <td><?php
            echo $data1[$i]["employee_code_name"];
            ?>
        </td>
   
        <td>
            <?php
            echo $data1[$i]["employee_domain"];
            ?>
        </td>
    </tr>
   
    <?php
    ++$i;

}
?>
</table>
<h2>employee_salary_table</h2>

<table>
    <?php
    $j=0;
while($data2[$j]["employee_id"]!=NULL){
    ?>
    
    <tr>
        <td><?php echo $data2[$j]["employee_id"];?></td>

           <td><?php
            echo $data2[$j]["employee_salary"];
            ?>
        </td>
   
        <td>
            <?php
            echo $data2[$j]["employee_code"];
            ?>
        </td>
    </tr>
   
    <?php
    ++$j;

}
?>
</table>
<h2>employee_details_table</h2>
<table>
    <?php
    $k=0;
while($data3[$k]["employee_id"]!=NULL){
    ?>
    
    <tr>
        <td><?php echo $data3[$k]["employee_id"];?></td>

           <td><?php
            echo $data3[$k]["employee_first_name"];
            ?>
        </td>
   
        <td>
            <?php
            echo $data3[$k]["employee_last_name"];
            ?>
        </td>
        <td>
            <?php
            echo $data3[$k]["Graduation_percentile"];
            ?>
        </td>
        
    </tr>
   
    <?php
    ++$k;

}
?>
</table>

<?php
?>


</body>
</html>

