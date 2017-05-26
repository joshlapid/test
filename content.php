<h5 id="breadcrumbs">test / <?php the_title() ?></h5>

<div class="row">
    <div class="col-sm-8">
        <h3><?php the_title() ?></h3>
    </div>
    <div class="col-sm-4">
        <h4>Share this page</h4>
        <div class="row text-left">
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
                    <li class="">
                        <a href="#"><button>+</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <!-- Adds a thumbnail from the Featured Image section in the WP admin. -->
    <div class="thumbnail-img"><?php the_post_thumbnail( 'medium' ) ?></div>

    <p><?php the_content() ?></p>

</div>
