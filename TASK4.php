
<?php
$age=30;
$the_age="";
if($age<=30){
    $the_age="you are less than or equal 30";
}elseif($age){
    $the_age="you are greater than 30";
}








$grade=85 ;
$result ="";
switch($grade){
    case 10:
        $result="failed";
        break;
        case 50:
            $result="pass";
            break;
            case 75:
                $result="very good";
                break;
                default :
                $result="excellent";
   
       
}
   
  ?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    </head>
    <body>
        
        <p>
        <h3>the student status is : 
              <?php
        echo  $result;
        echo "<br>";
        echo $the_age;
        ?> 
        
        </h3>
        </p>
        <body>
            <html>
