<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

        <title>BMI calc</title>
    </head>
    <body>
        <h1><center>Calculate your BMI!</center></h1>
        <form name="bmi" method="POST" action="index.php">
            <div class="mb-3">
                <label for="mass" class="form-label">Enter your mass!</label>
                <input type="text" class="form-control" name="mass" value="<?php echo isset($_POST['mass']) ? $_POST['mass'] : '' ?>">
            <div class="mb-3">
                <label for="height" class="form-label">Enter your height!</label>
                <input type="text" class="form-control" name="height" value="<?php echo isset($_POST['height']) ? $_POST['height'] : '' ?>">
            </div>
            <input name="submit" type="submit" value="submit"></input>

        </form>
        <?php
            function bmi($mass, $height) {
                $bmi = $mass / ($height * $height);
                return $bmi;
            } 
            if(empty($_POST['mass']) && empty($_POST['height'])){
                # If the fields are empty, display a message to the user
                echo " <br/> Please fill in the fields";
                # Process the form data if the input fields are not empty
            } else {
                if (isset($_POST['submit'])) {
                    $mass = $_POST['mass'];
                    $height = $_POST['height'];
                    $bmi = bmi($mass, $height);
                    echo ('your bmi is: '.number_format((float)$bmi, 2, '.', '')) ;
                }
            }   
        ?>
    </body>
</html>
