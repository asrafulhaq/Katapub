


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fullpage.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/examples.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pong.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/particles.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>



<script>
            let dpi = window.devicePixelRatio || 1;
            window.onload = function () {
                !(function () {
                    const e = document.querySelectorAll(".pagelink"),
                        t = document.createElement("canvas");
                    (t.style = "position: fixed;\n              top: 0;\n              left: 0;\n              width: 100vw;\n              height: 100vh;\n              z-index: 2000;\n              pointer-events: none;"),
                        document.body.appendChild(t);
                    const n = t.getContext("2d");
                    let o = (n.canvas.width = window.innerWidth),
                        i = (n.canvas.height = window.innerHeight),
                        a = "#FFAAFF",
                        l = 1.2,
                        u = !1,
                        c = { value: 1 },
                        d = { value: 1 };
                    function v(e) {
                        e.preventDefault();
                        let t = this.getAttribute("href");
                        (a = "#E5E3DC"),
                            (c.value = 1),
                            (d.value = 1),
                            (u = !1),
                            setTimeout(function () {
                                document.location.href = t;
                            }, 1e3 * l),
                            null == t && (t = "index.html"),
                            window.isMobile || TweenLite.to(soundReactor.audio, l, { volume: 0 }),
                            TweenLite.to(d, l, {
                                value: 0,
                                ease: Power4.easeInOut,
                                onComplete: function () {
                                    u = !0;
                                },
                            }),
                            TweenLite.to(c, l, {
                                value: 0,
                                ease: Power4.easeInOut,
                                delay: l,
                                onComplete: function () {
                                    window.localStorage.setItem("audioTime", soundReactor.audio.currentTime);
                                },
                            });
                    }
                    RAF.subscribe("overlayUpdate", function () {
                        n.clearRect(0, 0, o, i),
                            n.beginPath(),
                            (n.fillStyle = a),
                            n.rect(0, 0, o, i),
                            u && n.fill(),
                            n.closePath(),
                            n.beginPath(),
                            n.moveTo(0, i * c.value),
                            n.quadraticCurveTo(o / 2, i * c.value + 300 * Math.sin(c.value * Math.PI), o, i * c.value),
                            n.lineTo(o, i * d.value),
                            n.quadraticCurveTo(o / 2, i * d.value + -300 * Math.sin(d.value * Math.PI), 0, i * d.value),
                            n.lineTo(0, 0),
                            n.closePath(),
                            (n.fillStyle = "#0D0D0D"),
                            n.fill();
                    }),
                        e.forEach((e) => {
                            e.addEventListener("click", v);
                        });
                })();
            };
        </script>


        <script>
            let soundToggler = null;
            if (!window.isMobile) soundToggler = new SoundToggler();
        </script>


        <script>
            const soundReactor = new SoundReactor("https://cdn.jsdelivr.net/gh/niccolomiranda/chiara-luzzana/sound/mainSound.mp3");
            window.isMobile || (soundReactor.init(), (soundReactor.audio.crossOrigin = "anonymous"), null == soundToggler || window.isSafari ? (soundToggler.autoPlay = !1) : (soundToggler.autoPlay = !0));
            let transitioning = !1,
                pLinks = document.querySelectorAll(".pagelink");
            pLinks.forEach((n) => {
                n.addEventListener("click", function () {
                    transitioning = !0;
                });
            });
            const audioUrls = [
                "",
                "",
                "",
                "",
                "",
                "",
            ];
            let audios = [];
            function elasticsInit() {
                let n = document.querySelectorAll(".elasticbox"),
                    o = [],
                    e = { x: 0, y: 0 };
                function t(n) {
                    o.forEach((o) => {
                        o.container.classList == n.target.classList && ((o.mouseIn = !0), console.log(o.mouseIn), null != o.anim && o.anim.kill());
                    });
                }
                function a(n) {
                    o.forEach((o, e) => {
                        if (o.container.classList == n.target.classList) {
                            if (((o.mouseIn = !1), (o.anim = TweenLite.to(o.handlePos, 1, { x: o.handleInitPos.x, y: o.handleInitPos.y, ease: Elastic.easeOut.config(1, 0.3) })), transitioning)) return;
                            (audios[e].currentTime = 0), audios[e].play();
                        }
                    });
                }
                function i(n) {
                    let o = n.target.getBoundingClientRect();
                    (e.x = n.clientX - o.left), (e.y = n.clientY - o.top);
                }
                n.forEach((n, e) => {
                    let s = document.createElement("canvas"),
                        l = s.getContext("2d"),
                        c = (l.canvas.width = n.offsetWidth),
                        r = (l.canvas.height = n.offsetHeight);
                    n.classList.add("boxid_" + e),
                        n.appendChild(s),
                        o.push({ ctx: l, canvas: s, container: n, mouseIn: !1, handlePos: { x: c / 2, y: r / 2 }, handleInitPos: { x: c / 2, y: r / 2 }, anim: null }),
                        window.isMobile || (n.addEventListener("mouseenter", t), n.addEventListener("mouseleave", a), n.addEventListener("mousemove", i));
                }),
                    window.addEventListener("resize", function () {
                        o.forEach((o, e) => {
                            (o.ctx.canvas.width = n[e].offsetWidth), (o.ctx.canvas.height = n[e].offsetHeight);
                        });
                    }),
                    RAF.subscribe("elasticsRAF", function () {
                        o.forEach((o, t) => {
                            let a = (o.ctx.canvas.width = n[t].offsetWidth),
                                i = (o.ctx.canvas.height = n[t].offsetHeight);
                            o.mouseIn && ((o.handlePos.x += 0.5 * (e.x - o.handlePos.x)), (o.handlePos.y += 0.5 * (e.y - o.handlePos.y))),
                                o.ctx.clearRect(0, 0, a, i),
                                o.ctx.beginPath(),
                                o.ctx.moveTo(a / 2, 0),
                                o.ctx.quadraticCurveTo(o.handlePos.x, o.handlePos.y, a / 2, i),
                                o.ctx.stroke(),
                                o.ctx.closePath();
                        });
                    });
            }
            audioUrls.forEach((n) => {
                let o = new Audio(n);
                (o.crossOrigin = "anonymous"), audios.push(o);
            }),
                elasticsInit();
        </script>

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









  $('form#email_subs').submit(function(e){
      e.preventDefault();

      let email = $('form#email_subs #inp').val();
        
      let mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

      if ( mail.test(email) ) {
          
          $('form#email_subs .inp img').show();
          $('form#email_subs #inp').hide();
          $('form#email_subs span.border').hide();
          $('.gurantee .inp button').css('bottom', '-52px');
          $('form#email_subs .inp svg').hide();
          $('.gurantee .inp .label ').hide();
         

          setTimeout(function(){
            $('form#email_subs .inp img').hide();
            $('form#email_subs #sub_btn').html('<i class="ti-check"></i>').css('color', 'green');
            $('form#email_subs #success_msg').html('Merci Beaucoup').css('color', 'green');
          }, 1000);


      }else {

          alert('Invalid email address !');

      }


  });





