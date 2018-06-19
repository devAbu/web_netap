<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "agencij2_db_netap"; 
    //agencij2, Kb4bm312nY 

    $dbc = @mysqli_connect($dbHost, $dbUser, $dbpassword, $dbName) or die('could not connect'. mysqli_connect_error());

	mysqli_set_charset($dbc,"utf8");


    if ($_REQUEST['task'] == "register") {
        
        $fullname = $_REQUEST['name'];
        $age = $_REQUEST['age'];
        $occupation = $_REQUEST['occupation'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $country = $_REQUEST['country'];
        $city = $_REQUEST['city'];
		$query = "INSERT INTO users (name, age, occupation, email, password, country, city) VALUES ('$fullname','$age','$occupation','$email','$password','$country','$city')";
        
        $response = @mysqli_query($dbc, $query);
        if ($response) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['fullname'] = $fullname;
            $_SESSION['age'] = $ahe;
            $_SESSION['occupation'] = $occupation;
            $_SESSION['country'] = $country;
            $_SESSION['city'] = $city;
            echo('sucess');
        }else{
            echo mysqli_error($dbc);
        }
    }


if ($_REQUEST['task'] == "companyRegister") {
        
        $companyName = $_REQUEST['companyName'];
        $desc = $_REQUEST['description'];
        $location = $_REQUEST['location'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
		$query = "INSERT INTO companies (companyName, description, location, email, password ) VALUES ('$companyName','$desc','$location','$email','$password')";
        
        $response = @mysqli_query($dbc, $query);
        if ($response) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['companyName'] = $companyName;
            $_SESSION['location'] = $location;
            $_SESSION['desc'] = $desc;
            echo('sucess');
        }else{
            echo mysqli_error($dbc);
        }
    }

if ($_REQUEST['task'] == "login") {
    
    $connection = mysqli_connect($dbHost, $dbUser, $dbPassword);
    $selection = mysqli_select_db($connection, $dbName);

    if(!$connection){
        die("connection failed ".mysqli_error());
    }else if(!$selection){
        die("selection failed ".mysqli_error());
    }else{
        
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $query = "SELECT name, age, occupation, country, city, password FROM users WHERE email = '$email'";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {

                 while($row = $result->fetch_assoc()) {

                    if($row['password'] == $password){
                        $fullname = $row['name'];
                        $query = "INSERT INTO login_history (fullname, email) VALUES ('$fullname','$email')";

                        if(mysqli_query($connection,$query)){
                            session_start();
                            $_SESSION['email'] = $email;
                            $_SESSION['fullname'] = $fullname;
                            $_SESSION['age'] = $row['age'];
                            $_SESSION['occupation'] = $row['occupation'];
                            $_SESSION['country'] = $row['country'];
                            $_SESSION['city'] = $row['city'];
                            
                            echo('sucess');
                        }else{
                            echo('error');
                        }

                    }
                }
        }
    }
}

if ($_REQUEST['task'] == "companyLogin") {
    
    $connection = mysqli_connect($dbHost, $dbUser, $dbPassword);
    $selection = mysqli_select_db($connection, $dbName);

    if(!$connection){
        die("connection failed ".mysqli_error());
    }else if(!$selection){
        die("selection failed ".mysqli_error());
    }else{
        
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $query = "SELECT companyName, location, description, password FROM companies WHERE email = '$email'";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {

                 while($row = $result->fetch_assoc()) {

                    if($row['password'] == $password){
                        
                        $companyName = $row['companyName'];
                        $query = "INSERT INTO login_history (fullname, email) VALUES ('$companyName','$email')";

                        if(mysqli_query($connection,$query)){
                            session_start();
                            $_SESSION['email'] = $email;
                            $_SESSION['companyName'] = $companyName;
                            $_SESSION['location'] = $row['location'];
                            $_SESSION['description'] = $row['description'];
                            echo('sucess');
                        }else{
                            echo('error');
                        }

                    }
                }
        }
    }
}

if ($_REQUEST['task'] == "post") {
    
    $connection = mysqli_connect($dbHost, $dbUser, $dbPassword);
    $selection = mysqli_select_db($connection, $dbName);

    if(!$connection){
        die("connection failed ".mysqli_error());
    }else if(!$selection){
        die("selection failed ".mysqli_error());
    }else{
        
        $title = $_REQUEST['title'];
        $body = $_REQUEST['body'];
        $type = $_REQUEST['type'];
        $companyName = $_REQUEST['comanyName'];
        $pictureLink = $_REQUEST['pictureLink'];
        
        $query = "INSERT INTO posts (title, body, type, companyName, pictureLink) VALUES ('$title','$body','$type',$companyName','$pictureLink')";
        
        if(mysqli_query($connection,$query)){
            echo('sucess');
            }else{
            echo('error');
        }
        
        
    }
             
}

if ($_REQUEST['task'] == "fetchPosts") {
    
    $connection = mysqli_connect($dbHost, $dbUser, $dbPassword);
    $selection = mysqli_select_db($connection, $dbName);

    if(!$connection){
        die("connection failed ".mysqli_error());
    }else if(!$selection){
        die("selection failed ".mysqli_error());
    }else{
        
        $title = $_REQUEST['title'];
        $body = $_REQUEST['body'];
        $type = $_REQUEST['type'];
        $companyName = $_REQUEST['comanyName'];
        $pictureLink = $_REQUEST['pictureLink'];
        
        $query = "SELECT * FROM posts";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            $id = 0;
            session_start();
            
            while($row = $result->fetch_assoc()) {
                     
                $_SESSION['title'.$id] = $row['title'];
                $_SESSION['body'.$id] = $row['body'];
                $_SESSION['type'.$id] = $row['type'];
                $_SESSION['companyName'.$id] = $row['companyName'];
                $_SESSION['pictureLink'.$id] = $row['pictureLink'];
                $id++;
            }
            $_SESSION['id'] = $id;
            echo('sucess');
        }
        
        
    }
             
}
?>