<?php
    echo 'Welcome'.$_GET['name'].'<br>';
    echo 'Your email address is: '.$_GET['email'];
    echo htmlspecialchars($_SERVER["PHP_SELF"]);
