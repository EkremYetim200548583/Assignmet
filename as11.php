<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>as11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Add Employee</a></li>
                <li><a href="view.php">View Employees</a></li>
            </ul>
        </nav>
        <img src="logo.jpg" alt="Company Logo">
    </header>

    <main>
        <h1>View Employees</h1>
        <?php
        // Database connection parameters
        $servername = "localhost:3306";
        $username = "root";
        $password = "Eko.115221"; // Replace with your database password
        $database = "contacts"; // Replace with your database name

        // Create a database connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check if the connection was successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {



            // Prepare and execute the SQL query to retrieve employee data
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


    </main>

    <footer>
        &copy; 
