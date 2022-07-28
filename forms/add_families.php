<html>
<head>
    <title>Families</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>


<div class="container">
<section>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $location = $_POST['address'];


        $username = "username";
        $password = "password2";
        $servername = "localhost";
        $dbname = "family app";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error){
            die("Connection Error: " > $connection->connect_error);
        } 

        $sql = "INSERT INTO families (name, location)
        VALUES ('".$name."','".$location."')";
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
        <h2 class="p-3 bg-success">
            Welcome to the Family Registration Page, Where you register your family
        </h2>
        <div class="card p-3">
        <form action="" class="teax-center" method="post">
            <div class="row">
                <div class="col-4">

                    <label for="name">Family Name</label>
                </div>
                <div class="col-8">

                    <input type="text" id="name" name="name">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">

                    <label for="address">Family Address</label>
                </div>
                <div class="col-8">

                    <input type="text" name="address" id="address">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-2">

                    <input type="submit" value="Register Expense" class="btn btn-secondary">
                </div>
                <div class="col-2">

                    <a href="./index.php" class="btn btn-dangerous">Cancel</a>
                </div>
                <div class="col-3"></div>
            </div>
        </form>
        </div>
        </center>

    
</section>
</div>
</body>
</html>