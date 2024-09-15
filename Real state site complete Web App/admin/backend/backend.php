<?php

$serve = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'fullstate';
$conn = mysqli_connect('localhost', 'root', '', 'fullstate');

if (!$conn) {
    die('error' . mysqli_connect_error());
}
if (isset($_POST['psubmit'])) {
    $city = $_POST['city'];// city 
    $bedroom = $_POST['bedroom'];// bedroom
    $bathroom = $_POST['bathroom'];// bathroom
    $price = $_POST['price'];// price
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $area = $_POST['area'];
    $category = $_POST['category'];
    $available = $_POST['available'];
    // photo saving 
    $filename = $_FILES['photo']["name"];
    $fileaddress = "../../assets/uploads/" . $filename;
    $filetmp = $_FILES['photo']['tmp_name'];
    $filetransfer = move_uploaded_file($filetmp, $fileaddress);
    if ($filetransfer) {
        $sql = "INSERT INTO `properties`(`title`, `description`, `price`, `bedroom`, `bathroom`, `location`, `area`, `city`, `category`, `imgAddress`) VALUES ('$title','$description','$price','$bedroom','$bathroom','$location','$area','$city','$category','$fileaddress')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: ../property/property.php?status=1&info=The new property added successfully');
        } else {
            header('Location: ../property/property.php?status=0&info=The new property wasn\'t added successfully');
        }
    } else {
        header('Location: ../property/property.php?status=0&info=The image failed to upload');
    }
}

// mark property sold
if (isset($_POST['available'])) {
    $id = $_POST['id'];
    $sold = $_POST['available'];

    $query = "UPDATE `properties` SET `available` = '$sold' WHERE `id` = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: ../property/property.php?status=1&info=The property availability is updated successfully');
    } else {
        header('Location: ../property/property.php?status=0&info=The property wasn\'t updated successfully. Try again');
    }
}


// delete query 
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];
    if ($action == 'properties') {
        $sql = "DELETE FROM `properties` WHERE `id`= $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: ../property/property.php?status=1&info=The  property deleted successfully');
        } else {
            header('Location: ../property/property.php?status=0&info=The property  doesn\'t deleted. Try Again');
        }
    }
    if ($action == 'blogs') {
        $sql = "DELETE FROM `blogs` WHERE `id`= $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: ../blog/blog.php?status=1&info=The  property deleted successfully');
        } else {
            header('Location: ../blog/blog.php?status=0&info=The property  doesn\'t deleted. Try Again');
        }
    }
    if ($action == 'contact') {
        $sql = "DELETE FROM `contact` WHERE `id`= $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: ../contact/contact.php?status=1&info=The  property deleted successfully');
        } else {
            header('Location: ../contact/contact.php?status=0&info=The property  doesn\'t deleted. Try Again');
        }
    }
}

if (isset($_POST['pupdate'])) {
    $city = $_POST['city'];// city 
    $bedroom = $_POST['bedroom'];// bedroom
    $bathroom = $_POST['bathroom'];// bathroom
    $price = $_POST['price'];// price
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $area = $_POST['area'];
    $category = $_POST['category'];
    $available = $_POST['available'] === 'true' ? 1 : 0;

    $imageTmpPath = $_FILES['image']['tmp_name'];
    $imageName = basename($_FILES['image']['name']);
    $imagePath = "../../assets/uploads/" . $imageName; // Adjust the path as needed
    if (move_uploaded_file($imageTmpPath, $imagePath)) {
        $sql = "UPDATE `properties` 
            SET `title` = '$title', 
            `description` = '$description', 
            `price` = '$price', 
            `bedroom` = '$bedroom', 
            `bathroom` = '$bathroom', 
            `location` = '$location', 
            `area` = '$area', 
            `city` = '$city', 
            `category` = '$category', 
            `imgAddress` = '$imagePath'
            WHERE `id` = '$id'";

    } else {

        $sql = "UPDATE `properties` 
            SET `title` = '$title', 
            `description` = '$description', 
            `price` = '$price', 
            `bedroom` = '$bedroom', 
            `bathroom` = '$bathroom', 
            `location` = '$location', 
            `area` = '$area', 
            `city` = '$city', 
            `category` = '$category'
            WHERE `id` = '$id'";
    }

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: ../property/property.php?status=1&info=Property updated successfully');
    } else {
        header('location: ../property/property.php?status=0&info=Try again,Something went wrong');
    }
}




// contact message backend


if (isset($_GET['read'])) {
    $id = $_GET['read'];
    $query = "UPDATE `contact` SET `read` = 1 WHERE `id` = $id";
    if (mysqli_query($conn, $query)) {
        header('location: ../contact/contact.php?status=1&info=Contact marked successfully');
    } else {
        header('location: ../contact/contact.php?status=0&info=Try again,Something went wrong');
    }
}



// blogs backend

if (isset($_POST['bsubmit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    // photo saving 
    $filename = $_FILES['photo']["name"];
    $fileaddress = "../../assets/uploads/" . time() . "jpg";
    $filetmp = $_FILES['photo']['tmp_name'];
    $filetransfer = move_uploaded_file($filetmp, $fileaddress);
    if ($filetransfer) {
        $sql = "INSERT INTO `blogs`(`title`, `img`, `description`, `timestamp`) VALUES ('$title','$fileaddress','$description',current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: ../blog/blog.php?status=1&info=The new blog uploaded successfully');
        } else {
            header('Location: ../blog/blog.php?status=0&info=The new blog wasn\'t added successfully');
        }
    } else {
        header('Location: ../blog/blog.php?status=0&info=The image failed to upload');
    }
}


// blog update
if (isset($_POST['bupdate'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $imageTmpPath = $_FILES['image']['tmp_name'];
    $imageName = basename($_FILES['image']['name']);
    $imagePath = "../../assets/uploads/" . $imageName; // Adjust the path as needed
    if (move_uploaded_file($imageTmpPath, $imagePath)) {
        $sql = "UPDATE `blogs` SET `title`='$title',`img`='$imagePath',`description`='$description',`timestamp`=current_timestamp() WHERE `id` =$id";
    } else {
        $sql = "UPDATE `blogs` SET `title`='$title',`description`='$description',`timestamp`=current_timestamp() WHERE `id` =$id";
    }

    if (mysqli_query($conn, $sql)) {
        header('location: ../blog/blog.php?status=1&info=Property updated successfully');
    } else {
        header('location: ../blog/blog.php?status=0&info=Try again,Something went wrong');
    }
}