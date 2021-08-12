    <?php

       require("database/db_connect.php");
        

        if(isset($_POST['name']) && isset($_POST['email'])) {
          
          
            $user       = $_POST['name'];
            $mail      = $_POST['email'];
            date_default_timezone_set('Africa/Lagos');
            $date        = date('Y-m-d H:i:s', time());

          $sql = "INSERT INTO subscribers(`name`, `email`, `date`)";
          $sql.= " VALUES('$user', '$mail', '$date')";
          $sql = "INSERT INTO subscribers(name, email, date) VALUES ('" . $user . "','" . $mail . "','" . $date . "')";

          $result = mysqli_query($con, $sql);

         
        }
        
         header('Location:' .$_SERVER['HTTP_REFERER']); 

          //This will go  back to previous page withot refreshing
        //   header("location:<script>history.go(-1);</script>");
            


?>
