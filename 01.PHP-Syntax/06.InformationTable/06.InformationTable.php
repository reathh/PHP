<!DOCTYPE html>
<html>
<head>
    <title>Generate table</title>
    <link rel="stylesheet" href="06.InformationTable.css"/>
</head>
<body>
<form action="">
    <div>Name: <input type="text" name="name" required /></div>
    <div>Telephone Number: <input type="text" name="number" required /></div>
    <div>Age: <input type="text" name="age" required /></div>
    <div>Address: <input type="text" name="address" required /></div>
    <input type="submit">
</form>
<?php
if (isset($_GET["name"]) && $_GET["name"] != "") {
?>
<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo $_GET["name"] ?></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><?php echo $_GET["number"]?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><?php echo $_GET["age"]?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $_GET["address"]?></td>
    </tr>
</table>
<?php } ?>
</body>
</html>