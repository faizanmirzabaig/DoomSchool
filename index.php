<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doon International School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Luxurious+Roman&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;900&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Jost:wght@500;900&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/liststyle.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/menu.css">


    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css" />-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" ></script>-->
    <style>
        .text-highlighter {
            text-decoration: capitalize;
            color: yellow;
            font-family: cursive;
            font-weight: 700;
        }



        #meet-team::before {
            content: '';
            background: url(img/slider/1.jpg) ;
            /* repeat-y center center/cover; */
            background-size: cover;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            width: 100%;
            height: 100vh;
            position: absolute;
            left: 0px;
            z-index: -1;
            filter: brightness(0.3);
            padding-top: 100px;
        }





        @media screen and (max-width: 768px) {
            .carousel-inner>.item>img {
                height: 270px;
            }
        }
    </style>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa fa-chevron-up"></i>
    </button>
    <!-- First Container -->
    <!--<div class="container-fluid bg-1 text-left">
  <div class="col-md-4 header">
  <h1 class="heading">Awarded with</h1>
  <ul>
	<li><span>Asia's 50 best and fastest growing private education institution judged by KPMG</span></li>
	<li><span>Best upcoming University in Shimla hills for 2nd consecutive year by ASSOCHAM</span></li>
	<li><span>5000+ full time students</span></li>
	<li><span>A Global Diversity Campus having students from 20+ Countries & 24 States of India</span></li>
  </ul>
  </div>
