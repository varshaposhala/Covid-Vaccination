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
        <style>
        body {
          background-image: url('family-covid3.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
       
        </style>
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
        $hospital =  $_POST['hospital'];
        // $type = $_POST['type'];
        // $district =  $_POST['district'];
        // $doasge = $_POST['dosage'];
    
        //   $count="select max(s.no) from vaccination_centers";
        //   $res=$conn->query($count);
        //   $res++;
        
        $sql = "SELECT count(dose) FROM dosage where hospital='$hospital'";
        $result = $conn->query($sql);
        //display data on web page
        while($row = mysqli_fetch_array($result)){
            echo "<h1>" ;echo "Doses". $row['count(dose)'];echo "</h1>";
              echo "<br />";
        }
        echo "<br/>";
        echo " <h2><bold><p><a href='addvaccinationcenter.html'>add vaccination center</a></p>
    <p><a href='getdosagedetails.html'>get dosage details</a></p>
    <p><a href='removevaccinationcenter.html'>remove vaccination center</a></p>
    <p><a href='logout.html'>logout</a></p></bold></h2>";  
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>