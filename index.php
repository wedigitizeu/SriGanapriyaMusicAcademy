<!DOCTYPE html>
<html lang="en">


<!-- index-515:19-->
<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="viewport" content="width=device-width, user-scalable=no">

   <!-- Site Title -->
   <title>SRI GAANAPRIYA MUSIC ACADEMY &amp; GAANAPRIYA</title>



   <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- FontAwesome -->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Animation -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- magnific -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- carousel -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- isotop -->
   <link rel="stylesheet" href="css/isotop.css">
   <!-- ico fonts -->
   <link rel="stylesheet" href="css/xsIcon.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive.css">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script >
   $(document).ready(function()
   {
     $("#sub").click(function()
      {
        
         $('#warning').html("Please Wait...");

         var name=$("#name").val();
         var mobile=$("#mobile").val();
         var email=$("#email").val();
         var category=$("#category").val();
    
    var emailReg='^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$'; 
    var mobileReg='^[0-9]{10}$';   
         if(name=="")
         {
            $("#warning").html("Please Enter Your Name");
         }
         
         else if(mobile=="")
         {
               $("#warning").html("Please Enter Your Mobile Number");
         }
         else if(!mobile.match(mobileReg))
         {
            $("#warning").html("Please Enter Valid 10 Digit Mobile Number");
         }
         else if(email=="")
         {
             $("#warning").html("Please Enter Your Email");
         }
         else if(!email.match(emailReg))
         {
            $("#warning").html("Please Enter Valid Email");
         }
         else if(category==0)
         {
            $("#warning").html("Please Select Category");
         }
         else
         {
            $.post("insertData.php",
            {

                  name:name,
                  mobile:mobile,
                  email:email,
                  category:category

            },
            function(data)
               {

                     $("#warning").html(data);
                     

               });
         }
      });
      
   
    });
   
</script>

</head>

<body>
   <div class="body-inner">

      <!-- Header start -->
      <?php include_once('public/header.php');?>
      <!--/ Header end -->

      <!-- banner start-->
      <section class="hero-area hero-speakers">
         <div class="banner-item overlay" style="background-image:url(images/hero_area/banner7.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="banner-content-wrap">

                        <p class="banner-info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms"></p>
                        <h1 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">ONE GOOD THING ABOUT MUSIC, WHEN IT HITS YOU, YOU DON'T FEEL PAIN

                           </h1>


                        <div class="banner-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                         <!---  <a href="#" class="btn">Contact Us</a>
                           <a href="#" class="btn fill">Add to Calendar</a>---->
                        </div>

                     </div>
                     <!-- Banner content wrap end -->
                  </div><!-- col end-->
                  <div class="col-lg-4 offset-lg-1">
                     <div class="hero-form-content">
                        <h2>Register Now</h2>
                        <p>
                          ಶ್ರೀ ಗಾನಪ್ರಿಯ ಮ್ಯೂಸಿಕ್ ಅಕಾಡಮಿ                        </p>

<div class="hero-form">

<input class="form-control form-control-name" placeholder="Name" name="name" id="name" type="text" >
<input class="form-control form-control-phone" placeholder="Phone" name="phone" id="mobile" type="text">

<input class="form-control form-control-email" placeholder="Email" name="email" id="email" type="email" >

<select id="category" class="form-control" >
   <option value="0">Which category would you like to join</option>
   <option value="Keyboard">Keyboard</option>
   <option value="Guitar">Guitar</option>
   <option value="Tabla">Tabla</option>
   <option value="Mrudanga">Mrudanga</option>
   <option value="Light Music">Light Music</option>
   <option value="Carnatic Music">Carnatic Music</option>
   <option value="Violin">Violin</option>
   <option value="Flute">Flute</option>
   <option value="Hindustani Music">Hindustani Music</option>
   <option value="Bharatanatyam">Bharatanatyam</option>


</select>



                           

      <button class="btn" id="sub" type="submit"> Register </button>
      <br>
      <p style="color:#ff007a;"id="warning"></p>
