<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php';

?>
<script src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '#mytextarea'
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
                <h2>Frequently Asked Questions</h2>
            </div>

            <form method="post">
                <textarea id="mytextarea">Hello, World!</textarea>
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