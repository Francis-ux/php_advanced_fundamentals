<?php require("function_side.php") ?>
<?php require("error_section.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./font awesome/css/all.min.css">
</head>

<body>
    <p class=" h1"> <code class="text-success"><?php echo $message; ?></code> </p>

    <form action="" method="post">
        <div class="w-25 p-3 mt-5 border rounded">
            <div class="col-auto">
                <label for="username">Name*</label>
                <div class="input-group mb-2">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                </div>
                <p class="text-danger">
                    <?php echo if_empty_username(); ?>
                </p>
                <p class="text-success">
                    <?php echo if_not_empty_username(); ?>
                </p>
            </div>

            <div class="col-auto">
                <label for="email">Email*</label>
                <div class="input-group mb-2">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                <p class="text-danger">
                    <?php echo if_empty_email() ?>
                </p>
                <p class="text-success">
                    <?php echo if_not_empty_email() ?>
                </p>
            </div>

            <div class="col-auto">
                <label for="password">Password*</label>
                <div class="input-group mb-2">
                    <input type="text" name="password" class="form-control" id="password" placeholder="password">
                </div>
                <p class="text-danger"><?php echo if_empty_password() ?></p>
                <p class="text-success"><?php echo if_not_empty_password() ?></p>
            </div>
            <div class="col-auto">
                <label for="phone">Phone*</label>
                <div class="input-group mb-2">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                </div>
                <p class="text-danger"><?php echo if_empty_phone() ?></p>
                <p class="text-success"><?php echo if_not_empty_phone() ?></p>
            </div>
            <div class="col-auto">
                <label for="phone">Dob*</label>
                <div class="input-group mb-2">
                    <input required type="date" name="dob" class="form-control" id="phone" placeholder="DOB">
                </div>
                <p class="text-danger"><?php echo if_empty_dob() ?></p>
                <p class="text-success"><?php echo if_not_empty_dob() ?></p>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Login</button>
        </div>
    </form>
</body>

</html>