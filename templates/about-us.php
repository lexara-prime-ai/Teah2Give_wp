<?php
/*
Template Name: about us Template
*/

get_header();

?>

<!-- HERO SECTION -->
<section class="home hero-section">
    <!-- VIDEO -->
    <video #slide class="video-slide active" src=<?php echo get_theme_file_uri('/assets/videos/footage_1.mp4') ?>
        autoplay muted loop></video>

    <!-- CONTENT -->
    <div #content class="content active">
        <!-- SLOGAN -->
        <h1 class="slogan">
            EMPOWERING STUDENTS THROUGH EDUCATION:
            TEACHING, GIVING AND
            <span>
                GROWING
                <span class="green">
                    TOGETHER.
                </span>
            </span>
        </h1>

        <!-- INFO -->
        <p class="info" data-aos="fade-right" data-aos-delay="300">
            "Nurturing minds for a brighter future and endless possibilities."
        </p>
    </div>

    <!-- SOCIAL MEDIA -->
    <div class="social-media-icons" data-aos="fade-left" data-aos-delay="400">
        <!-- LINKS -->
        <a>
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
        <a>
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a>
            <i class="fa-brands fa-google"></i>
        </a>
    </div>
</section>

<!-- STATS SECTION -->
<section class="stats-section">
    <!-- STATS -->
    <ul class="stats">
        <!-- INDIVIDUAL STAT -->
        <li class="stat">
            <div class="current-stat">
                <h2>
                    10
                </h2>

                <i class="fa-solid fa-plus"></i>
            </div>

            <p class="stat-info">
                Universities
            </p>
        </li>

        <!-- INDIVIDUAL STAT -->
        <li class="stat">
            <div class="current-stat">
                <h2>
                    25
                </h2>
            </div>

            <p class="stat-info">
                Mentors
            </p>
        </li>

        <!-- INDIVIDUAL STAT -->
        <li class="stat">
            <div class="current-stat">
                <h2>
                    250
                </h2>

                <i class="stat-icon green fa-solid fa-plus"></i>
            </div>

            <p class="stat-info">
                Current Mentees
            </p>
        </li>

        <!-- INDIVIDUAL STAT -->
        <li class="stat">
            <div class="current-stat">
                <h2>
                    500
                </h2>

                <i class="stat-icon green fa-solid fa-plus"></i>
            </div>

            <p class="stat-info">
                Mentees Waiting
            </p>
        </li>
    </ul>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="about-section">
    <!-- WRAPPER -->
    <div class="about-section-wrapper">
        <!-- ABOUT IMAGE -->
        <div class="about-img-container" data-aos="flip-up" data-aos-delay="300">
            <img class="about-img" src=<?php echo get_theme_file_uri('/assets/images/placeholder/lady1.png') ?>
                alt="about-img">
            <div class="overlay">
                <img src=<?php echo get_theme_file_uri('/assets/images/placeholder/lady2.png') ?> alt="overlay">
            </div>
        </div>
        <!-- ABOUT CONTENT -->
        <div class="about-content" data-aos="fade-left" data-aos-delay="300">
            <!-- TITLE -->
            <h1 class="about-title">
                <span>More about</span> Teach2Give
            </h1>

            <h3 class="motto">
                "Igniting Change for a <span class="green">Brighter</span> World: Teach2Give"
            </h3>

            <!-- CONTENT -->
            <div class="about-body">
                <p>
                    At <span class="red large">Teach2Give</span>, our unwavering mission is to transform the world
                    for
                    the
                    better. We embark on a
                    journey of <span class="green">empowerment</span> by educating individuals in <span
                        class="red">third-world</span> countries enabling them to thrive and
                    catalyze positive transformations within their communities.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="grid-wrapper">
    <!-- OUR PURPOSE SECTION -->
    <section class="our-purpose">
        <div class="our-purpose-title">
            <h2>
                Our Purpose
            </h2>

            <p>
                “<span>Empower Graduates</span>, Bridging Opportunities”
            </p>
        </div>

        <!-- CONTENT -->
        <div class="our-purpose-content-wrapper">
            <ul class="purpose-list">
                <li class="purpose">
                    <span>
                        Facilitating Graduation and Work Permits
                    </span>
                    We support college graduates by providing the necessary assistance to secure a mandatory attachment
                    so
                    that they can graduate and get Work Permits, opening the door to promising career opportunities.
                </li>

                <li class="purpose opacity-lvl-1">
                    <span>
                        Real-World Training for Gainful Employment
                    </span>
                    : We offer comprehensive real-world training programs that equip students with the skills and
                    knowledge
                    needed to excel in their chosen fields globally, ensuring a seamless transition into the global
                    workforce.
                </li>

                <li class="purpose opacity-lvl-2">
                    <span>
                        Personalized Mentorship
                    </span>
                    Each student is matched with a dedicated mentor who provides guidance, support, and valuable
                    insights,
                    helping them navigate challenges and maximize their potential for personal and professional growth.
                </li>
            </ul>
        </div>
    </section>

    <!-- OUR VISION SECTION -->
    <section class="our-vision">
        <div class="our-vision-title">
            <h2>
                Our Vision
            </h2>

            <p>
                “<span>Empowering Futures</span>, Transforming Communities”
            </p>
        </div>

        <!-- CONTENT -->
        <div class="vision-content-wrapper">
            <p class="commitment">
                Teach2Give's commitment by <span>December 2024</span>
            </p>

            <ul class="commitments">
                <li>
                    Help 500 students obtain college degrees by offering a compulsory attachment.
                </li>

                <li>
                    Cultivate a network of 400 mentors, inspiring lifelong success.
                </li>

                <li>
                    Partner with more than 10 universities in Kenya, expanding educational opportunities.
                </li>
            </ul>
        </div>

        <!-- ADDITIONAL CONTENT -->
        <p class="statement">
            Join us in empowering futures and transforming communities through education. Together, we can create a
            world
            where limitless opportunities await.
        </p>
    </section>
