<?php
    /**
     * The Main Off-Canvas Sidebar containing the primary navigation and the main widget area.
     *
     */
    ?>
    <!--Start OFF-Canvas part left-->
        <nav role="navigation">
            <aside id="main_nav">
                <ul class="chapter-list">
                    <li class="chapter-summary">

                        <?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>
                       </li>
                </ul>
            </aside>

            <aside id="sociallinks"><h3 class="one"><span>FIND ME ONE</span></h3>
                <ul class="sociallinks">
                    <li><a href="http://www.facebook.com/elmastudio" class="facebook" title="Facebook"
                           target="_blank"><span
                            aria-hidden="true" data-icon="&#xe000;" class="hi-icon icon-facebook"></span></a><a
                            href="http://www.flickr.com/photos/elmastudio" class="twitter" title="Twitter"
                            target="_blank"><span aria-hidden="true" data-icon="&#xe002;"
                                                  class="icon-twitter"></span></a><a
                            href="#" class="instagram" title="Instagram" target="_blank"><span aria-hidden="true"
                                                                                               data-icon="&#xe001;"
                                                                                               class="icon-instagram"></span></a>
                    </li>

                </ul>
                <!-- end .sociallinks -->
            </aside>

            <aside id="about_me"><h3 class="one"><span>ABOUT ME</span></h3>
                <div class="about-widget-container">
                    <div class="about-img-wrap">
                        <img src="http://themes.elmastudio.de/renkon/files/2013/04/about-image.png" width="180"
                             height="180"
                             class="about-image" alt="Main Content Picture">

                        <p>"Morbi leo risus, porta ac consectetur ac, vestibulum at eros."</p>
                    </div>
                    <!-- end .about-img-wrap -->
                    <div class="about-text-wrap">
                        <p>Curabitur blandit tempus porttitor. Curabitur porttitor. Cras
                            justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                            consectetur
                            ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                            auctor.
                            Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi
                            erat
                            porttitor ligula, eget lacinia odio sem nec elit.</p>

                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non
                            metus
                            auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor
                            sit
                            amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis.</p>
                    </div>
                    <!-- end .about-text-wrap -->
                </div>

            </aside>

            <aside id="search" class="search"><h3 class="one"><span>SEARCH</span></h3>
                <form class="form-wrapper cf">
                    <input type="text" placeholder="Search..." required>
                    <button type="submit">Search</button>
                </form>
            </aside>

            <aside id="categories" class="categories"><h3 class="one"><span>CATEGORIES</span></h3>
                <ul>
                    <li class="cat-item"><a href="http://themes.elmastudio.de/renkon/category/citylife/"
                                            title="View all posts filed under Citylife">Citylife</a>
                    </li>
                    <li class="cat-item"><a href="http://themes.elmastudio.de/renkon/category/essays/"
                                            title="View all posts filed under Essays">Essays</a>
                    </li>
                    <li class="cat-item"><a href="http://themes.elmastudio.de/renkon/category/featured/"
                                                        title="View all posts filed under Featured">Featured</a>
                    </li>
                    <li class="cat-item"><a href="http://themes.elmastudio.de/renkon/category/food/"
                                                       title="View all posts filed under Food">Food</a>
                    </li>
                    <li class="cat-item"><a href="http://themes.elmastudio.de/renkon/category/graphics/"
                                                        title="View all posts filed under Graphics">Graphics</a><br>
                    </li>
                    <li class="cat-item"><a href="http://themes.elmastudio.de/renkon/category/nature/"
                                                       title="View all posts filed under Nature">Nature</a>
                    </li>
                    <li class="cat-item"><a href="http://themes.elmastudio.de/renkon/category/places/"
                                                        title="View all posts filed under Places">Places</a>
                    </li>
                    <li class="cat-item"><a href="http://themes.elmastudio.de/renkon/category/random/"
                                                        title="View all posts filed under Random">Random</a>
                    </li>
                    <li class="cat-item"><a href="http://themes.elmastudio.de/renkon/category/slogans/"
                                                        title="View all posts filed under Slogans">Slogans</a>
                    </li>
                    <li class="cat-item"><a href="http://themes.elmastudio.de/renkon/category/typography/"
                                                        title="View all posts filed under Typography">Typography</a>
                    </li>
                </ul>
            </aside>

        </nav>
<!--End OFF-Canvas part left-->