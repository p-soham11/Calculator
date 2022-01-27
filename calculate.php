<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator </title>
</head>
<body>
    <h2>Calculator :</h2>
    <form action="calculate.php" method="post">
        First Number : <input type="number" step="0.001" name="num1"><br><br>
        <!-- step is used to deal with decimals  -->

        <label> Select Operator </label>  
            <select name="op">
                <option value = "add"> + Addition</option>  
                <option value = "sub"> - Substraction</option>  
                <option value = "mult"> * Multiplication</option>  
                <option value = "div"> / Division</option>  
                <option value = "power"> ^ Power</option>
            </select>
        <br><br>
        Second Number : <input type="number" step="0.001" name="num2"><br><br>  
        <input type="submit" value="Calculate">
    </form>

    <br><br>
    <p>
    <?php 

        function power($num1, $num2){
            $val=1;
            for ($i=0; $i < $num2; $i++) { 
                $val = $val * $num1;
            }
            return $val;
        }

        $num1= $_POST["num1"];
        $num2= $_POST["num2"];
        $op = $_POST["op"];
        
        if($op=="div" &&  $num2 == 0)
            exit("Can't Divide by 0");

        switch($op){
            case "add":
                $res = $num1+$num2;
                break;
            case "sub":
                $res = $num1-$num2;
                break;
            case "mult":
                $res = $num1*$num2;
                break;
            case "div":
                $res = $num1/$num2;
                break;
            case "power":
                $res = power($num1, $num2);
                break;
            // default:
            //     echo "Something went wrong :/";
            //     exit();
        }
        echo "Result : $res";
    ?>
    </p>


</body>
</html>