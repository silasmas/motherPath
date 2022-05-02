
  </div>
</div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/scriptcarousel.js') }}"></script>
    <!-- <script src="js/gsap.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/all.js"></script> -->
    <script>
      $(window).scroll(function() {

        if ($(this).scrollTop() > 40) {
            $(".navbar").addClass('bg-white');
            $('.topbar').slideUp()
            
        } else {
            $(".navbar").removeClass('bg-white');
            $('.topbar').slideDown()
        }
      });
      $('.menu-toggle').click(function(){
        $(this).toggleClass('active')
        $('.full-menu').addClass('active')
      })
      $('.close-menu').click(function(){
        $('.menu-toggle').removeClass('active')
        $('.full-menu').removeClass('active')
      })
      $(window).on('load',function(){
          $('.loading').addClass('complete');
        });
        $('.scrollTop').click(function(){
            var getElement = $(this).attr('href');
            if ($(getElement).length){
                var getOffset = $(getElement).offset().top - $('.navbar').height();
                $('html,body').animate({
                    scrollTop:getOffset
                },1000);
            }
            return false;
        })
    </script>
</body>
</html>