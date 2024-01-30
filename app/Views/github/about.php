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
                    <p>Hello, I'm Ami Kristi Secondes, but most people call me Mika. I entered this world on December 14, 2001, in the lively town of San Joaquin, Iloilo. My roots are firmly planted in Purok 1, shaping my perspective on life. Now, at 22, I find comfort in the INFP-T personality, where introspection and creativity meet. Currently, I am enrolled in the Bachelor of Science in Information Technology program at West Visayas State University, where I navigate through the complexities of IT studies, immersing myself in coding and technological exploration.</p>
                    <a href="<?= base_url("education") ?> " alt="">Know More</a>
                </div>
            </div>
        </div>
    </section>
<!-- about section end -->

<?= $this->endSection() ?>