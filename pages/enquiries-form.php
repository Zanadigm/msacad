<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Enquiries about admission to the school." />
    <meta name="keywords" content="Admission, Enquiry, Email address" />
    <meta name="author" content="Zana Dynamics" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="stylesheet" type="text/css" href="../css/layout.css" />
    <link href="../images/logo.png" rel="icon" sizes="16x16 32x32" type="image/x-icon">
    <title>Mombasa Academy Email</title>
</head>

<body><?php include_once("../analyticstracking.php") ?>
    <header class="header-container">
        <?php include_once("../includes/header.php")?>
        <div class="banner" style="background-image: url(../images/overlay.jpg)"></div>
    </header>
    <div id="mainpage">
        <div class="group">
            <div class="paddingbox">
                <h2 class="centeralign">Enquiry on Admission</h2>
                <h4 class="centeralign">Fields indicated with the red asterisk &#40; 
                    <span class="red">&#42;</span> 
                    &#41; are mandatory for the form to be accepted.
                </h4>
                <form action="../includes/formmailer.php" id="request" method="post" name="request"> 
                    <label>Your First Name:<span class="red">&#42;</span><br>
                        <input type="text" id="fname" name="fname" placeholder="First name" required="" size="25" type="text">
                    </label><br>
                    <label>Your Last Name:<span class="red">&#42;</span><br>
                        <input type="text" id="lname" name="lname" placeholder="Last name" required="" size="25" type="text">
                    </label><br> 
                    <label>Your Email Address:<span class="red">&#42;</span><br>
                        <input type="text" id="email" name="email" placeholder="Email address" required="" size="25" type="email">
                    </label><br>
                    <label>Subject of inquiry:<span class="red">&#42;</span> <br>
                        <input type="text" id="subj" name="subj" placeholder="Subject" required="" size="25" type="text">
                    </label><br>
                    <label>Type your details here<br>
                        <textarea rows="10" cols="50" id="info" name="info" placeholder="Type specific request here"></textarea>
                    </label><br>
                    <label>Enter the code below<span class="red">&#42;</span><br>
                        <input name="captcha" placeholder="Enter code here" required="" size="15" type="text">
                    </label><br>

                    <div class="captchabar">
                        <img src="captcha.php" width="70" height="30">
                    </div><br />
                    
                    <input class="submitbutton" type="submit" value="Submit">
                    
                </form><br>
            </div>
        </div>
    </div>
    <footer class="group">
        <?php include_once("../includes/footer.php")?>
    </footer>
</body>

</html>