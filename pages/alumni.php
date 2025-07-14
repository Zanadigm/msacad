<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Our contacts at Mombasa Academy " />
    <meta name="keywords" content="Mombasa Academy, Our Contacts, Email" />
    <meta name="author" content="Zana Dynamics" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="stylesheet" type="text/css" href="../css/layout.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="../images/logo.png" rel="icon" sizes="16x16 32x32" type="image/x-icon">
    <title>Contact Us at Mombasa Academy</title>

    <style>
        
    </style>
</head>

<body><?php include_once("../analyticstracking.php") ?>
    <header class="header-container">
        <?php include_once("../includes/header.php") ?>
        <div class="banner" style="background-image: url(../images/overlay.jpg)"></div>
    </header>
    <div class="flex margin-medium">
        <div class="enquiries_form">
            <div class="form">
                <h1 style="margin-bottom: 20px;">Get in touch</h1>
                <h4 class="centeralign">Fields indicated with the red asterisk &#40;
                    <span class="red">&#42;</span>
                    &#41; are mandatory for the form to be accepted.
                </h4>

                <form action="../includes/formmailer.php" id="request" method="post" name="request">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name<span class="red">&#42;</span></label>
                            <input type="text" id="fname" name="fname" placeholder="First name" size="25" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name<span class="red">&#42;</span></label>
                            <input type="text" id="lname" name="lname" placeholder="Last name" size="25" type="text" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">Email Address<span class="red">&#42;</span></label>
                            <input type="text" id="email" name="email" placeholder="Email address" size="25" type="email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="subj">Subject of Enquiry<span class="red">&#42;</span></label>
                            <input type="text" id="subj" name="subj" placeholder="Subject of Enquiry" size="25" type="text" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="info">Type your Enquiry here</label>
                            <textarea id="info" name="info" rows="5" placeholder="Please enter your enquiry here..."></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="captcha">Enter the code below<span class="red">&#42;</span></label>
                            <input name="captcha" placeholder="Please enter the code below here..." size="15" type="text" required>
                        </div>
                    </div>

                    <div class="captchabar">
                        <img src="captcha.php" width="70" height="30">
                    </div><br />

                    <button class="submit_button" type="submit">Submit</button>
                </form>

            </div>
        </div>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.802158591566!2d39.688580974384!3d-4.060716144951689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18401300f03c8fc9%3A0x9389c83d810351e3!2sThe%20Mombasa%20Academy!5e0!3m2!1sen!2ske!4v1736764457620!5m2!1sen!2ske" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>

    <div class="content-section">
        <h1>Our Contact Information</h1>
        <div class="flex margin-medium">

            <div class="contact-card">
                <i class="fa-solid fa-school"></i>
                <h2>Visit Us</h2>
                <p>Sea View Road, Nyali</p>
                <p>Mombasa, Kenya</p>
            </div>

            <div class="contact-card">
                <i class="fa fa-phone"></i>
                <h2>Call Us</h2>
                <p>Phone: (+254 41)4471629/4473246</p>
                <p>Mobile: +254733725292/ +254113049826</p>
            </div>

            <div class="contact-card">
                <i class="fa fa-envelope"></i>
                <h2>Email Us</h2>
                <p><a href="mailto:msaacademy@mombasaacademy.sc.ke">msaacademy@mombasaacademy.sc.ke</a></p>
            </div>

            <div class="contact-card">
                <i class="fa-solid fa-inbox"></i>
                <h2>Mail Us</h2>
                <p>Post Office Box 90151</p>
                <p>Mombasa 80100, Kenya</p>
            </div>
        </div>
    </div>
    <footer class="group">
        <?php include_once("../includes/footer.php") ?>
    </footer>
</body>

</html>