<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="An effective school that emphasises an atmosphere of educational excellence and responsibility in academics and social behaviour." />
  <meta name="author" content="Zana Dynamics" />
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="stylesheet" type="text/css" href="css/layout.css" />
  <script type="text/javascript" src="js/showhide.js"></script>
  <script type="text/javascript" src="js/onload.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="images/logo.png" rel="icon" sizes="16x16 32x32" type="image/x-icon">
  <title>Welcome to Mombasa Academy Nyali - Mombasa North</title>
</head>
<?php flush(); ?>

<body><?php include_once("analyticstracking.php") ?>
  <header class="header-container">
    <div class="headingbar">
      <img class="header-logo" src="images/title-banner-white-1.png" alt="Title banner" />
    </div>
    <nav>
      <label for="show-menu" class="show-menu">Show Menu</label>
      <input type="checkbox" id="show-menu" role="button" />
      <ul id="menu">
        <li><a href="#">Home </a></li>
        <li><a href="#">About Us ￬</a>
          <ul class="hidden">
            <li><a href="pages/mission-vision.php">Mission and Vision</a></li>
            <li><a href="pages/school-history.php">School's History</a></li>
            <li><a href="pages/school-information.php">School Information</a></li>
            <li><a href="pages/pastoral-care.php">Pastoral Care</a></li>
          </ul>
        </li>
        <li><a href="#">Administration ￬</a>
          <ul class="hidden">
            <li><a href="pages/junior-school.php">Junior School</a></li>
            <li><a href="pages/preparatory-school.php">Preparatory</a></li>
            <li><a href="pages/senior-school.php">Senior School</a></li>
            <li><a href="pages/general-info.php">General Information</a></li>
          </ul>
        </li>
        <li><a href="#">Policies ￬</a>
          <ul class="hidden">
            <li><a href="pages/msaacad-ict-policy.php">ICT Policy</a></li>
            <li><a href="pages/library-policy.php">Library Policy</a></li>
            <li><a href="pages/discipline-policy.php">Discipline Policy</a></li>
            <li><a href="pages/drug-policy.php">Drug Policy</a></li>
            <li><a href="pages/anti-bullying-policy.php">Anti-Bullying Policy</a></li>
          </ul>
        </li>
        <li><a href="#">Academics ￬</a>
          <ul class="hidden">
            <li><a href="pages/academic-departments.php">Academic Departments</a></li>
            <li><a href="pages/facilities.php">Facilities</a></li>
          </ul>
        </li>
        <li><a href="#">Extra Curricular ￬</a>
          <ul class="hidden">
            <li><a href="pages/school-play.php">School Plays</a></li>
            <li><a href="pages/sports.php">Sports</a></li>
            <li><a href="pages/educational-trips.php">Eductional Trips</a></li>
            <li><a href="pages/inter-house-activities.php">Interhouse Activities</a></li>
          </ul>
        </li>
        <li><a href="#">Admissions ￬</a>
          <ul class="hidden">
            <li><a href="pages/enquiries-form.php">Enquiries</a></li>
            <li><a href="pages/downloads.php">Download Forms</a></li>
          </ul>
        </li>
        <li><a href="">Alumni</a></li>
        <li><a href="pages/contact-us.php">Contact Us</a></li>
      </ul>
    </nav>
    <div class="picslidebar"><?php include 'templates/scrollpics-4-index.php';
                              print $scroll; ?></div>
  </header>
  <div id="mainpage">
    <div class="group">
      <section>
        <div class="group">
          <div class="roundedcorner-panel">
            <h1>Mission and Vision</h1>
            <p>The Mombasa Academy is an effective school that emphasizes an atmosphere of educational excellence. Students are encouraged to be successful, to reach their potential and to exhibit responsibility for their own academic and social behaviour.</p>
            <hr />
          </div>
          <div class="roundedcorner-panel">
            <h1 class="centeralign">Message from the Head of School</h1>
            <img src="images/head.jpg" style="width:100%; height: auto; margin: 40px 0px 40px 0px" alt="image of the head of school" />
            <p>Thank you for your interest in The Mombasa Academy. I hope that the spirit of our school comes through in these pages. I warmly invite you and your children to visit us during a school day to see for yourselves.</p><a href="#" id="mfano1-show" class="showLink" onclick="showHide('mfano1');return false;">Read More </a>
            <div id="mfano1" class="moredisplay">
              <div class="dropdownpanel">
                <p>Welcome to The Mombasa Academy!</p>
                <p>We, at The Mombasa Academy, ensure high-quality education which motivates and empowers our students to be lifelong learners and productive members of society. We want all our students to achieve their full potential. Our task is to make it possible and our mission is to provide a platform.</p>
                <p>Success for all students is ensured at our school by delivering an enriching, child-centred, balanced and structured curriculum and a whole school focus on student welfare that focuses on the positive recognition of student achievements. I welcome you all to an outstanding learning community where everyone is dedicated to a high standard of excellence.</p>
                <p>My commitment to our community is to lead the school with enthusiasm and passion to enable us to reach our goals. We look forward to welcoming you to our vibrant learning community.</p>
                <p><strong>Mr. Andrew K. Manyasa</strong><br /><strong>Head of School</strong></p><a href="#" id="mfano1-hide" class="hideLink" onclick="showHide('mfano1');return false;">Close it</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <aside class="hide-in-mobile hide-in-tablet">
        <?php include_once("./includes/calenderofevents.php") ?>
      </aside>
    </div>
  </div>

  <!--About the school-->

  <div class="content-section">
    <h2 style="padding-left: 20px;">About The Mombasa Academy</h2>

    <div class="flex">
      <div class="col">
        <img src="images/school-compound.jpg" alt="Class room photo" width="100%" height="auto" />
        <h3 class="story-title">School History</h3>
        <p class="leftalign">The school was established in 1978 by Mr. F.J Bentley who was a pioneer of private education in Kenya. Its situation is Nyali, a prime residential area, ensured that its population was drawn from the large number of...<br /><a href="pages/school-history.php"><button class="button">Read More</button></a></p>
      </div>
      <div class="col">
        <img src="images/classroom.jpg" alt="Class room photo" width="100%" height="auto" />
        <h3 class="story-title">School Information</h3>
        <p class="jleftalign">The school follows the British Curriculum [Pearson Edexcel] and implements relevant innovations in teaching techniques, assessment and methodology, as appropriate. Any pupil should be able to transfer directly to any... <br /> <a href="pages/school-information.php"><button class="button">Read More</button></a></p>
      </div>
      <div class="col">
        <img src="images/santa1.jpg" alt="headmaset photo" width="100%" height="auto" />
        <h3 class="story-title">Pastoral Care</h3>
        <p class="leftalign">This is a comparatively small school and much emphasis is put on producing a friendly, caring atmosphere in which boys and girls can develop their own particular talents. They are also encouraged to develop habits of... <br /><a href="pages/pastoral-care.php"><button class="button">Read More</button></a></p>
      </div>
    </div>

  </div>

  <!-- School Tour Section -->
  <div id="school-tour" class="content-section">
    <h2 style="color: #fff">Virtual Tour</h2>
    <p>
      Take a virtual tour or schedule an in-person visit to explore what makes The Mombasa Academy unique.
    </p>

    <a href="" class="play-button">
      <i class="fa fa-play-circle" style="font-size: 80px; color: white;"></i>
    </a>
  </div>

  <!-- News Section -->

  <div id="main-page">
    <div class="content-section">

      <h2 style="padding-left: 20px; font-size: 20px">News & Updates</h2>

      <div class="flex">

        <div class="big-story">
          <a href="">
            <img src="./images/outstanding_pearson.jpg" style="max-width: 100%;height: auto;display: block;">
          </a>
          <div>
            <div style="margin-top: 20px;">
              <span id="story-date">28th February, 2025</span>
            </div>
            <div>
              <a href="">
                <h3 class="story-title"> Mwaki Munuve and Nikki Pattni are recognised for having the highest marks globally on ICT and Global Citizenship ...</h3>
              </a>
            </div>

          </div>
        </div>

        <div class="other-stories">
          <div class="column">

            <div class="story" style="display: flex; gap: 20px">
              <div>
                <a href="">
                  <img src="./images/cultural_day.jpg" style="max-width: 90px;height: auto;display: block;">
                </a>
              </div>

              <div>
                <span id="story-date">28th February, 2025</span>
                <div>
                  <a href="">
                    <h3 class="story-title">The Mombasa Academy cultural day celebrates unity in diversity through music, dance, art and storytelling..</h3>
                  </a>
                </div>
              </div>
            </div>

            <div class="story" style="display: flex; gap: 20px">
              <div>
                <a href="">
                  <img src="./images/poetry_competition.jpg" style="max-width: 90px;height: auto;display: block;">
                </a>
              </div>

              <div>
                <div>
                  <span id="story-date">22nd February, 2025</span>
                </div>
                <div>
                  <a href="">
                    <h3 class="story-title">Our young poets work hard to learn their lines, perfect their delivery and present with confidence...</h3>
                  </a>
                </div>
              </div>
            </div>

            <div class="story" style="display: flex; gap: 20px">
              <div>
                <a href="">
                  <img src="./images/hells_kicthen.jpg" style="max-width: 90px;height: auto;display: block;">
                </a>
              </div>

              <div>
                <div>
                  <span id="story-date">22nd February, 2025</span>
                </div>
                <div>
                  <a href="">
                    <h3 class="story-title">Students explore the Marafa Hells Kitche in Malindi. Indeed a fascinating natural wonder...</h3>
                  </a>
                </div>

              </div>
            </div>
          </div>

          <div class="column">
            <div class="story" style="display: flex; gap: 20px">
              <div>
                <a href="">
                  <img src="./images/kindness.jpg" style="max-width: 90px;height: auto;display: block;">
                </a>
              </div>

              <div>
                <div>
                  <span id="story-date">22nd February, 2025</span>
                </div>
                <div>
                  <a href="">
                    <h3 class="story-title">Our learners embrace Kindness Week by caring for the environment, a community food drive...</h3>
                  </a>
                </div>

              </div>
            </div>

            <div class="story" style="display: flex; gap: 20px">
              <div>
                <a href="">
                  <img src="./images/sunshine_rally.jpg" style="max-width: 90px;height: auto;display: block;">
                </a>
              </div>

              <div>
                <div>
                  <span id="story-date">9th February, 2025</span>
                </div>
                <div>
                  <a href="">
                    <h3 class="story-title">Our interactor volunteer at the 43rd Sunshine Rally at Shree Cutchi Leva Patel Samaj...</h3>
                  </a>
                </div>

              </div>
            </div>

            <div class="story" style="display: flex; gap: 20px">
              <div>
                <a href="">
                  <img src="./images/fort_jesus.jpg" style="max-width: 90px;height: auto;display: block;">
                </a>
              </div>

              <div>
                <div>
                  <span id="story-date">6th February, 2025</span>
                </div>
                <div>
                  <a href="">
                    <h3 class="story-title">Year 1 learners visit Fort Jesus as part of their unit on Tellers of Tales...</h3>
                  </a>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <aside class="hide-in-bigscreen">
      <?php include("./includes/calenderofevents.php") ?>
    </aside>
  </div>

  <footer class="group">
    <div class="" style="margin-top: 40px">
      <div class="altbar">
        <table class="centeralign">
          <tr>
            <td><img src="images/logoblue.png" width="60" height="60" alt="School logo" /></strong></p>
              <p class="centeralign"><strong>&quot;Scientia Pennae&quot;</strong></p>
              <p class="centeralign"><strong>On Wings of Knowledge</strong></p>
            </td>
            </td>
        </table>
      </div>
      <div class="altbar hide-in-mobile">
        <p><strong>The Mombasa Academy</strong></p>
        <p><strong>&#40;Est. 1978&#41;</strong>
        <p>P.O Box 86487 <strong>Mombasa </strong> 80100, Kenya</p>
        <p>TEL:(+254 41)4471629 &#47; 4473246</p>
        <p>EMAIL: msaacademy@mombasaacademy.sc.ke </p>
        <p>Mobile: 0733 725292, 0113 049826</p>
      </div>
      <div class="altbar">
        <table>
          <tr>
            <td><a href="https://www.facebook.com/p/The-Mombasa-Academy-100088170196793/" target="_blank"><img src="https://img.icons8.com/?size=100&id=118497&format=png&color=000000" style="height:36px; width: 36px" alt="facebook" /></a></td>
            <td><a href="https://www.instagram.com/themombasa.academy/" target="_blank"><img src="https://img.icons8.com/?size=100&id=Xy10Jcu1L2Su&format=png&color=000000" style="height:36px; width: 36px" alt="instagram" /></a></td>
            <td><a href="https://x.com/mombasaacademy" target="_blank"><img src="https://img.icons8.com/?size=100&id=ClbD5JTFM7FA&format=png&color=000000" style="height:36px; width: 36px" alt="twitter" /></a></td>
          </tr>
        </table>
        <p class="hide-in-mobile">www.mombasaacademy.sc.ke</p>
      </div>
    </div>
  </footer>
  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");

      // Set all slides to invisible (opacity 0)
      for (i = 0; i < x.length; i++) {
        x[i].classList.remove("show");
      }

      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1;
      }

      // Set the current slide to visible (opacity 1)
      x[myIndex - 1].classList.add("show");

      setTimeout(carousel, 5000); // Change image every 5 seconds
    }
  </script>

</body>

</html>