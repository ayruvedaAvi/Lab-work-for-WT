<?php

    //Indexed array
    $friends=array("Aashutosh", "Bipin", "Kamal", "Prajwol");

    //Associative array
    $friends_assoc = array("Aashutosh"=>"badar","bipin"=>"kukur");      //Yesma aashutosh chai index bhayo ani badar chai value

    //Multidimensional array
    $friends_multi= array("Aashutosh"=>array(1,2,3),"Bipin"=>array(6,9,6,9));

    //Accessing indexed array
    echo("Printing indexed arrow using for loop. </br>");
    for ($i=0;$i<4;$i++)
    {
        echo $friends[$i];
        echo "</br>";
    }

    //Accessing associative array

    echo("Printing associative array with particular index </br>");

    echo("The index bipin is for: ");
    echo $friends_assoc["bipin"];
    echo("</br>");

    //Accessing multidimensional array

    echo("Printing multidimensional array of aashutosh </br>");
    //Aashutosh bhitra ko elements print garchhu
    for($i=0;$i<3;$i++)
    {
        echo $friends_multi["Aashutosh"][$i];
        echo ("</br>");
    }

?>