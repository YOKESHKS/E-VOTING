<html>
    <head><style>
       img{
        height: 300px;
        width:300px;
       }
       body{
        background-image: url("votepic2.jpeg");
        background-repeat:no-repeat;
        background-position: center;
        background-size: cover;
       }
       button{
       color: rgb(255, 255, 255);
       background-color: rgb(52, 24, 191);
    }
       </style></head><body>
        <?php
            if (isset($_POST['submit'])) {
                session_start();
                $vid=$_POST['vid'];
                $vparty = $_POST['vparty'];
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "voter";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "INSERT INTO voterresult (vid, vparty) VALUES ('$vid', '$vparty')";
                if ($conn->query($sql) === TRUE) {
                    $update_sql = "UPDATE votervoted SET voted='yes' WHERE vid='$vid'";
                    if ($conn->query($update_sql) === TRUE) {
                        ?> <h1 style="color:red"> <?php echo "THANKS FOR VOTING...YOUR VOTE IS NOTED"; 
                        ?> <a href="home1.php"> </h1>
                  <?php  } else {
                        echo "Error updating record: " . $conn->error;
                    }
                } else {
                    header("Location: alreadyvoted.html");
                }
                $conn->close();
            }
?></body></head>