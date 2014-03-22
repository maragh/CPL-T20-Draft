<?php
session_start();
require 'config/connect.php';
require 'functions/function.php';

if(isset($_GET['page'])){
 echo $round = $_GET['page'];
}
// $round = RoundsBySalary($connection);
// while($row = mysqli_Fetch_assoc($round)){
// 	echo $row['Category'];
// }
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>CPL T20 | DRAFT</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/app.css" />
	<link rel="stylesheet" href="foundation-icons.css">
    <script src="js/kev.js"></script>  
    <script src="js/vendor/modernizr.js"></script>
    
         <style>
        
        #bottom_bar ul
        {
        list-style:none;
        }
        
        #bottom_bar ul li
        {
        float:left;
        }
        
        #bottom_bar img
        {
        height: 100px;
        margin-top:20px;
        margin-left:46px;
        }
        </style>
    
    
            <script type="text/javascript">
                window.onload = function() {
  var div=$('#top_bar');
div.animate({top:'-5px'},"slow");
var div=$('#bottom_bar');
    div.animate({bottom:'0px',opacity:'1'},"slow");
};
</script>
   
    
  </head>
  <body>
      
      <!-- Top Bar -->	
	<div style="position:fixed;background:;width:100%;height:140px;top:0px;z-index:2;">
		<div id="top_bar" style="background:url(./img/top_bar.png);height:150px;width:1000px;position:relative;margin-left:auto;margin-right:auto;top:-200px;">
		<div style="color:#271b3f;font-size:40px;margin-left:150px;margin-top:40px;position:absolute;"><a href="index.php" class="button radius"style="top:-5px; position:relative;">HOME</a><b>Round <?php echo $round;?> </b></div>
		</div>
	</div>	

<!--	  <div class="row">
	  	<div class="large-12 large-centered header columns">
	  		<h1>Round 2</h1>
	  	</div>
	  </div>-->
	  <div class="row">
	  	<div class="large-12 large-centered center columns">
			
			
			
			
	  		<ul class="inline-list custom-list" >
				
				<?php
					
				$player = PlayerBySalary($connection, $round);
				while($player_row = mysqli_fetch_assoc($player)){
					echo '<li data-scroll-reveal="enter from left but wait 0.7s"><a href="#" data-reveal-id="myPlayer'.$player_row['id'].'" data-reveal>
						 <div class="row">
							<div class="player-img"><img class="test" src="./img/players/'.$player_row['Player_Image'].'"></div>
							<div class="player-info text-left">
							<span>'.strtoupper($player_row['Firstname']). ' ' .strtoupper($player_row['Lastname']).'</span><br/>
							<span>Nationality: '.$player_row['Country'].'</span><br/>
							<span>Current age: '.$player_row['Age'].'</span><br/>
							<span>Player role: '.$player_row['Position'].'</span>
							</div>
					     </div>
						 </a></li>';
				}
				?>
				
	  		</ul>
			
			<!-- MODAL PLACEHOLDER BEGINS HERE -->
	  	    <div class="reveal-modal-bg" style="display: none"></div>
			
			<?php
			$modal = PlayerBySalary($connection, $round);
			while($modal_view = mysqli_fetch_assoc($modal)){
				echo    '<div id="myPlayer'.$modal_view['id'].'" class="reveal-modal medium" style="display:" data-reveal>
  				  		<h2>'.$modal_view['Firstname']. '  ' .$modal_view['Lastname'].' </h2>
  			  			<p class="lead">Your couch.  It is mine.</p>
  					  	<p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
  					  	<a class="close-reveal-modal">&#215;</a>
						</div>';
			}
			?>
			<!-- MODAL PLACEHOLDER ENDS HERE -->
			
			
	  	</div>
	  </div>
<!--Bottom bar Container--> 
    <div id="bottom_bar_container" style="position:fixed;background:;width:100%;height:137px;bottom:-1px;">
        <div id="bottom_bar" style="background:url(./images/bottom_bar.png);width:1000px;height:137px;opacity:0;position:relative;margin-left:auto;margin-right:auto;bottom:-100px;">
            <ul>
                <li> <img src="./images/antig_thumb.png"> </li>
                <li> <img src="./images/tride_thumb.png"> </li>
                <li> <img src="./images/amaz_thumb.png"> </li>
                <li> <img src="./images/tallawah_thumb.png"> </li>
                <li> <img src="./images/zouk_thumb.png"> </li>
                <li> <img src="./images/steel_thumb.png"> </li>
            </ul>
        </div>  
    </div>

 <div id="myPlayer" class="reveal-modal medium" data-reveal>
  <h2>Samuls</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
  <a class="close-reveal-modal">&#215;</a>
</div>
    <script src="js/scrollReveal.min.js"></script> 
    <script type="text/javascript">
      (function($) {

        'use strict';

        window.scrollReveal = new scrollReveal({reset: true});

        // See: http://stackoverflow.com/a/11381730/989439
        var isMobile = (function () {
            var check = false;
            (function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
        })();

        // This function returns the appropriate CSS-transition end event name
        // to the transitionEnd variable. e.g usage: $(el).on('transitionEnd', func(e));
        var transitionEnd = (function () {
            var t;
            var el = document.createElement('fakeelement');
            var config = {
                viewportFactor:0.88
            };
            
            var transitions = {
              'transition':'transitionend',
              'OTransition':'oTransitionEnd',
              'MozTransition':'transitionend',
              'WebkitTransition':'webkitTransitionEnd'
            }

            for(t in transitions){
                if( el.style[t] !== undefined ){
                    return transitions[t];
                }
            }
        })();

        // Just for fun, let�s log out the results above.
        console.log("Is the current device mobile? " + isMobile + "\n"
          + "CSS transitions end-event name: " + transitionEnd);

      })();
      </script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
	<script src="js/custom.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
