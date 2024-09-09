<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
       include('Include/DBCon.php'); 
        $sfId = $_GET["fdId"];
        $qwAll = 'SELECT * FROM tbldata WHERE id='.$sfId;
        $rwAll = $dbcon->query($qwAll);
        $row = $rwAll->fetch_assoc();
    ?>
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
            <td colspan="2" style="width:1200px; vertical-align: top">
               <form name="frmUpdate" action="Include/queryUpdateImag.php" method="post" enctype="multipart/form-data">
                <table style="width:920px; font-size:20pt">
                    <tr>
                        <td style="width:920px;padding: 5px">
                            <h3> Updating New Image </h3>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width:920px;padding: 5px"><input type="text" name="txtId" hidden="true"  style="width:650px;  font-size:20pt" value=<?php echo $row["id"]; ?> ></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">
                            <font size="+2">
                          <?php echo $row["ProName"]; ?> 
                            </font></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">
                            <img name="imgCur" src="<?php echo $row["imgUrl"]; ?>" /> 
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px"><input type="file" name="imgUpdate" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    
                    
                    <tr>
                        <td style="padding: 5px">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Submit" name="cmdSubmit" value="Submit">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Reset" name="cmdReset" value="Cancel"> 
                        </td>
                    </tr>
                </table>
                </form>
            </td>
        </tr>
        <tr>
            <td>CopyRight@2023, SAO LISA (NUM) IT30_45</td>
            <td style="text-align: center">
                <a href="aboutus.html">About_Us</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="contactus.html">Contact_Us</a>
            </td>
        </tr>
    </table>
</center>
</body>
</html>