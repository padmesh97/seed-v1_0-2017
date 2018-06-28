window.onscroll = function() {scrollFunction()};
var a=0;var bb=0;

function scrollFunction()
{
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop>500)
        {
        document.getElementById("btn_up").style.display = "block";
    	}
     else
        document.getElementById("btn_up").style.display = "none";

   	 if ((document.body.scrollTop > 140 ||document.documentElement.scrollTop>140) && a==0)
        {
        document.getElementById("lu_heading").style.display = "block";
    	document.getElementById("lu_heading").className="ud2 trans3";
    	a++;
    	}
    if ((document.body.scrollTop > 440 || document.documentElement.scrollTop>440) && a==1)
        {
        document.getElementById("lu1").style.display = "block";
    	document.getElementById("lu1").className="live_up_text trans4 live_up_gradient";
    	document.getElementById("lu2").style.display = "block";
    	document.getElementById("lu2").className="live_up_text trans4 live_up_gradient";
    	document.getElementById("lu3").style.display = "block";
    	document.getElementById("lu3").className="live_up_text trans5 live_up_gradient";
    	document.getElementById("lu4").style.display = "block";
    	document.getElementById("lu4").className="live_up_text trans5 live_up_gradient";
    	a++;
    	}
     if ((document.body.scrollTop > 1010 ||document.documentElement.scrollTop>1010 )&& a==2)
        {
        document.getElementById("about_heading").style.display = "block";
    	document.getElementById("about_heading").className="star2 trans3";
    	a++;
    	}
    if ((document.body.scrollTop > 1810 || document.documentElement.scrollTop>1810)&& a==3)
        {
        document.getElementById("gallery_heading").style.display = "block";
    	document.getElementById("gallery_heading").className="camera2 trans3";
    	a++;
    	}
    if ((document.body.scrollTop > 2410 || document.documentElement.scrollTop>2410) && a==4)
        {
        document.getElementById("contact_heading").style.display = "block";
    	document.getElementById("contact_heading").className="phone2 trans3";
    	a++;
    	}
      if(screen.height>screen.width)
      {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop>50)
        {
        document.getElementById("btn_up").style.display = "block";
        }
        else
        document.getElementById("btn_up").style.display = "none";
        if(bb==0)
        {
         document.getElementById("lu_heading").style.display = "block";
         document.getElementById("lu_heading").className="ud2 trans3";
          document.getElementById("lu1").style.display = "block";
          document.getElementById("lu1").className="live_up_text trans4";
         document.getElementById("lu2").style.display = "block";
          document.getElementById("lu2").className="live_up_text trans4";
        document.getElementById("lu3").style.display = "block";
        document.getElementById("lu3").className="live_up_text trans5";
        document.getElementById("lu4").style.display = "block";
        document.getElementById("lu4").className="live_up_text trans5";
        document.getElementById("about_heading").style.display = "block";
         document.getElementById("about_heading").className="star2 trans3";
         document.getElementById("gallery_heading").style.display = "block";
      document.getElementById("gallery_heading").className="camera2 trans3";
      document.getElementById("contact_heading").style.display = "block";
      document.getElementById("contact_heading").className="phone2 trans3";
      bb++;
        }

    }
}


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});