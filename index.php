<?php
if(file_exists("install.php")){
    header("Location:install.php");
} else {
    require("config.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php echo $name; ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EzPort - The Simple Portfolio System">
    <meta name="author" content="SPETS">

    <link rel='shortcut icon' type='image/x-icon' href='img/icon.ico' />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="color:#<?php echo $txcolour; ?>">

    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1><?php echo $name; ?></h1>
                <h5>A portfolio by <?php echo $author; ?></h5>
                <br>
                
                <?php
                foreach (new DirectoryIterator($imgdir) as $portfolioItem) {
                    if($portfolioItem->isDot()) continue;
                    echo '<div class="col-md-4 col-sm-6">
                        <a href="' . $imgdir. '/'.$portfolioItem->getFilename().'">
                            <img class="portfolioItem" src="' . $imgdir. '/'.$portfolioItem->getFilename().'" alt=""/>
                        </a>
                    </div><div id="credits">&copy; ' . $name . ' ' . date("Y") . ' a portfolio made with <a target="_blank" href="https://github.com/SPETS1337/EzPort">EzPort</a>.</div>';
                }
                ?>
            </div>

        </div>
    </div>

</body>

</html>
