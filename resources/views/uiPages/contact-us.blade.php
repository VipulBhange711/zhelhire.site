
@include('uiPages.include.header')
@include('uiPages.include.navbar')



  <section class="page-heading">

    <div class="container">

      <div class="row">

        <div class="col-lg-12">

          <div class="header-text">

            <h4>Say Hello ZhelHire</h4>

            <h1>Contact Us</h1>

          </div>

        </div>

      </div>

    </div>

  </section>



  <section class="more-info">

    <div class="container">

      <div class="row">

        <div class="col-lg-5">

          <div class="section-heading">

            <h6>More Info</h6>

            <h4>Read More <em>About Us</em></h4>

          </div>

          <p>Trust fund nocore broklyn humblebrag mustache

            pork kitsch, bicycle rights hexagon schlitz keytar palo is

            santo drinking vinegar fam ramps. <br><br>Four dollar toast and

            edison bulb vinyl, listicle hashtag pug scenester typewrit

            er yuccie street artboard or whatever to fill place.</p>

          <ul>

            <li>- Selfies you probably haven't heard of them.</li>

            <li>- Tousled cold-pressed chicharrones yuccie.</li>

            <li>- Pabst iPhone chartreuse shabby chic tumeric.</li>

            <li>- Scenester normcore mumblecore snackwave.</li>

          </ul>

        </div>

        <div class="col-lg-6 offset-lg-1 align-self-center">

          <div class="row">

            <div class="col-6">

              <div class="count-area-content">

                <div class="count-digit">125</div>

                <div class="count-title">Finished Projects</div>

              </div>

            </div>

            <div class="col-6">

              <div class="count-area-content">

                <div class="count-digit">11</div>

                <div class="count-title">Years Experience</div>

              </div>

            </div>

            <div class="col-6">

              <div class="count-area-content">

                <div class="count-digit">87</div>

                <div class="count-title">Happy Clients</div>

              </div>

            </div>

            <div class="col-6">

              <div class="count-area-content">

                <div class="count-digit">24</div>

                <div class="count-title">Awwards Won</div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <section class="contact-us">

    <div class="container">

      <div class="row">

        <div class="col-lg-8">

          <div id="map">

          	<!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->

            <iframe

                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=60-B,%20Dighori,%20Nagpur,%20Maharashtra+(Bhange%20Job%20Placement)&amp;t=p&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"

                            width="100%" height="420px" frameborder="0"

                            style="border:0; border-radius: 15px; position: relative; z-index: 2;"allowfullscreen=""></iframe>

            <div class="row">

              <div class="col-lg-4 offset-lg-1">

                <div class="contact-info">

                  <div class="icon">

                    <i class="fa fa-phone"></i>

                  </div>

                  <h4>Phone</h4>

                  <span>9371723492</span>

                </div>

              </div>

              <div class="col-lg-4">

                <div class="contact-info">

                  <div class="icon">

                    <i class="fa fa-phone"></i>

                  </div>

                  <h4>Mobile</h4>

                  <span>7083019468</span>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-4">

          <form id="contact" action="" method="post">

            <div class="row">

              <div class="col-lg-12">

                <div class="section-heading">

                  <h6>Contact us</h6>

                  <h4>Say <em>Hello</em></h4>

                  <p>IF you need a working contact form by PHP script, please visit TemplateMo's contact page for more info.</p>

                </div>

              </div>

              <div class="col-lg-12">

                <fieldset>

                  <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>

                </fieldset>

              </div>

              <div class="col-lg-12">

                <fieldset>

                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">

                </fieldset>

              </div>

              <div class="col-lg-12">

                <fieldset>

                  <textarea name="message" id="message" placeholder="Your Message"></textarea>

                </fieldset>

              </div>

              <div class="col-lg-12">

                <fieldset>

                  <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>

                </fieldset>

              </div>

            </div>

          </form>

        </div>

        <div class="col-lg-12">

          <ul class="social-icons">

            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

            <li><a href="#"><i class="fa fa-rss"></i></a></li>

            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>

          </ul>

        </div>

        @include('uiPages.include.footer')

