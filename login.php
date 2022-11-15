</html>
    <head>
        <title>First Page</title>
          
        <script type="text/javascript">
            function preventBack() {
                window.history.forward(); 
            }
              
            setTimeout("preventBack()", 0);
              
            window.onunload = function () { null };
        </script>
        <style>
        body {
          background-image: url('family-covid1.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
       
        </style> 
    </head>
    <body>   
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
      
        $sql = "select *from admin where username = '".$username."' and password = '".$password."' limit 1";  
        $result = mysqli_query($con,$sql); 
        
        if(mysqli_num_rows($result)== 1){  
            session_start();
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $username;
            echo "<h1><center> Login successful </center></h1>";  
           echo " <p><a href='addvaccinationcenter.html'>add vaccination center</a></p>
    <p><a href='getdosagedetails.html'>get dosage details</a></p>
    <p><a href='removevaccinationcenter.html'>remove vaccination center</a></p>
    <p><a href='logout.html'>logout</a></p>";
            // echo "<script>location.href='handloom.html';</script>";
        
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   
    }  
?>
</body>
</html>  
