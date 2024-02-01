<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <!-- about section start -->
    <section class="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="<?= base_url("assets/images/bg.jpg") ?> " alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Ami Kristi and I'm an <span class="typing-2"></span></div>
                    <p>Hello, my name is Ami Kristi Secondes, but most people call me Mika. I came into this world on December 14, 2001, in the lively town of San Joaquin, Iloilo. My roots are deeply established in Purok 1, which shapes my outlook on life. Now, at 22, I find comfort in the INFP-T personality, which combines introspection and creativity. Currently, I am enrolled at West Visayas State University's Bachelor of Science in Information Technology program, where I am navigating the difficulties of IT academics while immersed in coding and technical discovery.</p>
                    <a href="<?= base_url("education") ?> " alt="">Know More</a>
                </div>
            </div>
        </div>
    </section>
<!-- about section end -->

<?= $this->endSection() ?>