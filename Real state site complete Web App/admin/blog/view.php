<!doctype html>
<html lang="en">

<head>
    <?php include '../components/head.php' ?>
    <title>Admin | Blogs</title>
</head>

<body>
    <?php include '../components/nav.php' ?>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        include '../backend/conn.php';
        $sql = "SELECT * FROM `blogs` WHERE `id` = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    } else {
        header('location: ../property/property.php');
    }

    ?>
    <section class="contact-section">
        <div class="top">
            <i class="fa-solid fa-bars menu-btn"></i>
            <div class="right">
                <img src="../images/logo.png">
            </div>
        </div>
        <div class="contact">
            <div class="page-heading">
                <div class="left">
                    <i class="fa-solid fa-blog"></i>
                    Blog
                </div>
            </div>
            <div class="view">
                <img src="<?php echo $row['img']?>">
                <h2><?php echo $row['title']?></h2>
                <p>
                    <?php echo $row['description']?>
                </p>
            </div>
        </div>
    </section>

    <?php include '../components/script.php' ?>
</body>

</html>