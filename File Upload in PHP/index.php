<?php
//Creating Directory to store
//Creating user interface, test
?>

    <form method="POST" enctype="multipart/form-data" action="upload.php">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>

<?php
//Creating file to upload
//Display all uploaded files
$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++) {
    //Display links to download
    //Making it downloadable
    ?>
    <p>
    <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
    </p>
    <?php
}
