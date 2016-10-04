<?php
/**
 * Home Page Template
 *
Template Name:  Home Page 
 *
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RGDeuce
 */

get_header(); ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="9000" data-pause="false">
     <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>   
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../projectgowp/wp-content/themes/project-go/img/home7.png" alt="Dog">
        <div class="carousel-caption">
            <h1 class="hometext">Our vision is to have a just world where all injured<br /> animals have access to care for a better future.</h1>
        </div>
      </div>
      <div class="item">
        <img src="../projectgowp/wp-content/themes/project-go/img/home1.png" alt="Tortoise">
        <div class="carousel-caption">
            <h1 class="hometext">Our vision is to have a just world where all injured<br /> animals have access to care for a better future.</h1>
        </div>
      </div>
      <div class="item">
        <img src="../projectgowp/wp-content/themes/project-go/img/home2.png" alt="Penguin">
        <div class="carousel-caption">
            <h1 class="hometext">Our vision is to have a just world where all injured<br /> animals have access to care for a better future.</h1>
        </div>
      </div>      
      <div class="item">
        <img src="../projectgowp/wp-content/themes/project-go/img/home4.png" alt="Dog">
          <div class="carousel-caption">
            <h1 class="hometext">Our vision is to have a just world where all injured<br /> animals have access to care for a better future.</h1>
        </div>
      </div>      
      <div class="item">
        <img src="../projectgowp/wp-content/themes/project-go/img/home5.png" alt="Dog">
          <div class="carousel-caption">
            <h1 class="hometext">Our vision is to have a just world where all injured<br /> animals have access to care for a better future.</h1>
        </div>
      </div>
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
<!-- About Section -->
    <section id="services" class="about">
      <div id="about" class="anchor"></div>
        <div class="container container-fluid content-container">
            <div id="content" class="site-content">
                <div class="row" style="margin-top: 50px;">
                    <div class="col-lg-12">
                        <h1 class="aboutheader">project GO</h1><p class="about-text">Founded by a like-minded group of compassionate individuals with varied experience who recognized a need to provide necessary, but most times unavailable, care for injured domestic and exotic animals.</p>
                        <h1 class="aboutheader">our mission</h1><p class="about-text">To provide cutting-edge clinical care to injured animals worldwide via Orthopedic and Neurological Services, Education and Training of Veterinary Healthcare Professionals, Injury Prevention Coaching for owners, handlers and trainers and, Cultivation of lifesaving breakthroughs.</p>
                        <a href="../projectgowp/board-members"><button class="btn-xl centered">Meet The Board</button></a>
                    </div>      
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="board">
        <div class="container">
            <p style="font-size: 27px;"><strong style="color: #fff; font-size: 60px; font-weight: 700; font-family: 'Jenna Sue';">project GO&nbsp;</strong>has established a number of short, mid and long-term goals to achieve our mission.</p>
        </div>
    </div>         
        <div class="col-lg-4 no-padding">
            <div id="img1" class="img-normal" data-toggle="modal" data-target="#myModal1">
                
            </div>
        </div>
        <div class="col-lg-4 no-padding">
            <div id="img2" class="img-normal" data-toggle="modal" data-target="#myModal2">
                
            </div>
        </div>
        <div class="col-lg-4 no-padding">
            <div id="img3" class="img-normal" data-toggle="modal" data-target="#myModal3">
                
            </div>
        </div>
        <div class="col-lg-4 no-padding">
            <div id="img4" class="img-normal" data-toggle="modal" data-target="#myModal4">
                
            </div>
        </div>
        <div class="col-lg-4 no-padding">
            <div id="img5" class="img-normal" data-toggle="modal" data-target="#myModal5">
                
            </div>
        </div>
        <div class="col-lg-4 no-padding">
            <div id="img6" class="img-normal" data-toggle="modal" data-target="#myModal6">
            </div>
        </div>
        <div class="col-lg-4 no-padding">
            <div id="img7" class="img-normal" data-toggle="modal" data-target="#myModal7">
                
            </div>
        </div>
        <div class="col-lg-4 no-padding">
            <div id="img8" class="img-normal" data-toggle="modal" data-target="#myModal8">
                
            </div>
        </div>
        <div class="col-lg-4 no-padding">
            <div id="img9" class="img-normal" data-toggle="modal" data-target="#myModal9">
                
            </div>
        </div>
       
        
        </div> 
    </section>

    <section id="case-studies">
    <div id="casestudies" class="anchor"></div>
        <div class="container container-fluid content-container">
            <div id="content" class="site-content">
            <h1 class="section-title centered">Featured Case Studies</h1>
              <div class="case-studies-wrapper">
                    <?php $args=array('post_type'=>'case-studies', 'orderby'=>'date', 'posts_per_page'=> 3,'tax_query' => array(
                array(
                    'taxonomy' => 'case-studiescat',
                    'field'    => 'slug',
                    'terms'    => 'featured',
                ),
            ), );
                    $petsposts=new WP_Query($args);
                    while ($petsposts->have_posts()) : $petsposts->the_post(); ?>
                    <div class="col-md-4">
                      <div class="case-studies-block">
                        <div class="case-studies-image">
                        <?php the_post_thumbnail('pets-thumb'); ?>
                        </div>
                        <div class="case-studies-name"><?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?></div>
                      
                      </div><!-- .service-block -->
                    </div>    
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div><!-- case-studies-wrapper -->
                <a href="../projectgowp/case-studies"><button class="btn-xl centered">View All of Our Case Studies</button></a>
           </div> 
        </div>  <!--container -->
    </section>
    

