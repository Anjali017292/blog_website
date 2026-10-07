
<!-- ================= FOOTER ================= -->

<footer class="blog-footer">

    <div class="container">

        <div class="row gy-4">

            <!-- ABOUT BLOG -->

            <div class="col-lg-4 col-md-6">

                <h4 class="footer-logo">
                    <i class="fa-solid fa-pen-nib"></i>
                    Blog
                </h4>

                <p class="footer-text">
                    Welcome to our blog website, where you can discover
                    interesting articles, useful information and the latest
                    updates across different categories.
                </p>

                <div class="social-icons">

                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                </div>

            </div>


            <!-- QUICK LINKS -->

            <div class="col-lg-2 col-md-6">

                <h5>Quick Links</h5>

                <ul class="footer-links">

                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="login.php">
                            Login
                        </a>
                    </li>

                    <li>
                        <a href="category.php">
                            Categories
                        </a>
                    </li>

                    <li>
                        <a href="search.php">
                            Search
                        </a>
                    </li>

                </ul>

            </div>


            <!-- CATEGORIES -->

            <div class="col-lg-3 col-md-6">

                <h5>Categories</h5>

                <ul class="footer-links">

                    <?php

                    include('connection.php');

                    $footer_sql = "SELECT * FROM category";
                    $footer_query = mysqli_query($config, $footer_sql);

                    while($footer_cat = mysqli_fetch_assoc($footer_query))
                    {

                    ?>

                        <li>

                            <a href="category.php?id=<?= $footer_cat['cat_id'] ?>">

                                <i class="fa-solid fa-angle-right"></i>

                                <?= $footer_cat['catname'] ?>

                            </a>

                        </li>

                    <?php } ?>

                </ul>

            </div>


            <!-- CONTACT -->

            <div class="col-lg-3 col-md-6">

                <h5>Contact Us</h5>

                <ul class="contact-info">

                    <li>

                        <i class="fa-solid fa-envelope"></i>

                        <span>
                            info@blogwebsite.com
                        </span>

                    </li>

                    <li>

                        <i class="fa-solid fa-phone"></i>

                        <span>
                            +91 98765 43210
                        </span>

                    </li>

                    <li>

                        <i class="fa-solid fa-location-dot"></i>

                        <span>
                            India
                        </span>

                    </li>

                </ul>

            </div>

        </div>


        <!-- FOOTER BOTTOM -->

        <div class="footer-bottom">

            <p>
                © <?= date("Y") ?> Blog Website.
                All Rights Reserved.
            </p>

            <p>
                Designed with
                <i class="fa-solid fa-heart"></i>
                for readers.
            </p>

        </div>

    </div>

</footer>


<!-- ================= FOOTER CSS ================= -->

<style>

    .blog-footer {
        background: #111827;
        color: #d1d5db;
        margin-top: 60px;
        padding: 55px 0 0;
    }

    .footer-logo {
        color: #ffffff;
        font-size: 25px;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .footer-logo i {
        color: #3b82f6;
        margin-right: 8px;
    }

    .footer-text {
        color: #9ca3af;
        font-size: 14px;
        line-height: 1.8;
        max-width: 390px;
    }

    .blog-footer h5 {
        color: #ffffff;
        font-size: 17px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    /* FOOTER LINKS */

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 11px;
    }

    .footer-links a {
        color: #9ca3af;
        text-decoration: none;
        font-size: 14px;
        transition: 0.3s;
    }

    .footer-links a:hover {
        color: #3b82f6;
        padding-left: 5px;
    }

    .footer-links i {
        font-size: 11px;
        margin-right: 7px;
    }

    /* CONTACT */

    .contact-info {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .contact-info li {
        display: flex;
        gap: 12px;
        margin-bottom: 15px;
        color: #9ca3af;
        font-size: 14px;
        line-height: 1.6;
    }

    .contact-info i {
        color: #3b82f6;
        margin-top: 4px;
        width: 16px;
    }

    /* SOCIAL ICONS */

    .social-icons {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .social-icons a {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #1f2937;
        color: #d1d5db;
        border-radius: 50%;
        text-decoration: none;
        transition: 0.3s;
    }

    .social-icons a:hover {
        background: #2563eb;
        color: #ffffff;
        transform: translateY(-3px);
    }

    /* FOOTER BOTTOM */

    .footer-bottom {
        border-top: 1px solid #273244;
        margin-top: 40px;
        padding: 20px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    .footer-bottom p {
        margin: 0;
        color: #9ca3af;
        font-size: 13px;
    }

    .footer-bottom i {
        color: #ef4444;
    }

    /* MOBILE */

    @media (max-width: 767px) {

        .blog-footer {
            padding-top: 40px;
        }

        .footer-bottom {
            flex-direction: column;
            text-align: center;
        }

    }

</style>


<!-- ================= BOOTSTRAP JS ================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous">
</script>

</body>
</html>
