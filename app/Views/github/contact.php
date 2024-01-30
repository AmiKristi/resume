<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

   
    <!-- contact section start -->
    <section class="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Ami Kristi M. Secondes</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Purok 1, San Joaquin, Iloilo</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">amikristi.secondes@wvsu.edu.ph</div>
                            </div>
                        </div>
                        <div></div>
                        <div class="row1">
                            <a href="https://www.facebook.com/mika.secondes?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a> 
                            <a href="https://www.instagram.com/ami.kristi?igsh=MXRuNGV3NjgyY3puMQ=="><i class="fab fa-instagram"></i></a>
                        </div>
                       
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- contact section end -->

<?= $this->endSection() ?>