
        <?php
        
        $servername = "localhost:3306";
        $username = "root";
        $password = "Eko.115221"; 
        $database = "contacts"; 

       
        $conn = mysqli_connect($servername, $username, $password, $database);

        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {



            
            $sql = "SELECT * FROM `as1`";
            $result = mysqli_query($conn, $sql);


        
        
            $num=mysqli_num_rows($result);
            echo "<br/>";
            echo $num;
        
            if($num>0)
        {
            $row=mysqli_fetch_assoc($result);
            echo "<br/>";
            echo var_dump($row);
            echo "<br/>";
        
            $row=mysqli_fetch_assoc($result);
            echo "<br/>";
            echo var_dump($row);

            $row=mysqli_fetch_assoc($result);
            echo "<br/>";
            echo var_dump($row);

            $row=mysqli_fetch_assoc($result);
            echo "<br/>";
            echo var_dump($row);

            $row=mysqli_fetch_assoc($result);
            echo "<br/>";
            echo var_dump($row);
            
            $row=mysqli_fetch_assoc($result);
            echo "<br/>";
            echo var_dump($row);
            

        }
        
       
    }
            ?>


  
