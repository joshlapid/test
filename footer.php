<footer>
    <div class="container">
        <div id="footer-logo-row" class="row text-center">
            <a id="footer-logo" href="#">LOGO</a>
        </div>
        <div id="footer-menu-items" class="row text-center footer-menu-items">
            <a href="#">Different Menu Items</a>|<a href="#">Contact Us</a>|<a href="#">Helpful Information</a>|<a href="#">Register</a>|<a href="#">Exhibit and Sponser</a>
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <ul class="social-media-icons">
                    <li class="">
                        <a href="#"><button>F</button></a>
                    </li>
                    <li class="">
                        <a href="#"><button>IN</button></a>
                    </li>
                    <li class="">
                        <a href="#"><button>YT</button></a>
                    </li>
                    <li class="">
                        <a href="#"><button>TW</button></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="footer-policies" class="row text-center">
            <a href="#">Site Map</a>|<a href="#">Privacy Policy</a>|<a href="#">Report Site Issues</a>
        </div>
        <div class="row text-center">
            <p id="copyright">Copyright</p>
        </div>
    </div>
    <?php wp_nav_menu( array('theme_location' => 'secondary' ) ); ?>
</footer>


<?php wp_footer(); ?>

</body>
</html>
