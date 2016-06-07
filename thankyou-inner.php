<?php
   ob_start();
   include 'header.php';
   /*error_reporting(E_ALL); ini_set('display_errors', 1); 
   echo "<pre>";
   print_r($_POST);
   die;*/
   if(isset($_REQUEST['msg']) && ($_REQUEST['msg'] == 'sent'))
   {
      echo "<div class='container'><div class='thankyou-email'><h1 class='title-h1'>Thankyou for your information, one of our counsellor will get back to you.</h1>
      </div></div>";
      header('Refresh:3;url=index.php');
   }
   else
   {
      if(empty($_POST['name']) || empty($_POST['mobile']) || empty($_POST['email'])  || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
      {
           echo "Please fill all the required fields!";
           return false;
      }
      $name = $_POST['name'];
      $phone = $_POST['mobile'];
      $email_address = $_POST['email'];
   
      // create email body and send it 
    //  $to = 'santosh9845124158@gmail.com';
      $to = 'santosh9845124158@gmail.com';
      $email_subject = "Santosh Sharmaa enquiry from: $name";
      $email_body = "You have received a new message from contact form.<br><br>".
      "The details are as follows:<br>Name: $name<br>Phone: $phone<br>Email: $email_address";
      //$headers = "From: santosh9845124158@gmail.com\r\n";
      $headers = "From: noreply@santoshsharmaa.com\r\n";

      $headers .= "BCC: ishan.rath@gmail.com\r\n";
      $headers .= "BCC: santoshsharma.rudraonline@gmail.com\r\n"; 
      $headers .= "Content-type: text/html\r\n"; 
      mail($to,$email_subject,$email_body,$headers);
      header("Location:thankyou.php?msg=sent");
   }
?>
<?php include "footer.php";?>