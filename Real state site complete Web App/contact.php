<?php
    $name = $email = $subject = $message = "";
    $nameErr = $emailErr = $subjectErr = $messageErr = "";
    $success = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact'])) {
        if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z-' ]*$/", $_POST["name"])) {
            $nameErr = "Valid name is required.";
        } else {
            $name = clean_input($_POST["name"]);
        }

        if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Valid email is required.";
        } else {
            $email = clean_input($_POST["email"]);
        }

        if (empty($_POST["subject"])) {
            $subjectErr = "Subject is required.";
        } else {
            $subject = clean_input($_POST["subject"]);
        }

        if (empty($_POST["message"])) {
            $messageErr = "Message is required.";
        } else {
            $message = clean_input($_POST["message"]);
        }

        if (empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($messageErr)) {
            // echo "Validation successful!<br>";
            // echo "Name: $name<br>";
            // echo "Email: $email<br>";
            // echo "Subject: $subject<br>";
            // echo "Message: $message<br>";
            include 'backend/conn.php';
            $query = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
            if(mysqli_query($conn,$query)){
               header('location: contact.php?success=1');
            }
        }
    }

    function clean_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link the CSS HERE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- link the Font CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <title>Contact US</title>

</head>
<body>
<?php include 'assets/components/top.php'?>
<?php include 'assets/components/nav.php'?>
    <div class="contact-us-body">
        <div class="contact-header">
            <img src="assets/img/contact bg.png" alt="Background Image" class="background-img">
            <div class="contact-title">
                <h1>Contact <span class="text-highlight">Us</span></h1>
            </div>
        </div>
        
        <div class="contact-us-content">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="ps-3">Send a <span class="text-highlight">Message</span></h2>
                    <!-- form  -->
                    <form method="POST" action="">
                      <?php 
                        if(isset($_GET['success'])){
                          echo  "<div class='alert alert-success d-flex justify-content-between align-item-center'>The message send successfully.Thank you for contact! <a href='contact.php' style='all:unset;cursor:pointer;'>X</a></div>";
                        }
                      ?>
                      <div class=" d-flex mt-4">
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control unique-input p-4" name="name" placeholder="Your Name" >
                            <span class="text-danger"><?php echo $nameErr ?></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="email" class="form-control unique-input p-4" name="email" placeholder="Your Email" >
                            <span class="text-danger"><?php echo $emailErr ?></span>
                        </div>
                      </div>

                        <div class="mb-4 col-md-12">
                            <input type="text" class="form-control unique-input p-4" name="subject" placeholder="Your Subject" >
                            <span class="text-danger"><?php echo $subjectErr ?></span>
                        </div>
                        <div class="my-3 col-md-12">
                            <textarea class="form-control unique-textarea p-3" rows="5" name="message" placeholder="Message" ></textarea>
                            <span class="text-danger"><?php echo $messageErr ?></span>
                        </div>
                        <button type="submit" name="contact" class="btn unique-btn ms-3">Submit</button>
                    </form>
                </div>
                <div class="col-md-5">
                    <h2>Head <span class="text-highlight">Office</span></h2>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345094285!2d144.95373631531696!3d-37.81627967975143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f1c89e3f%3A0x5045675218ce7e0!2sVictoria%2C%20Australia!5e0!3m2!1sen!2sus!4v1633346905507!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php  include 'assets/components/footer.php'?>


    <!-- Copyright -->
    <div class="bg-dark text-center text-white py-3">
        <p class="mb-0">Copyright &copy;2024 All right reserved</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
