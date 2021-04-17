<?php
    session_start();
?>

<?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header('location: index.php');
       }
?>

<!DOCTYPE html>

<html  data-wf-page="5f419f9b3301b75502a33d77" >

<head>
    <meta charset="utf-8" />
    <title>Healthzone</title>
  
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="https://uploads-ssl.webflow.com/5eeaa8254ac140092cf3c3d6/css/the-sonder-design.webflow.a94a55e50.css" rel="stylesheet" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TimelineLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/EasePack.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script defer src="face-api.min.js"></script>
    <script defer src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Rubik:300,300italic,regular,italic,500,500italic,700,700italic,900,900italic", "Inter:200,300,regular,500,600,700,800,900", "Roboto Mono:100,200,300,regular,500,600,700,100italic,200italic,300italic,italic,500italic,600italic,700italic", "Shrikhand:regular"]
            }
        });
    </script>
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel="stylesheet" type="text/css" href="button.css">
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
  
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-177204875-1"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-177204875-1', {
            'anonymize_ip': false
        });
    </script>

  
    </script>
    <style type="text/css">
        
        .btn1{
            border: none;
            width: 200px;
            padding: 16px 32px;
            text-decoration: none;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        
        .btn1:hover {
          background-color: #008CBA;
          color: white;
        }

        .btn2
        {
          background-color: transparent; 
          border: none; 
          color: white;
          padding: 12px 16px; 
          font-size: 16px; 
          cursor: pointer; 
          border-radius: 4rem;
        }


        .btn2:hover {
          background-color: White;
           color: black; 
        }
        
        .div-callout{
        	background-color: #fff;
        }

        #canvas1 {
          position: absolute;
          top: 600px;
          left: 150px;
        }

        .column-76 {
            padding: 25% 0px;
            background-color: #2d292b;
            background-image: url("1.jpg");
            background-position: 30% 50%;
            background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
        }

        .column-76.testimonial {
            
            background-image: linear-gradient(270deg, rgba(191, 235, 243, 0.55), transparent 93%), url("1.jpg");
            background-position: 0px 0px, 30% 50%;
            background-size: auto, cover;
            background-repeat: repeat, no-repeat;
        }

        .column-76.testimonial.reverse {
            background-image: linear-gradient(90deg, rgba(247, 224, 95, 0.5), transparent 93%), url("1.jpg");
        }

        #bodybox {
          margin: auto;
          max-width: 550px;
          font: 15px arial, sans-serif;
          background-color: white;
          border-style: solid;
          border-width: 1px;
          padding-top: 20px;
          padding-bottom: 25px;
          padding-right: 25px;
          padding-left: 25px;
          box-shadow: 5px 5px 5px grey;
          border-radius: 15px;
          position: fixed;
          right: 20px;
          bottom: 100px;
          z-index: 1000;
        }

        #chatborder {
          border-style: solid;
          background-color: #f6f9f6;
          border-width: 3px;
          margin-top: 20px;
          margin-bottom: 20px;
          margin-left: 20px;
          margin-right: 20px;
          padding-top: 10px;
          padding-bottom: 15px;
          padding-right: 20px;
          padding-left: 15px;
          border-radius: 15px;
        }

        .chatlog {
           font: 15px arial, sans-serif;
        }

        #chatbox {
          font: 17px arial, sans-serif;
          height: 22px;
          width: 100%;
        }

        #chat{
            position: fixed;
            right: 20px;
            bottom: 20px;
        }
        #jokes{
            display: none ;
        }
        #call{
            display: none;
        }
    </style>
    <SCRIPT language=JavaScript>
                function reload(form)
                {
                var val=form.body.options[form.body.options.selectedIndex].value; 
                self.location='dashboard.php?cat=' + val ;
                }
                function reload3(form)
                {
                var val=form.body.options[form.body.options.selectedIndex].value; 
                var val2=form.bodysub.options[form.bodysub.options.selectedIndex].value; 

                self.location='dashboard.php?cat=' + val + '&cat3=' + val2 ;
                }
                function reload4(form)
                {
                var val=form.body.options[form.body.options.selectedIndex].value; 
                var val2=form.bodysub.options[form.bodysub.options.selectedIndex].value; 
                var val3=form.sym.options[form.sym.options.selectedIndex].value; 

                self.location='dashboard.php?cat=' + val + '&cat3=' + val2 + '&cat4=' + val3 ;
                }
    </script>
