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
                    <i class="fa-solid fa-blog"></i>
                    Property
                </div>
            </div>
            <?php
            include '../backend/conn.php';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM properties WHERE `id` = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
            } else {
                header('location: ../property/property.php');
            }
            ?>
            <form id="insert" style="margin-block: 30px;" enctype="multipart/form-data" method="POST"
                action="../backend/backend.php">
                <h2>
                    <span>
                        <i class="fa-solid fa-blog"></i>
                        Update Property
                    </span>
                </h2>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" accept="image/*" name="image">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title"
                        value="<?php echo $row['title'] ?>" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Enter description"
                        name="description" required><?php echo $row['description']?></textarea>
                </div>
                <div class="mb-3 d-flex align-items-center gap-4 w-100">
                    <div class="w-100">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control " id="location" value="<?php echo $row['location'] ?>"
                            placeholder="Enter location" name="location" required>
                    </div>
                    <div class="w-100">
                        <label for="city" class="form-label">City</label>
                        <select name="city" id="city" class="form-select" aria-label="Select city">
                            <option value="lahore" <?php if ($row['city'] == 'lahore')
                                echo 'selected'; ?>>Lahore</option>
                            <option value="faisalabad" <?php if ($row['city'] == 'faisalabad')
                                echo 'selected'; ?>>
                                Faisalabad</option>
                            <option value="islamabad" <?php if ($row['city'] == 'islamabad')
                                echo 'selected'; ?>>Islamabad
                            </option>
                            <option value="okara" <?php if ($row['city'] == 'okara')
                                echo 'selected'; ?>>Okara</option>

                        </select>
                    </div>
                </div>
                <div class="mb-3 d-flex align-items-center gap-4 w-100">
                    <div class="w-100">
                        <label for="bedroom" class="form-label">Bedroom</label>
                        <input type="number" value="<?php echo $row['bedroom'] ?>" class="form-control " id="bedroom"
                            placeholder="Enter Bedroom" name="bedroom" required>
                    </div>
                    <div class="w-100">
                        <label for="bathroom" class="form-label">Bathroom</label>
                        <input type="number" value="<?php echo $row['bathroom'] ?>" class="form-control " id="bathroom"
                            placeholder="Enter bathroom" name="bathroom" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Area</label>
                    <input type="text" value="<?php echo $row['area'] ?>" class="form-control" id="area"
                        placeholder="Enter area" name="area" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" value="<?php echo $row['price'] ?>" class="form-control" id="price"
                        placeholder="Enter price" name="price" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category1"
                                value="residential_rent" <?php if ($row['category'] == 'residential_rent')
                                    echo 'checked'; ?> required>
                            <label class="form-check-label" for="category1">Residential Rent</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category2"
                                value="residential_sale" <?php if ($row['category'] == 'residential_sale')
                                    echo 'checked'; ?> required>
                            <label class="form-check-label" for="category2">Residential Sale</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category3"
                                value="commertial_rent" <?php if ($row['category'] == 'commertial_rent')
                                    echo 'checked'; ?> required>
                            <label class="form-check-label" for="category3">Commercial Rent</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="category4"
                                value="commertial_sale" <?php if ($row['category'] == 'commertial_sale')
                                    echo 'checked'; ?> required>
                            <label class="form-check-label" for="category4">Commercial Sale</label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Available</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="available" id="availableTrue" value="1"
                                <?php if ($row['available'] == 0) {
                                    echo 'checked';
                                }
                                ?>required>
                            <label class="form-check-label" for="availableTrue">Sold</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="available" id="availableFalse" value="0"
                                <?php
                                if ($row['available'] == 0) {
                                    echo 'checked';
                                }
                                ?> required>
                            <label class="form-check-label" for="availableFalse">Unsold</label>
                        </div>
                    </div>
                </div>

                <button type="submit" name="pupdate" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <?php include '../components/script.php' ?>
</body>

</html>