<?php
            include('DBCon.php');
            $sfId = $_POST["txtId"];
            $queryUpdate = 'Update tbldata SET 
            ProName = "'.$_POST["txtProName"].'", 
            CatId = "'.$_POST["CategoryName"].'", 
            Description = "'.$_POST["des"].'", 
            desUrl = "'.$_POST["txtDesLink"].'" 
            WHERE id="'.$sfId.'"';

            if (mysqli_query($dbcon, $queryUpdate)) {
                $dbcon->close();
                header("location:../EditPro.php");
            } 
            else 
                echo "Error: " . $queryUpdate . "<br>" . mysqli_error($dbcon);

        ?>