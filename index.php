<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CobWeb Developers</title>
  <link rel="stylesheet" href="static/style.css" />
  <link rel="icon" type="image/x-icon" href="../static/images/icon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  <!-- Loader -->
  <div id="loader">
    <div class="spinner-box">
      <div class="leo-border-1">
        <div class="leo-core-1"></div>
      </div>
      <div class="leo-border-2">
        <div class="leo-core-2"></div>
      </div>
    </div>
  </div>

  <!-- Navbar Section -->
  <nav id="nav">
    <div class="navbar__container">
      <img src="static/images/aSXrrq01.png" alt="Logo for CobWeb">
      <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span> <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="navbar__menu">
        <li class="navbar__item">
          <a href="#home" class="navbar__links" id="home-page">Home</a>
        </li>
        <li class="navbar__item">
          <a href="#about" class="navbar__links" id="about-page">About</a>
        </li>
        <li class="navbar__item">
          <a href="#services" class="navbar__links" id="services-page">Services</a>
        </li>
        <li class="navbar__item">
          <a href="#contact_us" class="navbar__links" id="contact-page">Contact</a>
        </li>
        <li class="navbar__item">
          <a href="#directories" class="navbar__links" id="directories-page">Directories</a>
          <ul class="drop-down">
            <li><a href="#SpiderByte" class="navbar__links">SpiderByte</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero" id="home">
    <div id="header" class="hero__container">
      <div class="text1">Welcome To <span> COBWEB </span></div>
      <div class="text2"> Where We <span class="typing"></span></div>
      <button class="main__btn"><a href="#about">Discover More</a></button>
    </div>
  </div>

  <!-- About Section -->
  <div class="about-section" id="about">

    <div class="about-container">

      <div id="box" class="textcon ">
        <h1 class="tile bottom-right">About Us</h1>
        <p class="text tile bottom-right">
          CobWeb Developers is a proudly South African business that was founded in 2018 by Umme-Salma Chan. When she created CobWeb Developers she aimed to target 2 main problems that main South Africans face in the 21st century.

          The first problem is that many South African students lack the knowledge and exposure to Software and web development and at the time being a high school student herself and seeing how many of her classmates struggled to conceptualize development as a whole compelled her to create SpiderByte Code( SpiderByte Code is the Non-Profit Organization linked to CobWeb Developers). [Put the NPO link here but in the text put “More about SpiderByte Code” so that they can go to the same link]

          The second issue is that many small-Medium business owners would like to go the 4IR business lifestyle, however, many hosting companies are far too expensive and indifferent to each business's ideas and needs.

          That’s why at CobWeb Developers we have a team of developers who take pride in their work and turn your visions into an interactive online platform to boost your business.
        </p>
      </div>
    </div>

  </div>


  <!-- Services Section -->
  <div class="services" id="services">
    <h1 class="element js-animation is-show type">Our Services</h1>
    <div class="services__wrapper element js-animation is-show type">
      <div class="services__card">
        <h2>Software Solutions</h2>
        <div class="services__btn">
          <a href="#popup1"><button>Find Out More</button></a>
        </div>
      </div>
      <div id="popup1" class="overlay">
        <div class="popup">
          <a class="close" href="#services">&times;</a>
          <div class="content">
            Coming Soon!!!
          </div>
        </div>
      </div>
      <div class="services__card">
        <h2>Cloud Solutions</h2>
        <div class="services__btn">
          <a href="#popup2"><button>Find Out More</button></a>
        </div>
      </div>
      <div id="popup2" class="overlay">
        <div class="popup">
          <a class="close" href="#services">&times;</a>
          <div class="content">
            Coming Soon!!!
          </div>
        </div>
      </div>
      <div class="services__card">
        <h2>Pricing</h2>
        <div class="services__btn">
          <a href="#popup3"><button>Find Out More</button></a>
        </div>
      </div>
      <div id="popup3" class="overlay">
        <div class="popup">
          <a class="close" href="#services">&times;</a>
          <div class="content">
            Our websites are affordable and the price ranges from ZAR2500- ZAR6000. Please email cobwebdevelopers@gmail.com for more information and for your personalized quotation. USE THIS CODE FOR A DISCOUNT ON YOUR WEBSITE TODAY ( 4PR1L20) valid till 30April.
          </div>
        </div>
      </div>
      <div class="services__card">
        <h2>Coding</h2>
        <div class="services__btn">
          <a href="#popup4"><button>Find Out More</button></a>
        </div>
      </div>
      <div id="popup4" class="overlay">
        <div class="popup">
          <a class="close" href="#services">&times;</a>
          <div class="content">
            Coming Soon!!!
          </div>
        </div>

      </div>

    </div>
  </div>
  <!-- Teams Section -->

  <!-- Contact Section -->
  <div id="contact_us">
    <div class="background">
      <div class="container">
        <div class="screen tile bottom-right">
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>CONTACT US</span>

              </div>
              <!-- <div class="app-contact">CONTACT INFO : 079-507-0611</div>-->
            </div>
            <div class="screen-body-item">
              <form action="contact.php" method="POST">
                <div class="app-form">
                  <!-- <div class="app-form-group">
                    <input class="app-form-control" name="name" placeholder="Name">
                  </div> -->
                  <div class="app-form-group">
                    <input class="app-form-control" type="email" name="email" placeholder="Email" id="name" required>
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" type="text" name="contact" placeholder="Contact No" id="contact">
                  </div>
                  <div class="app-form-group message">
                    <input class="app-form-control" type="text" name="message" placeholder="Message" id="message" required>
                  </div>

                  <div class="app-form-group buttons">
                    <!-- <button class="app-form-button" id="submit">SEND</button> -->
                    <!-- <input class="app-form-button" type="submit" name="submit" id="submit"  value="SEND"/> -->
                    <a href="#contact_us"><input class="app-form-button save-success-btn button" href="#contact_us" type="submit" name="submit" id="submit" value="SEND" /> </a>
                  </div>

                </div>
              </form>
            </div>

          </div>
          <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>

            <div class="success-message" style="margin: auto; width: 50%; padding: 10px;align-items:center; font-size: 20px;color: #0a8b8b;"><?php echo $_SESSION['success_message']; ?></div>

          <?php
            unset($_SESSION['success_message']);
          
          } 
          ?>
          
        </div>

      </div>

    </div>
  </div>
  </div>

  <!-- Footer Section -->
  <div class="footer">
    <div class="inner-footer">
      <div class="footer-items">
        <a href="#home"><img src="static/images/logo.png" alt="Logo for CobWeb"></a>
        <h1>CobWeb Developers</h1>
        <p>Connecting Business To The Web</p>
      </div>
      <div class="footer-items">
        <h3>Quick Links</h3>
        <div class="border1"></div>
        <ul>
          <a href="#home">
            <li>Home</li>
          </a>
          <a href="#about">
            <li>About</li>
          </a>
          <a href="#services">
            <li>Services</li>
          </a>
          <a href="#contact">
            <li>Contact</li>
          </a>
        </ul>
      </div>
      <div class="footer-items">
        <h3>Directories</h3>
        <div class="border1"></div>
        <ul>
          <a href="#SpiderByte">
            <li>SpiderByte</li>
            <p>At SpiderByte Code we provide a free, guided and flexible training course to students(16+) and adults, interested in becoming a developers. When our student complete our training course we recruit them as mentors to mentor at SpiderByte Code. Once our mentors have 12-18 months experience we introduce them to CobWeb Developers to enhance their skills where more Training is done to become official CobWeb Developers.</p>
          </a>
        </ul>
      </div>
      <div class="footer-items">
        <h3>Contact us</h3>
        <div class="border1"></div>
        <ul>
          <li><i class="fa fa-map-marker" aria-hidden="true"></i> Flexible</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel: +27-79-507-0611">079 507 0611</a>
          </li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i>cobwebdevelopes@gmail.com</li>
        </ul>
        <div class="social-media">
          <a href="http://www.instagram.com/cobweb_developers"><i class="fab fa-instagram"></i></a>
          <a href="#facebook"><i class="fab fa-facebook"></i></a>
          <a href="#linkedin"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      Copyright &copy; CobWebDevelopers 2021.
    </div>
  </div>
  <script src="static/app.js"></script>


</body>

</html>