</div>
                      <!-- form end-->
                     </div><!-- hero content end-->
                  </div><!-- col end-->
               </div><!-- row end-->
            </div>
            <!-- Container end -->
         </div>
      </section>
      <!-- banner end-->

      <!-- ts intro start -->
      <section class="ts-event-outcome event-intro">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="">
                     <div class="outcome-content ts-exp-content">
                        <h2 >
                           
                           <b style="color:#ff007a" >
                           ABOUT SRI GAANAPRIYA MUSIC ACADEMY
                        </b>
                        </h2>
                        <p style="text-align:justify;">
                        Music expresses that which cannot be put into words & that which cannot remain silent. Sri Gaanapriya music Academy aims to provide quality musical training to all age groups. Choosing the right music teacher creates a huge impact on your musical career. Sri Gaanapriya mentors do not take their roles lightly. They are immersed in the success of the mentee and always there to inspire & motivate. No matter which culture, country, religion, caste, race you are, everyone loves music. Learning something which is universal is a boon. Research suggests that people with depression feel better after listening to music. Music has immense benefits medically.  There are few activities in life that utilizes the entire brain & music is one of them.



                        </p>
                        <!--<a href="#" class="btn">Learn More</a>-->
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="outcome-content">
                     <div class="outcome-img overlay">
                        <img class="" src="images/about/learn_img.jpg" alt="">
                     </div>

<br>
                     <div class="outcome-img overlay">
                        <img class="" src="images/about/papu.jpg" alt="">
                     </div>
                     
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="outcome-content">
                     <div class="outcome-img overlay">
                        <img class="" src="images/about/connect_img.jpg" alt="">
                     </div>