</div>-->
    <!-- <div class="logoagu">
        <img src="img/DOON-LOGO-2.jpg" style="height: 126px;width: 132px;">
    </div> -->

    <div class="wrapperall">
        <div class='main-header' id="main-header"></div>

        <nav>

            <div class="content">
                <div class="logo"><img src="img/DIS_CHD_Logo.png"></div>
                <div class="data">
                    <input type="checkbox" id="show-menu">
                    <label for="show-menu" class="menu-icon" onclick="closebtn();"><i class=" fas fa-bars"></i></label>

                    <ul class="links">
                        <li>
                            <input type="checkbox" id="show-services">

                        </li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#enquirenow">About Us</a></li>
                        <li><a href="#faculties">Facilities</a></li>
                        <li class="logohide"><img src="img/DIS_CHD_Logo.png" /></li>




                        <li><a href="#features">Why Choose Us</a></li>
                        <li><a href="#enquirenow">Contact Us</a></li>



                    </ul>
                </div>

            </div>
            <!-- -->
        </nav>
    </div>




    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <!--<li data-target="#myCarousel" data-slide-to="4"></li>-->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="img/slider/4.jpg" alt="Flower" width="460" height="345">
                <div class="carousel-caption">
                    <h3>A platform for creating <span class="text-highlighter">global citizens and lifelong learners</span></h3>
                    <!-- <p>The atmosphere in Chania has a touch of Florence and Venice.</p> -->
                </div>

            </div>

            <div class="item">
                <img src="img/slider/2.jpg" alt="Chania" width="460" height="345">
                <div class="carousel-caption">
                    <h3><span class="text-highlighter">Dreams, Ambitions and Aspirations</span> ever forward and never to look back is Doon International School's spirit.</h3>
                    <!-- <p>The atmosphere in Chania has a touch of Florence and Venice.</p> -->
                </div>
            </div>

            <div class="item">
                <img src="img/slider/5.jpg" alt="Flower" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Doon International School helps children learn <span class="text-highlighter">good etiquette and communication skills</span> as early as possible.</h3>
                    <!-- <p>Beautiful flowers in Kolymbari, Crete.</p> -->
                </div>
            </div>

            <div class="item">
                <img src="img/slider/6.jpg" alt="Flower" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Doon International School is an <span class="text-highlighter">Epitome Of Ideologies</span> and setting global footprints in creating ultra-modern educational system.
                    </h3>
                    <!-- <p>Beautiful flowers in Kolymbari, Crete.</p> -->
                </div>
            </div>
            <div class="item">
                <img src="img/slider/7.jpg" alt="Flower" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Doon International School is an <span class="text-highlighter">Epitome Of Ideologies</span> and setting global footprints in creating ultra-modern educational system.
                    </h3>
                    <!-- <p>Beautiful flowers in Kolymbari, Crete.</p> -->
                </div>
            </div>

            <!--<div class="item">-->

            <!--</div>-->



        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <?php if (isset($_POST['name']) && isset($_POST['contacts']) && isset($_POST['city'])) {


        $email_to = 'contact@dischandigarh.in';
        $from = 'contact@dischandigarh.in';
        $name    = $_POST['name'];
        $contact = $_POST['contacts'];
        $city = $_POST['city'];
        $email = $_POST['email'];

        $message = $_POST['course'];

        $text = "<br>
            Contact us Mail From agu 2017-18<br><br>
            Name: $name<br>
            Contact Number: $contact<br>   
            Email Id : $email<br>
			City : $city<br><br>
			Course: $message";

        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html; charset=utf-8" . "\r\n";
        $headers .= "From: <$from>" . "\r\n";
        // $headers .= "BCC: leadgenerationmumbai@gmail.com".PHP_EOL;
        // $headers .= "From: <$name>" . "\r\n";

        if (mail($email_to, "Contact us Mail From  Doon International School 2022-23", $text, $headers)) {

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => 'http://sanjarcrm.com/api/leads/submit',
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => array(
                    'name' => $name,
                    'email' => $email,
                    'contact' => $contact,
                    'location' => $location,
                    'message' => $message,
                    'table_alias' => 'dischandigarh_in_',
                    'api_key' => '41b528d8fcc1e3428e17526a14ee7b8a'
                )
            ));
            // Send the request & save response to $resp
            $resp = curl_exec($curl);
            // Close request to clear up some resources
            curl_close($curl);


            //case of sucess
            $message = "Your Message Sent";
            echo '<script language="javascript">';
            echo 'alert("' . $message . '")';
            echo '</script> <script language="javascript"> window.location.href = "http://dischandigarh.in/"; </script>';
            //header('Location: thanks.htm');
        } else {
            //case of failure
            $message = "Your Message Sending Failed";
            echo '<script language="javascript">';
            echo 'alert("' . $message . '")';
            echo '</script>';
        }
    }

    ?>



    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center" id="enquirenow">
        <div class="container containerwidths">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading animated wow fadeInDown" style="font-family: 'Dosis';
    font-weight: 900; color: yellow; line-height: normal;">ADMISSIONS OPEN </h3>
                    <h3 class="heading__sub animated wow fadeInDown" style="font-family: 'Dosis';
    font-weight: 900; color: yellow; ">2022-23</h3>
                    <h4 class="heading__sub3 animated wow fadeInDown"  >For</h4>
                    <h3 class="heading__sub4 animated wow fadeInDown" style=" ">CBSE Day Boarding School Pre Nursery to Grade VIII</h3>

                </div>
                <div class="col-md-12">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="col-md-2 col__2">
                            <input type="text" name="name" id="name" placeholder="Name" class="innerbox2" required>
                        </div>
                        <div class="col-md-2 col__2">
                            <input type="text" name="contacts" id="contacts" placeholder="mob." class="innerbox2" required>
                        </div>
                        <div class="col-md-2 col__2">
                            <input type="text" name="email" id="email" placeholder="Email Id" class="innerbox2" required>
                        </div>
                        <div class="col-md-2 col__2">
                            <select class="innerbox2-select" id="course" name="course" required aria-required="true">
                                <option value="">Select Course </option>
                                <option value="Pre-Nursery">Pre-Nursery</option>
                                <option value="Nursery">Nursery</option>
                                <option value="KG">KG</option>
                                <option value="LKG (Lower Kindergarten)">LKG (Lower Kindergarten)</option>
                                <option value="UKG (Upper Kindergarten)">UKG (Upper Kindergarten)</option>
                                <option value="Class I">Class I</option>
                                <option value="Class II">Class II</option>
                                <option value="Class III">Class III </option>
                                <option value="Class IV">Class IV</option>
                                <option value="Class V">Class V</option>
                                <option value="Class VI">Class VI</option>
                                <option value="Class VII">Class VII</option>
                                <option value="Class VIII">Class VIII</option>

                            </select>
                        </div>
                        <div class="col-md-2 col__2">
                            <input type="text" name="city" id="city" placeholder="city" class="innerbox2" required>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                            <input type="submit" value="Submit" class="btnss">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="group-ccol" id="faculties">
        <div class="container">
            <div class="row">
                <div class="ccol">
                    <h5>Our Programs</h5>
                    <p>We are very happy to introduce many dynamic Programs which are most after sought due to our teaching
                        methodology …
                    </p>
                    <ul class="nostyle">
                        <li>
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Nature Nurture Curriculum
                        </li>
                        <li>
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Artificial Intelligence
                        </li>
                        <li>
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>IAYP (International Award for Young People)
                        </li>
                    </ul>
                </div>
                <div class="ccol">
                    <h5>Our Faculty</h5>
                    <p>
                        We have got some of the best Faculty who can help you to polish your skills </p>
                    <ul class="nostyle">
                        <li>
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>The best way to predict the future is to create it
                        </li>
                        <li>
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Education is simply the soul of a society as it passes from one generation to another.
                        </li>

                    </ul>
                </div>
                <div class="ccol">
                    <h5>New Beginning</h5>
                    <p>
                        Doon International School is an epitome of ideologies and setting global footprints in creating ultra-modern educational system.
                    <ul class="nostyle">
                        <li>
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Our methods are unique.
                        </li>
                        <li>
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Creating the right cultural fabric for an ideal world society.
                        </li>
                    </ul>

                    </p>

                </div>
            </div>
        </div>
    </section>

    <!--Popup added-->
    <section>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="display:flex; justify-content: end;">

                        <button id="close" type="button" class="close1" data-dismiss="modal" aria-label="Close" style="border-radius: 12px; width: 26px; height: 31px;
                margin-bottom: -26px; margin-top: -14px; margin-right: -13px; background-color: #005197; color: white;">
                            X
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="img/doon-modal.jpeg" alt="popup" style="width: 571px">

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Popup section end-->

    <section id="features" style="background: #F9FAFA;">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft  fadeIn">

                    <h3 class="column-title titlebg">Student's Support</h3>

                    <div class="slideshow-container margint animated wow slideInLeft">
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 10</div>
                            <img src="img/student/7.jpg" style="width:100%">

                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 10</div>
                            <img src="img/student/8.JPG" style="width:100%">

                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 10</div>
                            <img src="img/student/9.JPG" style="width:100%">

                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">4 / 10</div>
                            <img src="img/student/10.jpg" style="width:100%">

                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">5 / 10</div>
                            <img src="img/student/1.jpg" style="width:100%">

                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">6 / 10</div>
                            <img src="img/student/2.JPG" style="width:100%">

                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">7 / 10</div>
                            <img src="img/student/3.JPG" style="width:100%">

                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">8 / 10</div>
                            <img src="img/student/4.JPG" style="width:100%">

                        </div>


                        <div class="mySlides fade">
                            <div class="numbertext">9 / 10</div>
                            <img src="img/student/5.jpg" style="width:100%">

                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">10 / 10</div>
                            <img src="img/student/6.jpg" style="width:100%">

                        </div>


                    </div>
                    <br>

                    <div style="text-align:center;display:none">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3 class="column-title titlebg">Why Doon International School ?</h3>

                    <ul class="clist list-group margint animated wow slideInRight">
                        <li class="list-group-item">
                            <i class="fa fa-check-square"></i> Students build the confidence to face the future with boldness and curiosity.
                        </li>
                        <li class="list-group-item">
                            <i class="fa fa-check-square"></i> There is no back row at Doon. Our students develop the essential skills to create a lifelong passion for learning.
                        </li>

                        <li class="list-group-item">
                            <i class="fa fa-check-square"></i> At DIS children not only make strong academic journey, but also build a robust character.
                        </li>

                        <li class="list-group-item">
                            <i class="fa fa-check-square"></i> Our students forms a special bond with our Educators, this works as a guiding force in their life.
                        </li>

                        <li class="list-group-item">
                            <i class="fa fa-check-square"></i> Our core purpose is to ensure that our students acquire the skills and attributes to become leaders for a better world.
                        </li>

                        <li class="list-group-item">
                            <i class="fa fa-check-square"></i> Our vision is to provide a happy, caring and stimulating learning environment for students.
                        </li>

                        <li class="list-group-item">
                            <i class="fa fa-check-square"></i> We help students to recognize their full potential so that they can make their best contribution to the society.
                        </li>

                        <!--<li class="list-group-item">-->
                        <!--    <i class="fa fa-check-square"></i> Industry-savvy academic staff-->
                        <!--</li>-->

                        <!--<li class="list-group-item">-->
                        <!--    <i class="fa fa-check-square"></i> Well regarded, innovative research programs-->
                        <!--</li>-->

                        <!--<li class="list-group-item">-->
                        <!--    <i class="fa fa-check-square"></i> Global knowledge network-->
                        <!--</li>-->

                        <!--<li class="list-group-item">-->
                        <!--    <i class="fa fa-check-square"></i> Amalgamation of Business Ethics into curriculum-->
                        <!--</li>-->

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Why APG University-->


    <!--<section id="testimonial">-->
    <!--    <div class="container">-->
    <!--        <div class="section-header">-->
    <!--            <h2 class="section-title text-center animated wow fadeInDown" style="color:#fff">OUR RECRUITERS </h2>-->
    <!-- <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
    <!--        </div>-->

    <!--        <div class="row">-->
    <!--            <marquee>-->

    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/angel-broking.jpg" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/google.jpg" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/jcbl.jpg" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/marriott.jpg" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/net-connect.jpg" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/oberoi-hotel.jpg" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/orange-trip.jpg" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/radisson-hotel.jpg" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/StriderInfotech.png" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/taj-hotel.jpg" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/tommy-hilfier.jpg" alt="">-->
    <!--                <img class="img-responsive img-thumbnail" src="img/recuters/Videocon.png" alt="">-->

    <!--            </marquee>-->





    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->


    <!--/#requeres-->
    <section>
