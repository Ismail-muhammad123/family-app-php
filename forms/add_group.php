<html>
<head>
    <title>Family Groups</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    



<section class="container">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $family_id = $_POST['number'];
    $name = $_POST['name'];


    $username = "username";
    $password = "password2";
    $servername = "localhost";
    $dbname = "family app";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error){
        die("Connection Error: " > $connection->connect_error);
    } 

    $sql = "INSERT INTO family_group (name, family_id)
    VALUES ('".$name."',".$family_id.")";
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
        Welcome to the Family Group Page, Where you register your groups
        </h2>
        <form action="" class="card p-3" method="post">
            <div class="row">
                <div class="col-6">
                    <label for="name">Group Name:</label>
                </div>
                <div class="col-6">
                    <input type="name" id="name" name="name">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">

                    <label for="number">Member Family ID:</label>
                </div>
                <div class="col-6">

                    <input type="number" name="number" id="number">            
                </div>
            </div>
<br>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-3">

                    <input type="submit" value="Register Group" class="btn btn-secondary">
                </div>
                <div class="col-3">

                    <a href="./family-groups.php" class="btn btn-dangerous">Cancel</a>
                </div>
                <div class="col-3"></div>
            </div>
        </form>
    </center>
</section>
</body>
</html>