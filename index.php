<?php
/*
 * @author Mazin
 */

require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);

include("header.php");
?>

<div class="container">
    <div class="row">
        <div id="slide-show" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#slide-show" data-slide-to="0" class="active"></li>
                <li data-target="#slide-show" data-slide-to="1"></li>
                <li data-target="#slide-show" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner " >
                <div class="carousel-item active">
                    <img src="css/images/adv1.jpg" class="img-fluid" alt="1">
                </div>
                <div class="carousel-item">
                    <img src="css/images/adv2.jpg" class="img-fluid " alt="2">
                </div>
                <div class="carousel-item">
                    <img src="css/images/adv3.jpg" class="img-fluid" alt="3">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slide-show" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slide-show" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

</div>

<?php
include("footer.php");
?>