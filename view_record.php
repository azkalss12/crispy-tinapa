<!doctype>
<html>
    <head>
        <title>VIEW RECORD</title>
    </head>
    <body bgcolor="#e3a7c0">
        <h1><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
</svg></a>VIEW CONTACT</h1>
        <table border="2">
            <label>RECORD</label>
            <tr>
                <td>NAME</td>
                <td>PRESIDENT</td>
                <td>VICE PRESIDENT</td>
            </tr>
            <?php
                $con = mysqli_connect("localhost","root","","dbsurvey"); 
                $query1 = "SELECT * FROM survey ORDER BY name";
                $res1 = mysqli_query($con, $query1);
                if(mysqli_num_rows($res1)==0){  
                    echo "<tr><td colspan=3>No record found...</td></tr>"; 
                }    
                while($row1 = mysqli_fetch_array($res1)){
                    $id=$row1["id"];
                    $name=$row1["name"]; 
                    $president=$row1["president"];
                    $vpresident=$row1["vpresident"];
                    echo "<tr>
                        <td>$name</td>
                        <td>$president</td>
                        <td>$vpresident</td>
                            </tr>";
                }
                ?>
        </table>
    </body>
</html>