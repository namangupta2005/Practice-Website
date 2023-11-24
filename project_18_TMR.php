<?php

include "database_connect.php";

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$degree = $_POST["degree"];
$programming = $_POST["programming"];
$tools = $_POST["tools"];
$university = $_POST["university"];
$graduationyear = $_POST["graduationyear"];
$summery = $_POST["summery"];
$instagram = $_POST["instagram"];
$facebook = $_POST["facebook"];
$twitter = $_POST["twitter"];
$linkedin = $_POST["linkedin"];


// files
// $file = $_FILES["file"];
if(isset($_FILES["file"])){
    $targetdir = "Upload/";
    $targetfile = $targetdir . $_FILES["file"]["name"];
    // echo "<pre>";
    // print_r($_FILES["file"]);
    // echo "</pre>";

   move_uploaded_file($_FILES["file"]["tmp_name"], "Upload/". $_FILES["file"]["name"]);
    echo "<img id='user_image' src='$targetfile' alt='error' >";
}

$sql = "INSERT INTO users (Name, Email, Phone, Goals, Degree, University, Graduation, Programming, Tools ) VALUES ('$name', '$email', '$phone', '$summery', '$degree', '$university', '$graduationyear', '$programming', '$tools')";


mysqli_query($conn, $sql);



echo "<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Your Resume</title>
<style>
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
    margin: 20px;
        }
        
        .resume {
            max-width: 800px;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
        }
        #user_image{
            display: block;
            min-width : 110px;
            max-width :120px;
            height: 25%;
            border: none;
            background-color: white;
            position: relative;
            top: 30%;
            left: 23%;
            margin:auto;
        }
        img{
            border: 2px solid red;
            border-radius: 17px;
            background-color: red;
            padding: 10px;
            height: 30px;
            width: 30px;
        }
        // #user_image{
        //     border: none;
        //     border-radius: 17px;
        //     background-color: none;
        // }
        .p_img{
            display: inline-block;
        }
        img:hover{
            background-color: white;
        }

        .name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .contact {
            margin-bottom: 20px;
        }

        .contact p {
            margin: 5px 0;
        }
        
        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .section p {
            margin: 10px 0;
        }
    </style>
    </head>
    <body>
    <div class='resume'>
        <div class='header'>
        <div class='name'>$name</div>               
        <div class='contact'>
        <p>Email: $email</p>
        <p>Phone: $phone</p>
        <p class='p_img'><a href='$twitter'><img src='twitter_black-removebg-preview.png'></a></p>
               <p class='p_img'><a href='$instagram'><img src='insta_black-removebg-preview.png'></a></p>
               <p class='p_img'><a href='$linkedin'><img src='linked_black-removebg-preview.png'></a></p>
               <p class='p_img'><a href='$facebook'><img src='fac_black-removebg-preview.png'></a></p>
            </div>
        </div>

        <div class='section'>
            <h2>Summary</h2>
            <p>$summery.</p>
        </div>

        <div class='section'>
        <h2>Education</h2>
        <p><strong>Degree:</strong> $degree</p>
        <p><strong>University:</strong> $university</p>
        <p><strong>Graduation Year:</strong> $graduationyear</p>
        </div>

        <div class='section'>
            <h2>Skills</h2>
            <p><strong>Programming:</strong> $programming etc.</p>
            <p><strong>Tools:</strong> $tools etc.</p>
        </div>
    </div>
</body>
</html>";

?>

