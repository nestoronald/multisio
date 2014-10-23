<!-- #page-wrapper -->
<div id="page-wrapper" class="cndg-main">

    <!-- #page -->
    <div id="page">

        <!-- header -->
        <header role="header" class="container clearfix">
            <!-- #pre-header -->

            <div id="pre-header" class="clearfix">

                <?php if ($page['header']) :?>
                <?php print render($page['header']); ?>
                <?php endif; ?>
                <div id="header-igp">
                    <div id="logo-minam">
                        <?php if (theme_get_setting('l_minam_igp_area')== ''):?>
                         <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp')?>/images/logo-minan-igp_2012.png" alt="IGP Logo"/></a>
                        <?php else: ?>
                         <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php echo file_create_url(file_load(theme_get_setting('l_minam_igp_area'))->uri);?>" alt="IGP Logo"/></a>
                        <?php endif; ?>
                    </div>
                    <div id="logo-igp"><a href="http://www.igp.gob.pe" target="_blank" rel="IGP" title="Portal web - IGP"><img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/igp-logo.png"></a></div>
                </div>

            </div>
            <!-- EOF: #pre-header -->


            <!-- #header -->
            <div id="header" class="clearfix">

                <!-- #header-left -->
                <!--EOF: #header-left -->

                <!-- #header-right -->
                <div id="header-right" class="two-third last">


                    <!-- #navigation-wrapper -->
                    <div id="navigation-wrapper" class="clearfix">
                        <!-- #main-navigation -->
                        <nav id="main-navigation" class="main-menu clearfix" role="navigation">
                        <?php if ($page['navigation']) :?>
                        <?php print drupal_render($page['navigation']); ?>
                        <?php else : ?>

                        <?php if (module_exists('i18n_menu')) {
                        $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
                        } else { $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); }
                        print drupal_render($main_menu_tree); ?>

                        <?php endif; ?>
                        </nav>
                        <!-- EOF: #main-navigation -->
                    </div>
                    <!-- EOF: #navigation-wrapper -->

                </div>
                <!--EOF: #header-right -->

            </div>
            <!-- EOF: #header -->

        </header>
        <!-- EOF: header -->

        <div id="content" class="clearfix">

            <?php if ($page['top_content']): ?>
            <!-- #top-content -->
            <div id="top-content" class="container clearfix">
              <!-- intro-page -->
              <div class="intro-page">
              <?php print render($page['top_content']); ?>
              </div>
              <!-- EOF: intro-page -->
            </div>
            <!--EOF: #top-content -->
            <?php endif; ?>

            <!-- #banner -->
            <div id="banner" class="container">

                <?php if ($page['banner']) : ?>
                <!-- #banner-inside -->
                <div id="banner-inside">
                <?php print render($page['banner']); ?>
                </div>
                <!-- EOF: #banner-inside -->
                <?php endif; ?>

                <?php if (theme_get_setting('slideshow_display','simplecorp')): ?>

                    <?php if ($is_front): ?>
                    <!-- #slider-container -->

                    <!-- EOF: #slider-container -->
                    <?php endif; ?>

                <?php endif; ?>
                <?php if (theme_get_setting('social_icons_display','simplecorp')): ?>
                    <!-- #social-icons -->
                    <?php if ($is_front): ?>
                        <!--div id="social-icons" class="clearfix">
                            <ul id="social-links">
                                <li class="facebook-link"><a href="https://www.facebook.com/morethan.just.themes" class="facebook" id="social-01" title="Join Us on Facebook!">Facebook</a></li>
                                <li class="twitter-link"><a href="https://twitter.com/morethanthemes" class="twitter" id="social-02" title="Follow Us on Twitter">Twitter</a></li>
                                <li class="google-link"><a href="#" id="social-03" title="Google" class="google">Google</a></li>
                                <li class="dribbble-link"><a href="#" id="social-04" title="Dribble" class="dribbble">Dribble</a></li>
                            </ul>
                        </div-->
                    <?php endif ?>
                    <!-- EOF: #social-icons -->
                <?php endif; ?>

            </div>
            <!-- EOF: #banner -->
            <?php if ($page['social_media']) :?>
                <!--.social media-->
                <div class="container clearfix">
                <?php print render($page['social_media']); ?>
                </div>
                <!--EOF:.social media-->
            <?php endif; ?>

            <?php if (theme_get_setting('breadcrumb_display','simplecorp') || $messages): ?>
            <!--breadrumb & messages -->
            <div class="container clearfix">
            <?php print $breadcrumb; ?>
            <?php print $messages; ?>
            </div>
            <!--EOF: breadrumb & messages -->
            <?php endif; ?>

            <!--#featured -->

            <div id="featured">

                <?php if ($page['highlighted']): ?>
                <div class="container clearfix">
                    <div class="line-featured"> </div>
                    <?php print render($page['highlighted']); ?>
                </div>
                <?php endif; ?>

                <?php if (theme_get_setting('highlighted_display','simplecorp')): ?>

                    <?php if ($is_front): ?>

                    <div class="container clearfix">


                    <div class="horizontal-line"> </div>

                    </div>

                    <?php endif; ?>

                <?php endif; ?>

            </div>
            <!-- EOF: #featured -->

            <!--#main-content -->
            <div id="main-content" class="container clearfix">

                <?php if ($page['sidebar_first']) :?>
                    <!--.sidebar first-->
                    <div class="one-fourth">
                    <aside class="sidebar">
                    <?php print render($page['sidebar_first']); ?>
                    </aside>
                    </div>
                    <!--EOF:.sidebar first-->
                <?php endif; ?>


                <?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
                <div class="one-half">
                <?php } elseif ($page['sidebar_first']) { ?>
                <div class="three-fourth last">
                <?php } elseif ($page['sidebar_second']) { ?>
                <div class="three-fourth">
                <?php } else { ?>
                <div class="clearfix">
                <?php } ?>
                    <!--#main-content-inside-->
                    <div id="main-content-inside">
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                    <?php print render($page['content']); ?>
                    </div>
                    <!--EOF:#main-content-inside-->
                </div>


                <?php if ($page['sidebar_second']) :?>
                    <!--.sidebar second-->
                    <div class="one-fourth last">
                    <aside class="sidebar">
                    <?php print render($page['sidebar_second']); ?>
                    </aside>
                    </div>
                    <!--EOF:.sidebar second-->
                <?php endif; ?>

            </div>
            <!--EOF: #main-content -->

            <!-- #bottom-content -->
            <div id="bottom-content" class="container clearfix">

                <?php if ($page['bottom_content']): ?>
                <?php print render($page['bottom_content']); ?>
                <?php endif; ?>

                <?php if (theme_get_setting('carousel_display','simplecorp')): ?>

                    <?php if ($is_front): ?>

                    <?php endif; ?>

                <?php endif; ?>

            </div>
            <!-- EOF: #bottom-content -->


        </div> <!-- EOF: #content -->

        <!-- #footer -->
        <footer id="footer">

            <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']) :?>
            <div class="container clearfix">

                <div class="first one-fourth footer-area">
                <?php if ($page['footer_first']) :?>
                <?php print render($page['footer_first']); ?>
                <?php endif; ?>
                </div>

                <div class="one-fourth footer-area">
                <?php if ($page['footer_second']) :?>
                <?php print render($page['footer_second']); ?>
                <?php endif; ?>
                </div>

                <div class="one-fourth footer-area">
                <?php if ($page['footer_third']) :?>
                <?php print render($page['footer_third']); ?>
                <?php endif; ?>
                </div>

                <div class="one-fourth footer-area last">
                <?php if ($page['footer_fourth']) :?>
                <?php print render($page['footer_fourth']); ?>
                <?php endif; ?>
                </div>

            </div>
            <?php endif; ?>

            <!-- #footer-bottom -->
            <div id="footer-bottom">
                <div class="container clearfix">
                    <span class="right"><a class="backtotop" href="#">↑</a></span>
                    <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('menu', 'secondary-menu', 'links', 'clearfix')))); ?>
                    <?php if ($user->uid){
                    }
                    else{
                        print "<a href='?q=user' title='Clic aqui para iniciar sesión'>Iniciar sesión</a>";
                    }
                    ?>

                    <?php if ($page['footer']) :?>
                    <?php print render($page['footer']); ?>
                    <?php endif; ?>

                    <?php if (module_exists('i18n_menu')) {
                    $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
                    } else { $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); }
                    print drupal_render($main_menu_tree); ?>

                    <div class="credits">

                    <p>Calle Badajoz # 169 - Mayorazgo IV Etapa - Ate Vitarte | Central Telefónica: 317-2300 |
                        <a href="#" class="mostaza">Contacto </a>| Escríbenos a: <a href="mailto:web@igp.gob.pe" class="mostaza" rel="propover">web@igp.gob.pe</a>
                    </p>
                    </div>

                </div>
            </div>
            <!-- EOF: #footer-bottom -->

        </footer>
        <!-- EOF #footer -->

    </div>
    <!-- EOF: #page -->

</div>
<!-- EOF: #page-wrapper -->
