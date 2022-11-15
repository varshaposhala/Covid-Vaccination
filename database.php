<!DOCTYPE html>
<html>
  
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
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "covid");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $aadhar=$_REQUEST['aadhar'];
        $first_name1 =  $_REQUEST['username'];
        $password1 = $_REQUEST['password'];
        $phone1 =  $_REQUEST['phone'];
        $gmail1 = $_REQUEST['gmail'];
    
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO registration  VALUES ('$aadhar','$first_name1', 
            '$password1','$phone1','$gmail1')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." ; 
                echo "<script>location.href='userlogin.html';</script>";
            // echo nl2br("\n$first_name1\n $password1\n "
            //     . "$phone1\n $gmail1");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>