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
          background-image: url('family-covid3.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        h1
        {
            color:#000000;
        }
        </style>
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
        // Performing insert query execution
        // here our table name is college
        $sql = "SELECT * FROM vaccination_centers where hospital='$hospital'";
        $result = $conn->query($sql);
        //display data on web page
        while($row = mysqli_fetch_array($result)){
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<h1>" ;echo "s.no:". $row['s.no'];echo "<br>";
            echo "<h1>" ; echo "hospital:". $row['hospital'];echo "<br>";
            echo "<h1>" ;echo "type:". $row['type'];echo "<br>";
            echo "<h1>" ;echo "district:". $row['district'];echo "<br>";
              echo "<br />";
        }
        echo "<h1><center><a href='search.html'>search for vaccination center</center></h1></p>
        <h1><center><a href='apply.html'>apply for vaccination</h1></center></p>
        <h1><center><a href='logout.html'>logout</a></center></h1>";
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>