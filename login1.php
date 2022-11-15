<head>
        <title>First Page</title>
          
        <script type="text/javascript">
            function preventBack() {
                window.history.forward(); 
            }
              
            setTimeout("preventBack()", 0);
              
            window.onunload = function () { null };
        </script>
         
    </head> 
    <body> 
    <style>
        body {
          background-image: url('family_covid5.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style> 
<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "covid";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
   if(isset($_POST['uname'])){
    $username = $_POST['uname'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
       // $username = stripcslashes($username);  
        //$password = stripcslashes($password);  
        //$username = mysqli_real_escape_string($con, $username);  
        //$password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from registration where username = '".$username."' and password = '".$password."' limit 1";  
        $result = mysqli_query($con,$sql); 
        
        if(mysqli_num_rows($result)== 1){ 
            session_start(); 
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = '$username';
            echo "<h1><center> Login successful </center></h1>";  
            // echo "<script>location.href='handloom.html';</script>";
            echo "<h1><center><a href='search.html'>search for vaccination center</center></h1></p>
<h1><center><a href='apply.html'>apply for vaccination</h1></center></p>
<h1><center><a href='logout.html'>logout</a></center></h1>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   
    }  
?>  
    </body>