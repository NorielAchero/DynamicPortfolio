<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noriel Achero</title>
    <link rel = "icon" href="uploads/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: rgb(22, 22, 22);
            color: #ffffff; /* Light text color */
            font-family: "Barlow", sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            padding-top: 50px; /* Adjusted padding to center content */
        }
        h1, h2 {
            color: #ffffff; /* Heading text color */
            text-align: center; /* Center align headings */
        }
        .btn {
            background-color: #FD6262; /* Button background color */
            border-color: #FD6262; /* Button border color */
            color: #ffffff; /* Button text color */
            font-weight: bold;
        }
        .btn:hover {
            background-color: #ffffff; /* Button hover background color */
            color: #FD6262; /* Button hover text color */
        }
        .table {
            background-color: rgb(37, 37, 37);
            color: #ffffff; /* Light text color */
            border: 2px solid #ffffff; /* Table border color */
            border-collapse: collapse;
            box-shadow: 0px 2px 5px rgba(255, 255, 255, 0.1); /* Table shadow */
            margin: auto; /* Center align the table */
        }
        .table th, .table td {
            border: 2px solid #ffffff; /* Table cell border color */
            padding: 10px; /* Cell padding */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Noriel Achero Portfolio</h1>

        <!-- Navigation -->
        <h2>Navigation</h2>
        <a href="insert_nav.php" class="btn btn-info">Insert Navigation </a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Nav1</th>
                    <th>Nav2</th>
                    <th>Nav3</th>
                    <th>Nav4</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("includes/sqlconnection.php");
                $sql = "SELECT * FROM navbar";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['brand']."</td>";
                        echo "<td>".$row['nav1']."</td>";
                        echo "<td>".$row['nav2']."</td>";
                        echo "<td>".$row['nav3']."</td>";
                        echo "<td>".$row['nav4']."</td>";
                        echo "<td>
                                <a href='edit_nav.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>
                                <a href='controller.php?table=navbar&id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No records found</td></tr>"; 
                }
                $conn->close();
                ?>
            </tbody>
        </table>

        <!-- Home -->
        <h2>First Section</h2>
        <a href="insert_home.php" class="btn btn-info">Insert Insert Section</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("includes/sqlconnection.php");
                $sql = "SELECT * FROM home";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['description']."</td>";
                        echo "<td>
                                <a href='edit_home.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>
                                <a href='controller.php?table=home&id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>"; 
                }
                $conn->close();
                ?>
            </tbody>
        </table>

        <!-- Skills -->
        <h2>Second Section</h2>
        <a href="insert_secondSection.php" class="btn btn-info">Insert Second Section</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Images</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("includes/sqlconnection.php");
                $sql = "SELECT * FROM secondSection";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td><img src='uploads/".$row['image']."' width='100'></td>";
                        echo "<td>
                                <a href='edit_secondSection.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>
                                <a href='controller.php?table=secondSection&id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No records found</td></tr>"; 
                }
                $conn->close();
                ?>
            </tbody>
        </table>

        <!-- Third Section -->
        <h2>Third Section</h2>
        <a href="insert_thirdSection.php" class="btn btn-info">Insert Third Section</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("includes/sqlconnection.php");
                $sql = "SELECT * FROM thirdSection";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td><img src='uploads/".$row['profile']."' width='100'></td>";
                        echo "<td>".$row['description']."</td>";
                        echo "<td>
                                <a href='edit_thirdSection.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>
                                <a href='controller.php?table=thirdSection&id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>"; 
                }
                $conn->close();
                ?>
            </tbody>
        </table>
                <br>
                <br>
        <center><a href="../index.php" class="btn btn-success">View Portfolio</a></center>
        <br>
                <br>
                <br>
                <br>
    </div>
</body>
</html>
