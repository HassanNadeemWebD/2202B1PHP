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
        <form action="insert.php" method="post">
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
            <button type="submit" name="insert" class="btn btn-primary">Submit</button>
        </form>
        <form action="form.php" method="get">
            <button type="submit" class="btn btn-primary mt-2" name="fetch">Fetch</button>
        </form>
      
            <?php
            include "config.php";
            if (isset($_GET["fetch"])) {

                $fetch = "SELECT * FROM STUDENTS";
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
      </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($res)) {  ?>
      <tr>
      <td><?php echo $row["studentID"] ?></td>
      <td><?php echo $row["studentName"] ?></td>
      <td><?php echo $row["studentGender"] ?></td>
      <td><?php echo $row["studentContact"] ?></td>
      <td><?php echo $row["studentCity"] ?></td>

      </tr>
   <?php       }    ?>
    </tbody>
  </table>
<?php } ?>



    </div>


</body>

</html>