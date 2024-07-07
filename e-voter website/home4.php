<!DOCTYPE html>
<html>
<head>
    <title>Party Count</title>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "voter");
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $sql = "SELECT COUNT(*) as count FROM voter.voterresult WHERE vparty = '2'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $countBJP = $row['count'];
    
    $sql = "SELECT COUNT(*) as count FROM voter.voterresult WHERE vparty ='1'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $countCongress = $row['count'];
    
    mysqli_close($con);
    ?>
    
    <h1 style="color:blue">BJP</h1>
    <h2 style="color:green"><?php echo $countBJP ?></h2>
    
    <h1 style="color:blue">Congress</h1>
    <h2 style="color:green"><?php echo $countCongress ?></h2>
</body>
</html>