<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <!-- skills section start -->
    <section class="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills.</div>
                    <p>
                        I have acquired a wealth of knowledge in the captivating domain of front-end technologies within the realm of web development, and I owe this valuable learning experience to the dedicated guidance of our esteemed instructors at West Visayas State University. Throughout my educational journey, these foundational elements have seamlessly woven themselves into the fabric of my understanding, equipping me with the requisite skills to artfully design and construct compelling, as well as interactive, user experiences on the vast canvas of the World Wide Web. The dynamic and comprehensive instruction provided by our faculty has not only fueled my passion for web development but has also ingrained in me the importance of these fundamental tools in shaping the digital landscape.</p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>70%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>50%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>SQL</span>
                            <span>55%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="skills">
        <div class="max-width">
            <h2 class="title">The Future</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">In the next 5 years...</div>
                    <p>I envision a well-adapted and emotionally intelligent individual, thriving both in the exciting challenges of the IT world and in the nuanced tapestry of personal growth and connections. Life is a journey of continuous evolution, and I look forward to embracing the experiences that shape me as a person.</p>
                    <br>
                    <p>I can also see myself living my dream of traveling to different countries, soaking in diverse cultures and landscapes. It's something I've always wanted, and I'm excited to turn this dream into a reality. From exploring bustling cities to enjoying serene natural wonders, this journey is all about experiencing the world in a way I've always imagined.</p>
                    <br>
                    <p>Lastly, five years from now, I see myself relishing the fruits of my hard work and determination as I step into my dream house and slide behind the wheel of my dream car. </p>
                </div>
                <div class="collage">
                    <div class="collage-img2">
                    <img src="<?= base_url("assets/images/collage.png") ?> " alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- skills section end -->

<?= $this->endSection() ?>