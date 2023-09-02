<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
    
        href="<?= base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    
    <link href="<?= base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
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
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <h4>Periksa Entrian Form</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                              <?php endif; ?>
                            <form method="post" action="<?= base_url(); ?>/register/process" enctype="multipart/form-data">
                           <?= csrf_field(); ?>
                           <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" id="profile_image" name="profile_image" 
                                    accept=".jpg, .jpeg">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control"
                                            id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control"
                                            id="password_conf" name="password_conf" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="#">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>

</body>

</html>