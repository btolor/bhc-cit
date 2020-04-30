<!-- Start of head & header php code -->
<?php 
    #Adds the php functions file to the document... 
    require_once "assets/php/functions.php";
    #Initializes and sets the title string variable...
    $title = "The Brookhaven CIT Department FAQ's";
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
            <h1 id="page-title">faq's</h1>
        </div>
        <!-- end of container -->
    </section>
    <!-- end of intro-section -->
    <!-- start of content-section -->
    <section class="content">
        <!-- start of container -->
        <div class="grid-container">
            <!-- start of grid -->
            <div class="grid-margin-x grid-x grid flex-container">
                <!-- start of current-students questions -->
                <div class="cell small-12 medium-6 large-6 current-students questions card">
                    <!-- start of title -->
                    <div class="title">
                        <h3>Current Studens</h3>
                    </div>
                    <!-- end of title -->
                    <!-- start of box -->
                    <div class="box">
                        <img src="assets/images/people-wearing-backpacks-1454360.jpg" alt="This is an image for the current students FAQ's box.">
                        
                        <!-- start of question-box -->
                        <div class="question-box">
                            <h6>How Do I Check My Grades?</h6>

                            <p>
                                To check your grades for the classes that you are enrolled in, go to 
                                and log in using your <strong> ID number (ex. e1234567@student.dcccd.edu)</strong> 
                                and password. Once logged in, please click on the specific class, and search 
                                for the <strong>“My Grades”</strong> link within the drop-down menu on the left-hand side of your screen.
                            </p> 
                        </div>
                        <!-- end of question-box -->

                    </div>
                    <!-- end of box -->
                    
                </div>
                <!-- end of current-students-questions -->
                <!-- start of prespective-students questions -->
                <div class="cell small-12 medium-6 large-6 prespective-students questions card">
                    <!-- start of title -->
                    <div class="title">
                            <h3>Prespective Studens</h3>
                        </div>
                        <!-- end of title -->
                        <!-- start of box -->
                        <div class="box">
                            <img src="assets/images/photo-of-woman-holding-mug-3184647.jpg" alt="This is an image for the prespective students FAQ's box.">
                            <!-- start of question-box -->
                            <div class="question-box">
                                <h6>How Do I Register for Classes?</h6>
                                <p>
                                    To register for classes with DCCCD, go to econnect.dcccd.edu and search for the 
                                    tab that says <strong>“Register for Classes”</strong>. Once you click on any of the options presented, 
                                    you will be required to sign in using your student ID number and your password.
                                </p>
                            </div>
                            <!-- end of question-box -->
                        </div>
                        <!-- end of box -->
                    
                    

                </div>
                <!-- end of prespective-students-questions -->
            </div>
            <!-- end of grid -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of content-section -->
</main>
<!-- end of main -->
<!-- Start of footer php code -->
<?php writeFoot();?>
<!-- End of footer php code -->