<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upLoad_Image</title>
</head>
<body>
    <?php
    if (isset($_POST['upload'])){
        if (isset($_FILES['avata']) && !empty($_FILES['avata'])){
            move_uploaded_file($_FILES['avata']['tmp_name'],'./upload/'.$_FILES['avata']['name']);
            echo "upload thành công";
        } 
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <span>chọn file ảnh
            <input type="file" name="avata">
        </span>
        <input type="submit" name="upload" value="tải lên">
    </form>
</body>
</html>