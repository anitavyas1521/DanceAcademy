<?php
$ =$_POST['Name'];
$visitor_email = $_POST['Email'];
$ message =$_POST['Message'];


$email_from ='DanceAcadmey123@gamil.com';


$email_subject ="New Form Submisson";

$email_body ="User Name:$name  Submission";
             "User Email: $visitor_email.\n".
            "User Message: $message.\n".

  
    $to ="anitavyas818@gmail.com";
    
    $headers ="from $emil_from \r\n";

    $headers ="Reply_To: $visitor_email\r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");


?>