</div>




<!-- TESTIMONIALS SECTION -->
<div class="testimonial-wrapper">
    <section class="testimonials testimonials-container">
        <div class="section-title-wrapper">
            <h2 class="testimonial-section-title">
                Testimonials
            </h2>

            <p class="testimonial-section-info">
                Witness the profound impact of mentorship as our mentees share their personal stories, reflecting on
                how
                this guiding relationship has enriched their <span>personal</span> and <span>professional journeys
                </span>.
            </p>
        </div>

        <div class="row">
            <div class="col">
                <div class="feature-img" data-aos="fade-left" data-aos-delay="300">
                    <img src=<?php echo get_theme_file_uri('/assets/images/placeholder/lady1.png') ?> width="100%">
                    <!-- PLAY BUTTON -->
                    <img src=<?php echo get_theme_file_uri('/assets/images/media_icons/play.png') ?> class="play-btn"
                        onclick="playVideo('<?php echo get_theme_file_uri('/assets/videos/footage_1.mp4') ?>')">

                    <!-- VIDEO PLAYER -->
                    <section class="video-player" id="video-player" #videoPlayer>
                        <video width="100%" controls autoplay id="video" #video>
                            <source src="" type="video/mp4">
                        </video>
                        <!-- CLOSE BUTTON -->
                        <img src=<?php echo get_theme_file_uri('/assets/images/media_icons/close.png') ?>
                            class="close-btn" onclick="stopVideo()">
                    </section>
                </div>
            </div>

            <div class="col">
                <div class="small-img-row" data-aos="fade-left" data-aos-delay="400">
                    <div class="small-img">
                        <img src=<?php echo get_theme_file_uri('/assets/images/placeholder/lady1.png') ?>>
                        <!-- PLAY BUTTON -->
                        <img src=<?php echo get_theme_file_uri('/assets/images/media_icons/play.png') ?>
                            class="play-btn"
                            onclick="playVideo('<?php echo get_theme_file_uri('/assets/videos/footage_2.mp4') ?>')">
                    </div>
                    <div class="mentee-info">
                        <p>
                            Evans Kiprotich | <span>
                                Web Dev.
                            </span>
                        </p>

                        <p class="mentee-bio">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, numquam.
                        </p>
                    </div>
                </div>

                <div class="small-img-row" data-aos="fade-right" data-aos-delay="500">
                    <div class="small-img">
                        <img src=<?php echo get_theme_file_uri('assets/images/placeholder/lady1.png') ?> width="40%">
                        <!-- PLAY BUTTON -->
                        <img src=<?php echo get_theme_file_uri('/assets/images/media_icons/play.png') ?>
                            class="play-btn"
                            onclick="playVideo('<?php echo get_theme_file_uri('/assets/videos/footage_1.mp4') ?>')">
                    </div>
                    <div class="mentee-info">
                        <p>
                            Lana Kamau |
                            <span>
                                QA/QE
                            </span>
                        </p>

                        <p class="mentee-bio">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, numquam.
                        </p>
                    </div>
                </div>

                <div class="small-img-row" data-aos="fade-right" data-aos-delay="600">
                    <div class="small-img">
                        <img src=<?php echo get_theme_file_uri('/assets/images/placeholder/lady1.png') ?> width="40%">
                        <!-- PLAY BUTTON -->
                        <img src=<?php echo get_theme_file_uri('/assets/images/media_icons/play.png') ?>
                            class="play-btn"
                            onclick="playVideo('<?php echo get_theme_file_uri('/assets/videos/footage_2.mp4') ?>')">
                    </div>
                    <div class="mentee-info">
                        <p>
                            Sterling Archer | <span>
                                Software Dev.
                            </span>
                        </p>

                        <p class="mentee-bio">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, numquam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- EMPLOYEE SECTION -->
