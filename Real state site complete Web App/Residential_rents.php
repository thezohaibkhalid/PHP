<?php 
    
    function formatNumberWithCommas($number)
    {
        // Ensure the number is an integer
        $number = (int) $number;
        if (!is_int($number) || $number < 0) {
            return 'Invalid number';
        }
    
        // Format the number with commas
        return number_format($number);
    }
    function data($city , $limit) {
        include 'backend/conn.php';
        $query = "SELECT * from `properties` WHERE `city` ='$city' AND `category` = 'residential_rent' LIMIT $limit ";
        $result = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card col-4 p-0 border-0 pfr mb-5">
            <img src="' . substr($row['imgAddress'] , 6 ) . '" alt="">
            <div class="card-body text-center fw-semibold text-black ">
                <p class="card-text">
                <div>PKR ' . formatNumberWithCommas($row['price']) . '</div>
                <div>' . $row['area'] . '</div>
                <div>
                    <img src="assets/img/shower.png" alt="" class="mb-2">
                    <span class="me-2">' . $row['bathroom'] . '</span>
                    <img src="assets/img/bed.png" alt="" class="mb-1">
                    <span>' . $row['bedroom'] . '</span>
                </div>
                <div>' . $row['location'] . '</div>
                </p>
            </div>
        </div>';
        }
        mysqli_close($conn);
    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Residential rents</title>
</head>

<body>
<?php include 'assets/components/top.php'?>
<?php include 'assets/components/nav.php'?>
    <!-- Properties for rent in Islamabad -->
    <div class="container-fluid d-flex justify-content-between p-4 mb-4">
        <h1 class="title">Properties for Rent Islamabad</h1>
        <div class="btn rounded-3 fw-semibold text-white my-3 me-4" style="background-color: #FF573B;">View All</div>
    </div>
    <div class="container-fluid justify-content-around row mb-5">
        <?php data('Islamabad',3)?>
    </div>


    <!-- Properties for rent in Karachi -->
    <div class="container-fluid d-flex justify-content-between p-4 mb-4">
        <h1 class="title">Properties for Rent in Karachi</h1>
        <div class="btn rounded-3 fw-semibold text-white my-3 me-4" style="background-color: #FF573B;">View All</div>
    </div>
    <div class="container-fluid justify-content-around mb-5 row">
    <?php data('Karachi',3)?>
    </div>


    <!-- Properties for rent in Faisalabad -->
    <div class="container-fluid d-flex justify-content-between p-4 mb-4">
        <h1 class="title">Properties for Rent in Faisalabad</h1>
        <div class="btn rounded-3 fw-semibold text-white my-3 me-4" style="background-color: #FF573B;">View All</div>
    </div>
    <div class="container-fluid justify-content-around mb-5 row">
    <?php data('Faisalabad',3)?>
    </div>



    <!-- Properties for rent in Lahore -->
    <div class="container-fluid d-flex justify-content-between p-4 mb-4">
        <h1 class="title">Properties for Rent in Lahore</h1>
        <div class="btn rounded-3 fw-semibold text-white my-3 me-4" style="background-color: #FF573B;">View All</div>
    </div>
    <div class="container-fluid justify-content-around mb-5 row">
      <?php data('Lahore',6)?>
    </div>
     <!-- Footer -->
     <?php  include 'assets/components/footer.php'?>

    <!-- Copyright -->
    <div class="bg-dark text-center text-white py-3">
        <p class="mb-0">Copyright &copy;2024 All right reserved</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>