<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<center>
    <table style="width:1500px">
        <tr>
            <td colspan="2">
                <?php include('Include/Header.html'); ?>
            </td>
        </tr>
        <tr>
            <td style="width:920px; vertical-align: top">
                <form name="frmAddNew" action="AddNewDetail.php" method="post" enctype="multipart/form-data">
                <table style="width:920px; font-size:20pt">
                    <tr>
                        <td colspan="2" style="padding: 5px">
                            <h2> Add New Information </h2>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width:220px; padding: 5px">Product Id :</td>
                        <td style="width:700px; padding: 5px">
                            <input type="text" name="txtId" style="width:650px;  font-size:20pt">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Product Name :</td>
                        <td style="padding: 5px"><input type="text" name="txtProName" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Product Type :</td>
                        <td style="padding: 5px">
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
                        <td style="padding: 5px"><textarea rows="8" style="width:650px;  font-size:20pt" name="des">
                            </textarea></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Destination Link :</td>
                        <td style="padding: 5px"><input type="text" name="txtDesLink" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Choose Image :</td>
                        <td style="padding: 5px"><input type="file" name="Imag" style="font-size:20pt"></td>
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
            <td style="width:350px">
                <?php include('Include/RSide.php') ?>
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