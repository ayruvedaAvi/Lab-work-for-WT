<?php

    session_start();
    //setting up a cookie, using it and destroying it.

    //Setting up a cookie

    setcookie("user_name","Aashutosh",time()+3600);

    //Access a cookie

    echo "Your name is: ".$_COOKIE["user_name"];

    echo("</br>");

    //Deleting a cookie

    //setcookie("user_name","Aashutosh",time()-90);

    //sessions

    $_SESSION['name']="aashutosh";

    echo "Your name using session is " .$_SESSION['name'];
    echo"</br>";

    //destroying a session
    //session_destroy();
    //deleting a particular session
    //unset($_SESSION['name'])

?>