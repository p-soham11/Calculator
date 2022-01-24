<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator App</title>
</head>
<body>
    <h2>Addition : </h2>
    <form action="site.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit" value="ADD">
    </form>

    <?php 
    echo  $_GET["num1"] + $_GET["num2"];
    ?>

</body>
</html>