<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="file.php" method="post" enctype="multipart/form-data">

        <input type="file" name="pic" placeholder="upload file">

        <button name="submit">submit</button>





    </form>
    <pre>
<?php

if (isset($_FILES['pic'])) {

    // print_r($_FILES['pic']);

    $fileName = $_FILES['pic']['name'];
    $tmpName = $_FILES['pic']['tmp_name'];
    // echo $fileName;

    if (move_uploaded_file($tmpName, "uploads/" . $fileName)) {


        echo "file uploaded";
    } else {

        echo "error";
    }
}

?>




</pre>
</body>

</html>