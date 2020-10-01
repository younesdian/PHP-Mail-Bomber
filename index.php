<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="language" content="EN">
      <title>Mail bomber</title>
      <link href="https://findicons.com/files/icons/2118/nuvola/128/clanbomber.png" rel="icon" type="image/x-icon" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-12">
               <form action="" method="post">
                  <input type="hidden" name="sendmail" value="1"  />
                  <div class="form-group">
                     <label>Email address</label>
                     <input class="form-control" type="text" name="reciever" />
                     <small>E-mail address are reciever</small>
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
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                           <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                           <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                     </div>
                     <small>Add an attachment to the message</small>
                  </div>
                  <button class="btn btn-primary col-12" type="submit">Send</button>
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
                      sendmail($_POST['reciever'], $_POST['namereciever'], $_POST['titlemessage'], $_POST['file']);
                  }
                  ?>
            </div>
         </div>
      </div>
   </body>
</html>
