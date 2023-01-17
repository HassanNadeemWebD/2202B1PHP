<?php

include 'config.php';

// if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getData = "SELECT * FROM STUDENTS WHERE  studentId = '$id' ";



    $res = mysqli_query($conn, $getData);
    // mysqli_query($conn, $update)
    if ($res) {

        $row =  mysqli_fetch_assoc($res);

        $name = $row['studentName'];
        $gender = $row['studentGender'];
        $contact = $row['studentContact'];
        $city = $row['studentCity'];
        // echo $name;

    // }



?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <title>Update</title>
        </head>

        <body>
            <div class="container  mt-3">
                <h2 class="text-center">Update Your Information</h2>
                <form action="update.php" method="post">
                    <div class="mb-3 mt-3">
                        <label for="email">Student ID</label>
                        <input type="text" class="form-control" id="email" name="sid" value="<?php echo $id ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Student Name</label>
                        <input type="text" class="form-control" id="email" name="uname" value="<?php echo $name ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Gender</label>
                        <input type="text" class="form-control" id="email" name="ugender" value="<?php echo $gender ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Student Contact</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $contact ?>" name="ucontact">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="email">City</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $city ?>" name="ucity">
                    </div>
                
                    <button type="submit" class="btn btn-primary mt-2" name="update">Update</button>
                </form>

                <?php

                if (isset($_POST['update'])) {
                    $sid = $_POST['sid'];
                    $uname =  $_POST['uname'];
                    $ugender =  $_POST['ugender'];
                    $ucontact =  $_POST['ucontact'];
                    $ucity =  $_POST['ucity'];
                    $update = "UPDATE STUDENTS SET studentName = '$uname' , studentGender ='$ugender' ,studentContact = '$ucontact',
    studentCity = '$ucity'   
    WHERE studentId = '$sid'";
                    $updateRes = mysqli_query($conn, $update);
                    if ($updateRes) {


                        echo "record updated";
                    } else {

                        echo "error in updation";
                    }
                }



                ?>


        <?php }
 ?>
        </body>

        </html>