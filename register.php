<!-- ############################## Header Section ############################## -->
<?php include 'header-2.php';
$status = $_GET['status'];
?>


<style>
    .contact .contact-form {
        max-width: 500px;
        margin-top: 0px;
    }

    .google_btn {
        background-color: transparent;
        border: 1px solid black;
        width: 65%;
        padding: 3% 0 0 0;
        color: black;
        font-weight: 800;
        font-size: 100%;
        border-radius: 0;
        margin: 7% 0 2%;
    }

    .google_btn:hover {
        background-color: #eeeeee;
    }

    .facebook_btn {
        background-color: #3b5999;
        border: 1px solid #3b5999;
        width: 65%;
        padding: 3% 0 0 0;
        color: white;
        font-weight: 800;
        font-size: 100%;
        border-radius: 0;
        margin: 2% 0;
    }

    .facebook_btn:hover {
        background-color: #25375e;
        color: white;
    }

    .apple_btn {
        background-color: #292929;
        border: 1px solid #292929;
        width: 65%;
        padding: 3% 0 0 0;
        color: white;
        font-weight: 800;
        font-size: 100%;
        border-radius: 0;
        margin: 2% 0;
    }

    .apple_btn:hover {
        background-color: #111111;
        color: white;
    }

    .email_btn {
        background-color: transparent;
        border: 1px solid black;
        width: 65%;
        padding: 3% 0 0 0;
        color: black;
        font-weight: 800;
        font-size: 100%;
        border-radius: 0;
        margin: 2% 0 10%;
    }

    .email_btn:hover {
        background-color: #eeeeee;
    }

    .email_btn img {
        width: 60%;
    }

    .custom_login,
    .custom_terms {
        line-height: 0%;
    }

    .custom_login p {
        color: black;
        font-weight: 400;
    }

    .custom_login a h6 {
        color: #cf4520;
        font-weight: 800;
    }

    .custom_login a h6:hover {
        text-decoration: underline;
    }

    .custom_terms p {
        color: #cf4520;
    }

    .custom_terms p:hover {
        text-decoration: underline;
    }

    .custom_login_top h2 {
        color: black;
        font-weight: 800;
    }

    .custom_login_top h6 {
        color: black;
        font-weight: 400;
        line-height: 1;
    }

    .singup_info {
        margin-top: 5%;
    }

    .singup_info p a {
        color: #cf4520;
        font-weight: 500;
    }

    .singup_info p a:hover {
        text-decoration: underline;
    }

    @media (max-width: 575.98px) {

        .container {
            padding-right: 0;
            padding-left: 0;
        }

        .google_btn,
        .facebook_btn,
        .apple_btn,
        .email_btn {
            width: 100%;
            font-size: 80%;
            padding: 5% 0 0 0;
            margin-top: 5%;
        }

        .google_btn {
            margin-top: 10%;
        }

        .email_btn {
            margin: 5% 0 15%;
        }

        .custom_login p {
            font-size: 72%;
        }

        .custom_terms p {
            font-size: 70%;
            font-weight: 600;
        }

        .custom_login_top {
            text-align: center;
            margin-top: 5%;
        }

        .singup_info {
            margin-top: 10%;
        }

    }
</style>


<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="contact-form">
            <div id="success"></div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                    <a href=""><img src="img/new/isha-logo-black.svg" alt=""></a>
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 custom_login_top">
                    <h2>Sign Up</h2>
                    <h6>Sign up to create your Account</h6>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <form action="store_register.php?status=<?php echo $status ?>" method="POST">

                        <label for="fname">Name:</label><br>
                        <input type="text" id="fname" name="name" value=""><br>

                        <label for="lname">Email:</label><br>
                        <input type="text" id="lname" name="email" value=""><br>

                        <label for="lname">Phone:</label><br>
                        <input type="text" id="lname" name="phone" value=""><br>

                        <label for="lname">Password:</label><br>
                        <input type="text" id="lname" name="password" value=""><br><br>
                        <input type="submit" value="Submit"><br>
                    </form>
                </div>


            </div>

            <div class="row">
                <div class="col-7 col-sm-7 col-md-7 col-lg-7 text-left custom_login" style="margin-top:25px">
                    <p>Already have an account?</p>
                    <a href="login.php">
                        <h6>Login</h6>
                    </a>
                </div>
                <div class="col-5 col-sm-5 col-md-5 col-lg-5 text-right custom_terms">
                    <a href="">
                        <p>Terms of Service</p>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center singup_info">
                    <p>
                        By Signing up you agree to Isha's <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a>. You also agree to recieve subsequent email and third party communications, which you may opt out of at any time. We won't post without asking.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->


<!-- ############################## Footer Section ############################## -->
<?php include 'footer-2.php' ?>