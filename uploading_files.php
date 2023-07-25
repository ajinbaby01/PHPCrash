<?php
if (isset($_POST['submit'])) {
    print_r($_FILES['uploaded_image']);
    if (!empty($_FILES['uploaded_image']['name'])) {
        $allowed_ext = ['jpeg', 'jpg', 'png' ];
        $file_name = $_FILES['uploaded_image']['name'];
        // print_r($_FILES['uploaded_image']);
        $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/learnphp/extras/{$file_name}";
        echo "target dir".$target_dir."<br>";
        $file_extension = pathinfo($target_dir, PATHINFO_EXTENSION);
        echo "File extension = ".$file_extension;
        if(in_array($file_extension, $allowed_ext)){
            move_uploaded_file($_FILES["uploaded_image"]["tmp_name"], $target_dir);
        }
        else{
            $message = '<p style="color: red;">Uploaded file is not an image</p>';
        }
    } else {
        $message = '<p style="color: red;">Choose an image to upload</p>';
    }
}
?>

<html>

<head>
    <title>Uploading Images</title>
</head>

<body>
    <?php echo $message ?? null; ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
        <label for="uploaded_image">Choose the image to upload: </label> <br>
        <input type="file" name="uploaded_image"> <br>
        <input type="submit" value="Upload" name="submit">
    </form>
</body>

</html>