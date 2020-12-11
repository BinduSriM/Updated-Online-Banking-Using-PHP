<head>
    <style>
        .contactFrm h4 {
            font-size: 1em;
            color: #252525;
            margin-bottom: 0.5em;
            font-weight: 300;
            letter-spacing: 5px;
        }
        .contactFrm input[type="text"], .contactFrm input[type="email"] {
            width: 92%;
            color: #9370DB;
            background: #fff;
            outline: none;
            font-size: 0.9em;
            padding: .7em 1em;
            border: 1px solid #9370DB;
            -webkit-appearance: none;
            display: block;
            margin-bottom: 1.2em;
        }
        .contactFrm textarea {
            resize: none;
            width: 93.5%;
            background: #fff;
            color: #9370DB;
            font-size: 0.9em;
            outline: none;
            padding: .6em 1em;
            border: 1px solid #9370DB;
            min-height: 10em;
            -webkit-appearance: none;
        }
        .contactFrm input[type="submit"] {
            outline: none;
            color: #FFFFFF;
            padding: 0.5em 0;
            font-size: 1em;
            margin: 1em 0 0 0;
            -webkit-appearance: none;
            background: #9370DB;
            transition: 0.5s all;
            border: 2px solid #795CB4;
            -webkit-transition: 0.5s all;
            transition: 0.5s all;
            -moz-transition: 0.5s all;
            width: 47%;
            cursor: pointer;
        }
        .contactFrm input[type="submit"]:hover {
            background: none;
            color: #9370DB;
        }
        p.statusMsg{font-size:18px;}
        p.succdiv{color: #008000;}
        p.errordiv{color:#E80000;}
            </style>
</head>
<h2>Contact Form</h2>
<div class="contactFrm">
    <?php if(!empty($statusMsg)){ ?>
        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
    <?php } ?>
    <form action="" method="post">
        <h4>Email </h4>
        <input type="email" name="email" placeholder="email@example.com" required>
        <h4>Subject</h4>
        <input type="text" name="subject" placeholder="Write subject" required>
        <h4>Message</h4>
        <textarea name="message" placeholder="Write your message here" required> </textarea>
        <input type="submit" name="submit" value="Submit">
        <div class="clear"> </div>
    </form>
</div>
<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    //in both emails - should enable less secure apps setting
    
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($subject) && !empty($message)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = $email;
            $emailSubject = $subject;
            $htmlContent = $message;
            $name = 'OBS Bank manager';
            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            $val=mail($toEmail,$emailSubject,$htmlContent,$headers);
            if(isset($val)){
                $statusMsg = 'Your email has successfully sent to customer!';
                echo "<script>alert('".$statusMsg."');</script>";
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your contact request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>