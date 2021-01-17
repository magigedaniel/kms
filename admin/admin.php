<!DOCTYPE html>
<html lang="en">

<?php
include_once '../header.php';

?>
<script src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '#content'
    });
</script>

<main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <!-- ======= Services Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section>

    </section>
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About page</h2>
            </div>

            <form method="post" action="config.php">
                <label for="page_name">Page Name</label>
                <input type="text" id="page_name" name="page_name"><br><br>
                <label for="page_label">Page Label</label>
                <input type="text" id="page_label" name="page_label"><br><br>
                <label id="content" name="content"></label><br><br>
                <button type="submit" class="btn btn-primary" value="submit">Save</button>
            </form>

        </div>
    </section><!-- End Frequently Asked Questions Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include 'footer.php';
?>

</body>

</html>