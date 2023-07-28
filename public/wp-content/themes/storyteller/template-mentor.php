<?php
/*
Template Name: Mentor Template
*/
?>

<?php get_header(); ?>


<!-- HERO SECTION -->
<section class="home hero-section">
    <!-- VIDEO -->
    <video class="video-slide active" src=<?php echo get_theme_file_uri('/assets/videos/footage_1.mp4') ?> autoplay
        muted loop></video>
    <!-- CONTENT -->
    <div class="content active">
        <!-- SLOGAN -->
        <h1 class="slogan"> WHY MENTOR <span> A <span class="green"> STUDENT? </span>
            </span>
        </h1>
        <!-- INFO -->
        <p class="info" data-aos="fade-right" data-aos-delay="400"> " <strong>Nurturing potential, unlocking
                greatness</strong>:Mentor a student and ignite
            their path to success!" </p>
    </div>
    <!-- SOCIAL MEDIA -->
    <div class="social-media-icons">
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
<!--===========================-->
<!--===========================-->
<!--===========================-->
<!-- WHAT DOES A MENTOR SECTION -->
<section class="what-does-a-mentor-do" data-aos="fade-up" data-aos-delay="500">
    <div class="what-does-a-mentor-do-title">
        <h2> What does a <span>Mentor</span> do? </h2>
        <p class="bold">" <span>Empowering Change through Mentorship</span>: Your Time, Their Transformation "</p>
        <p>As a mentor at Teach2Give, you will have a unique opportunity to directly engage with our students,
            making a significant impact on their lives. </p>
    </div>
    <!-- CONTENT WRAPPER -->
    <div class="content-wrapper">
        <div class="content-wrapper-row">
            <!-- VIDEO CONTAINER -->
            <div class="content-wrapper-col">
                <div class="feature-img">
                    <img src=<?php echo get_theme_file_uri('/assets/images/placeholder/lady1.png') ?> width="100%">
                    <!-- PLAY BUTTON -->
                    <img src=<?php echo get_theme_file_uri('/assets/images/media_icons/play.png') ?> class="play-btn"
                        onclick="playVideo('<?php echo get_theme_file_uri('/assets/videos/footage_1.mp4') ?>')">
                    <!-- VIDEO PLAYER -->
                    <section class="video-player" id="video-player">
                        <video width="100%" controls autoplay id="video">
                            <source src="" type="video/mp4">
                        </video>
                        <!-- CLOSE BUTTON -->
                        <img src=<?php echo get_theme_file_uri('/assets/images/media_icons/close.png') ?>
                            class="close-btn" onclick="stopVideo()">
                    </section>
                </div>
            </div>
            <!-- CONTENT -->
            <div class="mentor-role-content">
                <h3> Here's what being a Mentor entails: </h3>
                <ul class="mentor-expectations">
                    <li> 1. <span>Meaningful Interactions</span>: Connect with our students once a month, dedicating
                        at least one hour to speak directly with them. These regular interactions establish a
                        supportive and inspiring relationship that fuels their growth and development. </li>
                    <li> 2. <span>Career Guidance</span>: By providing guidance, wisdom, and support, mentors offer
                        invaluable insights into the industry, foster skill development, and build the confidence needed
                        to help the students navigate the professional world successfully. Through mentorship, students
                        gain a competitive edge in the global market.</li>
                </ul>
                <ul class="virtues">
                    <li class="virtue"> We recognize the impact of knowledge over financial assistance. </li>
                    <li class="virtue"> We believe in equipping students with business knowledge and skills. </li>
                    <li class="virtue">
                        Our goal is to empower students to uplift themselves, support their families and contribute
                        to the betterment of their communities.
                    </li>
                </ul>
                <!-- CTA BUTTON -->
                <button class="become-a-mentor-cta"> Become a Mentor Today </button>
            </div>
        </div>
        <!-- ADDITIONAL CONTENT -->
        <div class="additional-mentor-content">
            <p> At <span>Teach2Give</span>, we recognize that true transformation lies in knowledge. While financial
                assistance
                may
                have limited impact, imparting business knowledge and skills equips our students with the ability to
                uplift
                themselves and contribute to the betterment of their communities.
            </p>
            <p class="bold"> Join us as a mentor and together, we can unlock the potential within each student, fuel
                their
                aspirations and create sustainable change through the power of knowledge. Your time and wisdom will
                be
                the
                catalyst for their success and a brighter future for all.
            </p>
        </div>
    </div>
</section>


<!-- IMPACT SECTION -->
<section class="impact" data-aos="fade-up" data-aos-delay="400">
    <div class="impact-title">
        <h2>The impact you make</h2>
        <p>When you <span>Mentor</span> at Teach2Give, you directly enable life-changing outcomes for our students.
        </p>
        <p class="bold">Here's the impact your mentorship makes:</p>
    </div>
    <div class="results">
        <div class="result active">
            <h2>
                Degree and Diploma
                <i class="fa-solid fa-shield"></i>
            </h2>
            <p> Your donations provide students with essential attachments, allowing them to attain their college
                diplomas and Kenyan work visas. This opens doors to employment opportunities, enabling them to
                support themselves, their families, and their communities. </p>
        </div>
        <div class="result">
            <h2>Employment Advantage</h2>
            <p> By mentoring a student, you give them a competitive edge in the job market. They become equipped with
                the skills and legal documentation necessary to secure meaningful employment, fostering independence and
                self-sufficiency.</p>
        </div>
        <div class="result">
            <h2>Multiplier Effect</h2>
            <p> Your mentorship goes beyond individual impact. It creates a ripple effect as empowered students
                positively influence their families and communities. They become agents of change, uplifting those
                around them through education, employment, mentorship, and community development. </p>
        </div>
    </div>
</section>

<!-- TIME THAT YOU GIVE SECTION -->
<section class="time">
    <div class="time-section-title">
        <h2 class="title">
            Time That You Give
        </h2>

        <p class="sub-title">
            Empowerment through mentorship: Your time matters.
        </p>
    </div>

    <ul class="time-section-list">
        <li>
            With a resolute commitment to impact lives and serve humanity, <span>Teach2Give</span> believes that real
            change is born from acts of compassion. By extending our reach and imparting knowledge, we unlock the inner
            potential within individuals, fostering sustainable progress and creating lasting impact.
        </li>

        <li>
            Your mentorship transforms lives. By sharing your expertise and time, you empower students to navigate the
            complexities of global business, fostering their personal and professional growth.
        </li>

        <li>
            Join us in inspiring confidence and shaping futures through mentorship. Your commitment creates a brighter
            path for these exceptional individuals, breaking barriers and fostering their success.
        </li>
    </ul>

    <!-- CTA BUTTON -->
    <button class="become-a-mentor-cta"> Become a Mentor Today </button>

    <!-- ADDITIONAL CONTENT -->
    <div class="additional-time-content">
        <p class="outcome">
            At Teach2Give, being a mentor is a truly rewarding experience. Not only does it bring profound benefits to
            the mentee, but it also profoundly impacts the mentor's own journey.
        </p>

        <p>
            By working closely with young, motivated individuals who are eager to learn and grow, mentors play a pivotal
            role in transforming lives. Witnessing the tangible impact of their guidance and support on mentees' lives,
            as well as the ripple effect it has on their families and communities, is truly fulfilling.
        </p>
    </div>
</section>

<?php get_footer(); ?>