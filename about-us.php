<!-- Start of head & header php code -->
<?php 
    #Adds the php functions file to the document... 
    require_once "functions.php";
    #Initializes and sets the title string variable...
    $title = "The Brookhaven CIT Department About Us";
    /*
    Calls the php function to create the html markup for 
    the document's head and header...
    */
    writeHead($title); 
?>
<!-- start of main -->
<main>
    <!-- start of intro-section -->
    <section class="intro">
        <!-- start of container -->
        <div class="grid-container">
            <h1 id="page-title">about us</h1>
        </div>
        <!-- end of container -->
    </section>
    <!-- end of intro-section -->
    <!-- start of students-section -->
    <section class="students">
        <!-- start of container -->
        <div class="grid-container">
            <!-- start of grid -->
            <div class="grid-margin-x grid-x flex-container grid">
                <!-- start of brandon -->
                <div class="cell small-12 medium-6 large-6 brandon student">
                    <!-- start of box -->
                    <div class="box">
                        <img src="assets/images/Brandon Tolor - Bio Photo.png" alt="This is an image of Brandon Tolor.">
                        <!-- start of info -->
                        <div class="info">
                            <!-- start of title -->
                            <div class="title">
                                <h3>Brandon Tolor</h3>
                            </div>
                            <!-- end of title -->
                            <p>
                                Hi, I am Brandon Tolor an email and web developer based in Dallas, Tx. 
                                I received an associate degree in Computer Information Technology 
                                (Software Programmer/Developer). While obtaining my associate degree I 
                                also became a self-taught email developer learning HTML, CSS, and Javascript.
                            </p>
                            <p>
                                I am also a techie that enjoys learning about new technologies and using 
                                different electronical gadgets. 
                            </p>
                            <p>
                                Some of my hobbies include binge-watching TV shows 
                                on Netflix, long-range target shooting, building web applications, and all genres 
                                of music.
                            </p>
                            
                            <!-- start of social-links -->
                            <div class="social-links">
                                <a href="https://www.facebook.com/brandon.tolor" target="_blank"  aria-label="https://www.facebook.com/brandon.tolor" rel="noopener"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/Tolor_Boy" target="_blank" aria-label="https://twitter.com/Tolor_Boy" rel="noopener"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/in/brandon-tolor-343098106/" target="_blank" aria-label="https://www.linkedin.com/in/brandon-tolor-343098106/" rel="noopener"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            </div>
                            <!-- end of social-links -->
                        </div>
                        <!-- end of info -->
                    </div>
                    <!-- end of box -->
                </div>
                <!-- end of brandon -->
                <!-- start of joshua -->
                <div class="cell small-12 medium-6 large-6 joshua student">
                    <!-- start of box -->
                    <div class="box">
                        <img src="assets/images/Joshua Kidd - Bio Photo.png" alt="This is an image of Joshua Kidd.">
                        <!-- start of info -->
                        <div class="info">
                            <!-- start of title -->
                            <div class="title">
                                <h3>Joshua Kidd</h3>
                            </div>
                            <!-- end of title -->
                            <p>
                                Having earned two Associate degrees (in “Science” and in “Art”) from DCCCD, Joshua Kidd is 
                                currently studying to obtain his third Associate degree (in “Web Production and Design”).
                            </p>
                            <p>
                                This coming summer semester, he will begin online classes at South Texas College to eventually 
                                earn four separate degrees: Three Associate degrees (in “Political Science”, “History”, and “Philosophy”), 
                                and one Bachelors degree (in “Computer and Information Technologies”).
                            </p>
                            <p>
                                In his spare time, Joshua enjoys reading, writing, and playing with his Golden Retriever, Jack.
                            </p>
                            <!-- start of social-links -->
                            <div class="social-links">
                                <a href="https://www.facebook.com/joshuamkidd" target="_blank" aria-label="https://www.facebook.com/joshuamkidd" rel="noopener"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/in/joshuamkidd/" target="_blank" aria-label="https://www.linkedin.com/in/joshuamkidd/" rel="noopener"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            </div>
                            <!-- end of social-links -->
                        </div>
                        <!-- end of info -->
                    </div>
                    <!-- end of box -->
                </div>
                <!-- end of joshua -->
            </div>
            <!-- end of grid -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of students-section -->
</main>
<!-- end of main -->
<!-- Start of footer php code -->
<?php writeFoot();?>
<!-- End of footer php code -->