<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <!-- education section start -->
    <section class="education">
        <div class="max-width">
            <h2 class="title">EDUCATION</h2>
            <div class="educ-content">
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/sjces.png") ?> " alt="">
                        <div class="text">San Joaquin Central Elementary School</div>
                        <p>2008 - 2014</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/dfsnhs.png") ?> " alt="">
                        <div class="text">Don Felix Serra National High School</div>
                        <p>2014 - 2020</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <img src="<?= base_url("assets/images/wvsu.png") ?> " alt="">
                        <div class="text">West Visayas State University</div>
                        <p>2020 - Present</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>