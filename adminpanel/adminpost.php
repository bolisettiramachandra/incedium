<?php include '../init.php'; ?>
<?php include '../security.php'; ?>


<!DOCTYPE html>
<html>
<?php include './components/head.php'; ?>
<body>
<?php include './components/navbar.php'; ?>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">ADMIN PANEL</h2>
                    <p>This is the Admin panele for <?php echo $_SESSION['authority']; ?>. Please Mention the title and body of the post here!</p>
                </div>
                <form>
                    <div class="form-group"><label>TITLE</label><textarea class="form-control"></textarea></div>
                    <label>Body</label>
                    <textarea name="editor1" class='form-control'></textarea>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
                   
                    <div class="form-group"><button name='submit' value='submit' class="btn btn-primary btn-block" type="submit">POST</button></div>
                </form>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>