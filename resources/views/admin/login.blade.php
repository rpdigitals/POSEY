<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:19 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Posey</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="/style-admin/img/iconfav1.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/style-admin/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/style-admin/css/admin.css">

</head>

<body>
    <div class="main-wrapper">

        <div class="login-page">
            <div class="login-body container">
                <div class="loginbox">
                    <div class="login-right-wrap">
                        <div class="account-header">

                        </div>
                        <div class="login-header">
                            <h3>Se connecter <span>POSEY</span></h3>
                            <p class="text-muted">Acceder au tableau de bord administrateur</p>
                        </div>
                        <form action="{{ route('login') }}" method="POST" enctype="mutipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input class="form-control" type="email" placeholder=" votre mail" name="email"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="role" value="admin">
                            </div>
                            <div class="form-group mb-4">
                                <label class="control-label">Mot de passe</label>
                                <input class="form-control" type="password" placeholder=" votre mot de passe"
                                    name="password" required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-block account-btn" type="submit">Valider</button>
                            </div>
                            <div class="text-center">
                                <a href="/forgot_password" class=" btn-block " type="submit">Mot de passe oublié?</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="/assets/js/admin.js"></script>

</body>


<!-- Mirrored from html.truelysell.com/template/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:19 GMT -->

</html>
