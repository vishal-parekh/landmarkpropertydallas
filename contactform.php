<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $emailFrom = $_POST['email'];
    $homeaddress = $_POST['homeaddress'];

    $mailTo = "vpar214@gmail.com";

    $headers = "From: ".$emailFrom;

    $subject = "Potential Home Seller: ".$homeaddress;

    $txt = "Potential client looking to sell ".$homeaddress.".\n\n".
    "Contact seller now at: ".$emailFrom;


    if(empty($name) || empty($phonenumber) || empty($emailFrom) || empty($homeaddress))
    {
        header('location:index.php?error');
    }
    else
    {
        $to = "vpar214@gmail.com";

        if(mail($mailTo, $subject, $txt, $headers))
        {
            header("location:index.php?success");
        }
    }
 }
 else
 {
     header("location:index.php");
 }

?>