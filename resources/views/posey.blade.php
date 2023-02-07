<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta content="N°1 du dépannage au TOGO" name="description" />
    <meta content="KofCorporation" name="author" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--====== Title ======-->
    <title>Posey</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/assets/img/iconfav.png" type="image/png" />
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="/assets_landing/css/animate.min.css" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/assets_landing/css/bootstrap.min.css" />
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="/assets_landing/css/font-awesome.min.css" />
    <!--====== OWl carousel ======-->
    <link rel="stylesheet" href="/assets_landing/css/owl.carousel.min.css" />
    <!--====== Style css ======-->
    <link rel="stylesheet" href="/assets_landing/css/style.css" />
</head>
<body>
@if (Session::has('flash_message_error'))
  <script type="text/javascript" src="/assets_landing/js/sweetalert.min.js"></script>
  <script type="text/javascript">;
  swal("{{ session('flash_message_error') }}", "Merci", "error");
</script>
@endif
    <!--====== Preloader ======-->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <div class="page-wrapper project-three image-version">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xl-5 col-lg-6">
                    <div class="page-content">
                        <div class="logo p-3 w-75 mx-auto rounded text-center" style="background-color:black" >
                            <a href="/">
                                <img src="/assets/img/logo1.png" style="width:50%" alt="Anony">
                            </a>
                        </div>
                        <div class="title text-center">
                            <span>Posey, le n°1 du dépannage au TOGO</span>
                            <p style="text-align:center;">
                            <b>Posey</b> est une plateforme permettant à toute personne de trouver
                             rapidement un prestataire pour un besoin. Commandez des travailleurs,
                              artisans, coursiers pour vos différentes tâches quotidiennes
                            </p>
                           <center> 
                               <a href="#subscibeModal" class="main-btn rounded p-3" style="background-color:#E2007E" data-toggle="modal">
                               S'inscrire en tant que
                                    prestataire
                            </a></center>
                        </div>
                        <div class="social-icon text-center">
                            <ul>
                                <li class="title">Retrouvez nous sur</li>
                                <li><a href="https://www.facebook.com/posey.startup/" style="background-color:#3B5998;"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/posey.startup/" style="background-image:linear-gradient(to right,#8a3ab9,#bc2a8d,#fccc63,#fbad50);"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/poseystartup" style="background-color:#00ACEE;"><i class="fab fa-twitter"></i></a>
                                </li>
                                {{-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> --}}
                            </ul>
                            <hr>
                            <div class="row pt-2">
                                <div class="col-lg-6">
                                    <a href="mailto:contact@beposey.com" style="color:#E2007E"><i class="fa fa-envelope"></i> contact@beposey.com</a>
                                </div>
                                <div class="col-lg-6 text-end">
                                <a href="tel:+22870441636" style="color:#E2007E"><i class="fa fa-phone"></i> (00228) 70 44 16 36</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 ">
                    <div class="page-count-box d-flex align-items-center justify-content-center"
                        style="background-image: url(/assets_landing/images/bg.jpg);background-size:cover;padding:10px">
                        <div class="count-box-wrap">
                            <h5>La plateforme sera ouverte dans </h5>
                            <div id="countdown" data-countdown="2022/12/26 00:00:00">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal ======-->
        <div class="modal fade subscibe-modal modal-two" id="subscibeModal" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content" style="padding-bottom:20px">
                    <div class="modal-body">
                        <h2 style="color:#E2007E;">POSEY</h2>
                        <h5>
                            S'inscrire en tant que prestataire</h5>
                        <form action="/register" method="POST" class="text-center align-items-center justify-content-center" enctype="multipart/form-data">
                            @csrf
                            <input type="text" value="provider" name="role" hidden>
                            <input type="text" value="provider" name="name" hidden>
                            <input type="email" class="form-control" placeholder="Votre adresse mail*" required name="email">
                            <br>
                            <input type="password" class="form-control" placeholder="Votre mot de passe*" required name="password"
                                minlength="8">
                            <br>
                            <div class="row">
                                <div class="col-lg-6 offset-3 col-6">
                                    <button type="submit" class="main-btn rounded w-100" style="background-color:#E2007E;height:60px;">
                                    S'INSCRIRE
                                    </button>
                                </div>
                            </div>
                           
                        </form>
                        <a href="#" class="close-modal" data-dismiss="modal"><i class="far fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== jquery js ======-->
    <script src="/assets_landing/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/assets_landing/js/vendor/jquery-1.12.4.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="/assets_landing/js/bootstrap.min.js"></script>
    <script src="/assets_landing/js/popper.min.js"></script>
    <!--====== Countdown js ======-->
    <script src="/assets_landing/js/jquery.countdown.js"></script>
    <!--====== Owl Carousel js ======-->
    <script src="/assets_landing/js/owl.carousel.min.js"></script>
    <!--====== Particles js ======-->
    <script src="/assets_landing/js/particles.min.js"></script>
    <!--====== Google Maps ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <!--====== wow js ======-->
    <script src="/assets_landing/js/wow.min.js"></script>
    <!--====== Main js ======-->
    <script src="/assets_landing/js/main.js"></script>
    <script>
        new WOW().init();
    </script>
</body>


<!-- Mirrored from softhopper.net/html/anony-html/image-version-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Dec 2022 15:25:42 GMT -->

</html>
