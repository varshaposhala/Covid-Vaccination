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
<?php
   session_start();
   unset($_SESSION["username"]);
   //unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   echo " <h1><center><a href='index.html'>HOME PAGE</a></center></h1>";
?>