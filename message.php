<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="0; URL='http://home.iitk.ac.in/~shivampa/gviitk/'" />
</head>
<body>
    <?php
        $name = $_GET["name"];
        $title = $_GET["title"];
        $maiil = $_GET["email"];
        $affiliation = $_GET["affiliation"];
        $phone = $_GET["phone"];
        $message = $_GET["message"];
        $msg = "Name : $title $name<br>Mail : $maiil<br>Affiliation : $affiliation<br>Phone : $phone<br>Message : $message";
        if ($name && $title && $mail && $affiliation && $phone && $message){
            echo "<h1>Thanks your message has been sent to us.</h1>";
            $to = "groupfive@iitk.ac.in";
            $subject = "Query from symposium website";
            $header = "From:groupfive@iitk.ac.in \r\n";
            $header .= "Cc:groupfive@iitk.ac.in \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            mail ($to,$subject,$msg,$header);
        }
        else{
            echo "<h1>Thanks for visit.</h1>";
        }
    ?>
</body>
</html>
