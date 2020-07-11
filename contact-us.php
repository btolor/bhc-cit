<!-- Start of head & header php code -->
<?php 
    #Adds the php functions file to the document... 
    require_once "functions.php";
    #Initializes and sets the title string variable...
    $title = "The Brookhaven CIT Department Contact Us";

    #Creates the connection to the mysql-database and stores it inside of a variable... 
    $connection = mysqli_connect("localhost","root","root",'messages');

    #Database connection error message variable...
    $connectionError = "";

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
    $fNameErr = "";
    $lNameErr = "";
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
        $valid = true; 

        #Subject... 
        /*
        Stores the value of the subject form field in a variable using the html 
        specialchars to avoid security issues and trim off the whitespaces...
        */
        $subject = htmlspecialchars(trim($_POST['subject']));
        #If statement to see if name variable is empty... 
        if(empty($subject)){
            #If True:
            #stores an error message inside of the subject error message variable...
            $subjectErr = "*Plaese enter a subject!";
            #Change the value of form validation key's value... 
            $valid = false; 
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
            $emailErr = "*Invalid enter a valid email! e.g. johnsmith@email.com";
            #Change the value of form validation key's value... 
            $valid = false; 
        }
        
        #First-Name... 
        /*
        Stores the value of the fName form field in a variable using the html 
        specialchars to avoid security issues and trim off the whitespaces...
        */
        $fName = htmlspecialchars(trim($_POST['fName']));
        #If statement to see if  variable is empty... 
        if(empty($fName)){
            #If True:
            #stores an error message inside of the fName error message variable...
            $fNameErr = "*Invalid!";
            #Change the value of form validation key's value... 
            $valid = false; 
        }

        #Last-Name... 
        /*
        Stores the value of the lName form field in a variable using the html 
        specialchars to avoid security issues and trim off the whitespaces...
        */
        $lName = htmlspecialchars(trim($_POST['lName']));
        #If statement to see if lname variable is empty... 
        if(empty($lName)){
            #If True:
            #stores an error message inside of the lName error message variable...
            $lNameErr = "*Invalid!";
            #Change the value of form validation key's value... 
            $valid = false; 
        }

        #Number
        /*
        Stores the value of the phone number form field in a variable using the html 
        specialchars to avoid security issues and trim off the whitespaces...
        */
        $number = htmlspecialchars(trim($_POST['number']));
        
        #Message... 
        /*
        Stores the value of the message form field in a variable using the html 
        specialchars to avoid security issues and trim off the whitespaces...
        */
        $message = htmlspecialchars(trim($_POST['message']));
        #If statement to see if message variable is empty... 
        if(empty($message)){
            #If True:
            #stores an error message inside of the name error message variable...
            $messageErr = "*Plaese enter a message!";
            #Change the value of form validation key's value... 
            $valid = false; 
        }

        #If statement to check the value of the validation varisable for the contact form... 
        if($valid){
            #Initializes and sets the name variable with the value of the first and last name... 
            $name = $fName." ".$lName;
            #Stores a sql statement to insert data into the contact_us database...
            $newMessage = "insert into contact_us values(default,'$name','$number','$email','$subject','$message',default)";
            #Runs a sql query to the specified database with the specified sql statement...
            mysqli_query($connection,$newMessage) or die(mysqli_error($connection));
            #Clears the form field values when the contact fornm has successfully been submitted...
            $subject = "";
            $email = "";
            $fName = "";
            $lName = "";
            $number = "";
            $message = "";
        }
    }else{
        #If False:
        #Sticky form field variables... 
        $subject = "";
        $email = "";
        $fName = "";
        $lName = "";
        $number = "";
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
                    <a href="https://www.google.com/maps/place/Brookhaven+College/@32.9295613,-96.8553309,15.75z/data=!4m5!3m4!1s0x864c272414eacf6f:0x2e46190b48ff20c!8m2!3d32.9293568!4d-96.8500684" target="_blank"
                    aria-label="https://www.google.com/maps/place/Brookhaven+College/@32.9295613,-96.8553309,15.75z/data=!4m5!3m4!1s0x864c272414eacf6f:0x2e46190b48ff20c!8m2!3d32.9293568!4d-96.8500684" rel="noopener">
                        <img src="assets/images/BHC-street-map.png" alt="This is an image of a map view of the Brookhaven College location.">
                    </a>
                </div>
                <!-- end of info-box -->
                <!-- start of form-box -->
                <div class="cell small-12 medium-6 large-5 form-box">
                    <h3 class="text-center">leave a message:</h3>
                    <!-- start of form -->
                    <form action="contact-us.php" method="post">
                        <label for="subject-input">Subject</label>
                        <input type="text" name="subject" id="subject-input" placeholder="Subject:" value="<?php echo $subject;?>">
                        <span><?php echo $subjectErr;?></span>
                        <label for="email-input">Email</label>
                        <input type="email" name="email" id="email-input" placeholder="Email:" value="<?php echo $email;?>">
                        <span><?php echo $emailErr;?></span>
                        <label for="fName-input">First Name</label>
                        <input type="text" name="fName" id="fName-input" placeholder="First Name:" value="<?php echo $fName;?>">
                        <span><?php echo $fNameErr;?></span>
                        <label for="lName-input">Last Name</label>
                        <input type="text" name="lName" id="lName-input" placeholder="Last Name:" value="<?php echo $lName;?>">
                        <span><?php echo $lNameErr;?></span>
                        <label for="number-input">Phone Number</label>
                        <input type="tel" name="number" id="number-input" placeholder="Phone:" value="<?php echo $number;?>">
                        <label for="message-input">Message</label>
                        <textarea name="message" id="message-input" cols="40" rows="6" placeholder="Message:"  value="<?php echo $message;?>"></textarea>
                        <span><?php echo $messageErr;?></span><br>
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