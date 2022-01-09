
<?php
session_start();

//prekini sesiju
session_unset();
//prebaci korisnika
header('Location:  index.php');
exit(); 


?>