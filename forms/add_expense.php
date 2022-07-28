<html>
<head>
    <title>Expenses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    

<section class="container">

<?php 

    
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $family_id = $_POST['id'];
    $amount = $_POST['expense'];
    $date = $_POST['date'];


    $username = "username";
    $password = "password2";
    $servername = "localhost";
    $dbname = "family app";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error){
        die("Connection Error: " > $connection->connect_error);
    } 

    $sql = "INSERT INTO expenses (family_id, amount, date)
    VALUES (".$family_id.",".$amount.",'".$date."')";
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
            Welcome to the Family Expenses Page, where we view family expenses
        </h2>
        <form class="card p-3" action="" method="post">
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
                    <label for="expense">Expenses</label>
                </div>
                <div class="col-6">
                    <input type="number" name="expense" id="expense">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <label for="date">Date:</label>
                </div>
                <div class="col-6">
                    <input type="date" name="date" id="date">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-3">
                    <input type="submit" value="Register Expense" class="btn btn-secondary">
                </div>
                <div class="col-3">
                    <a href="./expenses.php" class="btn btn-dangerous">Cancel</a>
                </div>
                <div class="col-3"></div>
            </div>
        </form>
    </center>
</section>
</body>
</html>