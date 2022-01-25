<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator App</title>
</head>
<body>
    <h2>Addition : </h2>
    <form action="site.php" method="post">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit" value="ADD">
    </form>

    <?php 
    echo  $_POST["num1"] + $_POST["num2"];
    ?>

</body>
</html>