<br>
                     <div class="outcome-img overlay">
                        <img class="" src="images/about/2.jpg" alt="">
                     </div>
                     
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- ts intro end-->
      <!-- ts funfact start-->
      <section class="ts-funfact" style="background-image: url(images/funfact_bg.jpg)">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="500">500</span>+</h3>
                     <h4 class="funfact-title">Total Students</h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="62">150+</span></h3>
                     <h4 class="funfact-title">Total Events</h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="28">400+</span></h3>
                     <h4 class="funfact-title">Cofee Taken
                        </h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="2">2</span>+</h3>
                     <h4 class="funfact-title">
                        Branches</h4>
                  </div>
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->
      </section>
      <!-- ts funfact end-->
      <!-- ts speaker start-->
      <section id="ts-speakers" class="ts-speakers" style="background-image:url(images/speakers/speaker_bg.png)">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title text-center">
                     <span></span>
                     Music is our religion
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker1.jpg" alt="">
                        
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title">
                          CARNATIC MUSIC
                        </h3>
                        <p>
                           
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker21.jpg" alt="">
                        
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title">
                        VIOLIN
                     </h3>
                        <p>
                           
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_2" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker2.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                            
                              <h3 class="ts-title">TABLA</h3>
                              <span class="speakder-designation"></span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker3.jpg" alt="">
                        
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title">
                        LIGHT MUSIC</h3>
                        <p>
                           
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_3" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker3.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">KEYBOARD</h3>
                              <span class="speakder-designation"></span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker4.jpg" alt="">
                        
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title">
                           GUITAR
                        </h3>
                        <p>
                           
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_4" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker71.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">HINDUSTAN MUSIC</h3>
                              <span class="speakder-designation"></span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker5.jpg" alt="">
                       
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title">
                           FLUTE
                        </h3>
                        <p>
                           
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_5" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker5.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="900ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker6.jpg" alt="">
                        
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title">
                           MRIDANGAM & TABLA 
                        </h3>
                        <p>
                           
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_6" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker1.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1000ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker71.jpg" alt="">
                        
                     
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title">HINDUSTANI MUSIC </a
                        </h3>
                        <p>
                           
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_7" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker7.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->

               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1100ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/speaker8.jpg" alt="">
                        
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title">
                           KEYBOARD
                        </h3>
                        <p>
                           
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_8" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="images/speakers/speaker8.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->

         <!-- shap img-->
         <div class="speaker-shap">
            <img class="shap1" src="images/shap/home_speaker_memphis1.png" alt="">
            <img class="shap2" src="images/shap/home_speaker_memphis2.png" alt="">
            <img class="shap3" src="images/shap/home_speaker_memphis3.png" alt="">
         </div>
         <!-- shap img end-->
      </section>
      <!-- ts speaker end-->

      <!-- ts experience start-->
      <section id="ts-experiences" class="ts-experiences">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6 no-padding">
                  <div class="exp-img" style="background-image:url(images/ashok_img.jpg)">
                     <!-- <img class="img-fluid" src="images/ashok_img.jpg" alt=""> -->
                  </div>
               </div><!-- col end-->
               <div class="col-lg-6 no-padding align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="ts-exp-wrap">
                     <div class="ts-exp-content">
                        <h2 class="column-title">
                           <span></span>
                          CHANGE YOUR ATTITUDE FROM CRAVEN TO CONFIDENT
                        </h2>
                        <p style="text-align:justify;">
                           Sri Gaanapriya music academy works hard to turn your dreams into reality. Music grooms you to be a perfect human being. It enhances memory, improves discipline, patience & time management. Ultimately a person becomes more creative in their daily life...
                        </p>
                     </div>
                  </div>

               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container fluid end-->
      </section>
      <!-- ts experience end-->

      <!-- ts experience start-->
      <section class="ts-schedule">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title"> 
                     <span></span>
                     GOOD MUSIC DOESN'T HAVE AN EXPIRATION DATE
                  </h2>
                  <div class="ts-schedule-nav">
                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                           <a class="active" title="Click Me" href="#date1" role="tab" data-toggle="tab">
                                 <h3>MUSIC CLASSES</h3>
                                 <span></span>
                               </a>
                        
                              </a>
                        </li>
                     </ul>
                     <!-- Tab panes -->
                  </div>
               </div><!-- col end-->

            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content schedule-tabs schedule-tabs-item">
                     <div role="tabpanel" class="tab-pane active" id="date1">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker5.jpg" alt="">
                                 <span class="schedule-slot-time"></span>
                                 <h3 class="schedule-slot-title">FLUTE</h3>
                                 <h4 class="schedule-slot-name"></h4>
                                 <p>
                                    The flute is the world's oldest musical instrument &  playing such an ancient instrument regenerates the senses. 

                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker4.jpg" alt="">
                                 <span class="schedule-slot-time"></span>
                                 <h3 class="schedule-slot-title">GUITAR</h3>
                                 <h4 class="schedule-slot-name"></h4>
                                 <p style="text-align:justify;">
                                    Whether you're a beginner or advanced, whether it is rock music or classical & we provide the best classes  and learning instructions to mould you into a better  guitarist
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker71.jpg" alt="">
                                 <span class="schedule-slot-time"></span>
                              <h3 class="schedule-slot-title">
                                    HINDUSTANI MUSIC
                                 </h3>
                                 <h4 class="schedule-slot-name">
                         </h4>
                                 <p style="text-align:justify;">
                                    Hindustani music is the classical music of northern India and has influenced many other forms of singing and instrumental music whether it be in ghazals, folk songs and even in Bollywood music
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker6.jpg" alt="">
                                 <span class="schedule-slot-time"></span>
                                 <h3 class="schedule-slot-title">Mridangam & Tabla</h3>
                                 <h4 class="schedule-slot-name"></h4>
                                 <p>
                                    
                              </p style="text-align:justify;">
                                 Mridangam & Tabla is a South Indian percussive instrument. A Carnatic musical event without TABLA is incomplete.Sri Gaanapriya music classes provide theoretical training to excel in all kinds of musical instruments.
                              </div>
                           </div><!-- col end-->
                        </div><!-- row end-->
                        <div class="schedule-listing-btn">
                           <!--<a href="#" class="btn">More Details</a>---->
                        </div>
                     </div><!-- tab pane end-->

                     <div role="tabpanel" class="tab-pane" id="date2">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker5.jpg" alt="">
                                 <span class="schedule-slot-time">02.30 - 03.30 PM</span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                                 <p style="text-align:justify;">
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker6.jpg" alt="">
                                 <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name"></h4>
                                 <p style="text-align:justify;">
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker7.jpg" alt="">
                                 <span class="schedule-slot-time"></span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name"></h4>
                                 <p style="text-align:justify;">
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker8.jpg" alt="">
                                 <span class="schedule-slot-time"></span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name"></h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                        </div><!-- row end-->
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="date3">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker1.jpg" alt="">
                                 <span class="schedule-slot-time"></span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name"></h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker2.jpg" alt="">
                                 <span class="schedule-slot-time"></span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name">
                         </h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker3.jpg" alt="">
                                 <span class="schedule-slot-time"></span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name"></h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="images/speakers/speaker4.jpg" alt="">
                                 <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                        </div><!-- row end-->
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div><!-- container end-->
      </section>
      <!-- ts experience end-->

      <!-- ts pricing start-->
      <section class="ts-pricing gradient" style="background-image: url(images/pricing/pricing_img.jpg)">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title white">
                    
               
                           
                   
                     <span> SRI GAANAPRIYA MUSIC ACADEMY</span>
                     Latest News
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
              
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <img src="images/blog/blog1.jpg" class="img-fluid" alt="">
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                            BY Admin
                           </span>

                           <div class="post-meta-date">
                              April 21, 2019
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                               ಗಾನ ಸಂಭ್ರಮ  -2019
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p >ಶ್ರೀ ಗಾನಪ್ರಿಯ ಮ್ಯೂಸಿಕ್ ಅಕಾಡಮಿ ಮುಖ್ಯಸ್ಥರಿಂದ ,ಕಳೆದ ೨೧ ಏಪ್ರಿಲ್ ೨೦೧೯ ರಂದು ಕನ್ನಡ ಭವನದ ನಯನ ಸಭಾಂಗಣದಲ್ಲಿ ನಡೆದ ಗಾನ ಸಂಭ್ರಮ -೨೦೧೯ ಕಾರ್ಯಕ್ರಮದ ಮುಖ್ಯ ಅಥಿತಿಗಳಾಗಿ ಆಗಮಸಿದ ಸನ್ಮಾನ್ಯ ಶ್ರೀ ಎ.ಆರ್.ಬಡಿಗೇರ್ ,ಕೆ.ಎಸ್.ಪಿ.ಎಸ್ ,
ಪೊಲೀಸ್ ಅಧೀಕ್ಷಕರು,ಭ್ರಷ್ಟಾಚಾರ  ನಿಗ್ರಹ ದಳ ,ಕೇಂದ್ರ ವಲಯ ,ಬೆಂಗಳೂರು
ಅವರಿಗೆ ಸನ್ಮಾನ ಸಮಾರಂಭ .

                                                                                                                  

