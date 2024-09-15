<!doctype html>
<html lang="en">

<head>
    <?php include '../components/head.php' ?>
    <title>Admin | Blogs</title>
</head>

<body>
    <?php include '../components/nav.php' ?>
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
            <form id="insert" method="POST" action="../backend/backend.php" enctype="multipart/form-data">
                <h2>
                    <i class="fa-solid fa-blog"></i>
                    Upload New Blog
                </h2>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="photo" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4"
                        placeholder="Enter description" required></textarea>
                </div>

                <button type="submit" name="bsubmit" class="btn btn-primary">Submit</button>
            </form>

            <div class="activity">
                <div>
                    <h1 class="table-heading"><i class="fa-solid fa-list-ul"></i>Uploaded Blogs</h1>
                </div>
                <?php 
                    if (isset($_GET['status'])) {
                        if ($_GET['status'] == 1) {
                            echo "<div class='alert alert-success d-flex align-items-center justify-content-between'>" . $_GET['info'] . "<i class='fa-solid fa-x alert-close' style='cursor: pointer;'></i></div>";
                        } else {
                            echo "<div class='alert alert-danger d-flex align-items-center justify-content-between'>" . $_GET['info'] . "<i class='fa-solid fa-x alert-close' style='cursor: pointer;'></i></div>";
                        }
                    }
                
                ?>
                <table class="table table-striped table-hover border">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Upload Time</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../backend/conn.php';
                        $sql = "SELECT * FROM `blogs`";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                <th scope="row" class="td-row"></th>
                                <td><img src="'.$row['img'].'" width="100" height="100" style="object-fit: cover;"></td>
                                <td>'.$row['title'].'</td>
                                <td class="msg">'.$row['description'].'</td>
                                <td>'.$row['timestamp'].'</td>
                                <td class="action">
                                    <a href="../blog/view.php?id='.$row['id'].'" class="btn btn-primary btn-sm">View</a>
                                    <a href="../blog/update.php?id='.$row['id'].'" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="../backend/backend.php?action=blogs&id='.$row['id'].'" class="btn btn-danger btn-sm">Del</a>
                                </td>
                            </tr>';
                            }
                        }else {
                            echo '<tr>No Blog Upload Yet!</tr>';
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <?php include '../components/script.php' ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        // Select all elements with the class 'td-row'
        let td = document.querySelectorAll('.td-row');
    
        // Loop through each selected element
        for (let i = 0; i < td.length; i++) {
            // Set the inner HTML of each element to its index + 1
            td[i].innerHTML = i + 1;
        }
    });
    </script>
</body>

</html>