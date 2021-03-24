<!-- ======= Footer ======= -->

<footer id="footer">

    <!-- <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <div class="footer-top ">
        <div class="container ">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3><?= Perusahaan_Model::load()->nama; ?></h3>
                    <p>
                        <?= Perusahaan_Model::load()->alamat; ?>
                        <strong>Phone:</strong> <?= Perusahaan_Model::load()->hp; ?><br>
                        <strong>Email:</strong> <?= Perusahaan_Model::load()->email; ?><br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Link Berguna</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Artikel</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
                        <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Sosial Media</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <div class="social-links mt-3">
                        <a href="<?= Perusahaan_Model::load()->tw; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="<?= Perusahaan_Model::load()->fb; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="<?= Perusahaan_Model::load()->ig; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Medcon</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/front/') ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/front/') ?>assets/js/main.js"></script>

</body>

</html>