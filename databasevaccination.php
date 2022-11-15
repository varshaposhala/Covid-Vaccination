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
    <style>  
    body {
          background-image: url('familycovid-2.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style>
<body>
    
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
        $first_name1 =  $_REQUEST['hospital'];
        $password1 = $_REQUEST['type'];
        $phone1 =  $_REQUEST['district'];
       
          $count="select max(s.no) from vaccination_centers";
          $res=$conn->query($count);
          $res++;
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO vaccination_centers  VALUES ('$res','$first_name1', 
            '$password1','$phone1')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." ; 
            echo " <p><a href='addvaccinationcenter.html'>add vaccination center</a></p>
            <p><a href='getdosagedetails.html'>get dosage details</a></p>
            <p><a href='removevaccinationcenter.html'>remove vaccination center</a></p>
            <p><a href='logout.html'>logout</a></p>";
            // echo nl2br("\n$first_name1\n $password1\n "
            //     . "$phone1\n $gmail1");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    
</body>
  
</html>