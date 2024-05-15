<!DOCTYPE html>
<html>
<head>
    <title>Noriel Achero</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel = "icon" href="uploads/icon.png">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
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
        h1 {
            color: #ffffff; /* Heading text color */
            text-align: center; /* Center align headings */
        }
        form {
            background-color: rgb(37, 37, 37);
            padding: 20px;
            border: 2px solid #ffffff; /* Form border color */
            box-shadow: 0px 2px 5px rgba(255, 255, 255, 0.1); /* Form shadow */
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            color: #ffffff; /* Label text color */
        }
        input[type="text"] {
            background-color: #373737; /* Input background color */
            color: #ffffff; /* Input text color */
            border: 2px solid #ffffff; /* Input border color */
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }
        .btn-success {
            background-color: #FD6262; /* Button background color */
            border-color: #FD6262; /* Button border color */
            color: #ffffff; /* Button text color */
            font-weight: bold;
        }
        .btn-success:hover {
            background-color: #ffffff; /* Button hover background color */
            color: #FD6262; /* Button hover text color */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><b>INSERT HOME</b></h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>Name: </label>
                <input type="text" name="txtName" class="form-control">
            </div>
   
            <div class="form-group">
                <label>Description: </label>
                <input type="text" name="txtDescription" class="form-control">
            </div>
            <button type="submit" name="save_home" class="btn btn-success">Save Portfolio</button>
        </form>
    </div>
</body>
</html>