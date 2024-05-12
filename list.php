<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    
    <table>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = " ";
            $db = "images";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $db);
            //check connection
            if($conn -> connect_error) {
                die("Connection failed: " . $conn -> connect_error);
            }
            
            $sql = " SELECT * from  names ";
            $result = $conn -> query($sql);
            
            if($result -> num_row > 0 {
                //output data for each row
                while($row = $result -> fetch_assoc()){
                    echo "<tr>" ;
                    echo "<td>" <a href = "Azure blob generated path/  " .$row["name"]."</a></td>" ;
                    echo "</tr>";
                }
            }
            
        ?>

    </table>
</body>
</html>