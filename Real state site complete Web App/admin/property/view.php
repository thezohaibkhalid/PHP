<!doctype html>
<html lang="en">

<head>
    <?php include '../components/head.php'?>
    <title>Admin | Properties</title>
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
                    $sql = "SELECT * FROM `properties` WHERE `id` = $id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                }else {
                    header('location: ../property/property.php');
                }

                ?>
                <table class="table">
                    <tr>
                        <th>Image</th>
                        <th><img src="<?php echo $row['imgAddress']?>" style="width:50%;height:200px;object-fit:cover;"></th>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <th><?php echo $row['title']?></th>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <th><?php echo $row['title']?></th>
                    </tr>
                    <tr>
                        <th>Bedroom</th>
                        <th><?php echo $row['bedroom']?></th>
                    </tr>
                    <tr>
                        <th>Bathroom</th>
                        <th><?php echo $row['bathroom']?></th>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <th><?php echo $row['location']?></th>
                    </tr>
                    <tr>
                        <th>city</th>
                        <th><?php echo $row['city']?></th>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <th>Rs : <?php echo $row['price']?></th>
                    </tr>
                    <tr>
                        <th>Area</th>
                        <th><?php echo $row['area']?></th>
                    </tr>
                    <tr>
                        <th>catorage</th>
                        <th><span class="btn btn-primary btn-sm"><?php echo $row['category']?></span></th>
                    </tr>
                    <tr>
                        <th>Available</th>
                        <th><span class="btn btn-primary btn-sm"><?php if ($row['available']== 1) {echo 'Sold';}else {echo 'unsold';}    ?></span></th>
                    </tr>
                    <tr>
                        <th>Date Added</th>
                        <th><?php echo $row['upload_at']?></th>
                    </tr>
                    <tr>
                        <th>Action</th>
                        <th>
                            <a href="../property/update.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="../backend/backend.php?action=propertydel&id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">Del</a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </section>

   <?php include '../components/script.php' ?>
</body>

</html>