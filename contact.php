<?php
   /**
   * Template Name: Contact Page
   *
   * Designer: SCC IT Programs Team
   *
   */
   get_header(); ?>
<div class="banner">
   <img src="<?php bloginfo('template_directory'); ?>/images/seattle.jpg">
</div>
<!--end of banner-->		
<div id="wrapper" class="row">  
    <div id="contactPage">
    <div class="col-md-12">
            <div class="text">
                <!--breadcrumb-->
                 <small> 
                     <?php if ( function_exists( 'bread_crumb' )) { bread_crumb(); } ?>
                </small>
                <!--end breadcrumb-->
                <!-- <h3>CONTACT</h3> -->
                <div class="underline">
               <h3 class="highlight">
                  <b> <?php the_title(); // the posting title ?> 
                  </b> 
               </h3>
            </div >
            <!-- underline -->
         <h4>Have questions? We have answers.</h4>
         <p>Contact us with your general questions or schedule an appointment with an advisor. If you'd like to get in touch with a professor or department directly, refer to our Faculty Directory below.</p>
      </div>
      <!--end text box-->
      <!--start "contact" sub-nav-->
      <div class="contact col-md-10 col-md-offset-1 section">
         <ul class="contact-nav">
            <li class="contact-nav1"><a class="contact-nav-anchor" href="#section1"><b>ASK A QUESTION</b></a></li>
            <li class="contact-nav2"><a class="contact-nav-anchor" href="#section2"><b>SCHEDULE APPOINTMENT</b></a></li>
            <li class="contact-nav3"><a class="contact-nav-anchor" href="#section3"><b>FACULTY</b></a></li>
         </ul>
         <!--end "contact" sub-nav-->
         <br>
         <br>
         <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <p class="p-contact">Have a general question about our programs? Feel free to write us an email! We will get back to you in 24 hours.</p>
            <!--start contact form-->
            <form>
               <!--start contact form-->
               <div class="form-group">
                  <?php echo do_shortcode("[contact-form-7 ID=83]"); ?>
                  <!--<input class="input-name form-control" type="text" name="name" value="Name"><br>
                     <input class="input-email form-control" type="text" name="email" value="Email">
                     <br>
                     <textarea class="input-message" name="message" placeholder="What's on your mind?"></textarea> <br>
                     <input class="submit btn btn-primary mb-2" type="submit" value="Ask Away!">
                     -->
               </div>
            </form>
            <!--end contact form-->
            <!--end contact form-->
         </div>
      </div>
      <!--start "schedule appt with advisor-->
      <a name="section2">
         <div class="col-md-12 schedule-appt section" >
            <div class="col-md-8 advisor-appt">
               <h4>Schedule an Appointment with an Advisor</h4>
               <p>Are you a new or returning student looking for advice on how to sign up for the right classes next quarter? Struggling to find a clear pathway to graduation? We are here to help, every step of the way. Schedule an appointment with an advisor today to solve your educational needs. </p>
            </div>
            <div class="col-md-4">
      <a href="#"><input class="advisor-button btn btn-primary mb-2" type="submit" value="Meet an Advisor"></a>
      </div>
      </div> <!--end of appt with advisor section-->
      </a><!--end "schedule appt with advisor anchor-->
      <!--start "faculty directory-->
      <a name="section3">
         <div class="col-md-12 faculty section">
            <h4 class="contact-h4">Faculty Directory</h4>
            <!--<input class="input-search" type="text" name="search" value="Search">-->
            <div class="col-md-12 col-sm-12">
               <ul class="faculty-nav">
                  <!-- <li class="faculty-nav1"><button class="faculty-nav1">ADMINISTRATOR</button></li>-->
                  <li class="faculty-nav2"><button class="faculty-nav2">ADVISOR</button></li>
                  <li class="faculty-nav3"><button class="faculty-nav3">INSTRUCTOR</button></li>
                  <li class="faculty-nav4"><button class="faculty-nav4">DEPARTMENTS</button></li>
               </ul>
            </div>
            <!--start advisor menu-->
            <div id="menu1" class="col-md-10 col-md-offset-1">
               <div class="col-md-10 col-md-offset-1">
                  <?php echo do_shortcode("[connections category=3]"); ?>
               </div>
            </div>
            <!--end advisor menu-->
            <!--start instructor menu-->
            <div id="menu3" class="col-md-10 col-md-offset-1">
               <div class="col-md-10 col-md-offset-1">
                  <?php echo do_shortcode("[connections category=5]"); ?>
               </div>
            </div>
            <!--end instructor menu"-->  
            <!--start department menu-->
            <div id="menu4" class="col-md-10 col-md-offset-1">
               <div class="col-md-10 col-md-offset-1">
                  <?php echo do_shortcode("[connections category=4]"); ?>
               </div>
            </div>
            <!--end department menu"-->  
         </div>
      </a>
      <!--end of faculty directory-->
   </div>
   <!--end of contact page-->
</div>
</div>
<!--end of wrapper-->
<!--back to top button-->
<!--<button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button> -->
<?php get_footer(); ?>