</head>

<body class="body" id="body">
    <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
        <div class="navigation-div"><a href="dashboard.php" aria-current="page" class="brand w-nav-brand w--current"><img src="icon.png" alt="" class="image-122"/><div class="text-block-3">HEALTHZONE</div></a>
            <nav
                role="navigation" class="nav-menu-dropdown w-clearfix w-nav-menu"><form action="dashboard.php" method="POST"><button type="submit" class="button dropdown-link w-button" style="text-decoration: none;" name="logout">Logout</button></form>
            </nav>
                <div class="menu-button-green w-nav-button">
                    <div class="icon-2 w-icon-nav-menu"></div>
                </div>
        </div>
    </div>
    <div data-w-id="7a3324a3-d0e3-8cdd-0334-71e6b5303a46" style="background-color:rgb(191,235,243)" class="section-standard hero lp-template light-blue sticky">
        <div class="container-10 w-container">
            <div class="div-home">
                <div data-w-id="ebff96e8-f9a7-aed1-5ff2-b4821527beae" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5eeaa8254ac140092cf3c3d6/5fa464848815ec17f271b6d4_squares_nostroke.json" data-loop="1" data-direction="1" data-autoplay="1"
                    data-is-ix2-target="0" data-renderer="svg" data-default-duration="3.7916666666666665" data-duration="0" class="lottie-animation-11"></div>
            </div>
            <div class="div-home">
                <div class="div-block-61">
                    <h1 class="heading-1 centre">Healthzone</h1>
                </div>
                <p class="subheadline _500w centre">Let us detect your mood and diseases to make you feel better and stay fit by exercising.<strong><br/></strong></p>
                <div class="div-450-width left-aligned flex centre"><a href="/pricing" class="button w-button">Get Started </a></div>
                <p class="icon-fa"><a href="#video" class="icon-link"></a><strong><br/></strong></p>
            </div>
        </div>
    </div>
    <div class="section-standard features">
        <div class="columns-features reverse-mobile w-row">
            <div class="w-col w-col-6 w-col-small-small-stack" style="text-align: right;">
                <video id="video" width="480" height="480" autoplay muted >
                   
                </video>
            </div>
            <div class="column-83 w-col w-col-6 w-col-small-small-stack" style="text-align: right;">      
                <canvas id="myChart" width="480" height="480"></canvas>
            </div>
        </div>
    </div>
    <input type="hidden" id='hidden_token'>              
    <h1 style="text-align: center;">Emotion :</h1>
    <h3 class="paragraph _400w" id="emotion" style="font-size:30px; text-align: center; max-width: 2000px"></h3>
    <button class="btn1" id="btn_submit" style="display: block; margin: 10px auto;"><a href="#steps" style="text-decoration: none; color: black;">Listen to Music</a></button>
    <button class="btn1" onclick="fun('jokes')" style="display: block; margin: 10px auto;"><a href="#jokes" style="text-decoration: none; color: black;">Laugh with Jokes</a></button>
    <button class="btn1" onclick="fun('call')" style="display: block; margin: 10px auto;"><a href="#call" style="text-decoration: none; color: black;">Talk to our counsellor</a></button>
    <button class="btn2" id="chat" onclick="fun('bodybox')" style="z-index: 100;"><img src="chat.png" style="width: 50px"></button>
    
    <div id="steps" class="section-standard steps">
        <div class="columns-15 w-row">

            <div class="column-91 w-col w-col-4" id="song-detail">
            </div>
            <div class="column-92 w-col w-col-8">
                <div class="div-standard-2 song-list">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="membership-benefits-2" id="jokes">
        <div class="div-standard flex">
            <div class="div-slide">
                <h2 class="heading-title">Laugh with us</h2>
            </div>
        </div>
        <div data-delay="3000" data-animation="slide" data-autoplay="1" data-easing="ease-in-out-sine" data-disable-swipe="1" data-duration="650" data-infinite="1" class="slider-2 w-slider">
            <div class="mask-2 w-slider-mask">
                <div class="slide-2 w-slide">
                    <div class="div-slider">
                        <h1 class="heading-slide">First Laughs</h1>
                    </div>
                </div>
                <div class="w-slide">
                    <div class="div-slider">
                        <h1 class="heading-slide">.LOL.</h1>
                    </div>
                </div>
                
            </div>
            <div class="left-arrow-2 w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="right-arrow-2 w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="slide-nav-2 w-slider-nav w-round"></div>
        </div>
        <div data-delay="3010" data-animation="slide" data-autoplay="1" data-easing="ease-in-out-sine" data-duration="650" data-infinite="1" class="slider-2-b w-slider">
            <div class="mask-2 w-slider-mask">
                <div class="slide-2 w-slide">
                    <div class="div-slider bottom">
                        <p class="paragraph-slide">Why do we tell actors to “break a leg?” Because every play has a cast.<br/>**Laughing Sounds**</p>
                    </div>
                </div>
                <div class="w-slide">
                    <div class="div-slider bottom">
                        <p class="paragraph-slide">Did you hear about the semi-colon that broke the law? He was given two consecutive sentences. </p>
                    </div>
                </div>
                <div class="w-slide">
                    <div class="div-slider bottom">
                        <p class="paragraph-slide">Don't you hate it when someone answers their own questions? I do.</p>
                    </div>
                </div>
            </div>
            <div class="left-arrow-2 w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="right-arrow-2 w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="slide-nav-2 w-slider-nav w-round"></div>
        </div>
        <div class="div-block-59"><a href="#body" class="button no-max-width benefits w-button">Scroll up</a></div>
    </div>
    <div class="section-standard features">
        <div class="columns-features reverse-mobile w-row">
            <div class="column-76 w-col w-col-6 w-col-small-small-stack"></div>
            <div class="column-83 w-col w-col-6 w-col-small-small-stack">
                <div class="div-slide">
                    <h2 class="heading-title features">Features you will love</h2>
                </div>
                <div class="features-pro">
                    <p class="h4 features">Detect your mood</p>
                </div>
                <p class="paragraph _400w">We detect your mood.<br/></p>
                <p class="h4 features">Suggesting you songs</p>
                <p class="paragraph _400w">We suggest you a playlist that's completely right for your mood. </p>
                <p class="h4 features">Helping you with probable diseases</p>
                <p class="paragraph _400w">We suggest you probable diseases. </p>
                <p class="h4 features">Talk with our counsellor</p>
                <p class="paragraph _400w">Book a session call with the counsellors. </p>
                <p class="h4 features">Fitness zone</p>
                <p class="paragraph _400w">Exercise with an AR/VR fitness trainer. </p>
                <div class="features-pro">
                    <p class="h4 features">Chat with us and tell us your problems.</p>
        		</div>
                <p class="paragraph _400w">Friendly chatbot to help you out. <br/></p>
            	</div>
        	</div>
    </div>
        <div id='bodybox' style="margin-top: 100px; display: none;">
          <h1></h1>  
          <div id='chatborder'>
            <p id="chatlog7" class="chatlog">&nbsp;</p>
            <p id="chatlog6" class="chatlog">&nbsp;</p>
            <p id="chatlog5" class="chatlog">&nbsp;</p>
            <p id="chatlog4" class="chatlog">&nbsp;</p>
            <p id="chatlog3" class="chatlog">&nbsp;</p>
            <p id="chatlog2" class="chatlog">&nbsp;</p>
            <p id="chatlog1" class="chatlog">&nbsp;</p>
            <input type="text" name="chat" id="chatbox" placeholder="Hi there! Type here to talk to me." onfocus="placeHolder()">
          </div>
          <br>
          <br>
        </div>  
    </div>
    <div class="section-call-out" id="call" >
        <div class="div-callout">
            <p class="subheadline-2 invert">Get the perfect professional help with our counsellors.<strong><br/></strong></p><a data-w-id="7aca7ddf-809e-c73a-1220-632a3f044596" href="/book-a-call" class="button-3 w-button">Book a Call</a>
        </div>
        
    </div>








