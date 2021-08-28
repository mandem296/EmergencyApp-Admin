<?php
session_start();
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('emergency-1d521-firebase-adminsdk-8xjhz-30ee7bd4bd.json')
    ->withDatabaseUri('https://emergency-1d521-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();


if(isset($_POST['save_hospital']))
{
    $Name=$_POST["Name"];
    $Email=$_POST["Email"];
    $Address=$_POST["Address"];
    $City=$_POST["City"];
    $Capacity=$_POST["Capacity"];

    $postData = [
        'Name'=>$Name,
        'Email'=>$Email,
        'Address'=>$Address,
        'City'=>$City,
        'Capacity'=>$Capacity,
    ];

    $ref_table="Hospital";
    $postRef_result = $database->getReference($ref_table)->push($postData);


    if($postRef_result){
        $_SESSION['status']="Hospital Added successfully";
        header('Location:hospitals.php');
    }else{
        $_SESSION['status']="Hospital not Added";
        header('Location:hospitals.php');
    }

}


?>