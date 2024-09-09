<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  include ('DBCon.php');
  $qw = 'SELECT * FROM tbldata where CatId=1 Order By DateIn DESC Limit 3';
  $rw = $dbcon->query($qw);

  if ($rw->num_rows > 0)
  // output data of each row
  {
    echo '<table width="900px" cellpadding="5px" cellspacing="5px">';
      echo '<tr>';
      while($row = $rw->fetch_assoc())
    {    
        echo '<td width="300px" style="vertical-align: middle; text-align: center">';
        echo '<h3>'. $row["ProName"] . '</h3>';
        echo '<p>'.$row["Description"].'</p>';
        echo '<a href="'.$row["desUrl"].'">';
        echo '<img src="'. $row["imgUrl"] .'" width="280px" />
        </td>';
    }
       echo '</tr>';
    echo '</table>';
  }
  else 
      echo '0 results';
  $dbcon->close();  
?>
</body>
</html>