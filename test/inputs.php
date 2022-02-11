<!DOCTYPE html>
<html>
<head>
    <title>Multiple Values</title>
</head>
<body>
    <div class="container">
        <div class="main">
        <h2>CheckBox Function (Multiple Values) : </h2>
        <form action="index.php" method="post">
            <label class="heading"><h3>Select Your Technical Exposure:</h3></label>
            <input type="checkbox" name="check_list[]" value="C/C++">C/C++</input><br>
            <input type="checkbox" name="check_list[]" value="Java">Java</input><br>
            <input type="checkbox" name="check_list[]" value="PHP">PHP</input><br>
            <input type="checkbox" name="check_list[]" value="HTML/CSS">HTML/CSS</input><br>
            <input type="checkbox" name="check_list[]" value="UNIX/LINUX">UNIX/LINUX</input><br>
            <br>
            <input type="submit" name="submit" value="Submit"/>
        
            <p>
            <?php
                if(isset($_POST['submit']))
                {
                    if(!empty($_POST['check_list'])) 
                    {
                        // Counting number of checked checkboxes.
                        $checked_count = count($_POST['check_list']);
                        echo "You have selected following ".$checked_count." option(s): <br/>";
                        // Loop to store and display values of individual checked checkbox.
                        foreach($_POST['check_list'] as $selected) 
                        {
                            echo "<p>".$selected ."</p>";
                        }
                    }
                    else
                    {
                        echo "<b>Please Select Atleast One Option.</b>";
                    }
                }
            ?>
            </p>
        </form>
        </div>
        <br>
    </div>
</body>
</html>