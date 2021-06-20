<?php include('layouts/header.php'); ?>

    <body>
        <div class="navbar navbar-dark bg-primary">
            <a href="#" class="navbar-brand"><img src="img/key_white_logo.png" height="32px" alt=""></a>
        </div>
        <div class="container mt-5 col-6">
            <div class="card">
                <div class="card-body">
                    <div class="header text-center mt-4"><h4>Secure Sign On</h4></div>
                    <div class="mt-3 font-weight-bold">Enter your user ID to get started</div>
                    <div class="text-secondary my-3">Problem signing on?</div>
                    <form action="" method="post" class="form-group">
                        <label for="user">User ID</label>
                        <input class="form-control" type="text" id="user" value="grandpa's login">
                        <input type="checkbox" class="form-check d-inline mt-3" checked>
                        <label class="form-check-label" for="check">Save user ID and remember this device</label>
                        <a class="btn btn-block btn-lg btn-primary disabled mt-3 text-light" id="continue" href="password.php">Continue</a>
                    </form>
                </div>
            </div>
        </div>
    <?php include('layouts/footer.php'); ?>
    </body>
