<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Kyle Lynch">
        <style>
            p {
                text-align: center;
                padding: 20px;
                font-size: 120%;
            }
        </style>
    </head>
    <body class="margins">
        <div class="infoArea">
        <?php
            $to = 'lynchk87@uwosh.edu';  //<--------put email here

            $subject = 'K&M';

            $email = $_POST['email'];
            $headers = "From: ".$email."\r\n";
            $headers .= "Reply-To: ".$email."\r\n";
            $headers .= "CC: \r\n";

            $name = $_POST['realname'];
            $number = $_POST['Phone'];
            $comment = $_POST['Comments'];
            $message = "Name: ".$name."\n"."Phone number: ".$number."\n"."Comment: ".$comment;
            
            $didItSend = null;

            if ($email == "Email" || $name == "Name" || $number == "Phone" || $comment == "Comments" || $email == "" || $name == "" || $number == "" || $comment == ""){
                echo "<p>all fields must be filled with your information and the comment must be filled out!</p>";
            } else {
                $didItSend = mail($to, $subject, $message, $headers);
                if ($didItSend === TRUE){
                    echo "<p>Email sent!</p>";
                } else {
                    echo "<p>Failed to send Email. try entering a vaild email or try a different email account!</p>";
                }
            }
        ?>
            <p>Click <a href="K&M_example2.html">here</a> to return</p>
        </div>
    </body>
</html>