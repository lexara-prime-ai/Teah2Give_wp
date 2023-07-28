<?php get_header(); ?>

<!-- HERO SECTION -->
<section class="home hero-section">
    <!-- VIDEO -->
    <video class="video-slide active" src=<?php echo get_theme_file_uri('/assets/videos/footage_2.mp4') ?> autoplay
        muted loop></video>

    <!-- CONTENT -->
    <div class="content active">
        <!-- SLOGAN -->
        <h1 class="slogan">
            Building Careers, Improving Families,
            <span>
                Enriching a
                <span class="green">
                    City.
                </span>
            </span>
        </h1>

        <!-- INFO -->
        <p class="info" data-aos="fade-right" data-aos-delay="300">
            "Make a lasting impact. Become a <span>mentor</span> and shape the future. Empower students, build careers
            and uplift
            families. Join us in transforming lives through the gift of your time."
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
<!-- HERO SECTION end -->
<!--===================-->
<!--===================-->
<!--===================-->

<!-- INFO SECTION -->
<section id="about" class="info-section">
    <!-- WRAPPER -->
    <div class="info-section-wrapper">
        <!-- INFO CONTENT -->
        <div class="info-content" data-aos="fade-right" data-aos-delay="300">
            <!-- INFO ICON -->
            <i class="info-icon fa-solid fa-thumbtack"></i>
            <!-- TITLE -->
            <h1 class="info-title">
                Let us show you what we are doing!
            </h1>
            <!-- CONTENT -->
            <ul class="info-body">
                <li class="list-item">
                    The <span>Teach2Give Foundation</span> empowers college students by securing interships and
                    providing mentorship for global competiotion.
                </li>

                <li class="list-item">
                    An <span class="highlighted green">industrial attachment</span> is a practical work experience
                    program for
                    <span>University | College</span> students to gain real-world exposure in their field of study,
                    bridging the
                    gap between theory and practice. It aims to enhance skills, employability, and industry insights.
                </li>

                <li class="list-item">
                    Our success proves the power of teaching. In <span class="location">Nyeri</span>, Kenya, we address
                    two challenges: <span class="highlighted">scarcity of attachments</span> leading to corruption and
                    mismatched experiences and <span class="highlighted">lack of business skills</span> among first
                    generation college graduates.
                </li>

                <li class="list-item">
                    Join us in transforming lives and communities through free career-focused attachments and mentorship
                    programs.
                </li>
            </ul>

            <!-- CTA BUTTON -->
            <a href=<?php echo site_url('/become-a-mentor') ?>>
                <button class="info-cta">
                    Become a mentor
                </button>
            </a>
        </div>

        <!-- INFO VIDEO -->
        <div class="video-container" data-aos="fade-left" data-aos-delay="400">
            <video src=<?php echo get_theme_file_uri('/assets/videos/footage_1.mp4') ?> autoplay muted loop></video>
        </div>
    </div>
</section>

<!-- HOW IT WORKS SECTION -->
<section class="how-it-works" data-aos="fade-up" data-aos-delay="300">
    <h2>
        How it works?
    </h2>

    <!-- CATEGORIES -->
    <ul class="categories">
        <li class="category active">
            Mentor
        </li>
        <li class="category">
            Mentees
        </li>
    </ul>

    <!-- STEPS -->
    <div class="steps">
        <!-- STEP -->
        <div class="step active">
            <h2 class="step-title">
                Step 1:
                <i class="fa-solid fa-person-walking"></i>
            </h2>

            <p class="step-info">
                Have a desire to influence a persons life that will have an impact on themselves, their families and
                their community.
            </p>
        </div>

        <!-- STEP -->
        <div class="step">
            <h2 class="step-title">
                Step 2:
                <i class="fa-solid fa-person-walking"></i>
            </h2>

            <p class="step-info">
                Have a desire to influence a persons life that will have an impact on themselves, their families and
                their community.
            </p>
        </div>

        <!-- STEP -->
        <div class="step faded">
            <h2 class="step-title">
                Step 3:
                <i class="fa-solid fa-person-walking"></i>
            </h2>

            <p class="step-info">
                Have a desire to influence a persons life that will have an impact on themselves, their families and
                their community.
            </p>
        </div>
    </div>
</section>
<!-- HOW IT WORKS SECTION end -->
<!--===================-->
<!--===================-->
<!--===================-->

<!-- WHY BECOME A MENTOR -->
<section id="why-mentor" class="become-a-mentor home">
    <div class="become-a-mentor-content-wrapper">

        <!-- VIDEO -->
        <!--===========================-->
        <!-- TODO: REMOVE active CLASS   -->
        <!--===========================-->
        <video class="video-slide active" src=<?php echo get_theme_file_uri('/assets/videos/footage_1.mp4') ?> autoplay
            muted loop></video>

        <!-- CONTENT -->
        <div class="become-a-mentor-content" data-aos="fade-up" data-aos-delay="300">
            <!-- ICON -->
            <i class="mentor-icon fa-solid fa-thumbtack"></i>
            <!-- TITLE -->
            <h2>
                Why be a Mentor?
            </h2>
            <!-- DESCRIPTION -->
            <p>
                Mentorship plays a pivotal role in supporting students in two key ways:
            </p>

            <ul class="mentor-list">
                <li>
                    1.
                    <span>
                        Skill Development
                    </span>
                    :
                    Students receive valuable guidance and practical advice from experienced mentors, accelerating their
                    learning process and equipping them with the tools needed to succeed in their choesen career paths.
                </li>

                <li>
                    2.
                    <span>
                        Confidence Boost
                    </span>
                    :
                    Students receive valuable guidance and practical advice from experienced mentors, accelerating their
                    learning process and equipping them with the tools needed to succeed in their choesen career paths.
                </li>
            </ul>

            <p>
                Moreover, mentors themselves experience positive effects through mentorship:
            </p>

            <ul class="mentor-list">
                <li>
                    <span>
                        Personal Growth
                    </span>
                    :
                    Mentors share knowledge and expertise, enhancing their personal growth. Guiding and inspiring
                    students reinforces their understanding and develops their leadership and communication skills.
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- WHY BECOME A MENTOR SECTION end -->
<!--===================-->
<!--===================-->
<!--===================-->
<?php get_footer(); ?>