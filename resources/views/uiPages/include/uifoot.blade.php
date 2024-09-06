

<div class="col-lg-12">

    <p class="copyright">Copyright © 2024 Zhelhire Co., Ltd. All Rights Reserved. 

    

    <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">Bhange Placement</a></p>

  </div>

</div>

</div>

</section>



<!-- Scripts -->

<!-- Bootstrap core JavaScript -->

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



<!-- <script src="assets/js/isotope.min.js"></script> -->

<script src="assets/js/owl-carousel.js"></script>

<script src="assets/js/lightbox.js"></script>

<script src="assets/js/tabs.js"></script>

<script src="assets/js/video.js"></script>

<script src="assets/js/slick-slider.js"></script>

<!-- <script src="assets/js/custom.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

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

        scrollTop: reqSectionPos },

      800);

    } else {

      $('body, html').scrollTop(reqSectionPos);

    }



  };



  var checkSection = function checkSection() {

    $('.section').each(function () {

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



  $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {

    e.preventDefault();

    showSection($(this).attr('href'), true);

  });



  $(window).scroll(function () {

    checkSection();

  });

</script>

</body>



</html>