<?php

require 'token_generator.php';
require 'priaid_client.php';

class Demo
{
    private $config;
    private $diagnosisClient;
    
    function __construct()
    {
        $this->config = parse_ini_file("config.ini");
    }
    
    private function checkRequiredParameters()
    {
        $pass = true;
        
        if (!isset($this->config['username']))
        {
            $pass = false;
            print "You didn't set username in config.ini" ;
        }

        if (!isset($this->config['password']))
        {
            $pass = false;
            print "You didn't set password in config.ini" ;
        }
            
        if (!isset($this->config['authServiceUrl']))
        {
            $pass = false;
            print "You didn't set authServiceUrl in config.ini" ;
        }

        if (!isset($this->config['healthServiceUrl']))
        {
            $pass = false;
            print "You didn't set healthserviceUrl in config.ini" ;
        }
         
        return $pass;
    }
    
    public function simulate()
    {

        print "<div class='login-box' style='width:80%; margin:100px auto; border-radius:50px;'>
        <h2>Symptom Checker</h2>";
        print "<form action='dashboard.php' method='POST' id='form'><div class='user-box'>";
        if (!$this->checkRequiredParameters())
            return;
        
        $tokenGenerator = new TokenGenerator($this->config['username'],$this->config['password'],$this->config['authServiceUrl']);
        $token = $tokenGenerator->loadToken();
        
        if (!isset($token))
            exit();

        $this->diagnosisClient = new DiagnosisClient($token, $this->config['healthServiceUrl'], 'en-gb');

        $cat = 0;
        $cat3 = 0;
        $cat4 = 0;

        if(isset($_GET['cat']))
            $cat=$_GET['cat'];

        if(isset($_GET['cat3']))
            $cat3=$_GET['cat3'];

        if(isset($_GET['cat4']))
            $cat4=$_GET['cat4'];

        $bodyLocations = $this->diagnosisClient->loadBodyLocations();
        if (!isset($bodyLocations))
            exit();
        
        $this->printSimpleObject($bodyLocations,'submit1','body',$cat, 'reload', 'Body locations');
        
        // get random body location
        
        $bodySublocations = $this->diagnosisClient->loadBodySublocations($cat);
        if (!isset($bodySublocations))
            exit();
        
        $this->printSimpleObject($bodySublocations,'submit2','bodysub', $cat3, 'reload3'," Body Sublocations");
            
            // get random body sublocation
            
        $symptoms = $this->diagnosisClient->loadSublocationSymptoms($cat3,'man');
        if (!isset($symptoms))
            exit();
        if (count($symptoms) == 0)
            die("No symptoms for selected body sublocation");
                
            $this->printSimpleObject($symptoms,'submit3','sym', $cat4, 'reload4', 'Symptoms in body sublocation');
                
            // get diagnosis
            $selectedSymptoms = array($cat4);
            $diagnosis = $this->diagnosisClient->loadDiagnosis($selectedSymptoms, 'male', 1988);
            if (!isset($diagnosis))
                exit();
            print("<h3>Calculated diagnosis:");
            $this->printDiagnosis($diagnosis);

            print "</div></form></div>";
    
    }
    
