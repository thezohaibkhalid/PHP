<!doctype html>
<html lang="en">

<head>
    <?php include '../components/head.php' ?>
    <title>Admin | Contact</title>
    <?php
    include '../backend/conn.php';
    $sql = "SELECT * FROM contact";
    $result = mysqli_query($conn, $sql);

    $query = "SELECT * FROM contact WHERE `read` = 0";
    $unReplied = mysqli_query($conn, $query);
    ?>
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
                    Contact
                </div>
            </div>
            <div class="box-can">
                <div class="box">
                    <i class="fa-solid fa-bars-staggered"></i>
                    <h3>Total Messages</h3>
                    <h5><?php
                    echo mysqli_num_rows($result);
                    ?></h5>
                </div>
                <div class="box" style="background-color:#FFE6AC;">
                    <i class="fa-solid fa-check"></i>
                    <h1>Replied Messages</h1>
                    <h3><?php echo (mysqli_num_rows($result) - mysqli_num_rows($unReplied)) ?></h3>
                </div>
                <div class="box" style="background-color:#E7D1FC;">
                    <i class="fa-solid fa-hourglass-half"></i>
                    <h1>Pending Messages</h1>
                    <h3>
                        <?php echo mysqli_num_rows($unReplied) ?>
                    </h3>
                </div>
            </div>
            <div class="activity">
                <div>
                    <h1 class="table-heading"><i class="fa-solid fa-list-ul"></i>Contact List</h1>
                </div>
                <?php 
                if (isset($_GET['status'])) {
                    if ($_GET['status'] == 1) {
                        echo "<div class='alert alert-success d-flex align-items-center justify-content-between'>" . $_GET['info'] . "</div>";
                    } else {
                        echo "<div class='alert alert-danger d-flex align-items-center justify-content-between'>" . $_GET['info'] . "</div>";
                    }
                }
                ?>
                <table class="table table-striped table-hover border">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col" class="msg">Message</th>
                            <th scope="col">Response</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>
                            <th scope="row" class="td-row"></th>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['email'].'</td>
                            <td >'.$row['subject'].'</td>
                            <td class="msg">'.$row['message'].'</td>
                            <td>'.
                                ($row['read'] == 0 ? '<span class="btn btn-primary btn-sm">Pending</span>' : '<span class="btn btn-success btn-sm">Replied</span>')
                            .'</td>
                            <td class="action">
                                <a href="../contact/view.php?id='.$row['id'].'" class="btn btn-primary btn-sm">View</a>
                                <a href="../backend/backend.php?read='.$row['id'].'" class="btn btn-primary btn-sm">Mark As Read</a>
                                <a href="../backend/backend.php?action=contact&id='.$row['id'].'" class="btn btn-danger btn-sm">Del</a>
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