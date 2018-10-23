<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./GegCloud/public_html/CSS/mainStyle.css">
    </head>
    <body>
        <?php require('./GegCloud/public_html/PHP/connect.php');?>
        <nav>
            <form action="./GegCloud/public_html/SITES/transmit.php" method="post">
                <input type="text" name="nickname" placeholder="Nick">
                <input type="password" name="password" placeholder="Password">
                <input type="submit">

            </form>
        </nav>
            
        
        <script src="./GegCloud/public_html/JS/mainScript.js"></script>
    </body>
</html>

