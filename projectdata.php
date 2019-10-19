<?php

    $projects = array(
        
        array(
            'title' => 'The Bully Project Mural',
            'type' => 'API-driven social media experience',
            'thumbnail' => 'bully_thumb.jpg',
            'dates' => '2014',
            'technologies' => 'Backbone.js, HTML5, SASS, Behance API',
            'description' => '
                <p>
                    Designed to support Adobe\'s partnership with <a href="http://thebullyproject.com" target="new">The Bully Project</a>, this collaborative experience features the work of artists from around the world.  The centerpiece of the site is a mosaic of featured artists\' works designed to form the anti-bullying logo.  These 16 pieces remain centered within the experience at all times.  This Backbone.js application ingests data from Behance.com, and was showcased at Adobe MAX 2014.  <a href="https://www.youtube.com/watch?v=21wzcLTKePc&feature=youtu.be#t=35m28s" target="new">Watch video of the unveiling.</a>
                </p>',
            'links' => array(
                array('type' => 'live', 'url' => 'http://thebullyprojectmural.com'),
            ),
            'screenshots' => array(
                'bully_combined.jpg',
            )
        ),
        array(
            'title' => 'Diller Teen Fellows',
            'type' => 'multilingual website',
            'thumbnail' => 'dtf_thumb.jpg',
            'dates' => '2014',
            'technologies' => 'ExpressionEngine, Foundation, HTML5, SASS, CoffeeScript',
            'description' => '
                <p>
                    One of the more interesting challenges of this website was the required support for both English and Hebrew, which reads right-to-left.  This affects not only text but general design.    
                </p>',
            'links' => array(
                array('type' => 'live', 'url' => 'http://dillerteenfellows.org'),
            ),
            'screenshots' => array(
                'dtf_full.jpg',
            )
        ),
        array(
            'title' => 'Exterro',
            'type' => 'CMS-driven website and blog',
            'thumbnail' => 'exterro_thumb.jpg',
            'dates' => '2014',
            'technologies' => 'Craft CMS, Bootstrap, Twig, HTML5, SASS, CoffeeScript',
            'description' => '
                <p>
                    A responsive website for an e-discovery software suite.  My first adventure with Craft CMS.
                </p>',
            'links' => array(
                array('type' => 'live', 'url' => 'http://exterro.com'),
            ),
            'screenshots' => array(
                'exterro_full.jpg',
            )
        ),
        array(
            'title' => 'mBytes',
            'type' => 'hybrid mobile app',
            'thumbnail' => 'mbytes_1.jpg',
            'dates' => '2013',
            'technologies' => 'PHP, Yii, MySQL, jQuery, Backbone.js, HTML5, SASS, Icenium',
            'description' => '
                <p>
                    Built for iOS and Android and supporting a range of device sizes, this mobile app distributes sales materials to users, with automatic updating and offline access.  All content is hosted on a web service (built with LAMP stack and Yii) and is distributed to users when they are online.  User account information and metrics are sent back to the web service.  The mobile app itself is built in HTML5 using the Backbone.js framework.  The web service provides a REST API, with models saved into local storage on the user\'s device.
                </p>',
            'links' => array(
                array('type' => 'sample', 'url' => 'https://github.com/ccamarillo/codeSamples/blob/master/mBytes.js')
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
                    How do you securely present visualizations of data from any number of sources to select users?  This project\'s stakeholder was using an out-of-the-box solution that was cumbersome and lacked highly desired functionality.  I built a platform that managed users, permissions, and dashboards, and allowed for a custom presentation of any data from any source on the net.  The platform provides the security and infrastructure, but leaves the content of the dashboards to be freeform.  The interface, built in HTML5, is decoupled from the backend, which delivers content over a REST API, allowing the front-end of the application to be converted into a hybrid mobile app. 
                </p>',
            'links' => array(
                array('type' => 'sample', 'url' => 'https://github.com/ccamarillo/codeSamples/blob/master/insight.js'),
            ),
            'screenshots' => array(
                'analytics_2.png',
            )
        ),
        /*
        array(
            'title' => 'Big Data Dashboard',
            'type' => 'data visualization',
            'thumbnail' => 'bigdata_1.jpg',
            'dates' => '2012',
            'technologies' => 'HTML5, LESS, jQuery',
            'description' => '
                <p>
                    A static website that gives users an idea of the amount of data created in real time.
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
        */
        /*array(
            'title' => 'Chamber Music Northwest',
            'type' => 'data-driven website',
            'thumbnail' => 'cmnw_1.jpg',
            'dates' => '2004',
            'technologies' => 'PHP, MySQL, HTML, JavaScript, CSS',
            'description' => '
                <p>
                    One of my first professional projects using PHP, the backend for this platform continues to drive CMNW\'s web presence.
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
        */
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
            'type' => 'sales presentation platform',
            'thumbnail' => 'saleszum_1.jpg',
            'dates' => '2009-2010',
            'technologies' => 'PHP, Symfony 1.0, MySQL, HTML, jQuery',
            'description' => '
                <p>
                    SalesZ&uuml;m was a presentation builder developed for Spitball Media. Users could manage a sales team, a collection of assets like videos, slideshows, and documents, and put it all together in a custom, secure application.  This startup did not quite make it off the ground.
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
                    This product showcase featured a custom parallax animation. The live site has not been maintained for modern browsers &mdash; best viewed in Firefox.
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
                    Visualize your social media life.  This application reached out to Twitter, YouTube, and Facebook to retrieve your posts, likes, videos, tweets, and other generated content, analyzed it, and produced a fancy infographic which could be shared.
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
            'technologies' => 'Symfony 1.0, PHP, MySQL, XHTML, CSS, jQuery',
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