<?php

if($_POST["submit"]) {
    $recipient="zstolz26@gmail.com";
    $subject="Contact form message";
    $sender=$_POST["firstName"]." ".$_POST["lastName"];                       
    $company=$_POST["company"];
    $phone=$_POST["phone"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Name: $sender \r\n";
    $mailBody.="Company: $company \r\n";
    $mailBody.="Phone: $phone \r\n";
    $mailBody.="Email: $senderEmail\r\n\n$message";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
    $result="
    <div class='d-flex justify-content-center align-items-center'>
      <div class='alert alert-success confirmation alert-dismissable' role='alert'>
        <button type='button' class='close' data-dismiss='alert'>
        <span aria-hidden='true'>&times;</span>
        </button>
        Thank you! Your message has been sent.
      </div>
    </div>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zack Stolz</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
  <link rel="stylesheet" href="main.css" />
  <link rel="stylesheet" href="font_awesome/all.css" />
  <script src="app.js" defer></script>
</head>

<body data-spy="scroll" data-target="#navbarMenu">
  <!-- navigation bar section -->
  <nav class="navbar navbar sticky-top navbar-expand-sm ">
    <a href="#" class="navbar-brand ml-4">Zack Stolz</a>
    <button class="navbar-toggler mr-3" data-toggle="collapse" data-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ml-auto pl-3  mr-3">
        <li class="nav-item px-2"><a href="assets/Zack-Stolz-Resume.PDF" target="_blank" class="nav-link"
            id="resume">Resume</a></li>
        <li class="nav-item px-2"><a href="#titleSection" class="nav-link">Title</a></li>
        <li class="nav-item px-2"><a href="#skillsSection" class="nav-link">Skills</a></li>
        <li class="nav-item px-2"><a href="#aboutMeSection" class="nav-link">About</a></li>
        <li class="nav-item px-2"><a href="#contactMeSection" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- php alert -->
  <?php echo $result; ?> 

  <!-- position section -->
  <header>
    <div class="container container-title justify-content-center" id="titleSection">
      <div class="row justify-content-center">
        <div class="col">
          <div class="jobTitle">
            <h1>Junior Web Dev & IT Ops</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- mission statement section -->
  <div class="container container-mission-statement">
    <div class="row d-flex justify-content-lg-center">
      <div class="col col-xl-6 col-lg-10 col-md-12 col-sm-12 col-12 my-5 px-5 pt-10 d-flex align-items-center"
        id="missionStatementSection">
        <div class='shadow p-5 bg-light rounded'>
          <h2>Mission Statement</h2>
          <hr class="mr-4">
          <p class="ms">
            Skilled Technologist with experience configuring computers, servers and peripheral devices to work within
            established company and security parameters. I'm a licensed Drone Pilot with a clear understanding of System
            Administration and IT Ops with online training in Web Development. Motivated to learn, grow and excel in a IT Ops/Development role.
          </p>
        </div>
      </div>
      <div class="col col-xl-6 col-lg-11 col-md-12 col-sm-12 col-12 p-5 carouselContainer">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/16997721_1275709045828129_3353067510837083990_n.jpg"
                alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Atlanta, Ga</h5>
                <p>Born & Raised</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/16996195_1275710309161336_385376980924023756_n.jpg"
                alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Technologist</h5>
                <p>IT Ops & Junior Web Developer</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/_JLC9139.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Photographer</h5>
                <p>Getting the shot!</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/_JLC6801.jpg" alt="Fourth slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Drone Pilot</h5>
                <p>Droning at the Auckland wharf</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/_JLC8365.jpg" alt="Fifth slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Outdoorsman</h5>
                <p>Enjoying the view from Roy's Peak</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/IMG_1374.JPG" alt="sixth slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Traveler</h5>
                <p>Victoria Peak in Hong Kong</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>


  <!-- Skills section -->
  <div class="background" id="skillsSection">
    <div class="mySkills container">
      <h2 class="skills-title">Skills</h2>
      <div class="row mx-lg-1 my-lg-1 d-flex justify-content-center align-items-center">
        <div class="col-lg-3 col-md-6 col-sm-10 px-lg-1 px-xl-2">
          <div class="skill skill-1">
            <i class="fab fa-js-square skillIcon fa-3x"></i>
            <h1>JavaScript</h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-10 px-lg-2">
          <div class="skill skill-2">
            <i class="fab fa-html5 skillIcon fa-3x"></i>
            <h1>HTML</h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-10 px-lg-2">
          <div class="skill skill-3">
            <i class="fab fa-css3 skillIcon fa-3x"></i>
            <h1>CSS</h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-10 px-lg-1 px-xl-2">
          <div class="skill skill-4">
            <i class="fas fa-database skillIcon fa-3x"></i>
            <h1>SQL</h1>
          </div>
        </div>
      </div>
      <div class="row mx-lg-5 my-lg-5 justify-content-center align-items-center">
        <div class="col-lg-3 col-md-6 col-sm-10 pl-lg-0 pr-lg-1 px-xl-2">
          <div class="skill skill-5">
            <i class="fab fa-bootstrap skillIcon fa-3x"></i>
            <h1>Bootstrap</h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-10 px-lg-2">
          <div class="skill skill-6">
            <i class="fab fa-sass skillIcon fa-3x mr-2"></i>
            <h1>Sass</h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-10 px-lg-2">
          <div class="skill skill-7">
            <i class="fab fa-npm skillIcon fa-3x mr-2"></i>
            <h1>npm</h1>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-10 px-lg-1 px-xl-2">
          <div class="skill skill-8">
            <i class="fab fa-github skillIcon fa-3x"></i>
            <h1>Git</h1>
          </div>
        </div>
      </div>
      <div class="row mx-lg-5 my-lg-5 justify-content-center align-items-center">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 px-lg-2">
          <div class="skill skill-9">
            <i class="fab fa-wordpress skillIcon fa-3x"></i>
            <h1>WordPress</h1>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 px-lg-1">
          <div class="skill skill-10">
            <i class="fab fa-adobe skillIcon fa-3x"></i>
            <h1>Adobe CC</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- about me section -->
  <div class="container container-about" id="aboutMeSection">
    <div class="row justify-content-center align-items-center">
      <div class="col col-xl-6 col-lg-9 col-md-12 col-sm-12 col-12 my-5 justify-content-lg-center" id="aboutMePortrait">
        <img src="assets/STOLZ_ZACK_1.jpg" class="portrait-Img" alt="Portrait">
      </div>
      <div class="col col-xl-6 col-lg-10 col-md-12 col-sm-12 col-12 my-5" id="aboutMe">
        <div class='shadow px-5 py-3 bg-light rounded'>
          <h2>About</h2>
          <hr class="mx-2">
          <p class="bio mb-3">
            Hello, my name is Zack Stolz. I'm a self-taught web developer, guitarist, aerial photographer, and a huge travel
            enthusiast. You can usually find me at a coffee shop working on one of my projects, at home shredding on the axe, out hiking
            with my drone and camera gear (e.g. my background image) or organizing yet another wild itinerary.
            Regardless of which one you may find my attention on I'm always actively seeking out ways to improve my
            skills! My ability to learn quickly and acclimate to new cultures has enabled me to be open to endless
            opportunities. In short, my skillset in each of these fields is a testament to my interests and how my
            passion for them motivates my advancement in each ...and well, the rest is history. The newest addition to
            this list took root while working in IT Ops while simultaneously immersing myself into web development on
            the side. This ultimately brings us here, to a website I built from scratch. As each of these fields evolve
            there will always be new opportunities to learn. This keeps me humble and eager to continually learn more,
            which inspires me to push the boundaries of my capabilities.
          </p>
          <div class="row learn-more-container">
            <button type="button" class="btn learn-more-btn " data-toggle="modal" data-target="#LearnMore">
              Learn More
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- learn more modal section  -->
  <div class="modal fade" id="LearnMore">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">My career synopsis.</h3>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            I began my journey in the tech industry within a young FinTech company immediately after graduating Cum
            Laude from the University of Georgia. Like many startups, I found myself wearing several hats around the
            office. I quickly learned Implementation, onboarding, quality control, working with numerous software
            systems and how to manage data and their files. Here my love for technology bloomed and sparked a volley of
            side interests. I learned the basics of coding and UX design, how to shoot and edit photography/videography,
            and became a certified drone pilot. I was soon hired as an IT Ops Specialist at one of Atlanta’s top
            workplace headquarters, which really allowed my tech interests to flourish. My role in IT enabled me to
            become well-rounded in the industry, mastering the ins and outs of corporate IT operations and system
            administration. I continue to pursue various technology interests and self-train in all my endeavors, whether
            through projects on the side or online coursework/research programs like Treehouse and Udemy. I am eager to
            continually explore new technology and expand my education in both web development and the IT industy as whole. 
            I am excited by the prospect of the new opportunities and endless possibilities offered in this field.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- contact form begin -->
  <div class="background" id="contactMeSection">
    <div class="container contactMeContainer col-xl-5 col-lg-6 col-md-8 col-sm-10 pt-5">
      <div class="row row-12 justify-content-center align-items-center">
        <div class="col">
          <h2 id="contactMeLabel">Contact Me</h2>
          <hr>
        </div>
      </div>

      <!-- form section -->
      <form action="index.php" method="post" class="contactForm needs-validation" novalidate>
        <div class="row ">
          <div class="col col-lg-6 col-md-6 col-sm-6 col-12 pl-0 formatFirstName">
            <div class="form-group ">
              <label for="firstName">First name *</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="far fa-address-card"></i>
                  </div>
                </div>
                <input type="text" name="firstName" id="firstName" class="form-control" required
                  placeholder="Please enter your first name" required>
              </div>
              <div class="alert alert-danger error alert-dismissable fade d-none m-3" role="alert" id="firstNameAlert">
                <button type="button" class="close justify-content-center" data-dismiss="alert">
                  <span aria-hidden="true">&times;</span>
                </button>
                Your first name is required!
              </div>
            </div>
          </div>
          <div class="col col-lg-6 col-md-6 col-sm-6 col-12 pr-0 formatLastName">
            <div class="form-group">
              <label for="lastName">Last name *</label>
              <div class="input-group">
                <input type="text" name="lastName" id="lastName" class="form-control" required
                  placeholder="Please enter your last name" required>
              </div>
              <div class="alert alert-danger error alert-dismissable fade d-none m-3" role="alert" id="lastNameAlert">
                <button type="button" class="close justify-content-center" data-dismiss="alert">
                  <span aria-hidden="true">&times;</span>
                </button>
                Your last name is required!
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row d-flex justify-content-center">
            <label for="company">Company</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-briefcase"></i>
                </div>
              </div>
              <input type="text" name="company" id="company" class="form-control" placeholder="Who do you work for?">
            </div>
          </div>

          <div class="row d-flex justify-content-center">
            <label for="phone">Phone</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-mobile-alt"></i>
                </div>
              </div>
              <input type="tel" name="phone" id="phone" class="form-control"
                placeholder="What's the best number to reach you at?">
            </div>
            <div class="alert alert-danger error alert-dismissable fade d-none m-3" role="alert" id="phoneAlert">
              <button type="button" class="close ml-2" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
              </button>
              Please enter a valid Phone number!
            </div>
          </div>

          <div class="row d-flex justify-content-center">
            <label for="email">Email *</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="far fa-envelope"></i>
                </div>
              </div>
              <input type="email" name="email" id="email" class="form-control" required
                placeholder="Please enter your email address" required>
            </div>
            <div class="alert alert-danger error alert-dismissable fade d-none m-3" role="alert" id="emailAlert">
              <button type="button" class="close ml-2" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
              </button>
              Please enter a valid email address!
            </div>
          </div>

          <div class="row d-flex justify-content-center">
            <label for="message">Message *</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="far fa-comment-dots"></i>
                </div>
              </div>
              <textarea type="text" rows="5" name="message" id="message" class="form-control"
                placeholder="Let's chat! Leave me a message here." minlength="50" maxlength="500" required></textarea>
            </div>
            <div class="alert alert-danger error alert-dismissable fade d-none m-3" role="alert" id="messageAlert">
              <button type="button" class="close ml-2" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
              </button>
              Don't forget to include a message!
              (minimum 50 characters)
            </div>
            <div class="alert alert-danger error alert-dismissable fade d-none m-3" role="alert" id="shortMessageAlert">
              <button type="button" class="close ml-2" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
              </button>
              Your message is too short!
            </div>
          </div>

          <div class="row d-flex justify-content-center">
            <div class="notify">* fields are required</div>
          </div>
          <div class="row d-flex justify-content-center">
            <wrapper class="submit-form-btn">
              <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Missing a required field"
                id="btnToolTip">
                <button type="submit" name="submit" class="btn btn-primary submit-form-btn" id="submitBtn"
                  value="Send Message" style="pointer-events: none;" disabled>
                  <!-- style="pointer-events: none;" -->
                  Send Message
                </button>
              </span>
            </wrapper>
          </div>
      </form>
    </div>

    <!-- Thumbnail links section -->
    <footer class="row d-flex justify-content-center">
      <div class="container thumbnail-container" id="linksSection">
        <div class="row row-container">
          <div class="col footer-container">
            <div class="links" data-toggle="tooltip" data-placement="top" title="My Resume">
              <a href="assets/Zack-Stolz-Resume.PDF" target="_blank"><i
                  class="far fa-file-pdf fa-lg reference-icon-pdf"></i></a>
            </div>
          </div>
          <div class="col footer-container">
            <div class="links" data-toggle="tooltip" data-placement="top" title="My linkedIn Page">
              <a href="https://www.linkedin.com/in/zackstolz/" target="_blank"><i
                  class="fab fa-linkedin-in fa-lg reference-icon-in"></i></a>
            </div>
          </div>
          <div class="col footer-container">
            <div class="links" data-toggle="tooltip" data-placement="top" title="My Facebook Page">
              <a href="https://www.facebook.com/zackstolz" target="_blank"><i
                  class="fab fa-facebook-square fa-lg reference-icon-fb"></i></a>
            </div>
          </div>
          <div class="col footer-container">
            <div class="links" data-toggle="tooltip" data-placement="top" title="My Instagram Page">
              <a href="https://www.instagram.com/zacktheitinerant/" target="_blank"><i
                  class="fab fa-instagram fa-lg reference-icon-inst"></i></a>
            </div>
          </div>
          <div class="col footer-container">
            <div class="links" data-toggle="tooltip" data-placement="top" title="My YouTube Channel">
              <a href="https://www.youtube.com/channel/UCuit_EAbz977aewEaDL6Gxg" target="_blank"><i
                  class="fab fa-youtube fa-lg reference-icon-youtube"></i></a>
            </div>
          </div>
          <div class="col footer-container">
            <div class="links" data-toggle="tooltip" data-placement="top" title="My Flickr Portfolio">
              <a href="https://www.flickr.com/people/187299516@N07/" target="_blank"><i
                  class="fab fa-flickr fa-lg reference-icon-flickr"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- script imports -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
</body>

</html>