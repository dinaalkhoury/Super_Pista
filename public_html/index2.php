<?php
include 'core/init.php';
include 'includes/overall/header2.php'; 
?>

<script src="scripts/jquery-1.6.min.js" type="text/javascript"></script>
<script src="scripts/jquery.cycle.all.js" type="text/javascript"></script>
<style type="text/css">
/* BeginOAWidget_Instance_2559022: #slideshow */
		
/* EndOAWidget_Instance_2559022 */
</style>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2559022" binding="#slideshow" />
</oa:widgets>
-->
</script>    
					
					<script type="text/javascript">				  
                    // BeginOAWidget_Instance_2559022: #slideshow
                    
                                slideshowAddCaption=true;
                    $(document).ready(function() {
                        $('#slideshow').cycle({
                            after:			slideshowOnCycleAfter, //the function that is triggered after each transition
                            autostop:			false,     // true to end slideshow after X transitions (where X == slide count) 
                            fx:				'uncover,',// name of transition effect 
                            pause:			false,     // true to enable pause on hover 
                            randomizeEffects:	false,  // valid when multiple effects are used; true to make the effect sequence random 
                            speed:			1000,  // speed of the transition (any valid fx speed value) 
                            sync:			true,     // true if in/out transitions should occur simultaneously 
                            timeout:		3000,  // milliseconds between slide transitions (0 to disable auto advance) 
                            fit:			true,
                            height:		   '400px',
                            width:         '100%'   // container width (if the 'fit' option is true, the slides will be set to this width as well) 
                        });
                    }); 
                    function slideshowOnCycleAfter() { 
                        if (slideshowAddCaption==true){
                                $('#slideshow-caption').html(this.title); 
                        }
                    } 
                            
                    // EndOAWidget_Instance_2559022
                  </script>               
                  
              


<div id="contents">
	
</div>
<div id="contented">What goes here? Maybe links to social media and videos, blog posts or ads?</div>
			
              
<div id="column1">
<h1>Pay what you want pricing</h1><p>After the session you decide how much to pay based on the service you recieved. No packages or contracts. That way you will allways get 100% of what you pay for!</p><br />

	<div id="paypal"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="P6DDF4JQGE3ZA">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay 		   		online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
	</div>
    
</div>

<div id="column2">
	<iframe width="100%" height="300" src="http://www.youtube.com/embed/HLFv2P5_tLk" frameborder="0" allowfullscreen></iframe>
</div>

<div id="column3">
    <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=		  		       
    "https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=34.031465,-118.473133&amp;hl=en&amp;geocode=&amp;sll=34.031145,-118.4727&amp;sspn=0.011683,0.020878&amp;mra=mift&amp;mrsp=1&amp;sz
    =16&amp;ie=UTF8&amp;t=m&amp;ll=34.031145,-118.4727&amp;spn=0.01067,0.014763&amp;z=15&amp;output=embed"></iframe><br />
    <small>
    <a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=&amp;daddr=34.031465,-118.473133&amp;hl=en&amp;geocode=&amp;sll=34.031145,-118.4727&amp;sspn=0.011683,0.020878&amp;mra=mift&amp;mrsp=1&amp;
    sz=16&amp;ie=UTF8&amp;t=m&amp;ll=34.031145,-118.4727&amp;spn=0.01067,0.014763&amp;z=15" style="color:#0000FF;text-align:left">View Larger Map</a>
    </small>
</div>
               
<div class="clear"></div>
<?php include 'includes/overall/footer.php'; ?>


