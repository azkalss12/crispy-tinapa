<html>
    <head>

    </head>
    <body>
    <!doctype>
    <html>
        <head>
            <title>Welcome</title>
        </head>

        <body bgcolor="#e3a7c0">
            <center>
            <h1><a href="index.php"<span>&#8592;</a></span>&nbsp;&nbsp;&nbsp;THANK YOU FOR COMPLETING THE SURVEY!!!</h1>
            <IMG SRC="thank.gif">
            </center>
            <hr>
    </body>
</html>


<?php
    if(!isset($_POST["submit"]))header("Location:#");

    $name=$_POST["txtname"];
    $president=$_POST["txtpresident"];
    $vpresident=$_POST["txtvpresident"];

    $con1 = mysqli_connect("localhost","root", "", "dbsurvey");  
    $query1 = "INSERT INTO survey (name, president, vpresident) VALUES('$name','$president','$vpresident')"; 
    $name=password_hash($_POST['txtname'], PASSWORD_DEFAULT); 
    $res1 = mysqli_query($con1, $query1); 

    echo "SURVEY SUCCESSFULLY ADDEDD...<br>";  
    echo "NAME: $name<br>";  
    echo "PRESIDENT: $president<br>";
    echo "VICE PRESIDENTL: $vpresident<br>";

?>
<!doctype>


