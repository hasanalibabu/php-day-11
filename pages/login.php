<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">Login Form</div>
                    <div class="card-body">
                        <h4 class="text-danger text-center"><?php echo isset($message) ? $message : ''; ?></h4>
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="passrord" class="form-control" name="password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="login_btn" value="Login"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
