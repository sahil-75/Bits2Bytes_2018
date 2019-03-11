<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->

<?php
    session_start();
    unset($_SESSION['email']);
    if(session_destroy())
    {
        header("Location: index.php");
    }
?>

<!--Developed by SAHIL G. KALYANI and SHUBHAM GUPTA-->