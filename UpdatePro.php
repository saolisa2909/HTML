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
               <form name="frmUpdate" action="Include/queryUpdatePro.php" method="post" enctype="multipart/form-data">
                <table style="width:1000px; font-size:20pt">
                    <tr>
                        <td colspan="2" style="padding: 10px">
                            <h2> Updating New Information </h2>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width:220px;padding: 5px">
                        <td style="width:700px;padding: 5px"><input type="text" name="txtId" hidden="true"  style="width:650px;  font-size:20pt" value=<?php echo $row["id"]; ?> ></td>
                    </tr>
                    <tr>
                        <td style="width:220px;padding: 5px">Product Name :</td>
                        <td style="width:700px;padding: 5px"><input type="text" name="txtProName" value=<?php echo $row["ProName"]; ?> style="width:650px;  font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 7px">CategoryName :</td>
                        <td style="padding: 7px">
                          <?php
                            include('Include/TourTypeSquery.php');
                            if ($rft->num_rows > 0)
                            {
                                echo '<select name="CategoryName" style="width: 150px">';
                                while($roft = $rft->fetch_assoc())
                                echo ('"<option value="'.$roft["CatId"].'">'.$roft["CatName"].'</option>"');
                                echo '</select>';
                            }
                            else 
                                echo "0 results";
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px">Description :</td>
                                <td style="padding: 5px"><textarea rows="8" name="des" style="width:650px;  font-size:20pt"> <?php echo $row["Description"]; ?> 
                                    </textarea></td>
                            </tr>
                            <tr>
                                <td style="padding: 5px">Destination Link :</td>
                                <td style="padding: 5px"><input type="text" name="txtDesLink" value=<?php echo $row["desUrl"]; ?> style="width:650px;  font-size:20pt"></td>
                            </tr>
                            
                            
                            <tr>
                                <td style="padding: 5px"></td>
                                <td style="padding: 5px">
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="Submit" name="cmdSubmint" value="Submit">
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