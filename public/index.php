<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 19/10/17
 * Time: 08:17
 */
require 'upload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Upload your files</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:300,400,700|Open+Sans:300,400,700" rel="stylesheet">

</head>
<body>

    <header class="container">
        <div class="jumbotron">
            <h1>Upload your files</h1>
        </div>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-lg-4">
                <a href="#" class="thumbnail thumUp">
                    <form action="" method="post" enctype="multipart/form-data">
                        <label for="upload">Select yours files :</label>
                        <input type="file" name="upload[]" id="upload" multiple="multiple" class="search" />
                        <div>
                            <button type="submit" value="upload" class="btn btn-default">Upload</button>
                        </div>
                    </form>
                </a>
            </div>
        </div>

            <div class="row">
                <?php foreach ($myFiles as $myFile) : ?>
                <div class="col-xs-12">
                    <div class="thumbnail">
                        <img src="uploadedFiles/<?=$myFile?>" alt="uploaded file">
                        <div class="caption">
                            <p><?=$myFile?></p>
                            <p>
                                <a href="?delete=<?=$myFile?>" class="btn btn-red">Delete</a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
    </main>

    <footer>
        <h2>Thank you for your visit ...  Good comments are accepted!</h2>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>