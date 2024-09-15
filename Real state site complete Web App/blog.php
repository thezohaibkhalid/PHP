<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- link the CSS HERE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <!-- link the Font CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">

    <title>Blog</title>
</head>

<body>

<?php include 'assets/components/top.php'?>
    <?php include 'assets/components/nav.php'?>
    <!-- Featured Blogs Section -->
    <div class="container my-5">
        <h2 class="text-center mb-5">Featured Blogs</h2>
        <div id="featuredBlogsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                include 'backend/conn.php';
                $query = "SELECT * FROM `blogs` limit 3";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="carousel-item active">
                            <img src="' . $row['img'] . '" class="d-block w-100" alt="..." loading="lazy">
                            <div class="carousel-caption cc d-block d-md-block text-start">
                                <h5>' . $row['title'] . '</h5>
                                <p>' . $row['description'] . '</p>
                            </div>
                        </div>';
                }
                mysqli_close($conn);
                ?>

            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#featuredBlogsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#featuredBlogsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>

    <!-- All Blogs Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">All Blogs</h2>
        <div class="row">
            <?php
            include 'backend/conn.php';
            $query = "SELECT * FROM `blogs` limit 0 , " . ($_GET['page'] +12);
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-lg-4 col-md-6 mb-4">
                <div class="card bc">
                    <div class="card-img-overlay d-flex align-items-end p-0">
                        <div class="overlay-content w-100  ps-2">
                            <h5 class="text-white mb-0">' . $row['title'] . '</h5>
                            <p class="text-white">' . $row['description'] . '</p>
                        </div>
                    </div>
                    <img src="' . $row['img'] . '" class="card-img-top ci" alt="...">
                    <div class="card-body d-none">
                    </div>
                </div>
            </div>';
            }
            mysqli_close($conn);
            ?>

            <!-- Repeat the above col block for more blogs -->
        </div>

        <div class="text-center my-4">
            <form action="" method="get">
                <?php
                $page = '';
                if (isset($_GET['page']) && $_GET['page'] >= 0) {
                    $page = $_GET['page'] + 12;
                } else {
                    $page = 12;
                }
                ?>
                <input type="hidden" name="page" value="<?php echo $page; ?>" />
                <input type="submit" class="btn blog-viewmore" value="View More" />
            </form>
        </div>
    </div>
    <!-- Footer -->
    <?php  include 'assets/components/footer.php'?>

    <!-- Copyright -->
    <div class="bg-dark text-center text-white py-3">
        <p class="mb-0">Copyright &copy;2024 All right reserved</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>