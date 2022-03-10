<? php  

    if(isset($_POST['submit'])){
    $mailto  =   "clconsebido28@gmail.com";
    
//

$title = $_POST ['title'];
$firstname = $_POST ['firstname'];
$lastname = $_POST ['lastname'];
$phone = $_POST ['phone'];
$email = $_POST ['email'];
$company = $_POST ['company'];
$message = $_POST ['message'];
$mSage =  "Thanks for contacting us! We will get in touch with you shortly. ";    

//

$MEssage  = "Name Ex.:"  . $title . "\n\n". 
            "Client name:" . $name . "\n". 
            "Firstname:" . $firstname .  "\n\n". 
            "Lastname:"  . $lastname . "\n\n".  
            "Contact number:"  . $phone . "\n\n".
            "Email address:"  . $email . "\n\n"
            "Company:"  . $company . "\n\n".
            "Message:"  . "\n" . $_POST ['message'];
//

$MEssage2  =  "Dear" . $name .  "\n" .
 "Thanks for contacting us! We will get in touch with you shortly." . "\n\n"
 . "You submitted the following message: " . "\n" .  $_POST['message'] . "\n\n" 
//

$header = "From:" . $fromEmail;
$header2= "From:" .  $mailto;

//phpMailFunction

$result1=mail($mailto, $MEssage, $header);
$result2=mail($fromEmail,$mSage,$Message2,$header2);


if($result1 && $result2){
    $success =  "Your message was sent successfully!"
}

else{
    $failed = "Message send failed!"

}
    
}

?>




