<?php
 
if(isset($_POST['submit'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_subject = "Website Client Message";
 
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $message = $_POST['message'];
 $name = $_POST['name'];

 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Phone: ".clean_string($subject)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r";
 
 mail("tgchibanda@gmail.com, admin@coghlanvilla.co.zw",$email_subject,$email_message);
 

?>
 
 
 
<!-- include your own success html here -->
 
 
 
<script language="javascript">
alert("Email sent successfully. We will contact you soon.")
location='index.html'
</script>
 
 
 
<?php

}
 
?>