</p>
                        </div>

                        <div class="post-footer">
                           
                        </div>

                     </div><!-- post-body end -->
                  </div>

                  <!-- post end-->
               </div>

               <!-- col end-->

               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <img src="images/blog/blog2.jpg" class="img-fluid" alt="">
                        
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                                BY Admin
                              </span>

                           <div class="post-meta-date">
                              April 21, 2019
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              ಗಾನ ಸಂಭ್ರಮ -2019
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p >ಶ್ರೀ ಗಾನಪ್ರಿಯ ಮ್ಯೂಸಿಕ್ ಅಕಾಡಮಿ ಮುಖ್ಯಸ್ಥರಿಂದ ,ಕಳೆದ ೨೧ ಏಪ್ರಿಲ್ ೨೦೧೯ ರಂದು ಕನ್ನಡ ಭವನದ ನಯನ ಸಭಾಂಗಣದಲ್ಲಿ ನಡೆದ ಗಾನ ಸಂಭ್ರಮ -೨೦೧೯ ಕಾರ್ಯಕ್ರಮದ ಮುಖ್ಯ ಅಥಿತಿಗಳಾಗಿ ಆಗಮಸಿದ ಸನ್ಮಾನ್ಯ ಶ್ರೀ ಎನ್.ಎಸ್.ಕುಂಬಾರ್  
ಸಂಸ್ಥಾಪಕರು , ಎನ್.ಎಸ್.ಕುಂಬಾರ್  ಆರ್ಟ್ಸ್ 
ಚಿತ್ರಕಲೆಯಲ್ಲಿ ಅಂತರರಾಷ್ರ್ತೀಯ ಪ್ರಶಸ್ತಿ ವಿಜೇತರು,ವೃತ್ತಿಪರ ಕಲಾವಿದರು ,ಬೆಂಗಳೂರು 

