<?php
  include ('DBCon.php');
  $qw = 'SELECT * FROM tbldata where id=1 Order By DateIn DESC';
  $rw = $dbcon->query($qw);

  if ($rw->num_rows > 0)
  // output data of each row
  {
    echo '<table width="900px" cellpadding="5px" cellspacing="5px">';
    while($row = $rw->fetch_assoc())
    {    
        echo '<tr>';
        echo '<td width="900px" style="vertical-align: middle; text-align: center">';
        echo '<a href="'.$row["desUrl"].'">';
        echo '<h3>'. $row["ProName"] . '</h3>';
        echo '<img src="'. $row["imgUrl"] .'" width="500px" /></a>';
        echo '<p>'.$row["Description"].'</p>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
  }
  else 
      echo '0 results';
  $dbcon->close();  
?>