<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "twizted1888@gmail.com";
    $email_subject = "Emily Envelopes";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="2;url=index.html" />
  <title>Emily Envelopes | Thank You | Stationary | Paper | Philadelphia</title>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="flexslider.css">
  <script src="jquery.js"></script>
  <script src="jquery.flexslider.js"></script>
  <script src="modernizer.js"></script>
  <script src="flexslider.js"></script>
  <script src="jquery.instagram.js"></script>
</head>
<body>
  <header>
    <img src="img/logo.png" id="logo" alt="Emily Envelopes">
    <div class="contactOne">
      <div class="contact">215.555.5555</div>
      <div class="contact"><a href="mailto:itsemily@yahoo.com">ITSEMILY@YAHOO.COM</a></div>
      <div class="socialOne">
        <a href="https://www.facebook.com/emilyenvelopes" target="_blank" class="social"><img src="img/facebook.png" alt="Emily Envelopes Facebook"></a>
        <a href="http://www.pinterest.com" target="_blank" class="social"><img src="img/pinterest.png" alt="Emily Envelopes Pinterest"></a>
        <a href="http://www.instagram.com/emily_envelopes" target="_blank" class="social"><img src="img/instagram.png" alt="Emily Envelopes Instagram"></a>
      </div>
    </div>
  </header>
  <section id="thanks" style="text-align: center; background: #f0f3e8; padding: 80px">
    <div class="thanks" style="font-family: helveticaneuelight; font-size: 40px">
      THANK YOU!
    </div>
    <div class="for" style="margin-top: 20px;font-size: 20px">
      Your message has been received, and will be replied to shortly.
    </div>
    <div class="redirect" style="margin-top: 20px;">
      You will be redirected home in a moment. <br>
      <a href="index.html">Click Here if your browser doesn't redirect within 10 seconds.</a>
    </div>
  </section>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44051048-1', 'emilyenvelopes.com');
  ga('send', 'pageview');

</script>
</body>
</html>
 
<?php
}
?>