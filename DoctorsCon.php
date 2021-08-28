<?php
session_start();
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('emergency-1d521-firebase-adminsdk-8xjhz-30ee7bd4bd.json')
    ->withDatabaseUri('https://emergency-1d521-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();


if(isset($_POST['save_doctor']))
{
    $Name1=$_POST["Name"];
    $Email1=$_POST["Email"];
    $Address1=$_POST["Address"];
    $Phone1=$_POST["[Phone]"];
    $County1=$_POST["County"];
    $Availability1=$_POST["Availability"];
    $Speciality1=$_POST["Speciality"];

    $postData = [
        'Name'=>$Name1,
        'Email'=>$Email1,
        'Address'=>$Address1,
        'Phone'=>$Phone1,
        'County'=>$County1,
        'Availability'=>$Availability1,
        'Speciality'=>$Speciality1,
    ];

    $ref_table="Doctor";
    $postRef_result = $database->getReference($ref_table)->push($postData);


    if($postRef_result){
        $_SESSION['status']="Doctor Added successfully";
        header('Location:Doctors.php');
    }else{
        $_SESSION['status']="Doctor not Added";
        header('Location:Doctors.php');
    }

}


?>