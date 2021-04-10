<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form enctype = "multipart/form-data" method = "post" action = "Ex10_7_2.php">
        <input type = "hidden" name = "MAX_FILE_SIZE" value = "5000000000">
    
        เลือกไฟล์ที่ต้องการ : <input type = "file" name = "ImageFile" size = "50">
        <input type = "submit" name = "Submit" value = "Upload Now">
    </form>
</body>
</html>