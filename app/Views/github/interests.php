<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- interest section start -->
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
    
<section class="interests">
        <div class="max-width">
            <h2 class="title">PERSONAL INTERESTS</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/demon.jpg") ?> " alt="">
                        <div class="text">Watching Korean Dramas</div>
                        <p>Watching Korean Dramas become an entertaining way for me to unwind and indulge in captivating narratives.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="<?= base_url("assets/images/cooking.jpg") ?> " alt="">
                        <div class="text">Cooking</div>
                        <p>From simple dishes to elaborate meals, cooking allows me to enjoy the process and savor the delicious results.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/music.jpg") ?> " alt="">
                        <div class="text">Listening to Musics</div>
                        <p>Listening to pleasant melodies and harmonies can elevate my mood and create a positive emotional experience.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/laptop.jpg") ?> " alt="">
                        <div class="text">Virtual Socializing</div>
                        <p>Connecting with friends and families through online platforms, creating a sense of social interaction despite physical distances. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/tech.jpg") ?> " alt="">
                        <div class="text">Exploring New Techs</div>
                        <p>This is my driving force towards a future filled with endless opportunities for growth and discovery.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="interests">
        <div class="max-width">
            <h2 class="title">FAVORITES</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/waffle.jpg") ?> " alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/coffee.jpg") ?> " alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/donut.jpg") ?> " alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/brown.png") ?> " alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/gray.jpg") ?> " alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/black.png") ?> " alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- interests section end -->
    
<?= $this->endSection() ?>