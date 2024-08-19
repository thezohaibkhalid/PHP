<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Input Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">User Information Form</h2>
        <form action = "index.php" method = "post">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Enter your full name" required>
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select" id="gender" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="bio" class="form-label">Brief Bio</label>
                <textarea name="bio" class="form-control" id="bio" rows="3" placeholder="Tell us something about yourself"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>

    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>


<?php
// if(isset($_POST['name'])){
$severname = "localhost";
$username  = "root";
$password = "";
$database  = "zohaib";
$con = mysqli_connect($severname, $username, $password, $database);
if(!$con){
    die("Database is not working, " . mysqli_connect_error());
}else{
    // echo "it is working fine";
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$bio = $_POST['bio'];
$sql = "INSERT INTO `input` (`name`, `email`, `password`, `gender`, `bio`) VALUES ('$name', '$email', '$password', '$gender', '$bio')";

if($con->query($sql) == true){
    echo "Successfully Inserted";
}else{
    echo "$sql <br> $con->error";
}

$con->close();
// }   
?>



