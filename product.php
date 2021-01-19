<!DOCTYPE html>
<html lang="en">

<?php
include "header.php";
include "navheader.php";
?>

<main id="main">

<?php
     require_once "db_config.php";

$sql = "SELECT content FROM pages where id=4";
$result = mysqli_query($con, $sql);

  while($row = mysqli_fetch_assoc($result)) 
  {
    echo $row["content"];
  }
mysqli_close($con);
?>

</main>

    <?php
    include "footer.php";
    ?>

</body>
</html>