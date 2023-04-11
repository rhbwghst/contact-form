<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST['cellphone'],FILTER_SANITIZE_NUMBER_INT);
        $message = filter_var($_POST['massege'],FILTER_SANITIZE_STRING);
  
        $formerors = [];
        if(strlen($user) <= 3){
            $formerors[]= 'username must be larger than <strong>3</strong> characters';
        }
        if(strlen($message) < 10){
            $formerors[]= 'massege can\'t be less than 10 characters';
        }
        if(empty($email)){
            $formerors[]= 'You must enter your email ';
        }
        if(empty($message)){
            $formerors[]= 'You must enter your message ';
        }
          // PHP MAIL:-
        $myemail = "m.yahia214eg@gmail.com";
        $header  = "From: " . $email . "\r\n";
        $subject = "contact form";

        if(empty($formerors)){
            mail($myemail,$subject,$message,$header);
        $user    = "";
        $email   = "";
        $phone   = "";
        $message = "";
        $success = "<div class='alert alert-success' >We Have Recieved Your Message</div>";
                
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>contact form</title>
</head>

    <div class="container">
        <h1 class="text-center">Contact Me</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" class="contact-form" method="POST" >
        <?php if(isset($success)){ echo $success;} ?>
        <!-- username input field-->
        <div class ="form-group">
        <input 
        class="username form-control" 
        type="text" name="username" 
        placeholder="type your username" 
        value="<?php if(isset($user)){ echo $user;}?>"
        >
         <i class="fa-solid fa-user"></i>
          <span class="asterisx">*</span>
          <div class="alert alert-danger custom-alert">
          username must be larger than <strong>3</strong> characters
          </div>
        </div>
        <!-- email input field-->
        <div class ="form-group">
        <input 
        class="email form-control" 
        type="email" name="email" 
        placeholder="type your vaild email" 
        value="<?php if(isset($email)){ echo $email;}?>"
        >
              <i class="fa-solid fa-envelope"></i>
              <span class="asterisx">*</span>
              <div class="alert alert-danger custom-alert">
          Email can't be  <strong>Empty</strong>
          </div>
        </div>
        <!-- phone input field-->     
              <input 
              class="form-control" 
              type="text" name="cellphone" 
              placeholder="type your phone"
              value="<?php if(isset($phone)){ echo $phone;}?>"
              >
               <i class="fa-solid fa-phone"></i>
               <!-- msg input field--> 
            <div class="form-group">
              <textarea 
              class="msg form-control" 
              placeholder="type your message"
              name="massege"><?php if(isset($message)){ echo $message;}?></textarea>
              <div class="alert alert-danger custom-alert">
              massege can't be less than 10 character
              </div>
            </div>
           
              
            <?php if(isset($formerors) && sizeof($formerors) >= 1) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                     echo "<strong> Warning: </strong> " . "<br>";
                     foreach($formerors as $eror){
                         echo $eror . "<br>";
                     }
                    ?>
                    </div>
           <?php }  ?>
           
                
              
              <input class="btn btn-success" type="submit" value="send Message">
              <i class="fa-solid fa-paper-plane send-icon"></i>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  
    <script src="js/custom.js"></script>
   
</body>
</html>
    