ಅವರಿಗೆ ಸನ್ಮಾನ ಸಮಾರಂಭ .
<br><br>
 </p>
                        </div>

                        <div class="post-footer">
                         <!---  <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>--->
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- post end-->
               </div>
               
               <!-- col end-->
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                  <div class="post">
                     <div class="post-media post-image">
                       <img src="images/blog/blog3.jpg" class="img-fluid" alt="">
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                                   BY Admin
                                 </span>

                           <div class="post-meta-date">
                              April 21, 2019
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                             ಗಾನ ಸಂಭ್ರಮ -2019
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p style="text-align:justify;">
                              ಶ್ರೀ ಗಾನಪ್ರಿಯ ಮ್ಯೂಸಿಕ್ ಅಕಾಡಮಿ ಮುಖ್ಯಸ್ಥರಿಂದ ,ಕಳೆದ ೨೧ ಏಪ್ರಿಲ್ ೨೦೧೯ ರಂದು ಕನ್ನಡ ಭವನದ ನಯನ ಸಭಾಂಗಣದಲ್ಲಿ ನಡೆದ ಗಾನ ಸಂಭ್ರಮ -೨೦೧೯ ಕಾರ್ಯಕ್ರಮದ ಮುಖ್ಯ ಅಥಿತಿಗಳಾಗಿ ಆಗಮಸಿದ ಸನ್ಮಾನ್ಯ ಶ್ರೀ ಶ್ರೀಧರ ವಿ.ಸಂಭ್ರಮ್ 
ಹೆಸರಾಂತ ಸಂಗೀತ ನಿರ್ದೇಶಕರು ಹಾಗು ಗಾಯಕರು ,ಬೆಂಗಳೂರು
ಅವರಿಗೆ ಸನ್ಮಾನ ಸಮಾರಂಭ .

</p>
                        </div>

                        <div class="post-footer">
                          <!-- <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                        </div>--->

                     </div><!-- post-body end -->
                  </div><!-- post end-->
               </div><!-- col end-->
            </div><!-- row end-->


         <!--Blog 4---------->

          <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <img src="images/blog/hindustani satriya sangeeta.JPG" class="img-fluid" alt="">
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                            BY Admin
                           </span>

                           <div class="post-meta-date">
                              Dec 14, 2019
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                               ದಸರಾ ಸಂಭ್ರಮ  -2019
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p >
                              ಶರನ್ನವರಾತ್ರಿಯ ಪ್ರಯುಕ್ತ ''ದಸರಾ ಸಂಭ್ರಮ''
ಶ್ರೀ ಗಾನಪ್ರಿಯ ಮ್ಯೂಸಿಕ್ ಅಕಾಡೆಮಿ 
ವಿದ್ಯಾರಣ್ಯಪುರ, ಬೆಂಗಳೂರು 

ದಿ|| 04 ಅಕ್ಟೋಬರ್ 2019 ರಂದು ಬೆಂಗಳೂರಿನ ವಿದ್ಯಾರಣ್ಯಪುರದ 
ಶ್ರೀ ಕಾಳಿಕಾ ದುರ್ಗಾಪರಮೇಶ್ವರಿ ದೇವಸ್ಥಾನದ ಆವರಣದಲ್ಲಿ ನಡೆದ "ದಸರಾ ಸಂಭ್ರಮ'' ದಲ್ಲಿ 
ಅಕಾಡೆಮಿಯ ಶಿಕ್ಷಕ ಹಾಗು ವಿದ್ಯಾರ್ಥಿಗಳಿಂದ 
ಹಿಂದೂಸ್ಥಾನಿ ಶಾಸ್ತ್ರಿಯ ಸಂಗೀತ ಕಾರ್ಯಕ್ರಮ ನೀಡಲಾಯಿತು.

                                                                                                                  

</p>
                        </div>

                        <div class="post-footer">
                           
                        </div>

                     </div>
                     <!-- post-body end -->
                  </div>

                  <!-- post end-->
               </div>

         <!---Blog 4 ends----->





         <!--Blog 5---------->

          <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <img src="images/blog/karnataka satriya sangeeta1.JPG" class="img-fluid" alt="">
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                            BY Admin
                           </span>

                           <div class="post-meta-date">
                              Dec 14, 2019
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              ದಸರಾ ಸಂಭ್ರಮ -2019
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p >
                              ಶರನ್ನವರಾತ್ರಿಯ ಪ್ರಯುಕ್ತ ''ದಸರಾ ಸಂಭ್ರಮ''
