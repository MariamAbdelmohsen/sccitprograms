<?php
    /**
    * Template Name: Contact Page
    *
    * Designer: SCC IT Programs Team
    *
    */
    get_header(); ?>
    <div class="banner">
        <!-- <img src="<?php bloginfo('template_directory'); ?>/images/seattle.jpg"> -->
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

    </div>
    <div id="wrapper" class="row">
        <div id="contactPage">
            <div class="col-md-12 col-sm-12">
                <div class="text">
                    <small> 
                <?php if ( function_exists( 'bread_crumb' )) { bread_crumb(); } ?>
                </small>
                    <div class="underline">
                        <h3 class="highlight">
                        <b> <?php the_title(); // the posting title ?> 
                        </b> 
                    </h3>
                    </div>
                </div>
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
                <!-- <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> -->
                <div class="contact col-md-8 col-md-offset-2">

                    <p>Have a general question about our programs? Feel free to write us an email! We will get back to you in 24 hours.</p>
                    <!--start contact form-->

                    <!--start contact form-->
                    <div class="form-group">
                        <?php echo do_shortcode("[contact-form-7 ID=266]"); ?>
                            <!--<input class="input-name form-control" type="text" name="name" value="Name"><br>
                                <input class="input-email form-control" type="text" name="email" value="Email">
                                <br>
                                <textarea class="input-message" name="message" placeholder="What's on your mind?"></textarea> <br>
                                <input class="submit btn btn-primary mb-2" type="submit" value="Ask Away!">
                                -->
                    </div>

                    <!--end contact form-->
                </div>
            </div>
            <!--start "schedule appt with advisor-->
            <a name="section2">
                <div class="col-md-12 schedule-appt section">
                    <div class="col-md-8 advisor-appt">
                        <h4>Schedule an Appointment with an Advisor</h4>
                        <p>Are you a new or returning student looking for advice on how to sign up for the right classes next quarter? Struggling to find a clear pathway to graduation? We are here to help, every step of the way. Schedule an appointment with an advisor today to solve your educational needs. </p>
                    </div>
                    <div class="col-md-4">
                        <a href="https://itprogramscentral.youcanbook.me/index.jsp" alt="Book Advisor" target="_blank">
                            <input class="advisor-button btn btn-primary mb-2" type="submit" value="Meet an Advisor">
                        </a>
                    </div>
                </div>
                <!--end of appt with advisor section-->
            </a>
            <!--end "schedule appt with advisor anchor-->
            <!--start "faculty directory-->
            <a name="section3">
            <div class="col-md-12 faculty-dirc section">
                    <div class="col-md-8 faculty">
                        <h4>Faculty Directory</h4>
                        <p><span>If you are trying to contact a particular member of staff or faculty with in seattle Central College please visit our faculty directory. District Wide Faculty and Staff , use our email search </span> <a target="_blank" href="http://www.seattlecolleges.com/DISTRICT/employeedirectory/directorysearch.aspx"> email search</a>
                            </p>
                    <!--<input class="input-search" type="text" name="search" value="Search">-->
                    </div>
                    <div class="col-md-4">
                        <a target="_blank" href="https://seattlecentral.edu/about/contact-us/directory/search">
                            <input class="advisor-button btn btn-primary mb-2" type="submit" value="Faculty Directory">
                        </a>
                        </div>
                    <!-- <p>
                        <a href="https://seattlecentral.edu/about/contact-us/directory/search">
                            Find faculty contact information in our faculty directory.
                        </a>
                    </p> -->
                </div>
            </a>
            <!--end of faculty directory-->
        </div>
        <!--end of contact page-->
    </div>
    <!--end of wrapper-->
    </div>
    </div>
    <!--back to top button-->
    <!--<button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button> -->
    <?php get_footer(); ?>