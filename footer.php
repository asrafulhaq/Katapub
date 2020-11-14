


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fullpage.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/examples.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pong.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/particles.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script type="text/javascript">



      window.addEventListener("load", function(){

        setInterval(function(){
          var load_screen = document.getElementById("load_screen");
          document.body.removeChild(load_screen);
        }, 0);

      });


		new WOW().init();


	    var myFullpage = new fullpage('#fullpage', { 
	        
			navigation: true,

	    });


    	$.fn.parallax = function(resistance, mouse) {
          $el = $(this);
          TweenLite.to($el, 0.2, {
            x: -((mouse.clientX - window.innerWidth / 2) / resistance),
            y: -((mouse.clientY - window.innerHeight / 2) / resistance)
          });
        };

        $(document).mousemove(function(e) {

          $(".btnVFRond").parallax(30, e);
         });



        $('.menu-res a').click(function(){
        	$('.main-menu').toggle(400);
        	return false;
        });







$('#subs_form').submit(function(e){

    e.preventDefault();

    let subs = $('input#inp').val();

    let mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if ( mail.test(subs) ) {
        
        $('#form_effect').show();
        $('.inp span.border').hide();
        $('.inp svg').hide();
        $('.inp input').attr('disabled', '');
        $('.inp input').val('');

        setTimeout(function(){
           $('#form_effect').remove();
          // $('#mmmsg').html('Merci de vous etre abonne');
          $('#sub_eff').html('<i class="ti-check" aria-hidden="true"></i>').css('color', 'green').css('cursor', 'inherit').css('font-size', '24px').css('top', '-13px');
        }, 1000);
    }else {

        alert('Invalid email address !');

    }


});


$('#sub_eff').click(function(e){

    e.preventDefault();

    let subs = $('input#inp').val();

    let mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if ( mail.test(subs) ) {
        
        $('#form_effect').show();
        $('.inp span.border').hide();
        $('.inp svg').hide();
        $('.inp input').attr('disabled', '');
        $('.inp input').val('');

        setTimeout(function(){
           $('#form_effect').remove();
          // $('#mmmsg').html('Merci de vous etre abonne');
          $('#sub_eff').html('<i class="ti-check" aria-hidden="true"></i>').css('color', 'green').css('cursor', 'inherit').css('font-size', '24px').css('top', '-13px').css('margin-top', '24px');

        }, 1000);
    }else {

        alert('Invalid email address !');

    }


});



</script>


</body>
</html>