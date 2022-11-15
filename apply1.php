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
          background-image: url('family-covid1.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
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
        $user=$_REQUEST['user'];
        $hospital =  $_REQUEST['hospital'];
        $dose = $_REQUEST['dose'];
        $date =  date("Y/m/d");
        $time=  date("h:i:s");
    function limit_run_times() {
            // Variable declarations
            $fileName = 'my_log.txt';
            $dailyLimit = 10;
            $content = file_get_contents($fileName);
            $parts = explode("\t", $content);
            $date = $parts[0];
            $counter = $parts[1] + 1;
            // $user=$parts[3];
        
            // Check the counter - if its higher than 10 on this date, return false
            if ($counter > $dailyLimit && date("Y-m-d") === $date) {
                die("Daily executing limit ($dailyLimit) exceeded! Please try again tomorrow.");
            }
        
            // We only get here if the count is $dailyLimit or less
            // Check if the date is today, if so increment the counter by 1
            // Else set the new date and reset the counter to 1 (as it is executed now)
            if (date("Y-m-d") !== $date) {
                $counter = 1;
                $date = date("Y-m-d");
            }
            file_put_contents($fileName, $date."\t".$counter);
            return true;
        }
        // Performing insert query execution
        // here our table name is college
        if(limit_run_times())
        {
        $sql = "INSERT INTO apply  VALUES ('$user','$hospital', 
            '$dose','$date','$time')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>vaccination applied successfully." ; 
            echo "<h1><center><a href='search.html'>search for vaccination center</center></h1></p>
            <h1><center><a href='apply.html'>apply for vaccination</h1></center></p>
            <h1><center><a href='logout.html'>logout</a></center></h1>";
                // echo "<script>location.href='userlogin.html';</script>";
            // echo nl2br("\n$first_name1\n $password1\n "
            //     . "$phone1\n $gmail1");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
     }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>