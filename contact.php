<?php include('header.php'); ?>


        <div class="rs-breadcrumbs img3">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">Contact</h1>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup php Template">
                        <a class="active" href="index.php">Home</a>
                    </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        
        <!-- Contact Section Start -->
        <div class="rs-contact pt-120 md-pt-80">
            <div class="container">
            <?php // Start the session
                if(isset($_GET['message']) && !empty($_GET['message'])) {
                    // Display the message
                    echo '<div class="alert alert-success">' . htmlspecialchars($_GET['message']) . '</div>';
                }
                unset($_GET['message']);
                ?>
                <div class="row">
                    <div class="col-lg-4 md-mb-60">
                        <div class="contact-box">
                            <div class="sec-title mb-45">
                                <span class="sub-text new-text white-color">Let's Talk</span>
                                <h2 class="title white-color">Speak With Expert Engineers.</h2>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                <i class="fa fa-envelope"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Email:</span>
                                    <a href="mailto:INFO@EXLONITECH.IN">INFO@EXLONITECH.IN</a>
                                </div>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone:</span>
                                    <a href="tel:+91 9038452444">+91 9038452444</a>

                                </div>
                            </div>
                            <div class="address-box">
                                <div class="address-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">Address:</span>
                                    <div class="desc">304, 3rd FLOOR, NIBR 1 AEROCITY, SAFED POOL, ANDHERI - KURLA ROAD, SAKINAKA, MUMBAI - 400 072</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 pl-70 md-pl-15">
                        <div class="contact-widget">
                            <div class="sec-title2 mb-40">
                                <span class="sub-text contact mb-15">Get In Touch</span>
                                <h2 class="title testi-title">Fill The Form Below</h2>

                            </div>
                            <div id="form-messages"></div>
                            <form method="post"
                                action="contact_form.php">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="name" name="name"
                                                placeholder="Name" required="">
                                        </div>
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="email" name="email"
                                                placeholder="E-Mail" required="">
                                        </div>
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="number" id="phone" name="phone"
                                                placeholder="Phone Number" required="">
                                        </div>
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" id="website" name="website"
                                                placeholder="Your Website" required="">
                                        </div>

                                        <div class="col-lg-12 mb-30">
                                            <textarea class="from-control" id="message" name="message"
                                                placeholder="Your message Here" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-part">
                                        <div class="form-group mb-0">
                                            <input class="readon learn-more submit" type="submit" value="Submit Now">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-canvas pt-120 md-pt-80">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.231949746998!2d72.88110817510989!3d19.09747775129809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c86f8548cc81%3A0x5235a2c98192c104!2s1Aerocity%20Corporate%20Park!5e0!3m2!1sen!2sin!4v1735640089174!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- Contact Section Start -->

    </div>
    <!-- Main content End -->


<?php include('footer.php'); ?>

   
<script>
    $(document).ready(function() {
        
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 2000);
    
});
</script>