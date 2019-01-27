<?php
/*
 * @author mazin
 */

require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);
include("header.php");
?>

    <div id="bread" class="row  bg-light">
        <div class="container ">
            <div class="col text-secondary">
                <h6 >Lorem ipsum...</h6>
            </div>
        </div>
    </div>
<?php
include("footer.php");
?>