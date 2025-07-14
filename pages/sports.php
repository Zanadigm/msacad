<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="School sports." />
    <meta name="keywords" content="School, Sports, Hockey, Swimming, Football" />
    <meta name="author" content="Zana Dynamics" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="stylesheet" type="text/css" href="../css/layout.css" />
    <link href="../images/logo.png" rel="icon" sizes="16x16 32x32" type="image/x-icon">
    <title>Mombasa Academy Sports</title>
</head>

<body><?php include_once("../analyticstracking.php") ?>
    <header class="header-container">
       <?php include_once("../includes/header.php") ?>
       <div class="banner" style="background-image: url(../images/overlay.jpg)"></div>
    </header>
    <div id="mainpage">
        <div class="group">
            <section>
                <h2 class="centeralign">School Sports </h2>
                <h3 class="centeralign">Hockey</h3>
                <img src="../sports-pics/hockey.jpg" width="70%" height="50%" alt="Junior pupils" />
                <h3 class="centeralign">Football</h3>
                <img src="../sports-pics/football-1.jpg" width="70%" height="50%" alt="Junior pupils" /><br />
                <img src="../sports-pics/football-2.jpg" width="70%" height="50%" alt="Junior pupils" />
                <h3 class="centeralign">Swimming</h3>
                <img src="../sports-pics/swimming-1.jpg" width="70%" height="50%" alt="Junior pupils" /><br />
                <img src="../sports-pics/swimming-2.jpg" width="70%" height="50%" alt="Junior pupils" />
            </section>
            <aside>
                <?php include_once("../includes/calenderofevents.php") ?>
            </aside>
        </div>
    </div>
    <footer class="group">
        <?php include_once("../includes/footer.php") ?>
    </footer>
</body>

</html>