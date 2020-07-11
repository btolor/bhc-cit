<!-- Start of head & header php code -->
<?php 
    #Adds the php functions file to the document... 
    require_once "functions.php";
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
                        <img src="assets/images/students.jpg" alt="This is an image for the current students FAQ's box.">
                        
                        <!-- start of question-box -->
                        <div class="question-box">
                            <h6>How Do I Check My Grades?</h6>
                            <p>
                                To check your grades for the classes that you are enrolled in, go to 
                                <strong><a href="https://dcccd.blackboard.com/" aria-label="https://dcccd.blackboard.com/" rel="noopener">dcccd.blackboard.com</a></strong> 
                                and log in using your student ID number and password. Once logged in, 
                                please click on the specific class, and search for the “My Grades” link 
                                within the drop-down menu on the left-hand side of your screen.
                            </p> 

                            <h6>When is the Last Day to Drop a Class?</h6>
                            <p>
                                The last day to drop a class for each term can be found on the 
                                <strong><a href="https://www1.dcccd.edu/catalog/generalinfo/acadcalendar/academic_calendar.cfm" aria-label="https://www1.dcccd.edu/catalog/generalinfo/acadcalendar/academic_calendar.cfm" rel="noopener">Academic Calendar</a></strong>. 
                                If you officially withdraw from all or a portion of your class load, 
                                your tuition and mandatory fees will be refunded according to 
                                the refund schedule listed in the <strong><a href="https://www1.dcccd.edu/catalog/collection.cfm?loc=dcccd" aria-label="https://www1.dcccd.edu/catalog/collection.cfm?loc=dcccd" rel="noopener">catalog</a></strong>.
                            </p>

                            <h6>How Do I Apply for Graduation?</h6>
                            <p>
                                Before attending the graduation ceremony, you must first fill out the Application 
                                for Graduation form, as this is the only way to ensure that you receive your 
                                certificate or diploma. See the Graduation Information page for more information 
                                about this process.
                            </p>

                            <h6>Can I Apply for Graduation at Any One of DCCCD’s Seven Colleges?</h6>
                            <p>
                                In order to graduate, you must apply for graduation with the college from which you 
                                plan to graduate from. 25% of your credit hours (that are required for graduation in 
                                any degree program or certificate) must be obtained through the college that is granting 
                                you the degree. For example, if you are a student at Brookhaven College, you must 
                                apply for graduation at Brookhaven.
                            </p>

                            <h6>How do I Request a DCCCD Transcript Online?</h6>
                            <p id="transcript">
                                You may request a free copy of your official transcript online by doing the following:
                                <ol>
                                    <li>Go to (<strong><a href="http://econnect.dcccd.edu" aria-label="http://econnect.dcccd.edu" rel="noopener">connect.dcccd.edu</a></strong>).</li>
                                    <li>Select the Current Credit Student Menu.</li>
                                    <li>LOG IN to see all your menu options.</li>
                                    <li>Note: You will need your 7 digit Student ID# and Password to log in.</li>
                                    <li>Select "My Personal Information"</li>
                                    <li>Select "Request My Transcript"</li>
                                    <li>Follow the prompts to complete your request.</li>
                                </ol>
                            </p>

                            <h6>What is DCCCD's Tuition Refund Policy?</h6>
                            <p>
                                The DCCCD Tuition Refund Policy can be found in the <strong><a href="https://www1.dcccd.edu/catalog/collection.cfm?loc=dcccd" aria-label="https://www1.dcccd.edu/catalog/collection.cfm?loc=dcccd" rel="noopener">catalog</a></strong>. 
                                If you pay by credit card and subsequently receive a waiver or other financial aid (stipend, scholarship, grant, etc.), your refund will be processed through 
                                <strong><a href="https://www.dcccd.edu/pc/whenwhere/dr/pages/erefunds.aspx" aria-label="https://www.dcccd.edu/pc/whenwhere/dr/pages/erefunds.aspx" rel="noopener">eRefunds</a></strong>.
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
                            <img src="assets/images/prespective-students.jpg" alt="This is an image for the prespective students FAQ's box.">
                            <!-- start of question-box -->
                            <div class="question-box">

                                <h6>How Much Do Classes Through DCCCD cost?</h6>
                                <p>
                                    DCCCD offers one of the lowest tuition rates in Texas, with classes costing just $79 per credit hour 
                                    for Dallas County residents.
                                </p>

                                <h6>How Do I Apply for College?</h6>
                                <p>
                                    Potential students who are new to college must complete an application for admission by 
                                    <strong><a href="https://www.dcccd.edu/apply-reg/apply/pages/default.aspx" target="_blank" aria-label="https://www.dcccd.edu/apply-reg/apply/pages/default.aspx" rel="noopener">clicking here</a></strong>. 
                                    If you are an international student, please visit the <strong><a href="https://www.dcccd.edu/apply-reg/international/pages/default.aspx" aria-label="https://www.dcccd.edu/apply-reg/international/pages/default.aspx" rel="noopener">International Student Admission page</a></strong> 
                                    for more information, or to contact us with any questions.
                                </p>

                                <h6>How Do I Register for Classes?</h6>
                                <p>
                                    To register for classes with DCCCD, go to <strong><a href="http://www.econnect.dcccd.edu/" aria-label="http://www.econnect.dcccd.edu/" rel="noopener">econnect.dcccd.edu</a></strong> 
                                    and search for the tab that says “Register for Classes”. Once you click on any of the options presented, you will be required to sign in using your student ID number (ex. e1234567@student.dcccd.edu) 
                                    and your password.
                                </p>
                                
                                <h6>Is Financial Aid Available for My Class?</h6>
                                <p>
                                    To ensure that any of your courses are eligible for Financial Aid, please check the college's schedule online. 
                                    Any classes that are eligible for Financial Aid are clearly marked next to the course title "Eligible for 
                                    Financial Aid", and are highlighted in green.  
                                    <strong><a href="https://www.brookhavencollege.edu/pc/fa/stepbystep/pages/default.aspx" aria-label="https://www.brookhavencollege.edu/pc/fa/stepbystep/pages/default.aspx" rel="noopener">Click here</a></strong> to see a step-by-step process and to find the proper forms that you 
                                    will need in order to apply for Financial Aid.
                                </p>

                                <h6>How Do I Set Up a Payment Plan?</h6>
                                <p>
                                    Payment plans are only available for the Fall and Spring semesters. You may setup a Payment Plan (PP) online through 
                                    <strong><a href="https://econnect.dcccd.edu/eConnect/eConnect?type=M&constituency=WBST&pid=CORE-WBST&TOKENIDX=6773195613" aria-label="https://econnect.dcccd.edu/eConnect/eConnect?type=M&constituency=WBST&pid=CORE-WBST&TOKENIDX=6773195613" rel="noopener">eConnect</a></strong> 
                                    (which requires login), or in person at your college <strong><a href="https://www.dcccd.edu/pc/whenwhere/pages/busoffice.aspx" aria-label="https://www.dcccd.edu/pc/whenwhere/pages/busoffice.aspx" rel="noopener">Business Office</a></strong>. 
                                    More information about payment plans and the conditions that apply can be found in the 
                                    <strong><a href="https://www1.dcccd.edu/catalog/collection.cfm?loc=dcccd" aria-label="https://www1.dcccd.edu/catalog/collection.cfm?loc=dcccd" rel="noopener">catalog</a></strong>.
                                </p>
                                
                                <h6>Where Can I Buy My Books?</h6>
                                <p>
                                    Certain courses require that you purchase textbooks, which can vary in cost. Textbooks can be purchased at the Follett 
                                    bookstore on the Brookhaven College campus, or through the online college bookstore: 
                                    <strong><a href="https://www.brookhavencollege.edu/services/academic-support/textbooks/pages/default.aspx" aria-label="https://www.brookhavencollege.edu/services/academic-support/textbooks/pages/default.aspx" rel="noopener">click here</a></strong>.
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