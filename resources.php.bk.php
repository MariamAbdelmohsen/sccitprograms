<?php
/**
* Template Name: Resources Page
*
* Designer: SCC IT Programs Team
*
*/
 
 get_header(); ?>
<div class="banner">
        <img src="<?php bloginfo('template_directory'); ?>/images/seattle.jpg">
    </div><!--end of banner-->			


<div id="wrapper">
        <div class="col-md-12">
            <div class="text">
             <small> 
    <?php if ( function_exists( 'bread_crumb' )) { bread_crumb(); } ?>
</small>
                <h3><?php $custom_fields = get_post_custom($page->ID); echo $custom_fields['Title Display'][0];
					?></h3>
				<?php echo get_post_field('post_content', $id);?>
            
</div>
            <?php 
						$pic_size = array(250,250);
						query_posts( array(
							'category_name' => 'resources'));
						if (have_posts() ) : $counter=0;
						while ( have_posts() ):  the_post(); $counter += 1;
						if($counter%2!=0): ?>
            
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
                    <p class="p-contact">Have a general question about our programs? Feel free to write us an email! We will get back to you in 24 hours. </p>
                    <!--start contact form-->
                    <form> <!--start contact form-->
                        <div class="form-group">
                            <input class="input-name form-control" type="text" name="name" value="Name"><br>
                            <input class="input-email form-control" type="text" name="email" value="Email">
                            <br>
                            <textarea class="input-message" name="message" placeholder="What's on your mind?"></textarea> <br>
                            <input class="submit btn btn-primary mb-2" type="submit" value="Ask Away!">
                        </div>    
                    </form> <!--end contact form-->
                </div><!--end contact form-->
            </div>
            <!--start "schedule appt with advisor-->
            <a name="section2"><div class="col-md-12 schedule-appt section" >
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
            <a name="section3"><div class="col-md-12 faculty section">
                <h4 class="contact-h4">Faculty Directory</h4>
                <input class="input-search" type="text" name="search" value="Search">
                <div class="col-md-12 col-sm-12">
                    <ul class="faculty-nav">
                    <li class="faculty-nav1"><button class="faculty-nav1">ADMINISTRATOR</button></li>
                    <li class="faculty-nav2"><button class="faculty-nav2">ADVISOR</button></li>
                    <li class="faculty-nav3"><button class="faculty-nav3">INSTRUCTOR</button></li>
                    <li class="faculty-nav4"><button class="faculty-nav4">DEPARTMENTS</button></li>
                    </ul>
                </div>
     
                <!--start administrator menu-->
                <div id="menu1" class="col-md-10 col-md-offset-1">
                        <div class="col-md-3">
                            <div class="box">
                            </div>
                            <p>Name <br> Email <br> Phone Number </p>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                            </div>
                            <p>Name <br> Email <br> Phone Number </p>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                            </div>
                            <p>Name <br> Email <br> Phone Number </p>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                            </div>
                            <p>Name <br> Email <br> Phone Number </p>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                            </div>
                            <p>Name <br> Email <br> Phone Number </p>
                        </div>
                </div> <!--end administrator menu-->
        
                <!--start advisor menu-->
                <div id="menu2" class="col-md-10 col-md-offset-1">
                        <div class="col-md-3">
                            <div class="box">  
                            </div>
                           <p>Name <br> Email <br> Phone Number </p>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                            </div>
                            <p>Name <br> Email <br> Phone Number </p>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                            </div>
                            <p>Name <br> Email <br> Phone Number </p>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                            </div>
                            <p>Name <br> Email <br> Phone Number </p>
                        </div>
                </div> <!--end advisor menu-->
     
                <!--start instructor menu-->
                <div id="menu3" class="col-md-10 col-md-offset-1">

                        <div class="col-md-3">
                            <div class="box">
                            </div>
                           <p>Name <br> Email <br> Phone Number </p>
                        </div>
                </div> <!--end instructor menu"-->  
     
                <!--start department menu-->
                <div id="menu4" class="col-md-10 col-md-offset-1">

                        <div class="col-md-3">
                            <div class="box">
                            </div>
                           <p>Name <br> Email <br> Phone Number </p>
                        </div>
                </div> <!--end department menu"-->  
     
            </div></a> <!--end of faculty directory-->
    </div><!--end col-12-->
</div><!--end wrapper-->

<?php get_footer(); ?>