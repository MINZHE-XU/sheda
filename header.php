<?php
/*
 * @author mazin
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo stripslashes($pageDetails["page_title"]); ?> - <?php echo SITE_NAME; ?> - www.abc.in</title>
    <link rel="icon" href="http://thesoftwareguy.in/favicon.ico" type="image/x-icon" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php echo stripslashes($pageDetails["meta_desc"]); ?>" />
    <meta name="keywords" content="<?php echo stripslashes($pageDetails["meta_keywords"]); ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- ********************************************************* -->
<div id="header">
    <div >
        <nav class="navbar navbar-expand-sm bg-success navbar-dark">
            <a class="navbar-brand" href="index.php">City-Recycle</a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            </div>
            <div class="navbar-nav">

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <!-- Links -->
                    <ul class="nav navbar-nav ml-aut ">
                        <li class="nav-item">
                            <a href="about.php" class="nav-link <?php echo ($currentPage == "about") ? 'active' : '' ?> " >About</a>
                        </li>
                        <li class="nav-item">
                            <a href="faq.php" class="nav-link <?php echo ($currentPage == "faq") ? 'active' : '' ?> " >FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link <?php echo ($currentPage == "contact") ? 'active' : '' ?> "  >Contact us</a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-warning"  type="submit">
                    <a href="recycle.php" class="text-light"  >Start Recycle</a>
                </button>
            </div>
        </nav>
    </div>
</div>

<div id="main">
    <div>