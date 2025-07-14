<?php
/* Set e-mail recipient */
$myemail = "msaacademy@mombasaacademy.sc.ke";
/* Check all form inputs using check_input function */
$fname = check_input($_POST['fname'], "Please enter your Firstname");
$lname = check_input($_POST['lname'], "Pleas enter your Lastname");
$email = check_input($_POST['email']);
$subj = check_input($_POST['subj'], "Enter topic of your inquiry");
$info = check_input($_POST['info']);
/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
    show_error("E-mail address not valid");
}
session_start();
if (isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]) {
    /* Let's prepare the message for the e-mail */
    $subject = "$subj";
    $message = "$info \r\n $fname $lname";
    $headers = "From:$email ";
    /* Send the message using mail() function */
    mail($myemail, $subject, $message, $headers);
    /* Redirect visitor to the thank you page */
    header('Location: ../pages/thank-you-page.php');
    exit();
} else {
    die("Code typed does not match the one shown");
}
/* Functions we used */
function check_input($data, $problem = '')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0) {
        show_error($problem);
    }
    return $data;
}
function show_error($myError)
{
?>
    <html>

    <body>
        <p>Please correct the following error:</p>
        <strong><?php echo $myError; ?></strong>
        <p>Hit the back button on the browser and try again</p>
        <p>Or click the Home button below</p>
        <form class="email" action="../index.php" method="post">
            <input class="send" type="submit" value="Home">
        </form>
    </body>

    </html>
<?php
    exit();
}
?>