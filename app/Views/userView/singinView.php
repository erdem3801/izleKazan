<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('public')  ?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('public')  ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <form method="POST" class="user">
                                        <small><?= session()->getFlashdata('error');  ?></small>
                                        <div class="form-group">
                                            <input type="email" name="eMail" class="form-control form-control-user" placeholder="eMail Or Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>

                                        <hr>
                                        <?php if (isset($googleHref)) :  ?>
                                            <a href="<?= $googleHref  ?>" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Login with Google
                                            </a>
                                        <?php endif;  ?>

                                        <?php if (isset($googleHref)) :  ?>
                                            <a href="<?= $googleHref  ?>" class="btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook fa-fw"></i> Login with Facebook
                                            </a>
                                        <?php endif;  ?>
                                        <!-- <button scope="public_profile,email" onlogin="checkLoginState();" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login Facebookwith 
                                        </button> -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url("user/singup")  ?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('public')  ?>/assets/jquery/jquery.min.js"></script>
    <script src="<?= base_url('public')  ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('public')  ?>/assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('public')  ?>/js/sb-admin-2.min.js"></script>



    <script>
        function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
            console.log('statusChangeCallback');
            console.log(response); // The current login status of the person.
            if (response.status === 'connected') { // Logged into your webpage and Facebook.
                testAPI();
            } else { // Not logged into your webpage or we are unable to tell.
                document.getElementById('status').innerHTML = 'Please log ' +
                    'into this webpage.';
            }
        }


        function checkLoginState() { // Called when a person is finished with the Login Button.
            FB.getLoginStatus(function(response) { // See the onlogin handler
                statusChangeCallback(response);
            });
        }


        window.fbAsyncInit = function() {
            FB.init({
                appId: '{app-id}',
                cookie: true, // Enable cookies to allow the server to access the session.
                xfbml: true, // Parse social plugins on this webpage.
                version: '{api-version}' // Use this Graph API version for this call.
            });


            FB.getLoginStatus(function(response) { // Called after the JS SDK has been initialized.
                statusChangeCallback(response); // Returns the login status.
            });
        };

        function testAPI() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function(response) {
                console.log('Successful login for: ' + response.name);
                document.getElementById('status').innerHTML =
                    'Thanks for logging in, ' + response.name + '!';
            });
        }
    </script>
</body>

</html>