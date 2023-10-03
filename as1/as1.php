
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $position = $_POST['position'];

    
    $servername = "localhost:3306";
    $username = "root";
    $password = "Eko.115221"; 
    $database = "contacts"; 

    
    $conn = mysqli_connect($servername, $username, $password, $database);

   
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        


        $sql = "INSERT INTO `as1` (`fname`, `lname`, `position`) VALUES ('$fname', '$lname', '$position')";
        $result=mysqli_query($conn,$sql);


        if($result) {
            echo "Data inserted successfully";
    
        }
        else {
            echo "Data not inserted due to" .mysqli_error($conn);
        }

        
    }
}
?>
