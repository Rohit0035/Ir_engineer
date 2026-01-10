    <!-- header start -->

    <?php include 'header.php';?>


    <!-- header close -->


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(assets/images/com/sec-title-bg.jpg);">
        <div class="overlay-bg"></div>
        <div class="pattern-layer"></div>
        <div class="auto-container">
            <div class="content-box text-left">
                <div class="title">
                    <h1>Contact Us</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-section -->
    <section class="contact-section py-5 ">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="content_block_6">
                        <div class="info-inner">
                            <h2>Drop us a Message</h2>
                            <p>Get in touch with us for reliable solutions, quick support, and expert guidance tailored
                                to your safety needs.</p>
                            <ul class="info-list clearfix">
                                <li>
                                    <i class="flaticon-telephone"></i>
                                    <p><a href="tel:+919963924870 ">+91 99639 24870 </a><br /><a
                                            href="tel:+9198816 36984">+91 98816 36984</a></p>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <p><a href="mailto:irengineersir@gmail.com">irengineersir@gmail.com</a><br /><a
                                            href="mailto:info@irengineers.org">info@irengineers.org</a></p>
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    <p>1st Floor, 246, Adisha, 9th A Main Road, Jaya Nagar 1st Block, Jayanagar, 3rd
                                        Block, Jayanagar, Bengaluru, Karnataka – 560011</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 form-column">
                    <div class="form-inner">
                        <form method="post" action="send-mail.php" class="default-form" id="contactForm">
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name *" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email *" required>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Your Phone" required>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Your Message..." required></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn-one" type="submit" id="submitBtn">
                                        <span class="btn-text">Submit Message</span>
                                        <span class="btn-loading" style="display:none;">Sending...</span>
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- google-map-two -->
    <section class="google-map-two">
        <div class="map-inner">
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31109.15486723379!2d77.56757225309687!3d12.930564450756554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s1st%20Floor%2C%20246%2C%20Adisha%2C%209th%20A%20Main%20Road%2C%20Jaya%20Nagar%201st%20Block%2C%20Jayanagar%2C%203rd%20Block%2C%20Jayanagar%2C%20Bengaluru%2C%20Karnataka%20%E2%80%93%20560011!5e0!3m2!1sen!2sin!4v1767941273136!5m2!1sen!2sin"
                    width="100%" height="550px"></iframe>
            </div>
        </div>
    </section>



    <!-- google-map-two end -->





    <!-- footer start -->

    <?php include 'footer.php';?>


    <!-- footer close -->


    <script>
document.getElementById("contactForm").addEventListener("submit", function () {
    const btn = document.getElementById("submitBtn");
    btn.disabled = true;
    btn.querySelector(".btn-text").style.display = "none";
    btn.querySelector(".btn-loading").style.display = "inline";
});
</script>