<!-- Contact Section -->
    <section id="contact">
    <div id="get-involved" class="anchor"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">contact us</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                </div>
                                <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="goal-modal">
        <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" id="img1" class="close goal-btn" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">To raise funds to fulfill <span class="green-highlight">project go</span> mission statement goals</h2>
            </div>
            <div id="img1" class="modal-body">
              <p>Project GO relies solely on the generosity of individual and corporate donors to fund its mission. Every donation, no matter the amount, provides funding to programs that help animals in need, educational initiatives that further the medical field, product development that brings new advances in care. We encourage you to click below to donate through our secure portal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="img1" class="btn btn-close goal-btn" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!--#myModal1 -->

      <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" id="img2" class="close goal-btn" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">To generate <span class="green-highlight">awareness</span> for available solutions</h2>
            </div>
            <div class="modal-body">
              <p>Dr. Canapp has established an academy which focuses on educational training programs for veternarians in the areas of sports medicine, regenerative medicine, rehabilitation therapy, diagnostic musculoskeletal ultrasound, and arthroscopic procedures.</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="img2" class="btn btn-close goal-btn" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!--#myModal2 -->

      <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" id="img3" class="close goal-btn" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">To <span class="green-highlight">care</span> for animals in need</h2>
            </div>
            <div class="modal-body">
              <p>Our mission at Project GO is to ensure that no animal goes without necessary vetinary orthopedic care because a pet owner/handler/agency can't afford to pay. The decision to forego needed orthopedic care can be dangerous, and often results in a lower quality of life for our companions.</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="img3" class="btn btn-close goal-btn" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!--#myModal3 -->

      <div id="myModal4" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" id="img4" class="close goal-btn" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">To raise <span class="green-highlight">competency</span> level of Veterinary Health Care Providers</h2>
            </div>
            <div class="modal-body">
              <p>Project GO specialists are activeley engaged in teaching, clinical research, lecturing, publishing, and instgructing other Board Certified surgeons.</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="img4" class="btn btn-close goal-btn" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!--#myModal4 -->

      <div id="myModal5" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" id="img5" class="close goal-btn" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">To create <span class="green-highlight">training</span> network/institute and corresponding certification</h2>
            </div>
            <div class="modal-body">
              <p>Project GO referral locations must be certified by Project GO. This includes board certified specialists in surgery and sports medicine and certified rehabilitation therapists. Facilities must also be outfitted by advanced diagnostics (digital x-ray; MRI; arthroscopy; ultrasound).</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="img5" class="btn btn-close goal-btn" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!--#myModal5 -->

      <div id="myModal6" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" id="img6" class="close goal-btn" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">To restore <span class="green-highlight">mobility</span> to injured animals</h2>
            </div>
            <div class="modal-body">
              <p>We Cultivate lifesaving breakthroughs and provide Injury Prevention Coaching for owners, handlers, and trainers.</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="img6" class="btn btn-close goal-btn" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!--#myModal6 -->

      <div id="myModal7" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" id="img7" class="close goal-btn" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">To connect veterinary and human health <span class="green-highlight">breakthroughs</span></h2>
            </div>
            <div class="modal-body">
              <p>Project GO founder Dr. Sherman Canapp is also the president and CEO of Orthobiologic Innovations, LLC, where he is actively engaged in concept and product design and development for orthopedic and arthoscopic devices, instrumentations, biologics, and regenerative medicine technologies.</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="img7" class="btn btn-close goal-btn" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!--#myModal7 -->

      <div id="myModal8" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" id="img8" class="close goal-btn" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">To build <span class="green-highlight">global</span> partnerships and alliances</h2>
            </div>
            <div class="modal-body">
              <p>We also encourage you to spread Project GO's mission at your workplace, in your classrooms, and around your community. Please send us an email for more information and tips on organizing a donation cmapaign. If your company is interested in a corporate giving opportunity, please contact us for details on current programs available for sponsorship.</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="img8" class="btn btn-close goal-btn" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!--#myModal8 -->

      <div id="myModal9" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" id="img9" class="close goal-btn" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">To provide tools and <span class="green-highlight">support</span> for Veterinary Health Care Providers</h2>
            </div>
            <div class="modal-body">
              <p>The goal of Project GO is to provide cutting-edge clinical care to injured animals worldwide via Orthopedic and Neurological Services, Education and Training of Veterinary Healthcare Professionals.</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="img9" class="btn btn-close goal-btn" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!--#myModal9 -->
    
    </div><!-- goal-modal -->

<?php get_footer(); ?>
