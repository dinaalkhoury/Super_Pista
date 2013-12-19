	 $(function(){
	  var timerId = 0;
		
		$('#photoShow').mouseover(function(){
		timerId = setInterval("rotateImages()", 1500);
		});

		$('#photoShow').mouseout(function(){
		clearInterval(timerId);
		});
	 });
		
         function rotateImages() {
            var oCurPhoto = $('#photoShow div.current');
            var oNxtPhoto = oCurPhoto.next(); 
            if (oNxtPhoto.length == 0)
                oNxtPhoto = $('#photoShow div:first');
	
            oCurPhoto.removeClass('current').addClass('previous');
            oNxtPhoto.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 250,
                function() {
                    oCurPhoto.removeClass('previous');
                });
        }