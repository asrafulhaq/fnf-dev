<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Fish n Food</title>

    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="public/frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/frontend/assets/fonts/font-awesome/css/all.css">
    <link rel="stylesheet" href="public/frontend/assets/fonts/themufy/themify-icons.css">
    <link rel="stylesheet" href="public/frontend/assets/css/style.css">
    <link rel="stylesheet" href="public/frontend/assets/css/responsive.css">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
</head>
<body>
    
    
    
    
    <!-- LOGIN AND REGISTRATION PAGE  -->
    <section class="login-register">
        <div class="left-cont"></div>
        <div class="right-cont">
            <div class="auth-form">
                <h2>Sign In</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-danger" value="Sign In">
                    </div>
                </form>
            </div>
        </div>
    </section>





    <!-- JS FILES  -->
    <script src="public/frontend/assets/js/jquery-3.4.1.min.js"></script>
    <script src="public/frontend/assets/js/popper.min.js"></script>
    <script src="public/frontend/assets/js/bootstrap.min.js"></script>
    <script src="public/frontend/assets/js/owl.carousel.min.js"></script>
    <script src="public/frontend/assets/js/custom.js"></script>
</body>
</html>