<div id="meet-team">
   
        <div class="container meet_team_container" >
            <div class="section-header">
                <h2 class="white section-title text-center animated wow fadeInDown">Our Facilities</h2>
            </div>
            <div id="myCarousel1" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner animated wow slideInDown">

                    <div class="item active">

                        <div class="col-sm-9 col-md-6">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive1" src="img/doon-1-min.jpg" alt="" style="height: 361px;">
                                </div>
                                <div class="team-info">
                                    <h5>MODERN SCHOOL BUILDING</h5>

                                </div>
                                <!--<p>An ultra modern school building with plush interiors, a well stocked air conditioned library give our school the cutting edge advantage in terms of infra structure.-->
                                <!--    <a href="#enquirenow" class="label label-info">ENQUIRE NOW</a>-->
                                <!--</p>-->

                            </div>
                        </div>

                        <div class="col-sm-9 col-md-6">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive1" src="img/bus.jpeg" alt="" style="height: 361px;">
                                </div>
                                <div class="team-info">
                                    <h5>TRANSPORT FACILITY</h5>

                                </div>
                                <!--<p>The school also provides transport facilities to the children in modern buses equipped with GPRS, Mobile Phones and First Aid Kits.-->

                                <!--    <br><a href="#enquirenow" class="label label-info">ENQUIRE NOW</a>-->
                                <!--</p>-->

                            </div>
                        </div>





                    </div>
                    <!--/item-->



                    <div class="item ">

                        <div class="col-sm-9 col-md-6">
                            <div class="team-member">
                                <div class="team-img">
                                    <img class="img-responsive1" src="img/slider/3.jpg" alt="">
                                </div>
                                <div class="team-info">
                                    <h5>SPORTING FACILITIES</h5>

                                </div>
                                <!--<p>-->
                                <!--    Sporting facilities include a large playground, a shooting range, a fully equipped gymnasium, basketball court, tennis court, volleyball court, cricket pitches and a skating rink.-->

                                <!--    <a href="#enquirenow" class="label label-info">ENQUIRE NOW</a>-->
                                <!--</p>-->

                            </div>
                        </div>

                        <div class="col-sm-9 col-md-6">
                            <div class="team-member">
                                <div class="team-img">
                                    <img class="img-responsive1" src="img/slider/4.jpg" alt="">
                                </div>
                                <div class="team-info">
                                    <h5>PLAYGROUND FACILITIES</h5>

                                </div>
                                <!--<p>Our garden campus is imaginative and includes safe play areas for the young pupils and a number of presentation within each phase of the school. -->

                                <!--    <a href="#enquirenow" class="label label-info">ENQUIRE NOW</a>-->
                                <!--</p>-->

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-sm-9 col-md-6">
                            <div class="team-member">
                                <div class="team-img">
                                    <img class="img-responsive1" src="img/medic.jpeg" alt="" style="height: 361px;">
                                </div>
                                <div class="team-info">
                                    <h5>MEDICAL FACILITIES CENTRE</h5>

                                </div>
                                <!--                                <p>-->
                                <!--                                    An in house clinic -->
                                <!--under the supervision of a trained nurse and doctor provides preventive and emergency medical care to the children. -->

                                <!--                                    <br><a href="#enquirenow" class="label label-info">ENQUIRE NOW</a>-->
                                <!--                                </p>-->

                            </div>
                        </div>

                        <div class="col-sm-9 col-md-6">
                            <div class="team-member">
                                <div class="team-img">
                                    <img class="img-responsive1" src="img/robotics.jpeg" alt="" style="height: 361px;">
                                </div>
                                <div class="team-info">
                                    <h5>ROBOTICS</h5>

                                </div>
                                <!--                                <p>-->
                                <!--                                    An in house clinic -->
                                <!--under the supervision of a trained nurse and doctor provides preventive and emergency medical care to the children. -->

                                <!--                                    <br><a href="#enquirenow" class="label label-info">ENQUIRE NOW</a>-->
                                <!--                                </p>-->

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-sm-9 col-md-6">
                            <div class="team-member">
                                <div class="team-img">
                                    <img class="img-responsive1" src="img/shooting.jpeg" alt="" style="height: 361px;">
                                </div>
                                <div class="team-info">
                                    <h5>SHOOTING</h5>

                                </div>
                                <!--                                <p>-->
                                <!--                                    An in house clinic -->
                                <!--under the supervision of a trained nurse and doctor provides preventive and emergency medical care to the children. -->

                                <!--                                    <br><a href="#enquirenow" class="label label-info">ENQUIRE NOW</a>-->
                                <!--                                </p>-->

                            </div>
                        </div>

                        <div class="col-sm-9 col-md-6">
                            <div class="team-member">
                                <div class="team-img">
                                    <img class="img-responsive1" src="img/skate.jpeg" alt="" style="height: 361px;">
                                </div>
                                <div class="team-info">
                                    <h5>SKATING</h5>

                                </div>
                                <!--                                <p>-->
                                <!--                                    An in house clinic -->
                                <!--under the supervision of a trained nurse and doctor provides preventive and emergency medical care to the children. -->

                                <!--                                    <br><a href="#enquirenow" class="label label-info">ENQUIRE NOW</a>-->
                                <!--                                </p>-->

                            </div>
                        </div>
                    </div>


                </div>
                <!--/carousel-inner-->
                <div class="col-sm-offset-6 mt20">
                    <a class="left btn btn-primary btn-sm " href="#myCarousel1" data-slide="prev">‹</a>
                    <a class="right btn btn-primary btn-sm" href="#myCarousel1" data-slide="next">›</a>
                </div>
                <!--/myCarousel-->
            </div>
        </div>
        <!--<div class="divider"></div>-->
    </div>
