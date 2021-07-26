<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('public')  ?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('public')  ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" data-url="<?= base_url($locale) ?>">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form id="quickForm" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="firstName" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="lastName" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="eMail" class="form-control form-control-user" placeholder="Email Address">
                </div>
                <div class="row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="password" name="passwordRepeat" class="form-control form-control-user" id="passwordRepeat" placeholder="Repeat Password">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url("user/singin")  ?>">Already have an account? Login!</a>
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
  <!-- jquery-validation -->
  <script src="<?= base_url('public')  ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?= base_url('public')  ?>/plugins/jquery-validation/additional-methods.min.js"></script>


  <script>
   $(function() {
    const base_url = $('body').attr('data-url')
    $.validator.setDefaults({
      submitHandler: function() {
        let data = $('.form-control').serialize();
        $.post(`${base_url}/user/singup`, {
          data: data
        }, function(req) {
          const {
            status,
            data
          } = req
          if (status == 'success') {
            window.location.href = `${base_url}/user/emailAuth?email=${data.email}&id=${data.id}`
          } else {
            let validateShow = function(name, message) {
              if ($(`#${name}-error`).length == 0) {
                let span = $('<span>', {
                  class: 'error',
                  id: `${name}-error`
                }).addClass('invalid-feedback').text(message);
                $(`input[name='${name}']`).closest('.form-group').append(span)
              }
              $(`input[name="${name}"]`).addClass('is-invalid')
              $(`#${name}-error`).text(message).removeAttr("style").show()
            }

            console.log(data)
            $.each(data, function(index, value) {
              validateShow(index, value)
            });
          }
        })
      }
    });
    $('#quickForm').validate({
      rules: {
        eMail: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 5
        },
        passwordRepeat: {
          minlength: 5,
          equalTo: "#password"
        }
      },
      messages: {
        email: {
          required: "Please enter a email address",
          email: "Please enter a vaild email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        passwordRepeat: {
          equalTo: 'şifre eşleşmiyor'
        }
      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        let id = error.attr('id')
        if ($(`#${id}`).length == 0) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        }
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
  </script>

</body>

</html>