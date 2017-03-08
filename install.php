<?php
if(!empty($_POST['imgdir'])){
    $f = fopen("config.php", "w") or die("EzPort installer error: could not create config.php file!");

    $line = "<?php\n\n//Folder location of the portfolio images\n\$imgdir = '" . $_POST['imgdir'] . "';\n\n//Name of your portfolio site\n\$name = '" . $_POST['name'] . "';\n\n//Author of the portfolio site\n\$author = '" . $_POST['author'] . "';\n\n//Text colour\n\$txcolour = '" . $_POST['txc'] . "';?>";
    fwrite($f, $line);
    fclose($f);

    unlink("install.php");
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>EzPort installation</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EzPort - The Simple Portfolio System">
    <meta name="author" content="SPETS">

    <link rel='shortcut icon' type='image/x-icon' href='img/icon.ico' />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.install.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">

        <div class="row"> 
            <div class="col-lg-6 col-md-offset-4">

                <div class="col-md-offset-2">
                    <img class="logo" src="img/icon.png" alt="logo">
                </div>

                <h1>EzPort installation</h1>

                <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">

                    <label>+ General information</label><br><br>

                    <label>Portfolio images directory (no / at the end!)</label><br>
                    <input type="text" name="imgdir" placeholder="e.x. images/portfolio" required>

                    <br><br>

                    <label>Portfolio name</label><br>
                    <input type="text" name="name" placeholder="e.x. Photology" required>

                    <br><br>

                    <label>Author</label><br>
                    <input type="text" name="author" placeholder="e.x. Chriss Cool" required>

                    <br><br>

                    <label>+ Colouring</label><br><br>

                    <label>Text colour</label><br>
                    <input name="txc" class="jscolor" value="f5f5f5" required>

                    <br><br>
                    <button class="ibtn btn btn-default">install ezport</button>

                </form>

                </div>
            </div>
        </div>

    </div>

    <script src="js/jscolor.min.js"></script>

</body>

</html>
