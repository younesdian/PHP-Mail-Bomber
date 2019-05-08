<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="language" content="EN">
    <meta name="robots" content="noindex, follow">
    <meta name="robots" content="index, nofollow">
    <meta name="robots" content="noindex, nofollow">
    <title>Mail bomber</title>
    <link href="https://findicons.com/files/icons/2118/nuvola/128/clanbomber.png" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

<div class="container">
   <div class="row">
      <div class="col-12">
         <form action="" method="post">
            <input type="hidden" name="sendmail" value="1"  />
            <div class="form-group">
               <label>Email address</label>
               <input class="form-control" type="text" name="reciever" />
               <small>E-mail address of the reciever</small>
            </div>
            <div class="form-group">
               <label>Name</label>
               <input class="form-control" type="text" name="namereciever"/>
               <small>Name of the reciever</small>
            </div>
            <div class="form-group">
               <label>Subject</label>
               <input class="form-control" type="text" name="titlemessage"/>
               <small>Subject of the message</small>
            </div>
            <button class="btn btn-primary" type="submit">Send</button>
         </form>
      </div>
   </div>
</div>

<div class="container">
   <div class="row">
      <div class="col-12">
         <?php
            require 'phpmailer/PHPMailerAutoload.php';
            require 'scripts/scripts.php';
            require 'phpmailer/class.smtp.php';
            require 'phpmailer/class.pop3.php';
            require 'phpmailer/class.phpmailer.php';

            if ($_POST['sendmail']) {
                sendmail($_POST['reciever'], $_POST['namereciever'], $_POST['titlemessage']);
            }
        ?>
      </div>
   </div>
</div>

</html>
