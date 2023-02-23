<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrtaion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container  mt-3">
        <h2 class="text-center">Register Youself !</h2>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="email">Student Name</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="sname">
            </div>
            <div class="mb-3">Gender
                <input type="radio" value="male" name="sgender"> Male
                <input type="radio" value="female" name="sgender"> Female
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Student Contact</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="scontact">
            </div>

            <div class="mb-3 mt-3">
                <label for="email">City</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="scity">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Upload Picture</label>
                <input type="file" class="form-control" id="email" placeholder="Enter email" name="spicture">
            </div>
            <button type="submit" name="insert" class="btn btn-primary">Submit</button>
        </form>
        <form action="form.php" method="get">
            <button type="submit" class="btn btn-primary mt-2" name="fetch">Fetch</button>
        </form>

        <?php
        include "config.php";
        if (isset($_GET["fetch"])) {

            $fetch = "SELECT * FROM USERS";
            $res = mysqli_query($conn, $fetch);


        ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>StudentID</th>
                        <th>StudentName</th>
                        <th>StudentGender</th>
                        <th>Contact</th>
                        <th>City</th>
                        <th>Picture</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($res)) {  ?>
                        <tr>
                            <td><?php echo $row["userID"] ?></td>
                            <td><?php echo $row["userName"] ?></td>
                            <td><?php echo $row["Gender"] ?></td>
                            <td><?php echo $row["userContact"] ?></td>
                            <td><?php echo $row["City"] ?></td>
                            <td> <img width="100px" height="100px" src="uploads/<?php echo $row["Picture"] ?>" alt=""></td>
                            <td><button class="btn btn-primary">
                                    <a href="update.php?id=<?php echo $row["studentID"] ?>" class="text-white "> Update
                                    </a></button>
                                <button class="btn btn-danger">
                                    <a href="delete.php?id=<?php echo $row["studentID"] ?>" class="text-white "> Delete</a>
                                </button></td>
                            <td></td>

                        </tr>
                    <?php       }    ?>
                </tbody>
            </table>
        <?php } ?>



    </div>


</body>

</html>