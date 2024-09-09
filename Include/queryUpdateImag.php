<?php
        $img = $_FILES["imgUpdate"]["name"];
        $rand = rand();
        $imgU = $rand.$img;
        $path = "Imag/".$imgU;
        $path1 = "../Imag/".$imgU;
        move_uploaded_file($_FILES['imgUpdate']['tmp_name'], $path1);

           include('dbcon.php');
            $sfId = $_POST["txtId"];
            $queryUpdate = 'Update tbldata SET 
            imgUrl = "'.$path. '"WHERE id="'.$sfId.'"';

            if (mysqli_query($dbcon, $queryUpdate)) {
                $dbcon->close();
                header("location:../EditPro.php");
            } 
            else 
                echo "Error: " . $queryUpdate . "<br>" . mysqli_error($dbcon);

            echo '<br/><br> Thank You!!!';
    $dbcon->close();
  ?>