</section>
    <!--Whatsapp & Call Icon-->
    <div style="position:fixed; top:79%; right:20px; z-index:20000">
        <a href="https://wa.me/919004960057"><img src="img/whatsapp (1).png" alt="whatsapp" style="width:45px; height:45px; "></a>
    </div>
    <!-- /#faculty -->

    <!--Location-->
    <section class="newyear">
        <div class="container containerwidths">
            <div class="col__row">
                <div class="col__md__70" >
                    <!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.6407316451982!2d76.7172590151341!3d30.840731481599608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ff150253e1f11%3A0xa04305877c23fcb7!2sDoon%20International%20School%2C%20New%20Chandigarh!5e0!3m2!1sen!2sin!4v1608202491745!5m2!1sen!2sin"  frameborder="0" allowfullscreen="allowfullscreen" aria-hidden="false"></iframe> -->
                        <iframe  tabindex="0"  loading="lazy" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.641099343363!2d76.71725911513407!3d30.840721181599633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ff150253e1f11%3A0xa04305877c23fcb7!2sDoon%20International%20School%2C%20New%20Chandigarh%20%7C%20Best%20School%20in%20New%20Chandigarh%20%7C%20Best%20cbse%20school%20in%20chandigarh!5e0!3m2!1sen!2sin!4v1642482657948!5m2!1sen!2sin" width="950" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col__md__30">
                    <ul>
                        <li>Location:<br>
                            ECO CITY, PHASE 2,
                            SECTOR 11, NEW CHANDIGARH
                            MOHALI (PB.)</li>
                        <li>Email:<br>
                            admissions@dischandigarh.com, contact@dischandigarh.com</li>
                        <li>Phone:<br>
                            +91 (0) 9875944104</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Location end-->

    <!--Location-->
    <!--    <section class="elementor-section elementor-top-section elementor-element elementor-element-d435ad1 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d435ad1" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">-->
    <!--    <div class="elementor-container elementor-column-gap-no">-->
    <!--        <div class="elementor-row">-->
    <!--            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-426f8b0" data-id="426f8b0" data-element_type="column">-->
    <!--                <div class="elementor-column-wrap elementor-element-populated">-->
    <!--                    <div class="elementor-widget-wrap">-->
    <!--                        <div class="elementor-element elementor-element-3c3a935 elementor-widget elementor-widget-menu-anchor" data-id="3c3a935" data-element_type="widget" data-widget_type="menu-anchor.default">-->
    <!--                            <div class="elementor-widget-container">-->
    <!--                                <div id="contact" class="elementor-menu-anchor"></div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="elementor-element elementor-element-2bde8ea elementor-widget elementor-widget-heading" data-id="2bde8ea" data-element_type="widget" data-widget_type="heading.default">-->
    <!--                            <div class="elementor-widget-container">-->
    <!--                                <h2 class="elementor-heading-title elementor-size-large">Our educational institution has been conceptualized to educate young minds in such a way as to make them stand tall even in the largest of crowds. We therefore, aspire to develop outstanding world citizens who can contribute to the well-being of their society through positive thoughts and actions.-->
    <!--                                </h2>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-ca72d1b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ca72d1b" data-element_type="section">-->
    <!--                            <div class="elementor-container elementor-column-gap-default">-->
    <!--                                <div class="elementor-row">-->
    <!--                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a6bf268" data-id="a6bf268" data-element_type="column">-->
    <!--                                        <div class="elementor-column-wrap elementor-element-populated">-->
    <!--                                            <div class="elementor-widget-wrap">-->
    <!--                                                <div class="elementor-element elementor-element-92d8f5f elementor-widget elementor-widget-text-editor" data-id="92d8f5f" data-element_type="widget" data-widget_type="text-editor.default">-->
    <!--                                                    <div class="elementor-widget-container">-->
    <!--                                                        <div class="elementor-text-editor elementor-clearfix">-->
    <!--                                                            <iframe loading="lazy" style="border: 0;" tabindex="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.6407316451982!2d76.7172590151341!3d30.840731481599608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ff150253e1f11%3A0xa04305877c23fcb7!2sDoon%20International%20School%2C%20New%20Chandigarh!5e0!3m2!1sen!2sin!4v1608202491745!5m2!1sen!2sin" width="600" height="450" frameborder="0" allowfullscreen="allowfullscreen" aria-hidden="false"></iframe>-->
    <!--                                                            <h4 style="color: #fff;">The school is located at the foot-->
    <!--                                                                hills of the Himalaya&#8217;s at a short distance from the new Medicity, PCA International Cricket Stadium; adjacent to Eco City &#8211; Phase 2,-->
    <!--                                                                New Chandigarh</h4>-->
    <!--                                                        </div>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8ca8337" data-id="8ca8337" data-element_type="column">-->
    <!--                                        <div class="elementor-column-wrap elementor-element-populated">-->
    <!--                                            <div class="elementor-widget-wrap">-->
    <!--                                                <div class="elementor-element elementor-element-742824d elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="742824d" data-element_type="widget" data-widget_type="heading.default">-->
    <!--                                                    <div class="elementor-widget-container">-->
    <!--                                                        <h2 class="elementor-heading-title elementor-size-large"><br>Location:<br>-->
    <!--                                                            ECO CITY, PHASE 2, <br>-->
    <!--                                                            SECTOR 11, NEW CHANDIGARH<br> MOHALI (PB.)-->
    <!--                                                            <div style="border-bottom: 1px solid #fafafa38; padding-top: 20px; margin-bottom: 20px;"></div>-->
    <!--                                                            Email:<br>-->
    <!--                                                            admissions@dischandigarh.com<br>-->
    <!--                                                            contact@dischandigarh.com-->
    <!--                                                            <div style="border-bottom: 1px solid #fafafa38; padding-top: 20px; margin-bottom: 20px;"></div>-->
    <!--                                                            Phone:<br>-->
    <!--                                                            +91 (0) 9875944104-->

    <!--                                                    </div>-->
    <!--                                                    </h2>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                            <div class="elementor-element elementor-element-33ab6d4 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="33ab6d4" data-element_type="widget" data-widget_type="image.default">-->
    <!--                                                <div class="elementor-widget-container">-->
    <!--                                                    <div class="elementor-image">-->
    <!--                                                        <img width="200" height="960" src="https://dischandigarh.com/wp-content/uploads/2020/12/logosss.png" class="attachment-large size-large" alt="" loading="lazy" />-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </section>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--Location end-->

    <a href="#enquirenow" class="enquiry_btn">Inquire Now</a>

    <!-- Footer -->
    <footer class="container-fluid bg-6 text-center">
        <p class="pad10">&copy; 2022 - 2023 DIS Chandigarh. All Rights Reserved. <a href="https://www.sanjaresolutions.com/" target="_blank">Developed By Sanjar E Solutions</a> |
            <a href="#" target="_blank">Privacy
        </p>
    </footer>

    <!-- Slider JScript -->
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
        }
    </script>
    <!-- End Slider JScript -->

    <!-- Is to Top -->
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <!-- End Is to Top -->
    <script src="js/wow.min.js"></script>
    <script src="js/fontawesome.js"></script>
    <script src="js/custom.js"></script>


    <!--Popup modal-->

    <!--Popup modal end-->
    </section></body>
<script>
    // $(document).ready(function(){
    //     $("#exampleModal").modal();
    //  });
</script>

</html>