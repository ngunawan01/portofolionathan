<?php
  if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"]))
  {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    $servername = "localhost";
    $username = "root";
    $password = "Coconut23";
    $dbname = "contactus";
    
    
    $conn = new mysqli($servername, 
    $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
    }

    $sql = "INSERT INTO contactustable (name, email, subject, message) VALUES 
    ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Data Sudah Tersimpan"); window.location.href = "index.html";</script>';  
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }    
  
  }
?>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $subject = $_POST["subject"];
//     $message = $_POST["message"];

//     $servername = "localhost";
//     $username = "root";
//     $password = "Coconut23";
//     $dbname = "contactus";

//     $conn = new mysqli($servername, $username, $password, $dbname);

//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $sql = "INSERT INTO contactustable (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

//     if ($conn->query($sql) === TRUE) {
//         $response = array("status" => "success", "message" => "Message sent successfully.");
//     } else {
//         $response = array("status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error);
//     }

//     $conn->close();

//     header("Content-Type: application/json");
//     echo json_encode($response);
// }
?>
  
  
  
  // /**
  // * Requires the "PHP Email Form" library
  // * The "PHP Email Form" library is available only in the pro version of the template
  // * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  // * For more info and help: https://bootstrapmade.com/php-email-form/
  // */

  // // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'contact@example.com';

  


  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();

