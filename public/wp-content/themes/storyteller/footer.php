<!-- FOOTER SECTION -->
<footer class="footer-section">
    <div class="footer-content">
        <div class="more-info">
            <img src=<?php echo get_theme_file_uri('/assets/images/logo.png') ?> alt="logo" class="footer-logo">
            <p class="more-from-teach2give">
                Everything you need to know about University or College Attachments and Internships.
            </p>
        </div>

        <div class="more-info">
            <h2>
                Hyper Links
            </h2>

            <ul class="hyper-links">
                <li class="hyper-link">
                    <a href=<?php echo site_url('/') ?>>
                        Home
                    </a>
                </li>

                <li class="hyper-link">
                    <a href=<?php echo site_url('/about-us') ?>>
                        About Us
                    </a>
                </li>

                <li class="hyper-link">
                    <a href=<?php echo site_url('/become-a-mentor') ?>>
                        Mentor
                    </a>
                </li>

                <li class="hyper-link">
                    Contact Us
                </li>
            </ul>
        </div>

        <div class="more-info">
            <h2>
                Useful Links
            </h2>

            <ul class="hyper-links">
                <li class="hyper-link">
                    Legal Notice
                </li>

                <li class="hyper-link">
                    Privacy Policy
                </li>

                <li class="hyper-link">
                    Terms and Conditions
                </li>
            </ul>
        </div>

        <!-- SUBSCRIPTION SECTION -->
        <div class="subscription-section">

            <h2>Subcribe To Newsletter</h2>

            <div class="subscription-form">
                <input type="text" placeholder="Email...">

                <button class="subscribe-btn">
                    Let's Talk
                </button>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>