<section class="employee-section">
    <div class="employee-section-info-wrapper">
        <!-- SECTION TITLE -->
        <h2 class="employee-section-title">
            Meet The Team
        </h2>
        <p class="employee-section-info">
            We take immense pride in the exceptional talents and diverse expertise of our dedicated team members and
            mentors. It is their unwavering commitment to excellence that drives our success and makes us who we
            are.
            Allow us to introduce the brilliant minds behind our collective achievements.
        </p>
    </div>

    <!-- STEPS -->
    <div class="employee-cards">
        <!-- EMPLOYEE CARD -->
        <div class="employee-card" data-aos="fade-up" data-aos-delay="300">
            <!-- AVATAR -->
            <div class="employee-avatar">
                <img src=<?php echo get_theme_file_uri('/assets/images/placeholder/stock3.jpg') ?> alt="avatar"
                    class="avatar">
            </div>

            <!-- CARD CONTENT -->
            <div class="employee-card-content">
                <h2 class="employee-name">
                    Kate Johns
                </h2>

                <!-- EMPLOYEE TITLE -->
                <h3 class="employee-title">
                    Project Coordinator
                </h3>

                <!-- EMPLOYEE ROLES -->
                <ul class="employee-roles">
                    <li class="role">
                        <i class="fa-solid fa-circle-dot"></i>
                        Project Planning
                    </li>

                    <li class="role">
                        <i class="fa-solid fa-circle-dot"></i>
                        Task Assignment
                    </li>

                    <li class="role">
                        <i class="fa-solid fa-circle-dot"></i>
                        Risk Management
                    </li>
                </ul>
            </div>
        </div>

        <!-- EMPLOYEE CARD -->
        <div class="employee-card center" data-aos="fade-up" data-aos-delay="400">
            <!-- AVATAR -->
            <div class="employee-avatar">
                <img src=<?php echo get_theme_file_uri('/assets/images/placeholder/stock3.jpg') ?> alt="avatar"
                    class="avatar center">
            </div>

            <!-- CARD CONTENT -->
            <div class="employee-card-content">
                <h2 class="employee-name">
                    Kate Johns
                </h2>

                <!-- EMPLOYEE TITLE -->
                <h3 class="employee-title">
                    Project Coordinator
                </h3>

                <!-- EMPLOYEE ROLES -->
                <ul class="employee-roles">
                    <li class="role">
                        <i class="fa-solid fa-circle-dot"></i>
                        Project Planning
                    </li>

                    <li class="role">
                        <i class="fa-solid fa-circle-dot"></i>
                        Task Assignment
                    </li>

                    <li class="role">
                        <i class="fa-solid fa-circle-dot"></i>
                        Risk Management
                    </li>
                </ul>
            </div>
        </div>

        <!-- EMPLOYEE CARD -->
        <div class="employee-card" data-aos="fade-up" data-aos-delay="500">
            <!-- AVATAR -->
            <div class="employee-avatar">
                <img src=<?php echo get_theme_file_uri('/assets/images/placeholder/stock3.jpg') ?> alt="avatar"
                    class="avatar">
            </div>

            <!-- CARD CONTENT -->
            <div class="employee-card-content">
                <h2 class="employee-name">
                    Kate Johns
                </h2>

                <!-- EMPLOYEE TITLE -->
                <h3 class="employee-title">
                    Project Coordinator
                </h3>

                <!-- EMPLOYEE ROLES -->
                <ul class="employee-roles">
                    <li class="role">
                        <i class="fa-solid fa-circle-dot"></i>
                        Project Planning
                    </li>

                    <li class="role">
                        <i class="fa-solid fa-circle-dot"></i>
                        Task Assignment
                    </li>

                    <li class="role">
                        <i class="fa-solid fa-circle-dot"></i>
                        Risk Management
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SPONSOR SECTION -->
<section class="sponsor-section" style="
    background: url(<?php echo get_theme_file_uri('assets/images/sponsor_bg.jpg') ?>);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    position: relative;
    margin-bottom: -14rem;
    top: -200px;

    @media (max-width: 500px) {
        height: 900px;
        opacity:0;
    }
">
    <!-- SECTION TITLE -->
    <h2 class="sponsor-section-title">
        Our Sponsors
    </h2>
    <!-- SPONSORS -->
    <div class="sponsors" data-aos="fade-left" data-aos-delay="300">
        <img src=<?php echo get_theme_file_uri('/assets/images/sponsors/sos.png') ?> alt="sponsor" class="sponsor-logo">
        <img src=<?php echo get_theme_file_uri('/assets/images/sponsors/compassion.png') ?> alt="sponsor"
            class="sponsor-logo">
        <img src=<?php echo get_theme_file_uri('/assets/images/sponsors/save_the_children.png') ?> alt="sponsor"
            class="sponsor-logo">
        <img src=<?php echo get_theme_file_uri('/assets/images/sponsors/Develop_africa.png') ?> alt="sponsor"
            class="sponsor-logo">
        <img src=<?php echo get_theme_file_uri('/assets/images/sponsors/kids_in_africa.png') ?> alt="sponsor"
            class="sponsor-logo">
    </div>
</section>

<?php get_footer(); ?>