<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
    body, html {
    height: 100%;
}
    .home-background{
        background-image: url("images/contact.jpeg");
        width: 100%;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
}
</style>
<body >
    <!--Section: Contact v.2-->
    <div class="background">
<section class="section container ">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>66 Mohakhali C/A Dhaka</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+88 01717759725</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>info@getconnected.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
</div>
<!--Section: Contact v.2-->

</body>
</html>