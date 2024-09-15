<?php
include '../backend/conn.php';
$sql = "SELECT * FROM `properties`";
$result = mysqli_query($conn, $sql);
$unsold = "SELECT * FROM `properties` WHERE `available` = 1";
$unsoldrow = mysqli_query($conn, $unsold);
?>
<!doctype html>
<html lang="en">
<head>
    <?php include '../components/head.php' ?>
    <title>Admin | Properties</title>
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
                    <i class="fa-solid fa-comments"></i>
                    Properties
                </div>
            </div>
            <div class="box-can">
                <div class="box">
                    <i class="fa-solid fa-bars-staggered"></i>
                    <h3>Total Property</h3>
                    <h5><?php
                    echo mysqli_num_rows($result);
                    ?></h5>
                </div>
                <div class="box" style="background-color:#FFE6AC;">
                    <i class="fa-solid fa-check"></i>
                    <h1>Total Sold</h1>
                    <h3><?php echo mysqli_num_rows($unsoldrow) ?></h3>
                </div>
                <div class="box" style="background-color:#E7D1FC;">
                    <i class="fa-solid fa-hourglass-half"></i>
                    <h1>Pending</h1>
                    <h3>
                        <?php echo (mysqli_num_rows($result) - mysqli_num_rows($unsoldrow)) ?>
                    </h3>
                </div>
            </div>
            <form id="insert" style="margin-block: 30px;" enctype="multipart/form-data" class="property-form"
                method="POST" action="../backend/backend.php">
                <h2>
                    <span>
                        <i class="fa-solid fa-blog"></i>
                        Upload New Properties
                    </span>
                    <span style="cursor: pointer;" class="property-form-close">
                        X
                    </span>
                </h2>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" accept="image/*" name="photo" required>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Enter description"
                    name="description" required></textarea>
                </div>
                <div class="mb-3 d-flex align-items-center gap-4 w-100">
                    <div class="w-100">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control " id="location" placeholder="Enter location" name="location"
                            required>
                    </div>
                    <div class="w-100">
                        <label for="city" class="form-label">City</label>
                        <select name="city" id="city" class="form-select" aria-label="Select city">
                        <option value="lahore">Lahore</option>
                        <option value="faisalabad">Faisalabad</option>
                        <option value="islamabad">Islamabad</option>
                        <option value="okara">Okara</option>
                    </select>
                    </div>
                </div>
                <div class="mb-3 d-flex align-items-center gap-4 w-100">
                    <div class="w-100">
                        <label for="bedroom" class="form-label">Bedroom</label>
                        <input type="number" class="form-control " id="bedroom" placeholder="Enter Bedroom" name="bedroom" required>
                    </div>
                    <div class="w-100">
                        <label for="bathroom" class="form-label">Bathroom</label>
                        <input type="number" class="form-control " id="bathroom" placeholder="Enter bathroom" name="bathroom" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Area</label>
                    <input type="text" class="form-control" id="area" placeholder="Enter area" name="area" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category1"
                                value="residential_rent" required>
                            <label class="form-check-label" for="category1">Residential Rent</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category2"
                                value="residential_sale" required>
                            <label class="form-check-label" for="category2">Residential Sale</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category3"
                                value="commertial_rent" required>
                            <label class="form-check-label" for="category3">Commercial Rent</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category4"
                                value="commertial_rent" required>
                            <label class="form-check-label" for="category4">Commercial Sale</label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Available</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="available" id="availableTrue" value="1"
                                required>
                            <label class="form-check-label" for="availableTrue">Sold</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="available" id="availableFalse" value="0"
                                required>
                            <label class="form-check-label" for="availableFalse">Unsold</label>
                        </div>
                    </div>
                </div>

                <button type="submit" name="psubmit" class="btn btn-primary">Submit</button>
            </form>
            <div class="activity">
                <div class="property">
                    <h1 class="table-heading"><i class="fa-solid fa-list-ul"></i>Properties List</h1>
                    <button class="btn btn-primary btn-md property-insert">Add New Property</button>
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
                            <th scope="col">description</th>
                            <th scope="col">Price</th>
                            <th scope="col">City</th>
                            <th scope="col">Location</th>
                            <th scope="col">Area</th>
                            <th scope="col">Catorage</th>
                            <th scope="col">Available</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>
                                <th scope="row" class="td-row"></th>
                                <td><img src="' . $row['imgAddress'] . '" width="100" height="100" style="object-fit: cover;"></td>
                                <td>' . $row['title'] . '</td>
                                <td class="msg">' . $row['description'] . '</td>
                                <td>' . $row['price'] . '</td>
                                <td>' . $row['city'] . '</td>
                                <td>' . $row['location'] . '</td>
                                <td>' . $row['area'] . '</td>
                                <td><span class="btn btn-primary btn-sm">' . $row['category'] . '</span></td>
                                <td>
                                    <form action="../backend/backend.php" style="margin-block:5px;" method="POST">
                                        <input type="hidden" name="id" value="' . $row['id'] . '" />
                                        <input type="hidden" name="available" value="' . ($row['available'] == 0 ? 1 : 0) . '" />
                                        <input type="submit" value="' . ($row['available'] == 0 ? 'Unsold' : 'Sold') . '" class="btn btn-primary btn-sm" />
                                    </form>
                                </td>
                                <td class="action">
                                    <a href="../property/view.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm">View</a>
                                    <a href="../property/update.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="../backend/backend.php?action=properties&id=' . $row['id'] . '" class="btn btn-danger btn-sm">Del</a>
                                </td>
                            </tr>';
                        }                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php include '../components/script.php' ?>
</body>

</html>