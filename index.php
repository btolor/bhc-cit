<!-- Start of head & header php code -->
<?php 
    #Adds the php functions file to the document... 
    require_once "functions.php";
    #Initializes and sets the title string variable...
    $title = "The Brookhaven CIT Department";
    /*
    Calls the php function to create the html markup for 
    the document's head and header...
    */
    writeHead($title); 
?>
<!-- End of head & header php code -->
<!-- start of main -->
<main>
    <!-- start of top-section -->
    <section class="top">
        <!-- start of container -->
        <div class="grid-container">
            <!-- start of grid -->
            <div class="grid-margin-x grid-x grid">
                <!-- start of promise -->
                <div class="cell small-12 medium-6 large-6 promise">
                    <h3>A Promising Future</h3>
                    <p>
                        One of the most promising and growing career fields today is Web Design and Development,
                        which offers every individual great potential to exceed.
                    </p>

                    <!-- start of enroll -->
                    <div class="enroll">
                        <a href="https://www.brookhavencollege.edu/apply-reg/apply/pages/default.aspx"
                            target="_blank" aria-label="https://www.brookhavencollege.edu/apply-reg/apply/pages/default.aspx" rel="noopener">enroll now</a>
                    </div>
                    <!-- end of enroll -->


                </div>
                <!-- start of promise-img -->
                <div class="cell small-12 medium-6 large-6 promise-img">
                    <img src="assets/images/computer-code.jpg"
                        alt="This is an image of some computer information technology coding.">
                </div>
                <!-- end of promise-img -->
            </div>
            <!-- end of grid -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of top-section -->

    <!-- start of slogan -->
    <section class="slogan">
        <!-- start of container -->
        <div class="grid-container">
            <!-- start of grid -->
            <div class="grid-margin-x grid-x grid">
                <p class="text-center">
                    Learn the industry's most in-demand skills
                    and begin designing and developing technology for the future.
                </p>
                <hr id="hr">
            </div>
            <!-- end of grid -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of solgan -->

    <!-- start of bottom-section -->
    <section class="bottom">
        <!-- start of container -->
        <div class="grid-container">
            <!-- start of grid -->
            <div class="grid-margin-x grid-x grid flex-container">

                <!-- start of cit-card -->
                <div class="cell small-12 medium-12 large-4 cit card">
                    <!-- start of title -->
                    <div class="title">
                        <h3>CIT Programs</h3>
                    </div>
                    <!-- end of title -->
                    <!-- start of info -->
                    <div class="info">
                        <img src="assets/images/programming-student.jpg"
                            alt="This is an image for the CIT programs information card.">

                        <h6>Programming Languages</h6>

                        <p>
                            Our affordable courses range from in-person to online, and cover many topics and
                            coding
                            languages that are currently in high demand, such as:
                        </p>

                        <a href="https://www.brookhavencollege.edu/cd/credit/information-technology/pages/guided-pathways.aspx" target="_blank" aria-label="https://www.brookhavencollege.edu/cd/credit/information-technology/pages/guided-pathways.aspx" rel="noopener" class="list">
                            <ul>
                                <li>ASP.NET</li>
                                <li>CSS3</li>
                                <li>HTML5</li>
                                <li>JavaScript</li>
                                <li>MySQL</li>
                                <li>PHP</li>
                            </ul>
                        </a>

                        <h6>Degrees And Certificates</h6>
                        <p>
                            Brookhaven College offers a multitude of certificates and Associate degrees within
                            the following fields of study:
                        </p>

                        <a href="https://www.brookhavencollege.edu/cd/credit/information-technology/pages/degrees-cert.aspx" target="_blank" aria-label="https://www.brookhavencollege.edu/cd/credit/information-technology/pages/degrees-cert.aspx" rel="noopener" class="list">
                            <ul>
                                <li>Computer Science</li>
                                <li>Gaming</li>
                                <li>Information Security</li>
                                <li>Mobile Applications</li>
                                <li>Networking</li>
                                <li>Personal Computer Support</li>
                                <li>Software Programming and Development</li>
                                <li>Web Design and Development</li>
                            </ul>
                        </a>

                        <a href="https://www.brookhavencollege.edu/cd/credit/information-technology/pages/default.aspx" class="btn" target="_blank" aria-label="https://www.brookhavencollege.edu/cd/credit/information-technology/pages/default.aspx" rel="noopener">more info</a>
                    </div>
                    <!-- end of info -->
                </div>
                <!-- end of cit-card -->

                <!-- start of bhc-card -->
                <div class="cell small-12 medium-12 large-4 cit card">
                    <!-- start of title -->
                    <div class="title">
                        <h3>Brookhaven College</h3>
                    </div>
                    <!-- end of title -->
                    <!-- start of info -->
                    <div class="info">
                        <img src="assets/images/brookhaven-college.jpg"
                            alt="This is an image for the CIT programs information card.">
                        <h6>Who We Are</h6>
                        <p>
                            We are a diverse and dynamic program of courses covering all aspects of the computer
                            technology.
                        </p>
                        <h6>What We Offer</h6>
                        <p>
                            As technology continually changes, Brookhaven College offers the latest skills and
                            courses in programming that are required to thrive in the field of web design and
                            development. We have affordable day, evening, and online courses that are
                            transferable
                            for students interested in transferring to a four-year university.
                        </p>
                        <h6>An Experienced Faculty</h6>
                        <p>
                            The faculty at Brookhaven College is made up of individuals who are professionals
                            with years of experience in multiple fields of Computer Information Technology. Our
                            instructors are here to ensure that you obtain skills that are needed to be
                            successful in your field of study.
                        </p>
                        <a href="https://www.brookhavencollege.edu/pages/default.aspx" class="btn bhc-btn" target="_blank" aria-label="https://www.brookhavencollege.edu/pages/default.aspx" rel="noopener">more info</a>
                    </div>
                    <!-- end of info -->
                </div>
                <!-- end of bhc-card -->



                <!-- start of stats-card -->
                <div class="cell small-12 medium-12 large-4 stats card">
                    <!-- start of title -->
                    <div class="title">
                        <h3>Careers</h3>
                    </div>
                    <!-- end of title -->
                    <!-- start of info -->
                    <div class="info">
                        <img src="assets/images/labor-statistics.jpg"
                            alt="This is an image for the CIT programs information card.">
                        <h6>Job Outlook</h6>

                        <p>
                            According to the U.S. Bureau of Labor Statistics, employment opportunities for those
                            seeking
                            to become web developers, is expected to grow 13 percent between 2018 and 2028.
                        </p>

                        <h6>Wages</h6>
                        <p>
                            The following wage information comes directly from the U.S. Department of Labor's
                            Bureau of
                            Labor Statistics, Occupational Employment Statistics Program. The data is from the
                            May 2018
                            estimate, which is the latest information gathered.
                        </p>


                        <a href="https://www.careeronestop.org/Toolkit/Wages/find-salary.aspx?keyword=Web%20Developers&soccode=151134&location=Dallas,%20TX"
                            target="_blank" aria-label="https://www.careeronestop.org/Toolkit/Wages/find-salary.aspx?keyword=Web%20Developers&soccode=151134&location=Dallas,%20TX" rel="noopener" class="graph-link">
                            <h6>Wages for Web Developers</h6>
                            <!-- start of graph -->
                            <div class="graph">
                                <!-- start of high -->
                                <div class="high data">
                                    <span class="bracket">High</span>
                                    <!-- start of bars -->
                                    <div class="bars">
                                        <hr class="us">
                                        <hr class="tx">
                                    </div>
                                    <!-- end of bars -->
                                    <!-- start of numbers -->
                                    <div class="numbers">
                                        <span class="usa">$124k</span>
                                        <span class="dfw">$118k</span>
                                    </div>
                                    <!-- end of numbers -->
                                </div>
                                <!-- end of high -->
                                <!-- start of med -->
                                <div class="med data">
                                    <span class="bracket">med</span>
                                    <!-- start of bars -->
                                    <div class="bars">
                                        <hr class="us">
                                        <hr class="tx">
                                    </div>
                                    <!-- end of bars -->
                                    <!-- start of numbers -->
                                    <div class="numbers">
                                        <span class="usa">$69k</span>
                                        <span class="dfw">$74k</span>
                                    </div>
                                    <!-- end of numbers -->
                                </div>
                                <!-- end of med -->
                                <!-- start of low -->
                                <div class="low data">
                                    <span class="bracket">low</span>
                                    <!-- start of bars -->
                                    <div class="bars">
                                        <hr class="us">
                                        <hr class="tx">
                                    </div>
                                    <!-- end of bars -->
                                    <!-- start of numbers -->
                                    <div class="numbers">
                                        <span class="usa">$38k</span>
                                        <span class="dfw">$45k</span>
                                    </div>
                                    <!-- end of numbers -->
                                </div>
                                <!-- end of low -->
                                <!-- start of region -->
                                <div class="region">
                                    <!-- start of dfw -->
                                    <div class="dfw area">
                                        <!-- start of color -->
                                        <div class="color">
                                            <hr>
                                        </div>
                                        <!-- end of color -->
                                        <p>Dallas Tx</p>
                                    </div>
                                    <!-- end of dfw -->
                                    <!-- start of usa -->
                                    <div class="usa area">
                                        <!-- start of color -->
                                        <div class="color">
                                            <hr>
                                        </div>
                                        <!-- end of color -->
                                        <p>U.S.A.</p>
                                    </div>
                                    <!-- end of usa -->
                                </div>
                                <!-- end of region -->
                            </div>
                            <!-- end of graph -->
                        </a>

                        <a href="https://www.bls.gov/OOH/computer-and-information-technology/web-developers.htm#tab-6"
                            class="btn" target="_blank" aria-label="https://www.bls.gov/OOH/computer-and-information-technology/web-developers.htm#tab-6" rel="noopener">more info</a>
                    </div>
                    <!-- end of info -->
                </div>
                <!-- end of stats-card -->


            </div>
            <!-- end of grid -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of bottom-section -->

    <!-- start of location-section -->
    <section class="location">
        <!-- start of container -->
        <div class="grid-container">
            <!-- start of grid -->
            <div class="grid-margin-x grid-x grid">

                <!-- start of address -->
                <div class="cell small-12 medium-6 large-6 address">
                    <img src="assets/images/BHC-vertical-RGB.png"
                        alt="This is an image of the footer's Brookhaven College verticle logo.">
                    <h4 id="name">Professor Stephen Herd</h4>
                    <!-- start of street -->
                    <div class="street">
                        <a href="https://www.google.com/maps/place/Brookhaven+College/@32.9293813,-96.8520996,17z/data=!3m1!4b1!4m5!3m4!1s0x864c272414eacf6f:0x2e46190b48ff20c!8m2!3d32.9293568!4d-96.8500684"
                            target="_blank" aria-label="https://www.google.com/maps/place/Brookhaven+College/@32.9293813,-96.8520996,17z/data=!3m1!4b1!4m5!3m4!1s0x864c272414eacf6f:0x2e46190b48ff20c!8m2!3d32.9293568!4d-96.8500684" rel="noopener">
                            <!-- start of icon -->
                            <div class="icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <!-- end of icon -->
                            <!-- start of content -->
                            <div class="content">
                                <p>3939 Valley View Lane</p>
                                <p>Farmers Branch, TX 75244</p>
                            </div>
                            <!-- end of content -->
                        </a>
                    </div>
                    <!-- end of street -->
                     <!-- start of info -->
                     <div class="info">
                        <!-- <h4 id="name">Professor Stephen Herd</h4> -->
                        <h4 id="office"><i class="fa fa-building" aria-hidden="true"></i>Bldg K, Room K104</h4>
                        <h4 id=""email><a href="mailto:sherd@dcccd.edu" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i>sherd@dcccd.edu</a></h4>
                        <h4 id=""number><i class="fa fa-phone" aria-hidden="true"></i>972.860.4329</h4>
                        <!-- <h4 id=""number><i class="fa fa-phone-square" aria-hidden="true"></i>: 972.860.4329 </h4> -->
                    </div>
                    <!-- end of info -->
                </div>
                <!-- end of address -->

                <!-- start of map -->
                <div class="cell small-12 medium-6 large-6 map">
                    <a href="https://www.brookhavencollege.edu/maps/pages/default.aspx" target="_blank">
                        <img src="assets/images/BHC-campus-map.png"
                            alt="This is an image of the Brookhaven College campus map and buildings.">
                    </a>
                    <!-- <a href="https://www.google.com/maps/place/Brookhaven+College/@32.9295613,-96.8553309,15.75z/data=!4m5!3m4!1s0x864c272414eacf6f:0x2e46190b48ff20c!8m2!3d32.9293568!4d-96.8500684" target="_blank"
                    aria-label="https://www.google.com/maps/place/Brookhaven+College/@32.9295613,-96.8553309,15.75z/data=!4m5!3m4!1s0x864c272414eacf6f:0x2e46190b48ff20c!8m2!3d32.9293568!4d-96.8500684" rel="noopener">
                        <img src="assets/images/BHC-street-map.png" alt="This is an image of a map view of the Brookhaven College location.">
                    </a> -->
                </div>
                <!-- end of map -->

            </div>
            <!-- end of grid -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of location-section -->
    <!-- start of contact-section -->
    <section class="contact-info">
        <!-- start of container -->
        <div class="grid-container">
            
        </div>
        <!-- end of container -->
    </section>
    <!-- end of contact-section -->
</main>
<!-- end of main -->
<!-- Start of footer php code -->
<?php writeFoot(); ?>
<!-- End of footer php code -->