<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table style="width:1200px">
        <tr>
            <td colspan="2">
                <?php include('Include/Header.html'); ?>
            </td>
        </tr>
        <tr>
            <td style="width:920px; vertical-align: top">
                <hr>
                <h2 style="color: Purple;">Places to Visit</h2>
                <?php include('Include/hquery_PlaceToVisit.php'); ?>
                <hr>
                <h2 style="color: Pink;">HotelType</h2>
                <?php include('Include/hquery_HotelType.php'); ?>
                <hr>
                <h2 style="color: Green;">Transportation</h2>
                <?php include('Include/hquery_BuskTicket.php'); ?>
                <hr>
                <h2 style="color: Blue;">TourType</h2>
                <?php include('Include/hquery_TourType.php'); ?>
                <hr>
            </td>
            <td style="width:650px vertical-align: top">
                <?php include('Include/RSide.php') ?>
            </td>
        </tr>
        <tr>
            <td>CopyRight@2023, SAO LISA (NUM) IT30_45</td>
            <td style="text-align: center">
                <a href="About_Us.php">About_Us</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="Contact_Us.php">Contact_Us</a>
            </td>
        </tr>
    </table>
</body>
</html>