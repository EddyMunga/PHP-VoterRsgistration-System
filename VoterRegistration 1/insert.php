<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => voterregistration
        $conn = mysqli_connect("localhost", "root", "", "voterregistration");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $username =  $_REQUEST['username'];
        $Idnumber = $_REQUEST['Idnumber'];
        $Idserialnumber =  $_REQUEST['Idserialnumber'];
        $county = $_REQUEST['county'];
        $constituency = $_REQUEST['constituency'];
        $ward= $_REQUEST['ward'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO voterscard  VALUES ('$username',
            '$Idnumber','$Idserialnumber','$county','$constituency'.'$ward')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$username\n $Idnumber\n "
                . "$Idserialnumber\n $county\n $email\n $ward");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>