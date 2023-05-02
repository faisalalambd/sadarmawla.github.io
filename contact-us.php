<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact Us</h2>
            </div>
            <style>
                .custom_a:hover {
                    color: white !important;
                    cursor: default;
                }
            </style>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="#" class="custom_a">Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <!-- <div class="section-header text-center">
            <p>Get In Touch</p>
            <h2>Contact for any query</h2>
        </div> -->
        <div class="contact-img">
            <img src="img/new/contact_us.jpg" alt="Image">
        </div>
        <div class="contact-form">
            <div id="success"></div>
            <form action="store_contact.php" method="post">
                <div class="control-group">
                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required="required" data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required="required" data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="phone" placeholder="Your Phone" name="phone" required="required" data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required="required" data-validation-required-message="Please enter a subject" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea class="form-control" id="message" placeholder="Message" name="message" required="required" data-validation-required-message="Please enter your message"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-custom" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Contact End -->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>