<!doctype html>
<html lang="en">

<head>
    <?php include '../components/head.php'?>
    <title>Admin | Contacts</title>
</head>

<body>
    <?php include '../components/nav.php'?>
    <section class="contact-section">
        <div class="top">
            <i class="fa-solid fa-bars menu-btn"></i>
            <div class="right">
                <img src="../Images/profile.jpg">
            </div>
        </div>
        <div class="contact">
            <div class="page-heading">
                <div class="left">
                    <i class="fa-solid fa-blog"></i>
                    Sender Message
                </div>
            </div>
            <div class="view">
            <?php 
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    include '../backend/conn.php';
                    $sql = "SELECT * FROM `contact` WHERE `id` = $id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                }else {
                    header('location: ../property/property.php');
                }

                ?>
                <table class="table">
                    <tr>
                        <th>Sender</th>
                        <th><?php echo $row['name']?></th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th><?php echo $row['email']?></th>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <th><?php echo $row['subject']?></th>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <th><?php echo $row['message']?></th>
                    </tr>
                    <tr>
                        <th>Action</th>
                        <th>
                            <a href="../backend/backend.php?read=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Mark As Read</a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <?php include '../components/script.php'?>
</body>

</html>