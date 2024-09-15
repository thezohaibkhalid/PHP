<!doctype html>
<html lang="en">

<head>
    <?php include '../components/head.php'?>
    <title>Admin | Blogs</title>
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
                    Blogs
                </div>
            </div>
            <?php 
                include '../backend/conn.php';
                if (isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM blogs WHERE `id` = $id";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result);
                }else {
                    header('location: ../property/property.php');
                }
            ?>
            <form id="insert" method="POST" action="../backend/backend.php" enctype="multipart/form-data">
                <h2>
                    <i class="fa-solid fa-blog"></i>
                    Update Blog
                </h2>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                  </div>
              
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title"  value="<?php echo $row['title']?>" placeholder="Enter title" required>
                </div>
              
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter description" required><?php echo $row['description']?></textarea>
                </div>

                <button type="submit" name="bupdate" class="btn btn-primary">Update</button>
              </form>
        </div>
    </section>

    <?php include '../components/script.php'?>
</body>

</html>