</script>

<script>
    

    var board_width = 1050;
    var board_height = 400;
    var paddle_width = 100;
    var paddle_height = 16;
    var ball_radius = 12;
    var ballCX;
    var ballCY;
    var speed = 2;
    var dx = speed;
    var dy = -speed;
    var rightPressed = false;
    var leftPressed = false;
    var paddleX = board_width / 2 - paddle_width / 2;
    var num_lives = 3;
    var score_value = 0;
    var brick_height = 20;
    var brick_width = 100;
    var brick_gaps = 10;

    var lives = document.getElementById("lives");
    lives.setAttributeNS(null,"x",board_width - 100);
    updateLivesText();

    var score = document.getElementById("score");
    score.setAttributeNS(null,"x", 20);
    updateScoreText();

    var board = document.getElementById("breakout_board");
    board.style.width = board_width;
    board.style.height = board_height;

    var paddle = document.getElementById("paddle");
    paddle.style.x = paddleX;
    paddle.style.y = board_height - paddle_height - 2;
    paddle.style.width = paddle_width;
    paddle.style.height = paddle_height;

    var ball = document.getElementById("ball");

    ball.style.r = ball_radius;



    document.addEventListener("keydown", keyDownHandler, false);
    document.addEventListener("keyup", keyUpHandler, false);
    document.addEventListener("mousemove", mouseMoveHandler, false);
    startLife();

    var svgns = "http://www.w3.org/2000/svg";

    var brick_data = createBrickRows();

    function brick_collision(){
      var ball_top = ballCY -  ball_radius / 2;
      var ball_left = ballCX - ball_radius / 2;
      var ball_right = ballCX + ball_radius / 2;
      var ball_bottom = ballCY + ball_radius / 2;
      for(var i = 0; i < brick_data.length; i++){
        if(brick_data[i]['status'] == 'alive'){
          //hit bottom
          if (
              ((ball_top <= brick_data[i]['bottom'] && ball_top >= brick_data[i]['top'] ) ||
              (ball_bottom <= brick_data[i]['top'] && ball_bottom >= brick_data[i]['bottom'] )
             ) &&
              (ball_left <= brick_data[i]['right'] && ball_right >= brick_data[i]['left'])
          ){
          brick_data[i]['rect'].setAttributeNS(null, 'visibility', 'hidden');
          brick_data[i]['status'] = 'destroyed';
          score_value = score_value + 100;
          updateScoreText();
          dy = -dy;
          if (score_value >= (brick_data + 20) * 100){
            alert('You Win!!!');
          }
          // clearInterval(repeatingInterval);
        }
        }
        // console.log(brick_data[i]['id']);
      }
    }

    function createBrickRows(){
      var brick_data = [];
      var num_columns = Math.floor(board_width / (brick_width + brick_gaps));
      var centering_offset = Math.floor((board_width - (num_columns * (brick_width + brick_gaps))) / 2);
      var id_number = 1;
      for (var row_num = 0; row_num < 3; row_num++){
        var y_coord = 50 + row_num * (brick_height + brick_gaps);
      for (var col_num = 0; col_num < num_columns; col_num++){
        var x_coord = col_num * brick_width + (col_num + 1) * brick_gaps + centering_offset;
        var freshRect = createBrick(x_coord,y_coord,id_number);
        var freshRectData = {
          id:'brick'+id_number,
          top:y_coord,
          bottom:y_coord+brick_height,
          left:x_coord,
          right:x_coord+brick_width,
          status:'alive',
          rect: freshRect
        }
        id_number++;
        brick_data.push(freshRectData);

      }
    }
    return brick_data;
    }



    //Returns dimensions
    function createBrick(x,y,id_number){
      var rect = document.createElementNS(svgns, 'rect');
      rect.setAttributeNS(null, 'x', x);
      rect.setAttributeNS(null, 'y', y);
      rect.setAttributeNS(null, 'height', brick_height);
      rect.setAttributeNS(null, 'width', brick_width);
      rect.setAttributeNS(null, 'fill','rgb(255, 0, 0)');
      rect.setAttributeNS(null, 'id','brick'+id_number);
      board.appendChild(rect);
      return rect;
    }

    function startLife(){
      ballCX = board_width / 2 ;
      ballCY = board_height - paddle_height - ball_radius - 5;
      ball.style.cx = ballCX;
      ball.style.cy = ballCY;
      dx = speed;
      dy = -speed;
    }

    function updateLivesText(){
      lives.textContent = "LIVES " + num_lives;
    }
    function updateScoreText(){
      score.textContent = "SCORE " + score_value;
    }

    function keyDownHandler(e) {

      if(e.keyCode == 32) {

          console.log("space");
      }
        if(e.keyCode == 39) {
            rightPressed = true;
        }
        else if(e.keyCode == 37) {
            leftPressed = true;
        }
    }
    function keyUpHandler(e) {
        if(e.keyCode == 39) {
            rightPressed = false;
        }
        else if(e.keyCode == 37) {
            leftPressed = false;
        }
    }


    function mouseMoveHandler(e) {
      //Need to find the x value of
            var relativeX = e.clientX - board.getBoundingClientRect().left;
            // console.log(e.clientX);
            if(relativeX > 0 && relativeX < board_width) {
                paddleX = relativeX - paddle_width/2;
            }
        }

    function positionPaddle(){
      paddle.style.x = paddleX;
    }

    function positionBall(){
      ball.style.cx = ballCX;
      ball.style.cy = ballCY;
    }

    function tick(){
      positionPaddle();
      positionBall();
      brick_collision();
      //Ball hit wall
      if(ballCX + dx > board_width - ball_radius || ballCX + dx < ball_radius) {
          dx = -dx;
      }
      //Ball hit ceiling
      if(ballCY + dy < ball_radius) {
          dy = -dy;
      }


      //Ball hit ground?
      if(ballCY + dy > board_height - ball_radius ) {
            num_lives--;
            if(!num_lives){
              ball.style.cx = -100;
              ball.style.cy = -100;
              num_lives = 0;
              updateLivesText();
              alert("GAME OVER");

              document.location.reload();
            }else{
              
              updateLivesText();
              startLife();
            }

      }
      //Ball hit paddle?
      else if((ballCY + dy > board_height - ball_radius - paddle_height) &&
              (ballCX > paddleX && ballCX < paddleX + paddle_width)
      ) {
        dy = -dy;
      }



      if(rightPressed && paddleX < board_width - paddle_width) {
                paddleX += 7;
            }
            else if(leftPressed && paddleX > 0) {
                paddleX -= 7;
            }

    ballCX += dx;
    ballCY += dy;
    }

    var repeatingInterval = setInterval(function () {
      tick();
    }, 10);

</script>




</body>
</html>