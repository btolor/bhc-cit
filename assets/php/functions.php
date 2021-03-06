<!-- PHP Header and Footer Functions... -->
<?php

    #HTML Head & Header
    /*
    PHP function to write out the page's html head and
    header markup using a heredoc string and a string 
    variable passed in as a variable for the document's 
    title...
    */ 
    function writeHead($pageTitle){
        #Stores the html head and header tags/data into a string variable... 
        // Starts the heredoc string variable...
        $head = <<<EOD
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>$pageTitle</title>
            <!-- FontAwesome Icons -->
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
                integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <!-- Google Fonts -->
            <!-- CSS Style Links -->
            <link rel="stylesheet" href="assets/css/reset.css">
            <link rel="stylesheet" href="assets/css/app.css">
            <link rel="stylesheet" href="assets/css/mmaster-css.css">
        </head>
        <body>
            <!-- start of header -->
            <header>
                <!-- start of container -->
                <div class="grid-container">
                    <!-- start of grid -->
                    <div class="grid-margin-x grid-x grid">
                        <!-- start of logo-sec -->
                        <div class="cell large-5 medium-6 small-10 logo-sec">
                            <a href="index.html">
                                <img src="assets/images/header-logo.png" alt="This is the WebDev logo image.">
                            </a>
                        </div>
                        <!-- end of log-sec -->
                        <!-- start of menu-sec -->
                        <div class="cell large-7 medium-6 small-1 menu-sec">
                            <a href="index.html">home</a>
                            <a href="about-us.html">about us</a>
                            <a href="faq.html">faq's</a>
                            <a href="contact-us.html">contact us</a>
                        </div>
                        <!-- end of menu-sec -->
                        <!-- start of mobile-menu -->
                        <div class="cell medium-6 small-2 mobile-menu">
                            <a href="#/" class="open-btn btn"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                        <!-- end of mobile-menu -->
                        <!-- start of mobile-links -->
                        <div class="mobile-links active">
                            <a href="#/" class="close-btn btn"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            <a href="index.html" class="link">home</a>
                            <a href="about-us.html" class="link">about us</a>
                            <a href="faq.html" class="link">faq's</a>
                            <a href="contact-us.html" class="link">contact us</a>
                        </div>
                        <!-- end of mobile-links -->
                    </div>
                    <!-- end of grid -->
                </div>
                <!-- end of container -->
            </header>
            <!-- end of header -->
EOD;
// Ends the heredoc string variable...
        #Displays the heredoc string variable's value... 
        echo $head;
    }

    #Footer
    /*
    PHP function to write out the page's footer markup
    using a heredoc string...
    */
    function writeFoot(){
        #Stores the current year value... 
        $year = date("Y");
        #Stores the footer/data tags in a heredoc string variable... 
        // Starts the heredoc string...
        $foot = <<<EOD
        <!-- start of footer  -->
        <footer>
            <!-- start of container -->
            <div class="grid-container">
                <!-- start of grid -->
                <div class="grid-margin-x grid-x grid">

                    <!-- start of logo -->
                    <div class="cell small-12 medium-4 large-4 logo">
                        <a href="index.html" target="_blank">
                            <img src="assets/images/footer-logo.png"
                                alt="This is an image of the WebDev footer logo.">
                        </a>
                    </div>
                    <!-- end of log -->

                    <!-- start of policy -->
                    <div class="cell small-12 medium-4 large-4 policy">
                        <a href="https://www.brookhavencollege.edu/pages/default.aspx">
                            <img src="assets/images/BHC-logobar-footer.png"
                                alt="This is an image of the footer's Brookhaven College verticle logo.">
                        </a>
                    </div>
                    <!-- end of policy -->

                    <!-- start of copywrights -->
                    <div class="cell small-12 medium-4 large-4 copywrights">
                        <a href="https://www.brookhavencollege.edu/pages/privacysecurity.aspx">Privacy Policy</a>
                        <p>Copyright © 2006-$year</p>
                    </div>
                    <!-- end of copywrights -->
                </div>
                <!-- end of grid -->
            </div>
            <!-- end of container -->
        </footer>
        <!-- end of footer -->
        <!-- Javascript/JQuery Links-->
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
    </html>
EOD; 
// Ends the heredoc string... 
        #Displays the heredoc string variable's value... 
        echo $foot;    
    }
?>