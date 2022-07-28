<html>
<head>
    <title>Family Members</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = "username";
    $password = "password2";
    $servername = "localhost";
    $dbname = "family app";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error){
        die("Connection Error: " > $connection->connect_error);
    } 

    $family_id = $_POST['id'];
    $name = $_POST['name'];
    $date_of_birth = $_POST['dob'];
    $address = $_POST['address'];
    $phone = $_POST['number'];


    $sql = "INSERT INTO members (name, family_id, date_of_birth, address, phone)
    VALUES ('".$name."',".$family_id.",'".$date_of_birth."','".$address."','".$phone."')";
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
        Welcome to the Family Member Registration Page, Where you register your family Members        </h2>
        <form action="#" class="card p-3"  method="post">
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

                    <label for="name">Member Name:</label>
                </div>
                <div class="col-6">

                    <input type="name" id="name" name="name">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">

                    <label for="address">Address</label>
                </div>
                <div class="col-6">

                    <input type="text" name="address" id="address">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">

                    <label for="number">Phone Number</label>
                </div>
                <div class="col-6">

                    <input type="tel" name="number" id="number">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">

                    <label for="dob">Date of Birth</label>
                </div>
                <div class="col-6">

                    <input type="text" name="dob" id="dob">
                </div>
            </div>
<br>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-3">

                    <input type="submit" value="Register Member" class="btn btn-secondary">
                </div>
                <div class="cl-3">

                    <a href="/index.php" class="btn btn-dangerous">Cancel</a>
                </div>
                <div class="col-3"></div>
            </div>
        </form>
    </center>
</section>
</html>