ಶ್ರೀ ಗಾನಪ್ರಿಯ ಮ್ಯೂಸಿಕ್ ಅಕಾಡೆಮಿ 
ವಿದ್ಯಾರಣ್ಯಪುರ, ಬೆಂಗಳೂರು 

ದಿ|| 04 ಅಕ್ಟೋಬರ್ 2019 ರಂದು ಬೆಂಗಳೂರಿನ ವಿದ್ಯಾರಣ್ಯಪುರದ 
ಶ್ರೀ ಕಾಳಿಕಾ ದುರ್ಗಾಪರಮೇಶ್ವರಿ ದೇವಸ್ಥಾನದ ಆವರಣದಲ್ಲಿ ನಡೆದ "ದಸರಾ ಸಂಭ್ರಮ'' ದಲ್ಲಿ 
ಅಕಾಡೆಮಿಯ ಶಿಕ್ಷಕ ಹಾಗು ವಿದ್ಯಾರ್ಥಿಗಳಿಂದ 
ಕರ್ನಾಟಕ ಶಾಸ್ತ್ರಿಯ ಸಂಗೀತ ಕಾರ್ಯಕ್ರಮ ನೀಡಲಾಯಿತು.

                                                                                                                  

</p>
                        </div>

                        <div class="post-footer">
                           
                        </div>

                     </div>
                     <!-- post-body end -->
                  </div>

                  <!-- post end-->
               </div>

         <!---Blog 5 ends----->


         <!--Blog 6---------->

          <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <img src="images/blog/baratyanatya.JPG" class="img-fluid" alt="">
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                            BY Admin
                           </span>

                           <div class="post-meta-date">
                              Dec 14, 2019
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                               ದಸರಾ ಸಂಭ್ರಮ  -2019
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p >
                              ಶರನ್ನವರಾತ್ರಿಯ ಪ್ರಯುಕ್ತ ''ದಸರಾ ಸಂಭ್ರಮ''
ಶ್ರೀ ಗಾನಪ್ರಿಯ ಮ್ಯೂಸಿಕ್ ಅಕಾಡೆಮಿ 
ವಿದ್ಯಾರಣ್ಯಪುರ, ಬೆಂಗಳೂರು 

ದಿ|| 04 ಅಕ್ಟೋಬರ್ 2019 ರಂದು ಬೆಂಗಳೂರಿನ ವಿದ್ಯಾರಣ್ಯಪುರದ 
ಶ್ರೀ ಕಾಳಿಕಾ ದುರ್ಗಾಪರಮೇಶ್ವರಿ ದೇವಸ್ಥಾನದ ಆವರಣದಲ್ಲಿ ನಡೆದ "ದಸರಾ ಸಂಭ್ರಮ'' ದಲ್ಲಿ 
ಅಕಾಡೆಮಿಯ ಶಿಕ್ಷಕ ಹಾಗು ವಿದ್ಯಾರ್ಥಿಗಳಿಂದ 
ಭರತನಾಟ್ಯ ಕಾರ್ಯಕ್ರಮ ನೀಡಲಾಯಿತು.

                                                                                                                  

