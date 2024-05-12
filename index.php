<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once " azure/autoload.php";
        use MicrosoftAzure\Storage\Blob\BlobRestProxy;
        use MicrosoftAzure\Storage\common\ServiceException;
            if (isset($_FILES['myFile'])){
                $connectionString = "<>" //Enter Deployment Key
                $blobClient = BlobRestProxy::createBlobService($connectionString);
                $file_name = $_FILES['myFile']['name'];
                $temp = explode('.', $file_name);
                $extension = end($tmp);
                $file_name = mt_rand().".".$extension;
                $file_temp = $_FILES['myFile']['tmp_name'];
                $containerName = '<>'; //Enter Container Name
                $keyname =  $file_name;
                $content = fopen($file_tmp, "r");
                $blobClient = BlobRestProxy::createBlobService($connectionString);

                # Upload file as a blob
                // Upload blob
                $blobClient ->createBlob($containerName, $file_name , $content);
                    echo " Blob Uploaded Successfully ";

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

            $sql = "INSERT INTO names (name)
                VALUES('" .$file_name."') ";

            if($conn -> query($sql) === TRUE) {
                echo " New record created successfully ";

            } else {
                echo " Error: " .$sql . "<br>" .$conn -> error;
            }

            $conn -> close();

    }
?>
                
    <title>Document</title>
</head>
<body>

<h1> Upload to Azure Blob </h1>
<form action = " " method = "POST" enctype = "multipart/form-data">
Select a file: <input type = "file" name = "myFile"/>
                <input type = Sumit name = "submit"/>
</form>

<a href= "./list.php" target= "_blank"> Check List >> </a>
    
</body>
</html>

