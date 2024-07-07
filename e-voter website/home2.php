<html>
    <head><style>
       img{
        height: 100px;
        width:100px;
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
       </style></head>
    <body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vid = $_POST['id'];
    $vname = $_POST['name'];
    $pwd=$_POST['pwd'];
    $con = mysqli_connect("localhost", "root", "", "voter");
    $sql = "SELECT * FROM votervoted WHERE vid='$vid' and vname='$vname' and pwd='$pwd'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['vid']=$row['vid'];
        if (empty($row['voted'])) {
            echo "HELLO VOTER " . $vname;
            ?>
            <p>
            <div>
                <form action="home3.php" method="POST"><center>
                    <h1 style="color:rgb(60, 20, 220)">CLICK HERE FOR VOTE THROUGH ONLINE</h1>
                    <label style="color: cadetblue;"><h2>ENTER VOTER ID</h2> </label> <input type="text" name="vid">
                    <label style="color: cadetblue;"><h2>
                    </h2></label> <table><tr><td><p> <img src="congress.jpg"></p> CONGRESS</td><td><input type="radio" id="r1" name="vparty" value=1></td><tr>
                    <tr><td><p> <img src="bjp.jpg"></p> BJP</td><td><input type="radio" id="r2" name="vparty" VALUE=2></td></tr></table>
                    <button type="submit" name="submit" onclick="val()">CLICK ME TO VOTE</button></center>
                </form>
            </div>
            </p>
            <script>
                function val(){
                    var p1=document.getElementById("r1");
                    var p2=document.getElementById("r2");
                    if(p1.checked==false)
                      return 2;
                    if(p2.checked==false)
                      return 1;
                    else
                      return ;
                }
            <?php
            if (isset($_POST['submit'])) {
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
                        echo "THANKS FOR VOTING...YOUR VOTE IS NOTED";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                } else {
                    header("Location: alreadyvoted.html");
                }
                $conn->close();
            }
        } else {
            header("Location: alreadyvoted.html");
        }
    } else {
        echo "INVALID VOTER ID";
    }
}
?>
    </body>
    </html>