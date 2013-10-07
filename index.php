<?php

    $projects = array(
        array(
            'title' => 'AltRider.com',
            'type' => 'hybrid mobile app',
            'thumbnail' => 'altrider_1.jpg',
            'dates' => '2008-2010',
            'technologies' => 'symfony, PHP, MySQL, XHTML, CSS, jQuery',
            'description' => '<p>
                    AltRider.com was one of those dream projects where I had complete control over the technologies used. AltRider needed a completely custom, data-driven ecommerce application. We were fortunate to begin with mockups designed by Hansen Belyea up in Seattle.
                </p>
                <p>
                    I worked with my partner in crime, Dave Camarillo, over at DC Technical. He took care of the database design, back-end functionality, and API integrations. I was charged with front-end development, but I also took on all aspects of the social and community portions of the site. The application handles inventory management, shipping procedures, purchase orders, newsletter lists, and much more. Most of the content on the site is editable by the folks at AltRider.
                </p>',
            'links' => array(
                array('type' => 'live', 'url' => 'http://www.altrider.com'),
            ),
            'screenshots' => array(
                'altrider_full_1.jpg',
                'altrider_full_2.jpg',
                'altrider_full_3.jpg',
            )
        ),
    );

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
        <title>Candace Fox Camarillo: Interactive Developer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">


        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="header">
                    <p>
                        <a href="#" class="contactLink">Contact</a> &nbsp;/&nbsp; <a href="CandaceFoxCamarillo_Resume.pdf" target="resume">R&eacute;sum&eacute;</a>
                    </p>
                    <h3>Candace&nbsp;Fox&nbsp;Camarillo <span>Interactive&nbsp;Developer</span></h3>
                </div>
            </div>    
        </nav>

        <div class="jumbotron trees"></div>

        <div class="jumbotron">
            <div class="container active" id="welcome">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>I create compelling, elegant, and beautiful solutions using modern web technologies.</h2>
                        <p class="first-child">
                             I am collaborative, process-oriented, detail-oriented, and patient. I make a great cheerleader and team player.
                        </p>
                        <p>
                            I speak in plain English to help bring understanding of technical solutions to clients and stakeholders.
                        </p>
                        <p>
                            I want to contribute positively to the world with my skills, so I care about my project's subject matter and the missions of my clients.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <h2>I offer...</h2>
                        <dl>
                            <dt>Responsive Templating</dt>
                            <dd>using HTML5, jQuery, SASS/CSS3, and grid systems.</dd>
                            <dt>Client-side Development</dt>
                            <dd>using Backbone, Twitter Bootstrap, and Kendo UI (to name a few!).</dd>
                            <dt>Server-Side Development</dt>
                            <dd>using MVC frameworks like Zend, CakePHP, Slim, Symfony, and Yii to create services and administrative tools.</dd>
                            <dt>Application Architecture</dt>
                            <dd>from database design to functional specifications.</dd>
                        </dl>
                    
                    </div>
                </div>
            </div>

            <div class="container" id="contact">
                <button type="button" class="close" aria-hidden="true">&times;</button>
                <div id="contactForm">
                    <h2>Get in touch.</h2>
                    <form role="form">
                        <div class="formError"></div>
                      <div class="form-group">
                        <input type="email" required class="form-control" id="email" placeholder="Your email address">
                      </div>
                      <div class="form-group">
                        <textarea required class="form-control" id="message" placeholder="Your message"></textarea>
                      </div>
                      <button id="submitButton" type="submit" class="btn btn-default">Send Message</button>
                      <img src="img/ajax-loader.gif" alt="working..." class="spinner" />
                    </form>
                </div>
                <div id="thankyouMessage">
                    <h2>Thank you!</h2>
                </div>
            </div>

            <div class="container" id="slideshow">
                <div class="clearfix">
                    <button type="button" class="close closeSlideshow" aria-hidden="true">&times;</button>
                    <a href="#projectsSlideshow" data-slide="next" class="pull-right navArrow right"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    <a href="#projectsSlideshow" data-slide="prev" class="pull-right navArrow left"><span class="glyphicon glyphicon-chevron-left"></span></a>
                </div>

                <div id="projectsSlideshow" class="carousel slide projectsSlideshow">
                    <div class="carousel-inner">

                        <?php $projectCounter = 0; ?>
                        <?php foreach ($projects as $project) { ?>
                            <div class="project item <?php if ($projectCounter == 0) { ?>active<?php } ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-7">
                                        <h3><?php echo $project['title']; ?></h3>
                                        <p class="dates"><?php echo $project['dates']; ?></p>
                                        <p class="technologies"><?php echo $project['technologies']; ?></p>
                                        <div class="description">
                                            <?php echo $project['description']; ?>
                                        </div>
                                        <div class="links">
                                            <?php foreach($project['links'] as $link) { ?>
                                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['type']; ?>"><span class="<?php echo $link['type']; ?>"></span> <?php if ($link['type'] == 'live') { ?>Live Site<?php } else { ?>Code Sample<?php } ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-5">
                                        <div class="screenshots">
                                            <?php foreach($project['screenshots'] as $screenshot) { ?>
                                                <img src="img/screenshots/<?php echo $screenshot; ?>" alt="<?php echo $project['title']; ?>" />    
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $projectCounter ++ ; ?>
                        <?php } ?>


                        <!--<div class="project item active">
                            <div class="row">
                                <div class="col-md-6 col-sm-7">
                                    <h3>AltRider.com</h3>
                                    <p class="dates">2008-2010</p>
                                    <p class="technologies">symfony, PHP, MySQL, XHTML, CSS, jQuery</p>
                                    <div class="description">
                                        <p>
                                            AltRider.com was one of those dream projects where I had complete control over the technologies used. AltRider needed a completely custom, data-driven ecommerce application. We were fortunate to begin with mockups designed by Hansen Belyea up in Seattle.
                                        </p>
                                        <p>
                                            I worked with my partner in crime, Dave Camarillo, over at DC Technical. He took care of the database design, back-end functionality, and API integrations. I was charged with front-end development, but I also took on all aspects of the social and community portions of the site. The application handles inventory management, shipping procedures, purchase orders, newsletter lists, and much more. Most of the content on the site is editable by the folks at AltRider.
                                        </p>
                                    </div>
                                    <div class="links">
                                            <a href="#"><span class="live"></span> Live Site</a>
                                            <a href="#"><span class="sample"></span> Code Sample</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <div class="screenshots">
                                        <img class="active" src="img/screenshots/altrider_full_1.jpg" alt="Altrider.com" />
                                        <img src="img/screenshots/altrider_full_2.jpg" alt="Altrider.com" />
                                        <img src="img/screenshots/altrider_full_3.jpg" alt="Altrider.com" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project item">
                            <div class="row">
                                <div class="col-md-6 col-sm-7">
                                    <h3>AltRider.com</h3>
                                    <p class="dates">2008-2010</p>
                                    <p class="technologies">symfony, PHP, MySQL, XHTML, CSS, jQuery</p>
                                    <div class="description">
                                        <p>
                                            AltRider.com was one of those dream projects where I had complete control over the technologies used. AltRider needed a completely custom, data-driven ecommerce application. We were fortunate to begin with mockups designed by Hansen Belyea up in Seattle.
                                        </p>
                                        <p>
                                            I worked with my partner in crime, Dave Camarillo, over at DC Technical. He took care of the database design, back-end functionality, and API integrations. I was charged with front-end development, but I also took on all aspects of the social and community portions of the site. The application handles inventory management, shipping procedures, purchase orders, newsletter lists, and much more. Most of the content on the site is editable by the folks at AltRider.
                                        </p>
                                    </div>
                                    <div class="links">
                                            <a href="#"><span class="live"></span> Live Site</a>
                                            <a href="#"><span class="sample"></span> Code Sample</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <div class="screenshots">
                                        <img class="active" src="img/screenshots/altrider_full_1.jpg" alt="Altrider.com" />
                                        <img src="img/screenshots/altrider_full_2.jpg" alt="Altrider.com" />
                                        <img src="img/screenshots/altrider_full_3.jpg" alt="Altrider.com" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->  
                    </div>
                </div>

            </div>

        </div>

        <div class="jumbotron" id="thumbnailJubmo">
            <div class="container thumbnails">
                <h2>Explore some of my work.</h2>
                <div class="row">

                    <?php foreach($projects as $project) { ?>
                        <div class="thumbWrapper col-sm-3 col-xs-6">
                            <div class="thumbnail">
                                <div class="description">
                                    <?php echo $project['title']; ?>
                                    <span><?php echo $project['type']; ?></span>
                                </div>
                                <img src="img/screenshots/<?php echo $project['thumbnail']; ?>" alt="<?php echo $project['title']; ?>" />
                            </div>
                        </div>
                    <?php } ?>

                    <!--<div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                mBytes
                                <span>hybrid mobile app</span>
                            </div>
                            <img src="img/screenshots/mbytes_1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                Insight
                                <span>analytics platform</span>
                            </div>
                            <img src="img/screenshots/analytics_1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                Meego Avatar Maker
                                <span>HTML5 avatar generator</span>
                            </div>
                            <img src="img/screenshots/avatar_1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                Big Data Dashboard
                                <span>data visualization</span>
                            </div>
                            <img src="img/screenshots/bigdata_1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                Chamber Music Northwest
                                <span>data-driven website</span>
                            </div>
                            <img src="img/screenshots/cmnw_1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                FoodRoute
                                <span>social media platform</span>
                            </div>
                            <img src="img/screenshots/foodroute_1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                SalesZ&uuml;m
                                <span>sales platform</span>
                            </div>
                            <img src="img/screenshots/saleszum_1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                ASUS Transformer
                                <span>animated parallax product showcase</span>
                            </div>
                            <img src="img/screenshots/transformer_1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                Western Star
                                <span>product showcase</span>
                            </div>
                            <img src="img/screenshots/westernstar_1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                What About Me?
                                <span>social media infographic generator</span>
                            </div>
                            <img src="img/screenshots/wam_1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="thumbWrapper col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <div class="description">
                                AltRider
                                <span>e-commerce solution</span>
                            </div>
                            <img src="img/screenshots/altrider_1.jpg" alt="" />
                        </div>
                    </div>
                    -->

                </div>
                
            </div>
        </div>

        <div class="jumbotron trees thin"></div>

        <footer>
            <div class="container">
                <p class="pull-right">
                    <small>
                        <a href="#" class="contactLink">Contact</a> &nbsp;/&nbsp; <a href="CandaceFoxCamarillo_Resume.pdf" target="resume">R&eacute;sum&eacute;</a>
                    </small>
                </p>
                <p class="text-muted">
                    <small>
                        &copy; 2013 Candace Fox Camarillo 
                    </small>
                </p>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