</p>
                        </div>

                        <div class="post-footer">
                           
                        </div>

                     </div>
                     <!-- post-body end -->
                  </div>

                  <!-- post end-->
               </div>

         <!---Blog 6 ends----->







         </div><!-- container end-->
         <!-- shap image-->
         <div class="speaker-shap">
            <img class="shap2" src="images/shap/news_memphis2.png" alt="">
            <img class="shap1" src="images/shap/news_memphis1.png" alt="">
         </div>



      </section>
      <!-- ts blog end-->

         <!------Blog ----------->





         <!----Blog End----------->


      
      <!-- ts map direction start-->
     <section class="ts-map-direction wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms" id="conatct_us">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <h2 class="column-title">
                     
                     Get Direction to the
              Sri Gaanapriya Music Academy
                  </h2>

                 

                  <div class="ts-map-tabs">
                     <ul class="nav" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Branch1</a>
                        </li>
                        
                        <li class="nav-item">
                           <a class="nav-link" href="#references" role="tab" data-toggle="tab">Branch2</a>
                        </li>
                     </ul>

                     <!-- Tab panes -->
                     <div class="tab-content direction-tabs">
                        <div role="tabpanel" class="tab-pane active" id="profile">
                           <div class="direction-tabs-content">
                              
                               <h3>Sri Gaanapriya Music Academy</h3>
                              <p class="derecttion-vanue">
                                 #1233 Vbeehive playgroup pre-nursery school campus.<br> 3rd Main Rd, BEL Layout 2nd Block,<br> Bengaluru, Karnataka 560097
                                    </p>


                              
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>For more info </h3>
                                          <p><strong>Name:</strong> Ashok Kumar </p>
                                          <p><strong>Phone:</strong> +91 9916915351</p>
                                          <p><strong>Email:</strong>srigaanapriyamusic@gmail.com</p>
                                       </div>
                        <a href="https://wa.me/919916915351/?text=">
                           <img src="whatsapp.png" width="25%">
                        </a>
                        <br><br>
               <a href="https://maps.app.goo.gl/tTtNaezrBbmqrt6z9" class="btn">Google Map</a>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3></h3>
                                          <p><strong></strong> </p>
                                          <p><strong></strong> </p>
                                          <p><strong></strong></p>
                                       </div>
                                    </div>
                                 </div><!-- row end-->
                           </div><!-- direction tabs end-->
                        </div><!-- tab pane end-->
                        <div role="tabpanel" class="tab-pane fade" id="buzz">
                        
                           <!-- direction tabs end-->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="references">
                           <div class="direction-tabs-content">
                              <h3> Sri Gaanapriya Music Academy at Vidyaranyapura</h3>
                              <p class="derecttion-vanue">
                                 #23, 2nd Floor,Above N.S.Kumbar Art Studio front of SBI Bank, Main Road, NTI Layout, Vidyaranyapura, <BR>Bengaluru, Karnataka 560097

                                    
                              </p>

                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>For more info </h3>
                                          <p><strong>Name:</strong> Ashok Kumar</p>
                                          <p><strong>Phone:</strong>  +91 9916915351</p>
                                          <p><strong>Email:</strong>srigaanapriyamusic@gmail.com</p>
                                       </div>
                                       <a href="https://wa.me/919916915351/?text=">
                           <img src="whatsapp.png" width="25%">
                        </a>
                        <br><br>
 <a href=" https://g.page/Srigaanapriyamusic?share" class="btn">Google Map</a>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3> </h3>
                                          <p><strong></strong> </p>
                                          <p><strong></strong> </p>
                                          <p><strong></strong></p>
                                       </div>
                                    </div>
                                 </div><!-- row end-->
                           </div><!-- direction tabs end-->
                        </div>
                     </div>

                  </div><!-- map tabs end-->

               </div><!-- col end-->
               <div class="col-lg-6 offset-lg-1">
                  <div class="ts-map">
                     <div class="mapouter">
                       <div width:100%;>
                          <!--<img src="download.jpg">-->
                       </div>

                     </div>
                  </div>
               </div>
            </div><!-- col end-->
         </div><!-- container end-->
         <div class="speaker-shap">
            <img class="shap1 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="300ms" src="images/shap/Direction_memphis3.png"
               alt="">
            <img class="shap2 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="400ms" src="images/shap/Direction_memphis2.png"
               alt="">
            <img class="shap3 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="500ms" src="images/shap/Direction_memphis4.png"
               alt="">
            <img class="shap4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms" src="images/shap/Direction_memphis1.png"
               alt="">
         </div>
      </section>
     
       <!-- ts map direction end-->

      <!-- ts footer area start-->
      <?php include_once('public/footer.php');?>
      <!-- ts footer area end-->







      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="js/jquery.js"></script>

      <script src="js/popper.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Counter -->
      <script src="js/jquery.appear.min.js"></script>
      <!-- Countdown -->
      <script src="js/jquery.jCounter.js"></script>
      <!-- magnific-popup -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="js/wow.min.js"></script>

      <!-- isotop -->
      <script src="js/isotope.pkgd.min.js"></script>

      <!-- Template custom -->
      <script src="js/main.js"></script>

   </div>
   <!-- Body inner end -->
   <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d22f07b1a9dfeb9"></script>
</body>
   

<!-- index-515:53-->
</html>