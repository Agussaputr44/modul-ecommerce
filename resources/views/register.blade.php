<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/templates/user/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- Meta Charset -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Merch Store</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/templates/user/css/linearicons.css">
    <link rel="stylesheet" href="assets/templates/user/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/templates/user/css/themify-icons.css">
    <link rel="stylesheet" href="assets/templates/user/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/templates/user/css/nice-select.css">
    <link rel="stylesheet" href="assets/templates/user/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/templates/user/css/bootstrap.css">
    <link rel="stylesheet" href="assets/templates/user/css/main.css">
</head>
<body>
    <!-- SweetAlert -->
    <!-- Include SweetAlert -->

    <!--================ Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="assets/templates/user/img/login.jpg" alt="">
                        <div class="hover">
                            <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Register new account</h3>
                        <form class="row login_form" action="{{ route('post.register') }}" method="POST" id="contactForm" novalidate="novalidate">
                            @csrf <!-- Tambahkan @csrf secara otomatis -->
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="primary-btn">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Login Box Area =================-->

    <!-- JavaScript -->
    <script src="assets/templates/user/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="assets/templates/user/js/vendor/bootstrap.min.js"></script>
    <script src="assets/templates/user/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/templates/user/js/jquery.nice-select.min.js"></script>
    <script src="assets/templates/user/js/jquery.sticky.js"></script>
    <script src="assets/templates/user/js/nouislider.min.js"></script>
    <script src="assets/templates/user/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/templates/user/js/owl.carousel.min.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="assets/templates/user/js/gmaps.min.js"></script>
    <script src="assets/templates/user/js/main.js"></script>
</body>
</html>
