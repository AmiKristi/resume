<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="<?= base_url("assets/style.css") ?> " alt="">        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            
            <ul class="menu">
            <li><a href="<?= base_url("home") ?> " alt="" class="menu-btn">Home</a></li>
                <li><a href="<?= base_url("about") ?> " alt="" class="menu-btn">About</a></li>
                <li><a href="<?= base_url("education") ?> " alt="" class="menu-btn">Education</a></li>
                <li><a href="<?= base_url("skills") ?> " alt="" class="menu-btn">Skills</a></li>
                <li><a href="<?= base_url("interests") ?> " alt="" class="menu-btn">Personal Interests</a></li>
                <li><a href="<?= base_url("contact") ?> " alt="" class="menu-btn">Contact</a></li>
            </ul>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello! I am</div>
                <div class="text-2">Ami Kristi  Secondes</div>
                <a href="<?= base_url("about") ?> " alt="">Explore More</a>
            </div>
        </div>
    </section>

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

    <script src="<?= base_url("assets/script.js") ?> "></script>
</body>
</html>
