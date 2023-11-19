<?php
//lest start the sessions 
session_start();

//first we need to import database connection 
include_once("db_conn.php");

//lets create our userfunction

function userRegistration($name,$email,$pwd,$Lname,$password){
    
    //create db connection
    $db_conn = Connection();

    //insert query section(If your insert any data into char ,varchar, date and float types you need warp that value by using single quotes)
    $insertSql = "INSERT INTO user_tbl (first_name,user_email,last_name,password,user_role,user_status) 
                  VALUES('$name','$email','$Lname','$password','user',1);";
    

    $sqlResult = mysqli_query($db_conn,$insertSql);

    //check database errors
    // if(mysqli_connect_errno($sqlResult)){
    //     echo(mysqli_connect_error($sqlResult));
    // }

   /* if($db_conn->mysqli_connect_error){
        echo($db_conn->mysqli_connect_error);
    }*/

    if($sqlResult>0){
        //if the registration result is greater than 0 then lest feed data into our login table as well.
        //lets use MD5 
        $newPwd = md5($pwd);


        $insertLogin = "INSERT INTO login_tbl (login_email,login_pwd,login_role,login_status) 
                        VALUES('$email','$newPwd','user',1);";
        
        $loginResult = mysqli_query($db_conn,$insertLogin);
        
        //database error checking
        // if(mysqli_connect_errno($loginResult)){
        //     echo(mysqli_connect_error($loginResult));
        // }

        return("Your Registration is Success!");
        
    }
    else{
        return("Please try again!");
    }
}

//lets create a Authentication function (Login function)

function Authentication($userName,$userPwd){

    //create db connection
    $db_conn = Connection();

    //SQL USER CHECK 
    $sqlUserFetch = "SELECT * FROM login_tbl WHERE login_email = '$userName';";
    $sqlResult = mysqli_query($db_conn,$sqlUserFetch);

    //check database errors
    // if(mysqli_connect_errno($sqlResult)){
    //     echo(mysqli_connect_error($sqlResult));
    // }

    //first we need to convert user password in to a hash value 
    $newPwd = md5($userPwd);

    //we need to check the number of rows 
    $nor = mysqli_num_rows($sqlResult);

    //now im validating the number of records are greater than 0 or not 
    if($nor > 0){
        //im executes the code 

        //first we need to fetch the records 
        $rec = mysqli_fetch_assoc($sqlResult);

        //first we needs to validate your password 
        if($rec['login_pwd'] == $newPwd){

            //lets check the user status 
            if($rec['login_status'] == 1){

                //check user role 
                if($rec['login_role'] == "user"){

                    //if the user is valid then we need to create a cookie and a session

                    //create a cookie
                    setcookie("Login29",$rec['login_id'],time()+60*60);

                    //lets create a session
                    $_SESSION['loginName'] = $rec['login_email'];
                    $_SESSION['loginId'] = $rec['login_id'];

                    //now lets redirect our user to the dashboard
                    header('location:lib/views/web.php');
                }
            } else {
                echo '<script>alert("Your Account has been Deactivated!"); window.location.href = document.URL;</script>';
                exit();
            }
        } else {
            echo '<script>alert("Your Password is not correct, Please try again!"); window.location.href = document.URL;</script>';
            exit();
        }
    } else {
        echo '<script>alert("No records are founds!"); window.location.href = document.URL;</script>';
        exit();
    }
}


?>