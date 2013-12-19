 $(function(){
	  var timerId = 0;
		
		$('#photoShow2').mouseover(function(){
		timerId = setInterval("rotateImages2()", 1500);
		});

		$('#photoShow2').mouseout(function(){
		clearInterval(timerId);
		});
	 });
		
         function rotateImages2() {
            var oCurPhoto = $('#photoShow2 div.current');
            var oNxtPhoto = oCurPhoto.next(); 
            if (oNxtPhoto.length == 0)
                oNxtPhoto = $('#photoShow2 div:first');
	
            oCurPhoto.removeClass('current').addClass('previous');
            oNxtPhoto.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 0,
                function() {
                    oCurPhoto.removeClass('previous');
                });
        }

		