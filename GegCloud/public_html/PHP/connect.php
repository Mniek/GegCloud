
<?php
    $host = 'localhost';
    $user = 'olmbm';
    $pass = 'Gegesklad234';
    $db = 'olmbm';
    
    $conn = mysqli_connect($host,$user,$pass,$db);
        if($conn)
        {
            echo 'Helo';
        }
            

?>