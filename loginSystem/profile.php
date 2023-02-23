<?php
session_start();

include "conn.php";
//  echo $GLOBALS[$row];




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>

    <form action="logout.php" method="post" enctype="multipart/form-data">

        <button type="submit" name="logout">logout</button>
    </form>

    <h1>
        welcome <?php echo $_SESSION['user'] ?>
    </h1>

    <!--Section: Contact v.2-->
    <section class="mb-4 container">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->


        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5 container">
                <form id="contact-form" name="contact-form" action="profile.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="email" id="name" name="semail" class="form-control">
                                <label for="name" class="">Sender Email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="email" id="email" name="remail" class="form-control">
                                <label for="email" class="">Receiver Email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Message Body</label>
                            </div>
                            <div class="md-form">
                              <input type="file" name="attachment">
                                
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
                    <button type="submit" name="send">Send</button>
                </form>

                <div class="text-center text-md-left">

                </div>
                <div class="status"> <?php
                                        // echo "Hello";
                                        $password_hash =  password_hash("Hello", PASSWORD_BCRYPT);
                                        echo "<br>";
                                        // echo password_hash("Hello", PASSWORD_BCRYPT);

                                        echo password_verify("hello", $password_hash);

                                        if (isset($_POST['send'])) {
                                            include "conn.php";


                                            $to = $_POST['semail'];
                                            $from = $_POST['remail'];
                                            $message = $_POST['message'];
                                            $subject = $_POST['subject'];
                                            $header = "from: $from ";
                                            $mail =  mail($to, $subject, $message, $header);
                                            if ($mail) {


                                                echo "Email Sent";
                                            } else {

                                                echo "Email Failed";
                                            }
                                        }


                                        ?></div>


    </section>
    <!--Section: Contact v.2-->



</body>

</html>