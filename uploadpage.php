<?php
include("header.php");

?>

<div class="upload-page">
    <div>
        <form action="./includes/uploadcon.php" method="POST" class="upload-form" enctype="multipart/form-data">
            <div>
                <h3>Välj en fil att ladda upp</h3>
            </div>
            <div class="imgpreview">
                <?php echo "<img width='480' height='280' src='" . $directory . $fileName . "'> "; ?>
            </div>
            <div>
                <input type="file" name="file">
            </div>
            <div>
                <input type="text" placeholder="Titel" name="title">
            </div>
            <div>
                <input type="text" placeholder="Bildtext" name="description">
            </div>
            <div>
                <button type="submit" name="submitupload">Ladda upp</button>
            </div>
        </form>
    </div>

</div>

<?php include("footer.php") ?>