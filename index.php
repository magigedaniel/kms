<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php';
include 'navheader.php';
?>
<div class="">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="assets/img/carol1.jpg" alt="kengamassive" style="width:100%;">
            </div>

            <div class="item">
                <img src="assets/img/carol3.jpg" alt="kengamassive" style="width:100%;">
            </div>

            <div class="item">
                <img src="assets/img/carol4.jpg" alt="Kengamassive" style="width:100%;">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<?php
     require_once "db_config.php";

$sql = "SELECT content FROM pages where id=1";
$result = mysqli_query($con, $sql);

  while($row = mysqli_fetch_assoc($result)) 
  {
    echo $row["content"];
  }

mysqli_close($con);
?>

  </main>

  <?php
  include 'footer.php';
  ?>

</body>

</html>