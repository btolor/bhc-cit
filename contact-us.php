<!-- Start of head & header php code -->
<?php 
    #Adds the php functions file to the document... 
    require_once "assets/php/functions.php";
    #Initializes and sets the title string variable...
    $title = "The Brookhaven CIT Department Contact Us";

    #Creates the connection to the mysql-database and stores it inside of a variable... 
    $connection = mysqli_connect("localhost","root","root",'messages');

    #Database connection error message variable...
    $connectionError = "";

    #Database query results variable...
    $data = "";

    #Email address validation RegEx... 
    $emailRegEx = '/[-\w.]+@([A-z0-9]+\.)+[A-z]{2,4}/';

    #If/Else statement to check if the database connection worked... 
    if(!$connection){
        #If False:
        #Sets the connection error variable's message... 
        $connectionError = "Faild to connect to MySQL: ".mysqli_connect_error(); 
    }else{
        #If True:
        #Clears the connection error variable's message... 
        $connectionError = "";
    }

    #Display error message variables... 
    $subjectErr = "";
    $emailErr = "";
    $nameErr = "";
    $messageErr = "";

    /*
    Calls the php function to create the html markup for 
    the document's head and header...
    */
    writeHead($title); 




    #If/Else statement to check if the page's form has been submitted... 
    if(isset($_POST['submit'])){
        #If True: 
        #Form validation key... 
        $vaild = true; 

        #Subject... 
        /*
        Stores the value of the subject form field in a variable using the html 
        specialchars to avoid security issues and trim off the whitespaces...
        */
        $subject = htmlspecialchars($_POST['subject']);
        #If statement to see if name variable is empty... 
        if(empty($subject)){
            #If True:
            #stores an error message inside of the subject error message variable...
            $subjectErr = "Plaese enter a subject!"
            #Change the value of form validation key's value... 
            $vaild = false; 
        }

        #Email... 
        /*
        Stores the value of the email form field in a variable using the html 
        specialchars to avoid security issues and trim off the whitespaces...
        */
        $email = htmlspecialchars(trim($_POST['email']));
        
        if(!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
            #If True:
            #stores an error message inside of the email error message variable...
            $emailErr = "Plaese enter a valid email! e.g. johnsmith@email.com"
            #Change the value of form validation key's value... 
            $vaild = false; 
        }
        
        #Name... 
        /*
        Stores the value of the name form field in a variable using the html 
        specialchars to avoid security issues and trim off the whitespaces...
        */
        $name = htmlspecialchars($_POST['name']);
        #If statement to see if name variable is empty... 
        if(empty($name)){
            #If True:
            #stores an error message inside of the name error message variable...
            $nameErr = "Plaese enter a name!"
            #Change the value of form validation key's value... 
            $vaild = false; 
        }

        #Message... 
        /*
        Stores the value of the message form field in a variable using the html 
        specialchars to avoid security issues and trim off the whitespaces...
        */
        $message = htmlspecialchars($_POST['message']);
        #If statement to see if message variable is empty... 
        if(empty($message)){
            #If True:
            #stores an error message inside of the name error message variable...
            $messageErr = "Plaese enter a message!"
            #Change the value of form validation key's value... 
            $vaild = false; 
        }

    }else{
        #If False:
        #Sticky form field variables... 
        $subject = "";
        $email = "";
        $name = "";
        $message = "";
    }

?>

<!-- start of main -->
<main>
    
    <!-- start of intro-section -->
    <section class="intro">
        <!-- start of container -->
        <div class="grid-container">
            <h1 id="page-title">contact us</h1>
            <p class="text-center">
                For more information about the Web Design and Development program at 
                Brookhaven College, please contact:
            </p>
        </div>
        <!-- end of container -->
    </section>
    <!-- end of intro-section -->

    <!-- start of content-section -->
    <section class="content">
        <!-- start of container -->
        <div class="grid-container">
            <!-- start of grid -->
            <div class="grid-margin-x grid-x grid">

                <!-- start of info-box -->
                <div class="cell small-12 medium-6 large-7 info-box">
                    <!-- start of info -->
                    <div class="info">
                        <h4 id="name">Professor Stephen Herd</h4>
                        <h4 id="office"><i class="fa fa-building" aria-hidden="true"></i>: Bldg K, Room K104</h4>
                        <h4 id=""email><a href="mailto:sherd@dcccd.edu" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i>: sherd@dcccd.edu</a></h4>
                        <h4 id=""number><i class="fa fa-phone-square" aria-hidden="true"></i>: 972.860.4329 </h4>
                    </div>
                    <!-- end of info -->
                    <a href="#/">
                        <img src="assets/images/Screenshot 2020-04-24 at 3.56.50 AM.png" alt="">
                    </a>
                </div>
                <!-- end of info-box -->
                <!-- start of form-box -->
                <div class="cell small-12 medium-6 large-5 form-box">
                    <h3 class="text-center">leave a message:</h3>
                    <!-- start of form -->
                    <form action="contact-us.html" method="post">
                        <input type="text" name="subject" id="subject-input" placeholder="Subject:" value="<?php echo $subject;?>">
                        <span><?php echo $subjectErr;?></span>
                        <input type="email" name="email" id="email-input" placeholder="Email:" value="<?php echo $email;?>">
                        <span><?php echo $emailErr;?></span>
                        <input type="text" name="name" id="name-input" placeholder="Name:" value="<?php echo $name;?>">
                        <span><?php echo $nameErr;?></span>
                        <textarea name="message" id="message-input" cols="40" rows="6" placeholder="Message:"  value="<?php echo $message;?>"></textarea>
                        <span><?php echo $messageErr;?></span>
                        <input type="submit" name="submit" value="Submit" id="submit">
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of form-box -->

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