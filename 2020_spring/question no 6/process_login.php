
<?php

        //Checking if the user has actually submitted the form.
        if($_SERVER['REQUEST_METHOD']=='POST'){
        //Establishing the connection

        $connect=mysqli_connect("localhost","root","");
        if(!$connect)
        {
            die("Connection failed: ".mysqli_connect_error());
        }
        
        //Creating a database
        $query="CREATE DATABASE IF NOT EXISTS login_table";
        $result =mysqli_query($connect,$query);
        if(!$result)
        {
            die("Query failed".mysqli_error($connect));
        }
        //Selecting the database
        $db=mysqli_select_db($connect,'login_table');
        //Creating a Table
        //It is not necessary in this question to create table cause 
        // it asks for us to check in the database, not create one.

        //$query="CREATE TABLE IF NOT EXISTS login_data
                //(usermail VARCHAR(100) PRIMARY KEY NOT NULL,
              //  userpass VARCHAR(100) NOT NULL";
       // $result=mysqli_query($connect,$query);
       // if(!$result)
       // {
       //     die("FAIled to create table".mysqli_error($connect));
       // }
        $MAIL=$_POST["usermail"];
        $PASS=$_POST["userpass"];
        
        //Checking if the data entered by user is in our database or not

        if(empty($MAIL||empty($PASS)))
        {
            header('Location:login.php');
        }
        else{
            //Connect to the database
            $db=mysqli_select_db($connect,"login_table");
            //check if the email is in the database or not
            $query="SELECT * FROM login_data WHERE usermail='$MAIL'";
            $result=mysqli_query($connect,$query);
            if(mysqli_num_rows($result)>0)
            {
                //Email is present, check for password
                $row=mysqli_fetch_assoc($result);
                if($PASS==$row['userpass'])
                {
                    header('Location:home.php');
                    session_start();
                    $_SESSION['usermail']=$MAIL;
                }
            }
            else{
                header('Location:login.php');
            }
        }
    }
    else{
        header("Location:login.php");
    }
        
?>