    private function printDiagnosis($object)
    {
        print "<pre style='font-size:20px;'>" ;
        print "<b>ID\tName</b>";
        array_map(function ($issue) {
            echo "\n", $issue['Issue']['ID'], "\t", $issue['Issue']['Name']," (", $issue['Issue']['Accuracy'],"%)\n";
            echo "<b>Specialisations</b> -> ";
            array_map(function ($spec)
            {
              echo $spec['Name'],"(",$spec['ID'],")", "\t";
            }, $issue['Specialisation']);
            echo "\n";
        }, $object);
        print "</pre>" ; 
    }
        
    private function printSimpleObject($object,$name,$type,$cat,$fn,$select)
    {   
        print "<select name='$type' onchange='$fn(this.form)'>";
        print "<option>$select</option>";
        
        foreach ($object as $var) {
            if ((int)$var['ID'] == (int)$cat) {
                echo "<option value='", $var['ID'], "' selected>", $var['Name'], "</option>";
            }
            else
                echo "<option value='", $var['ID'], "'>", $var['Name'], "</option>";
        }
        print "</select>" ;

    }

}

$demo = new Demo();
$demo->simulate();

?>







    <div class="section-standard features">
        <div class="columns-features reverse-mobile w-row" style="text-align: center; background-color: white;" >
            <div class="text-block-3" style="margin: 20px auto; color: black; font-size: 40px; font-weight: 20px; margin: 40px auto !important;">WORKOUT ZONE</div>
        </div>
        <div class="columns-features reverse-mobile w-row" style="text-align: center; background-color: white">
            <div class="div">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo"/>
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="https://go.echoar.xyz/MPui" class="buttonn button--bubble" target=" ">
                Situps
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="buttonn effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>
            </div>
            <div class="div">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo"/>
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="https://go.echoar.xyz/EwXq" class="buttonn button--bubble" target=" ">
                Push Up
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="buttonn effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>
            </div>
            <div class="div">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo"/>
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="https://go.echoar.xyz/saQm" class="buttonn button--bubble" target=" ">
                Squats
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="buttonn effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>
            </div>
            <div class="div">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo"/>
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="https://go.echoar.xyz/3F4M" class="buttonn button--bubble" target=" ">
                Plank
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="buttonn effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>
            </div>
        </div>
        <div class="columns-features reverse-mobile w-row" style="text-align: center; background-color: white;">
            <div class="div">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo"/>
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="https://go.echoar.xyz/" class="buttonn button--bubble" target=" ">
                Crunch
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="buttonn effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>
            </div>
            <div class="div">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo"/>
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="https://go.echoar.xyz/Ynxf" class="buttonn button--bubble" target=" ">
                Jump Push Up
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="buttonn effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>
            </div>
            <div class="div">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo"/>
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="https://go.echoar.xyz/yGmm" class="buttonn button--bubble" target=" ">
                Burpee
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="buttonn effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>
            </div>
            <div class="div">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo"/>
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="https://go.echoar.xyz/EEtF" class="buttonn button--bubble" target=" ">
                Jumping Jack
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="buttonn effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>
            </div>
        </div>
        
    </div>

    <div class="section-3">
        <div class="columns-16 w-row">
            <div class="column-93 w-col w-col-4">
                <div class="div-footer-column">
                    <div class="stroke-line-white"></div>
                    <h6 class="heading-8">Our company</h6>
                    <ul role="list" class="w-list-unstyled">
                        <li class="list-item"><a href="/faq" class="link-footer">FAQ</a></li>
                        <li><a href="mailto:hello@mindframe.ca" class="link-footer">Contact</a></li>
                    </ul>
                </div>
                <div class="div-footer-column">
                    <div class="stroke-line-white"></div>
                    <h6 class="heading-8">Follow Us</h6>
                    <ul role="list" class="w-list-unstyled">
                        <li><a target="_blank" class="link-footer">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="column-94 w-col w-col-8">
                <div class="div-block-65">
                    <h1 class="footer-heading">Let’s make your mental and physical health right</h1>
                    <p class="footer-paragraph">If you have anything to share, then we are all ears! We look forward to helping you in need. Never think you are alone. We are here with you.<br/></p>
                </div>
                <div class="div-block-65 _2"><a class="link-6">Terms of Use</a><a class="link-6">Privacy Policy</a>
                    <div
                        class="text-block-6">Copyright</div>
                <div class="text-block-6-copy">2021 Healthzone</div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5eeaa8254ac140092cf3c3d6" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://uploads-ssl.webflow.com/5eeaa8254ac140092cf3c3d6/js/webflow.6c5dfb65d.js" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    
    <script src="app.js" type="text/javascript"></script>
    
    <script>
        //links
        //http://eloquentjavascript.net/09_regexp.html
        //https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions


        var messages = [], //array that hold the record of each string in chat
          lastUserMessage = "", //keeps track of the most recent input string from the user
          botMessage = "", //var keeps track of what the chatbot is going to say
          botName = 'Chatbot', //name of the chatbot
          talking = true; //when false the speach function doesn't work
        //
        //
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //edit this function to change what the chatbot says
        function chatbotResponse() {
          talking = true;
          botMessage = "I'm confused"; //the default message

          if (lastUserMessage === 'hi' || lastUserMessage =='hello') {
            const hi = ['hi','howdy','hello']
            botMessage = hi[Math.floor(Math.random()*(hi.length))];;
          }

          if (lastUserMessage === 'name') {
            botMessage = 'My name is ' + botName;
          }

          if (lastUserMessage === 'depressed' || lastUserMessage === 'suicide') {
            // botMessage = 'I’m really sorry you’re going through this. I’m here for you if you need me. I suggest you to spend some time with nature or listen to music';
            botMessage = 'I’m really sorry you’re going through this. I’m here for you if you need me. I suggest you to spend some time with nature or listen to music.<br>Let me know how do you feel now<form action="twilio/send.php"><button type="submit">Sad</button><button type="submit">Depressed</button><button type="submit">Suicidal</button></form>';
          }
        }
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //****************************************************************
        //
        //
        //
        //this runs each time enter is pressed.
        //It controls the overall input and output
        function newEntry() {
          //if the message from the user isn't empty then run 
          if (document.getElementById("chatbox").value != "") {
            //pulls the value from the chatbox ands sets it to lastUserMessage
            lastUserMessage = document.getElementById("chatbox").value;
            //sets the chat box to be clear
            document.getElementById("chatbox").value = "";
            //adds the value of the chatbox to the array messages
            messages.push(lastUserMessage);
            //Speech(lastUserMessage);  //says what the user typed outloud
            //sets the variable botMessage in response to lastUserMessage
            chatbotResponse();
            //add the chatbot's name and message to the array messages
            messages.push("<b>" + botName + ":</b> " + botMessage);
            // says the message using the text to speech function written below
            Speech(botMessage);
            //outputs the last few array elements of messages to html
            for (var i = 1; i < 8; i++) {
              if (messages[messages.length - i])
                document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
            }
          }
        }

        //text to Speech
        //https://developers.google.com/web/updates/2014/01/Web-apps-that-talk-Introduction-to-the-Speech-Synthesis-API
        function Speech(say) {
          if ('speechSynthesis' in window && talking) {
            var utterance = new SpeechSynthesisUtterance(say);
            //msg.voice = voices[10]; // Note: some voices don't support altering params
            //msg.voiceURI = 'native';
            //utterance.volume = 1; // 0 to 1
            //utterance.rate = 0.1; // 0.1 to 10
            //utterance.pitch = 1; //0 to 2
            //utterance.text = 'Hello World';
            //utterance.lang = 'en-US';
            speechSynthesis.speak(utterance);
          }
        }

        //runs the keypress() function when a key is pressed
        document.onkeypress = keyPress;
        //if the key pressed is 'enter' runs the function newEntry()
        function keyPress(e) {
          var x = e || window.event;
          var key = (x.keyCode || x.which);
          if (key == 13 || key == 3) {
            //runs this function when enter is pressed
            newEntry();
          }
          if (key == 38) {
            console.log('hi')
              //document.getElementById("chatbox").value = lastUserMessage;
          }
        }

        //clears the placeholder text ion the chatbox
        //this function is set to run when the users brings focus to the chatbox, by clicking on it
        function placeHolder() {
          document.getElementById("chatbox").placeholder = "";
        }

        var show = 1;

        function fun(a){
            if(show)
            {
                document.getElementById(a).style.display = "block";
                show =0;
            }
            else{
                document.getElementById(a).style.display = "none";
                show = 1;
            }
        }

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="button.js"></script>
</body>

</html>