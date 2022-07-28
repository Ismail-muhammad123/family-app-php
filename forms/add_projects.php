<html>
<head>
    <title>Add Projects</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>


<?php 

    
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $family_id = $_POST['id'];
    $title = $_POST['title'];
    $budget = $_POST['budget'];
    $location = $_POST['location'];
    $duration = $_POST['duration'];


    $username = "username";
    $password = "password2";
    $servername = "localhost";
    $dbname = "family app";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error){
        die("Connection Error: " > $connection->connect_error);
    } 

    $sql = "INSERT INTO projects (family_id, title, budget, location, duration)
    VALUES (".$family_id.",'".$title."','".$budget."','".$location."','".$duration."')";
    $result = $connection->query($sql);

    if ($result === TRUE){
        header('Location: /family-app');
    } else {
        echo "<div class='text-danger'><h4> Error". $connection->connect_error ."</h4></div>";
    }
    $connection->close();
} 

?>

    <center>
        <h2 class="p-3 bg-success">
            Welcome to the Project Registration Page, Where you register your projects        
        </h2>
        <form action="" class="card p-3" method="post">
            <div class="row">
                <div class="col-6">

                    <label for="id">Family ID:</label>
                </div>
                <div class="col-6">

                    <input type="number" id="id" name="id">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">

                    <label for="title">Project Name:</label>
                </div>
                <div class="col-6">

                    <input type="text" id="title" name="title">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">

                    <label for="location">Location</label>
                </div>
                <div class="col-6">

                    <input type="text" name="location" id="location">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">

                    <label for="budget">Budget</label>
                </div>
                <div class="col-6">
                    <input type="number" name="budget" id="budget">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">

                    <label for="duration">Duration</label>
                </div>
                <div class="col-6">

                    <input type="text" name="duration" id="duration">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-3">

                    <input type="submit" value="Register project" class="btn btn-secondary">
                </div>
                <div class="col-3">
                    <a href="/index.php" class="btn btn-dangerous">Cancel</a>

                </div>
                <div class="col-3"></div>
            </div>
        </form>
    </center>
</section>
</html>