<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'admin@ismanto.id';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  
$contact->recaptcha_secret_key = '6LfPvKkZAAAAAAN0XphsrM3xl5MQ4F6fHQleJtNT';
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'ismanto.id',
    'username' => 'admin@ismanto.id',
    'password' => 'Cctv2017 ',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);
  $contact->honeypot = $_POST['first_name'];
  if($_POST['privacy'] !='accept') {
  die('Please, accept our terms of service and privacy acy policy');
}
  
  
  
  echo $contact->send();
?>

<?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LcR1akZAAAAAIQTfr6ocD-15GofBMGd0VEi_0Mu',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {
        // If CAPTCHA is successfully completed...
        /*
          PHP contact form script
          Version: 1.1
          Copyrights BootstrapMade.com
        */

        /***************** Configuration *****************/

          // Replace with your real receiving email address
          $contact_email_to = "'admin@ismanto.id";

          // Title prefixes
          $subject_title = "Contat Form Message:";
          $name_title = "Name:";
          $email_title = "Email:";
          $message_title = "Message:";

          // Error messages
          $contact_error_name = "Name is too short or empty!";
          $contact_error_email = "Please enter a valid email!";
          $contact_error_subject = "Subject is too short or empty!";
          $contact_error_message = "Too short message! Please enter something.";

        /********** Do not edit from the below line ***********/

          if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
            die('Sorry Request must be Ajax POST');
          }

          if(isset($_POST)) {

            $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
            $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

            if(!$contact_email_to || $contact_email_to == 'contact@example.com') {
              die('The contact form receiving email address is not configured!');
            }

            if(strlen($name)<3){
              die($contact_error_name);
            }

            if(!$email){
              die($contact_error_email);
            }

            if(strlen($subject)<3){
              die($contact_error_subject);
            }

            if(strlen($message)<3){
              die($contact_error_message);
            }

            if(!isset($contact_email_from)) {
              $contact_email_from = "contactform@" . @preg_replace('/^www\./','', $_SERVER['SERVER_NAME']);
            }

            $headers = 'From: ' . $name . ' <' . $contact_email_from . '>' . PHP_EOL;
            $headers .= 'Reply-To: ' . $email . PHP_EOL;
            $headers .= 'MIME-Version: 1.0' . PHP_EOL;
            $headers .= 'Content-Type: text/html; charset=UTF-8' . PHP_EOL;
            $headers .= 'X-Mailer: PHP/' . phpversion();

            $message_content = '<strong>' . $name_title . '</strong> ' . $name . '<br>';
            $message_content .= '<strong>' . $email_title . '</strong> ' . $email . '<br>';
            $message_content .= '<strong>' . $message_title . '</strong> ' . nl2br($message);

            $sendemail = mail($contact_email_to, $subject_title . ' ' . $subject, $message_content, $headers);

            if( $sendemail ) {
              echo 'OK';
            } else {
              echo 'Could not send mail! Please check your PHP mail configuration.';
            }
          }
          echo '<br><p>CAPTCHA was completed successfully!</p><br>';
        }      
}
?>
