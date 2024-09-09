<?php
  include ('Include/DBCon.php');
  $qwAll = 'SELECT * FROM tbldata td INNER JOIN tblcategory tc ON td.CatId=tc.CatId ORDER BY DateIn ASC';
  $rwAll = $dbcon->query($qwAll);
  if ($rwAll-> num_rows > 0)
  // output data of each row
  {
    echo '<table width="100%" cellpadding="5px" cellspacing="5px">';
      echo '<tr style="border-color: cadetblue; border: medium">';
        echo '<b><th> Posted Id </th>';
        echo '<th> Posted Name </th>';
        echo '<th> Category </th>';
        echo '<th> Description </th>';
        echo '<th> Images </th>';
        echo '<th colspan="3"> Editing </th> </b>';
       echo '</tr>';
    while($row = $rwAll->fetch_assoc())
    {  
      echo '<tr style="border-bottom: medium #04D5EF solid; border-top: medium #04D5EF solid">';
        echo '<td style="vertical-align: top; padding:5px">'. $row["id"] .'</td> ';
        echo '<td style="vertical-align: top; padding:5px">'. $row["ProName"] .'</td> ';
        echo '<td style="vertical-align: top; padding:5px">'. $row["CatId"] .'</td> ';
        echo '<td style="vertical-align: top; padding:5px">'. $row["Description"] .'</td> ';        
        
        echo '<td style="vertical-align: top; padding:5px; text-align: center"> <img src="'. $row["imgUrl"] .'" width="150px" /></td> ';
        echo('<td style="text-align: center; vertical-align: top" > <a href="UpdatePro.php?fdId='.$row["id"] . '">Edit Info</a></td>');
        echo('<td style="text-align: center; vertical-align: top" > <a href="UpdateImag.php?fdId='.$row["id"] . '">Edit Image</a></td>');
        echo('<td style="text-align: center; vertical-align: top"> <a href="Include/wDelete.php?fdId='.$row["id"] . '">Delete</a></td>');
        echo '</tr>';
    }
    echo '</table>';
  }
  else 
      echo '0 results';

  $dbcon->close();  
?>