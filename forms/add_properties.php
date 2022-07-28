<html>
<head>
    <title>Properties</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>


<section class="container">


<?php 

    
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $family_id = $_POST['id'];
    $name = $_POST['name'];
    $cost = $_POST['cost'];
    $location = $_POST['address'];


    $username = "username";
    $password = "password2";
    $servername = "localhost";
    $dbname = "family app";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error){
        die("Connection Error: " > $connection->connect_error);
    } 

    $sql = "INSERT INTO properties (family_id, name, cost, location)
    VALUES (".$family_id.",'".$name."',".$cost.",'".$location."')";
    $result = $connection->query($sql);

    if ($result === TRUE){
        header('Location: /family-app');
    } else {
        echo "<div class='text-dengerous'><h4> Error". $connection->connect_error ."</h4></div>";
    }
    $connection->close();
} 

?>

        <center>
            <h2 class="p-3 bg-success" >
                Welcome to the Property Page, where Family Properties are registered 
            </h2>
            <form action="#" method="post" class="card p-3">
                <div class="row">
                    <div class="col-6">

                        <label for="id">Family ID:</label>
                    </div>
                    <div class="col-6">

                        <input type="id" id="id" name="id">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">

                        <label for="name">Property Name</label>
                    </div>
                    <div class="col-6">

                        <input type="text" name="name" id="name">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <label for="address">Property Address</label>

                    </div>
                    <div class="col-6">

                        <input type="text" name="address" id="address">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">

                        <label for="cost">Property Cost</label>
                    </div>
                    <div class="col-6">

                        <input type="text" name="cost" id="cost">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">

                        <input type="submit" value="Register Properties" class="btn btn-secondary">
                    </div>
                    <div class="col-3">

                        <a href="./properties.php" class="btn btn-dangerous">Cancel</a>
                    </div>
                    <div class="col-3"></div>
                </div>
            </form>
        </center>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
</body>
</html>