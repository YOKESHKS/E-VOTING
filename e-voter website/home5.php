<!DOCTYPE html>
<html>
<head>
    <title>Voter Complaint</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #f00;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $vid = $_POST['vid'];
        $mob = $_POST['mobile'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "voter";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sssql = "SELECT vid FROM votercomplain WHERE vid='$vid'";
        $result = mysqli_query($conn, $sssql);
        if (mysqli_num_rows($result) > 0) {
            echo "<h1>COMPLAINT ALREADY RAISED...PLEASE SUBMIT A COMPLAINT ONLY ONCE AND WAIT PATIENTLY UNTIL WE CONTACT YOU</h1>";
        } else {
            $update_sql = "INSERT INTO votercomplain (vid, mob) VALUES ('$vid', '$mob')";
            if ($conn->query($update_sql) === TRUE) {
                echo "<h1>COMPLAINT RAISED..PLEASE WAIT UNTIL WE CONTACT YOU</h1>";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
