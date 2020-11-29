<?php
$con = mysqli_connect("localhost", "root", "root", "movie_SN");
if(mysqli_connect_errno()){
    echo "Fail to connect: " . mysqli_connect_errno();
}

$query = mysqli_query($con, "INSERT INTO test VALUES(NULL, 'Christopher')");
?>

<html>
<head>
    <title>MOVIE TECHNICS FEEDS</title>
</head>
<body>
<?php echo '<p>Welcome dear friends</p>'; ?>
</body>
</html>