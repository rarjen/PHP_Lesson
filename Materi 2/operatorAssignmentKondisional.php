<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //if empty($user) = TRUE, set $status = "Anonymus";
        echo $status = (empty($user)) ? "Anonymous" : "logged in";
        echo("<br>");

        $user = "Otniel Kevin";
        //if empty($user) = FALSE, set $status = "logged in";
        echo $status = (empty($user)) ? "Anonymous" : "logged in ";
        
        echo $user = $_GET["user"] ?? "Anonymous";
        echo("<br>");
    ?>
    
</body>
</html>