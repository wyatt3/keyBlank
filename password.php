<?php include('layouts/header.php'); ?>

    <body>
        <div class="navbar navbar-dark bg-primary">
            <a href="#" class="navbar-brand"><img src="img/key_white_logo.png" height="32px" alt=""></a>
        </div>
        <div class="container mt-5 col-6">
            <div class="card">
                <div class="card-header">Password</div>
                <div class="card-body">
                    <div class="mt-3 font-weight-bold">Enter your password to continue</div>
                    <form action="" method="post" class="form-group mt-3" onsubmit="return redirectWithoutForm(event, 'homepage.php')">
                        <label for="pass">Password</label>
                        <input class="form-control" type="password" id="pass">
                        <a class="btn btn-block btn-lg btn-primary disabled mt-3 text-light" href="homepage.php">Continue</a>
                    </form>
                </div>
            </div>
        </div>
        <?php include('layouts/footer.php'); ?>
    </body>