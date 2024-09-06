@include('uiPages.include.header')
@include('uiPages.include.navbar')


    <section class="main-banner" id="top">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 align-self-center">

                    <div class="header-text">

                        <h1 class="display-1">Welcome to Zhelhire Services</h1>

                        <h2>Best Place to Grow Your <em>Career!</em></h2>

                        <div class="main-button-gradient">

                            <a href="{{ route('contact') }}">Join Us Now!</a>

                            

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="right-image">

                        <img src="{{ asset('public/assets/images/banner-right-image.png') }} " alt="">

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ***** Main Banner Area End ***** -->







    <section class="our-courses" id="courses">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 offset-lg-3">

                    <div class="section-heading">

                        <h6>OUR COURSES</h6>

                        <h4>What You Can <em>Learn</em></h4>

                        <p>You just think about TemplateMo whenever you need free CSS templates for your business

                            website</p>

                    </div>

                </div>

                <div class="col-lg-12">

                    <div class="naccs">

                        <div class="tabs">

                            <div class="row">

                                <div class="col-lg-3">

                                    <div class="menu">

                                        <div class="active gradient-border"><span>Web Development</span></div>

                                        <div class=" gradient-border"><span>ENGLISH SPEAKING</span></div>

                                        <div class=" active gradient-border"><span>ADVANCE EXCEL</span></div>

                                        <div class="  gradient-border"><span>HR TRANING</span></div>



                                    </div>

                                </div>

                                <div class="col-lg-9">

                                    <ul class="nacc">

                                        <li class="active">

                                            <div>

                                                <div class="left-image">

                                                    <img src="{{ asset('public/assets/images/courses-01.jpg') }}" alt="">

                                                    <div class="price">

                                                        <h6>100% JOB</h6>

                                                    </div>

                                                </div>

                                                <div class="right-content">

                                                    <h4>Web Development</h4>

                                                    <p>Master the art of web development with <b> ZhelHire's </b>

                                                        comprehensive training program. Learn HTML, CSS, jQuery,

                                                        Bootstrap, and JavaScript fundamentals, coupled with advanced

                                                        tools like <b> Figma for design </b> and PHP, <b> Laravel,

                                                            React, Node.js, MySQL, and MongoDB for full-stack

                                                            development expertise. </b> <br>Embark on your journey to

                                                        becoming a proficient web developer with ZhelHire's

                                                        industry-leading curriculum and expert guidance.</p>

                                                    <span>1.5 Month</span>

                                                    <span>1.5 Hr daily</span>

                                                    <span class="last-span">100% Placement Guarantee</span>

                                                    <div class="text-button">

                                                        <a href="{{ route('contact') }}">Subscribe Course</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </li>

                                        <li>

                                            <div>

                                                <div class="left-image">

                                                    <img src="{{ asset('public/assets/images/courses-02.jpg') }}" alt="">

                                                    <div class="price">

                                                        <h6>Skill</h6>

                                                    </div>

                                                </div>

                                                <div class="right-content">

                                                    <h4>English Speaking</h4>

                                                    <p>Elevate your communication skills with ZhelHire's English

                                                        Speaking Course. Master spoken English fluency, pronunciation,

                                                        vocabulary, and confidence through interactive lessons and

                                                        practical exercises. Our experienced instructors guide you every

                                                        step of the way, ensuring rapid progress and proficiency. Join

                                                        ZhelHire's English Speaking Course today and unlock new

                                                        opportunities in both your personal and professional life.</p>

                                                    <span>1 Month</span>

                                                    <span>2 Hr daily</span>

                                                    <span class="last-span">1 Certificate</span>

                                                    <div class="text-button">

                                                        <a href="{{ route('contact') }}">Subscribe Course</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </li>

                                        <li>

                                            <div>

                                                <div class="left-image">

                                                    <img src="{{ asset('public/assets/images/courses-03.jpg') }}" alt="">

                                                    <div class="price">

                                                        <h6>%100</h6>

                                                    </div>

                                                </div>

                                                <div class="right-content">

                                                    <h4>Advance Excel</h4>

                                                    <p>Take your Excel skills to the next level with ZhelHire's Advanced

                                                        Excel Course. Dive deep into advanced functions, data analysis

                                                        techniques, macros, pivot tables, and more. Our hands-on

                                                        approach ensures mastery of complex Excel concepts, empowering

                                                        you to streamline processes and make data-driven decisions with

                                                        confidence. Enroll now and become an Excel expert with

                                                        ZhelHire's comprehensive training program.</p>

                                                    <span>1 Month</span>

                                                    <span>1 Hr Daily</span>

                                                    <span class="last-span">1 Certificate</span>

                                                    <div class="text-button">

                                                        <a href="{{ route('contact') }}">Subscribe Course</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </li>

                                        <li>

                                            <div>

                                                <div class="left-image">

                                                    <img src="{{ asset('public/assets/images/courses-04.jpg') }}" alt="">

                                                    <div class="price">

                                                        <h6>Job</h6>

                                                    </div>

                                                </div>

                                                <div class="right-content">

                                                    <h4>Human Resource Training Program by ZhelHire</h4>

                                                    <p>Empower your HR skills with ZhelHire's comprehensive training

                                                        program. <b>Learn the latest strategies in recruitment, employee

                                                            engagement, performance management, and HR analytics. </b>

                                                        Our expert-led sessions provide practical insights and tools to

                                                        navigate the complexities of modern HR management.<br><br>Join

                                                        ZhelHire's HR Training Program and unlock your potential to

                                                        drive organizational success.</p>

                                                    <span>1 Month</span>

                                                    <span>1 Hr Daily</span>

                                                    <span class="last-span">1 Certificate</span>

                                                    <div class="text-button">

                                                        <a href="{{ route('contact') }}">Subscribe Course</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section class="simple-cta">

        <div class="container">

            <div class="row">

                <div class="col-lg-5 offset-lg-1">

                    <div class="left-image">

                        <img src="{{ asset('public/assets/images/cta-left-image.png') }}" alt="">

                    </div>

                </div>

                <div class="col-lg-5 align-self-center">

                    <h6>Get the Career Hike Right Now!</h6>

                    <h4>Course with <b><i>100%</b></i> Job Guarantee </h4>

                    <p>Explore ZhelHire's specialized training program designed to ensure not just skill acquisition but

                        also secure employment opportunities.</p>

                    <div class="white-button">

                        <a href="">View Courses</a>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section class="testimonials" id="testimonials">

    <div class="container">

        <div class="row">Learner

            <div class="col-lg-12">

                <div class="section-heading">

                    <h6>Testimonials</h6>

                    <h4>What They <em>Think</em></h4>

                </div>

            </div>

            <div class="col-lg-12">

                <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">

                    <div>

                        <img src="{{ asset('public/assets/images/kamakshi.png') }}" style="width: 40%; height:40%; margin-left:26%; margin-bottom:-10px" class="rounded" alt="">

                        <div class="item">

                            <p>“ZhelHire Computer institute is the best institute till date I have ever experienced. They teaches everything so perfectly and also make sure that every student can understand it”</p>

                            <h4>Kamakshi Pal</h4>

                            <span>Learner &amp; Alumni </span>

                            <img src="{{ asset('public/assets/images/quote.png') }}" alt="">

                        </div>

                    </div>

                    <div>

                        <img src="{{ asset('public/assets/images/one.jpg') }}" style="width: 40%; height:40%; margin-left:26%; margin-bottom:-10px" class="rounded" alt="">

                        <div class="item">

                            <p>“ It's best institute. Sir is so cooperative with students. Environment is friendly and loved the teaching.”</p>

                            <h4>Radhika Gupta</h4>

                            <span>Learner &amp; Alumni </span>

                            <img src="{{ asset('public/assets/images/quote.png') }}" alt="">

                        </div>

                    </div>

                    <div>

                        <img src="{{ asset('public/assets/images/two.jpg') }}" style="width: 40%; height:40%; margin-left:26%; margin-bottom:-10px" class="rounded" alt="">

                        <div class="item">

                            <p>“ZhelHire Computer institute is the best place to learn coding and and to get equipped with programming.”</p>

                            <h4>Pravin Shekh </h4>

                            <span>Learner &amp; Alumni </span>

                            <img src="{{ asset('public/assets/images/quote.png') }}" alt="">

                        </div>

                    </div>

                    <div>

                        <img src="{{ asset('public/assets/images/three.jpg') }}" style="width: 40%; height:40%; margin-left:26%; margin-bottom:-10px" class="rounded" alt="">

                        <div class="item">

                            <p>“I had a great experience at ZhelHire Computer Institute  Nagpur.

                                The staff was extremely helpful and knowledgeable. They were patient and explained the concepts in detail.”</p>

                            <h4>Kajal Mehende</h4>

                            <span>Learner &amp; Alumni </span>

                            <img src="{{ asset('assets/images/quote.png') }}" alt="">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>




    <section class="contact-us" id="contact-section">

        <div class="container">

            <div class="row">

                <div class="col-lg-8">

                    <div id="map">



                        <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->

                        <iframe

                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=60-B,%20Dighori,%20Nagpur,%20Maharashtra+(Bhange%20Job%20Placement)&amp;t=p&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"

                            width="100%" height="420px" frameborder="0"

                            style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>



                        <div class="row">

                            <div class="col-lg-4 offset-lg-1">

                                <div class="contact-info">

                                    <div class="icon">

                                        <i class="fa fa-phone"></i>

                                    </div>

                                    <h4>Phone</h4>

                                    <span>+91 9371723492</span>

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="contact-info">

                                    <div class="icon">

                                        <i class="fa fa-phone"></i>

                                    </div>

                                    <h4>Mobile</h4>

                                    <span>+91 9371723492</span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <form id="contact" action="" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">

                                <div class="section-heading">

                                    <h6>Contact us</h6>

                                    <h4>Say <em>Hello</em></h4>

                                    <p>

                                        If you're interested in learning more about our courses or have any questions, feel free to reach out to us. You can contact us through.</p>

                                </div>

                            </div>

                            <div class="col-lg-12">

                                <fieldset>

                                    <input type="name" name="name" id="name" placeholder="Full Name"

                                        autocomplete="on" required>

                                </fieldset>

                            </div>

                            <div class="col-lg-12">

                                <fieldset>
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email" required>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">

                                <fieldset>
                                    <input type="text" name="contact" id="name" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Contact" required>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">

                                <fieldset>

                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>

                                </fieldset>

                            </div>

                            <div class="col-lg-12">

                                <fieldset>

                                    <button type="submit" id="saveBtn" class="main-gradient-button">Send

                                        Message</button>

                                </fieldset>

                            </div>

                        </div>

                    </form>

                </div>

                <div class="col-lg-12">

                    <ul class="social-icons">

                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><i class="fa fa-linkedin"></i></a></li>

                        <li><a href="#"><i class="fa fa-rss"></i></a></li>

                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>

                    </ul>

                </div>

                <div class="col-lg-12">

                    <p class="copyright">Copyright © 2024 zhelhire services., Ltd. All Rights Reserved.



                        <br>Design: <a rel="sponsored" href="zhelhire.sire" target="_blank">Bhange Job Placement</a>

                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- Scripts -->

    <!-- Bootstrap core JavaScript -->

    <script src="public/vendor/jquery/jquery.min.js"></script>

    <script src="public/assets/js/owl-carousel.js"></script>

    <script src="public/assets/js/lightbox.js"></script>

    <script src="public/assets/js/tabs.js"></script>

    <script src="public/assets/js/video.js"></script>

    <script src="public/assets/js/slick-slider.js"></script>

    <script src="public/assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 


    <script>
        //according to loftblog tut

        $('.nav li:first').addClass('active');



        var showSection = function showSection(section, isAnimate) {

            var

                direction = section.replace(/#/, ''),

                reqSection = $('.section').filter('[data-section="' + direction + '"]'),

                reqSectionPos = reqSection.offset().top - 0;



            if (isAnimate) {

                $('body, html').animate({

                        scrollTop: reqSectionPos

                    },

                    800);

            } else {

                $('body, html').scrollTop(reqSectionPos);

            }



        };



        var checkSection = function checkSection() {

            $('.section').each(function() {

                var

                    $this = $(this),

                    topEdge = $this.offset().top - 80,

                    bottomEdge = topEdge + $this.height(),

                    wScroll = $(window).scrollTop();

                if (topEdge < wScroll && bottomEdge > wScroll) {

                    var

                        currentId = $this.data('section'),

                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');

                    reqLink.closest('li').addClass('active').

                    siblings().removeClass('active');

                }

            });

        };



        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {

            e.preventDefault();

            showSection($(this).attr('href'), true);

        });



        $(window).scroll(function() {

            checkSection();

        });
    </script>

    <script>
        $('#saveBtn').click(function(e) {
            e.preventDefault();

            $.ajax({
                data: $('#contact').serialize(),
                url: "{{route('inquery.post')}}",
                type: "POST",
                dataType: 'json',
                success: function(done) {

                    console.warn(done);


                    $('#contact').load(location.href + " #contact");

                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });


                        Toast.fire({
                            icon: 'success',
                            title: 'Got It.. We Will Reply Soon....'
                        })
                    });
                    // Swal.fire("SweetAlert2 is working!");


                },
            });
        });
    </script>

</body>



</html>