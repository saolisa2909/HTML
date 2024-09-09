<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact_Us Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: pink;">
</br>
  <center>
  <h1 style="text-align: center;";>Contact Us</h1>
    <table style="background-color: pink; width: 400px;">
      <tr>
        <td  colspan="2">
              <?php include('Include/query_contactUs.php'); ?>
        </td>
      </tr>
    </table>
  </center>
  <script>   
            alert("User recorded!!");           
       </script>
</br>
<center>
      <button style="background-color: yellow; border-width: 2px; padding: 20px;"> <a href="Home.php"> Back To HomePage </a></button>
</center>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>