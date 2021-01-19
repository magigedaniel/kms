<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kenga Massive</title>
    <link rel="Shortcut Icon" href="../favicon.ico"/>
    <?php
    require_once 'script.php';
    require_once 'config.php';

    if ($_POST) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select *from users where username='$username' and password='$password'";
        $result = $link->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            // echo 'Success';
            //exit();
        } else {
            // echo 'failed';

            header("Location: login.php?id=3"); /* Redirect browser */

            /* Make sure that code below does not get executed when we redirect. */
            exit;

        }

    } else {


        if (!$_SESSION['username']) {
            header("Location: login.php?id=1"); /* Redirect browser */
            /* Make sure that code below does not get executed when we redirect. */
            exit;
        }

    }

    ?>

    <?php
include ('header.php');
?>
</head>

  <!-- container section start -->
  <?php
  include ('sidebar.php');
  ?>
    <!--sidebar end-->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>

    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>
          <?php
          require_once "db_config.php";
          $query="select id,page_name from pages";
          $result=mysqli_query($con,$query);
          ?>
      
    </section>
    <!--main content end-->
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Page Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if ($result) {
                // Fetch one and one row
                while ($row = $result->fetch_assoc()) {
                    ?>

                    <tr>
                        <td><?php echo $row['page_name'] ; ?></td>
                        <td><a href="edit_page.php?id=<?php echo $row['id'] ;?>"><button class="btn btn-primary">Click to Edit</button></a></td>
                    </tr>
            <?php
                }
                mysqli_free_result($result);
            }
            ?>
            </tbody>
        </table>
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
      <?php
      mysqli_close($con);
      ?>
</body>


</html>