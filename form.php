<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <form class="container" action="form.php" method="post">
        <div class="mb-3">
            <label for="" class="form-label">First Name</label>
            <input type="text" class="form-control" name="fname" id="" aria-describedby="helpId" placeholder="" required>

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" id="" aria-describedby="helpId" placeholder="">

        </div>
        <div class="form-check">
            Gender <br>
            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
            <label class="form-check-label" for="male">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
            <label class="form-check-label" for="female">
                Female
            </label>
        </div>
        <button class="btn btn-primary" name="submit">Submit</button>

    </form>

    <h1>user <?php 

    // print_r($_POST);
    
    if(!isset($_POST['submit'])){
     echo "error" ;

    }else{
        echo $_POST['fname'] ;




    }
?> </h1>
    










    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>