<?php

    $projects = array(
        
        array(
            'title' => 'mBytes',
            'type' => 'hybrid mobile app',
            'thumbnail' => 'mbytes_1.jpg',
            'dates' => '2013',
            'technologies' => 'PHP, Yii, MySQL, jQuery, Backbone.js, HTML5, SASS, Icenium',
            'description' => '
                <p>
                    Built for iOS and Android and supporting a range of devices sizes, this mobile app distributes sales materials to users, with automatic updating and offline access.  All content is hosted on a web service (built with LAMP stack and Yii) and is distributed to users when they are online.  User account information and metrics are sent back to the webservice.  The mobile app itself is built in HTML5 using the Backbone.js framework.  The webservice provides a REST API, with models saved into Local Storage on the user\'s device.
                </p>',
            'links' => array(
                array('type' => 'sample', 'url' => 'https://github.com/ccamarillo/codeSamples/blob/master/mBytes.js'),
                array('type' => 'live', 'url' => 'https://itunes.apple.com/us/app/vmware-mbytes-sales-tool/id689570569?ls=1&mt=8'),
            ),
            'screenshots' => array(
                'mbytes2.png',
            )
        ),
        array(
            'title' => 'Avatar Maker',
            'type' => 'HTML5 character generator',
            'thumbnail' => 'avatar_1.jpg',
            'dates' => '2011',
            'technologies' => 'HTML5, jQuery, CSS, Canvas',
            'description' => '
                <p>
                    This avatar maker allowed users to build custom characters with facial features, outfits, and acccessories, and allowed users to export and share their avatars.  I was responsible for the character rendering portion of the project.
                </p>',
            'links' => array(
                array('type' => 'sample', 'url' => 'https://github.com/ccamarillo/codeSamples/blob/master/avatarMaker.js'),
            ),
            'screenshots' => array(
                'avatarMaker.png',
                'avatarMaker2.png',
            )
        ),
        array(
            'title' => 'Insight',
            'type' => 'API-driven analytics platform',
            'thumbnail' => 'analytics_1.jpg',
            'dates' => '2013',
            'technologies' => 'PHP, Zend 2.0, MS-SQL, HTML5, jQuery, Backbone.js, Twitter Bootstrap',
            'description' => '
                <p>
                    How do you securely present visualizations of data from any number of sources to select users?  This project\'s stakeholder was using and out-of-the-box solution that was cumbersome and lacked highly desired functionality.  I built a platform that managed users, permissions, and dashboards, and allowed for a freeform presentation of any data from any source on the net.  The platform provides the security and infrastructure, but leaves the content of the dashboards to be freeform.  The interface, built in HTML5, is decoupled from the brains, which delivers content over a REST API, which could allow the front-end of the application to be converted into a hybrid mobile app. 
                </p>',
            'links' => array(
                array('type' => 'sample', 'url' => 'https://github.com/ccamarillo/codeSamples/blob/master/insight.js'),
            ),
            'screenshots' => array(
                'analytics_2.png',
            )
        ),
        array(
            'title' => 'Big Data Dashboard',
            'type' => 'data visualization',
            'thumbnail' => 'bigdata_1.jpg',
            'dates' => '2012',
            'technologies' => 'HTML5, LESS, jQuery',
            'description' => '
                <p>
                    A static website that gives users an idea of the amount of database created in real time.
                </p>',
            'links' => array(
                array('type' => 'live', 'url' => 'http://www.intel.com/content/www/us/en/big-data/big-data-dashboard.html?view=dataConsumptionQuiz'),
            ),
            'screenshots' => array(
                'bigdata1.png',
                'bigdata2.png',
                'bigdata3.png',
            )
        ),
        array(
            'title' => 'Chamber Music Northwest',
            'type' => 'data-driven website',
            'thumbnail' => 'cmnw_1.jpg',
            'dates' => '2004',
            'technologies' => 'PHP, MySQL, HTML, Javascript, CSS',
            'description' => '
                <p>
                    Back in early days at the Art Institute, I thought it a wise idea to start pursuing a student job that used my skills and interests, rather than working in fast food. My skills and interests being web design and music, I started checking out local music organizations whose websites I thought could use an overhaul. Chamber Music Northwest came up as an option. I reached out, and turns out, they\'d been looking for me for years! A fruitful relationship began. Here\'s some screenshots of my original design.  The organization continues to use the backend infrastructure.
                </p>
                <p>
                    Here are some screenshots of my original design.
                </p>',
            'links' => array(
                array('type' => 'live', 'url' => 'http://www.cmnw.org'),
            ),
            'screenshots' => array(
                'cmnw_1a.jpg',
                'cmnw_2.jpg',
                'cmnw_3.jpg',
                'cmnw_4.jpg',
                'cmnw_5.jpg',
            )
        ),
        array(
            'title' => 'FoodRoute',
            'type' => 'social media platform',
            'thumbnail' => 'foodroute_1.jpg',
            'dates' => '',
            'technologies' => 'PHP, Symfony 1.0, MySQL, HTML, jQuery',
            'description' => '
                <p>
                    FoodRoute.org is a pet project of a friend of mine and myself. It is in its fledgling stages at the moment, but will function as a community-generated data clearing house for food distribution networks, from seed to table.
                </p>',
            'links' => array(
                array('type' => 'live', 'url' => 'http://www.foodroute.org'),
            ),
            'screenshots' => array(
                'foodroute_1a.jpg',
                'foodroute_2.jpg',
                'foodroute_3.jpg'
            )
        ),
        array(
            'title' => 'SalesZ&uuml;m',
            'type' => 'sales platform',
            'thumbnail' => 'saleszum_1.jpg',
            'dates' => '2009-2010',
            'technologies' => 'PHP, Symfony 1.0, MySQL, HTML, jQuery',
            'description' => '
                <p>
                    SalesZum was a presentation builder developed for Spitball Media. Users could manage a sales team, a collection of assets like video, slideshows, and documents, and put it all together in a custom, secure application.  This startup did not quite make it off the ground.
                </p>',
            'links' => array(
            ),
            'screenshots' => array(
                'saleszum_1a.jpg',
                'saleszum_2.jpg',
                'saleszum_3.jpg',
                'saleszum_4.jpg',
                'saleszum_5.jpg',
                'saleszum_6.jpg',
            )
        ),
        array(
            'title' => 'ASUS Transformer',
            'type' => 'animated parallax product showcase',
            'thumbnail' => 'transformer_1.jpg',
            'dates' => '2012',
            'technologies' => 'HTML5, jQuery, LESS',
            'description' => '
                <p>
                    This product showcase featured a custom parallax animation. The live site has not been maintained &mdash; best viewed in Firefox.
                </p>',
            'links' => array(
                array('type' => 'sample', 'url' => 'https://github.com/ccamarillo/codeSamples/blob/master/transformer.js'),
                array('type' => 'live', 'url' => 'http://promos.asus.com/US/EeePadTransformerPrime/')
            ),
            'screenshots' => array(
                'transformer_1a.png',
                'transformer_2.png',
            )
        ),
        array(
            'title' => 'Western Star',
            'type' => 'product showcase',
            'thumbnail' => 'westernstar_1.jpg',
            'dates' => '2012',
            'technologies' => 'HTML5, jQuery, LESS',
            'description' => '
                <p>
                    A simple product showcase template with fluid layout.
                </p>',
            'links' => array(
                array('type' => 'sample', 'url' => 'https://github.com/ccamarillo/codeSamples/blob/master/westernStar.html'),
            ),
            'screenshots' => array(
                'truck1.png',
                'truck2.png',
            )
        ),
        array(
            'title' => 'What About Me?',
            'type' => 'social media infographic generator',
            'thumbnail' => 'wam_1.jpg',
            'dates' => '2012',
            'technologies' => 'PHP, MySQL, Zend 1.0, HTML5, LESS, jQuery, Raphael, d3',
            'description' => '
                <p>
                    Visualize your social media life.  This application reached out to Twitter, Youtube, and Facebook to retrieve your posts, likes, videos, tweets, and other generated content, analyzed it, and spit out a fancy infographic which could be shared.
                </p>',
            'links' => array(
                array('type' => 'sample', 'url' => 'https://github.com/ccamarillo/codeSamples/blob/master/whatAboutMe.php'),
            ),
            'screenshots' => array(
                'wam_1a.png',
                'wam_2.png',
            )
        ),
        array(
            'title' => 'AltRider.com',
            'type' => 'e-commerce solution',
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
                        <a href="#" class="contactLink">Contact</a> &nbsp;/&nbsp; <a href="#" class="projectsLink">Projects</a> &nbsp;/&nbsp; <a href="CandaceFoxCamarillo_Resume.pdf" target="resume">R&eacute;sum&eacute;</a>
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
                    </div>
                </div>

            </div>

        </div>

        <div class="jumbotron" id="thumbnailJumbo">
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
                </div>
            </div>
        </div>

        <div class="jumbotron trees thin"></div>

        <footer>
            <div class="container">
                <p class="pull-right">
                    <small>
                        <a href="#" class="contactLink">Contact</a> &nbsp;/&nbsp; <a href="#" class="projectsLink">Projects</a> &nbsp;/&nbsp; <a href="CandaceFoxCamarillo_Resume.pdf" target="resume">R&eacute;sum&eacute;</a>
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
