<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<center>
    <table style="width:1200px">
        <tr>
            <td colspan="2">
                <?php include('Include/Header.html'); ?>
            </td>
        </tr>
        <tr>
            <td style="width:920px; vertical-align: top">
            <?php
       $img = $_FILES["Imag"]["name"];
        $rand = rand();
        $imgU = $rand.$img;
        $path = "Imag/".$imgU;
        move_uploaded_file($_FILES['Imag']['tmp_name'],$path);
        $indate = date('Y/m/d H:m:s');

        include('Include/DBCon.php');
 
        $queryAdd = 'Insert into tbldata (ProName, CatId, Description, imgUrl, desUrl, DateIn) Values("'.$_POST["txtProName"].'", "'.$_POST["CategoryName"].'", "'.$_POST["des"].'", "'. $path .'","'.$_POST["txtDesLink"].'", "'. $indate .'")';
        //Check From Here  
        if (mysqli_query($dbcon, $queryAdd)) {
          echo '"<h1>"The Post Summary !!!"</h1>"';
          echo 'New record created successfully!'; 

          $qTop ='Select * from tbldata Order By DateIn DESC Limit 1';
          $rTop =$dbcon->query($qTop);
          if($rTop->num_rows > 0)
          while($row = $rTop->fetch_assoc())
            {
                echo'<br> Posted ID:'.$row["id"];
                echo'<br> Posted Name:'.$row["ProName"];
                echo'<br> Posted Category:'.$row["CatId"];
                echo'<br> Posted Description:'.$row["Description"];
                echo'<br> Posted URL:'.$row["desUrl"];
                echo'<br> Posted Image:<br> <img src="'.$row["imgUrl"].'"/><br>';
            }
            else echo"0 results";
            
        } 
        else 
          echo "Error: " . $queryAdd . "<br>" . mysqli_error($dbcon);
        echo 'Thank You!!!';
    $dbcon->close();
  ?>
          <b><b>
                <a href="AddNew.php"> Add More</a>
                <br><br>
            </td>
            <td style="width:650px">
                <?php include('Include/RSide.php') ?>
            </td>
        </tr>
        <tr>
            <td>CopyRight@2023, SAO LISA (NUM) IT30_45</td>
            <td style="text-align: center">
                <a href="">About_Us.php</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="Contact_Us.php">Contact_Us</a>
            </td>
        </tr>
    </table>
</center>
</body>
</html>