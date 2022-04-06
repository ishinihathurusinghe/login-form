<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Login Panel
                    </div>
                    <div class="card-body">
                        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="form-group mb-3">
                                <input type="email" name="userName" id="userName" class="form-control" placeholder="Enter Your UserName">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="userPwd" id="userPwd" class="form-control" placeholder="Enter Your Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-success btn-md" name="btnLogin">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>