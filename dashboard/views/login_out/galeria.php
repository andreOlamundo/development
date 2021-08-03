    <head>
     <link rel="stylesheet" type="text/css" href="dashboard/album.css"> 
    <script src="js/lightbox-2.6.min.js"></script>
        </head>

        
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           <h2>GALERIA DE FOTOS</h2>
            <hr class="featurette-divider">              


   </div>
 </div>
 
    

<div class="row">
<div id='menu' class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

   <ul class="fotos">
      <li><a href="fotos/japao2013/" title="CCXP-2016"><img src="\intranetSDB\images\CCXP2016\Alta\Sanrio - CCXP 2016-23.jpg" alt="" border="0" ></a></li>
      <li><a href="#" title="FESTIVAL JAPÃO"><img src="\intranetSDB\images\CCXP2016\Alta\Sanrio - CCXP 2016-23.jpg" alt="" border="0" ></a></li>
      <li><a href="#" title="DIA DA FAMILIA 2016"><img src="\intranetSDB\images\CCXP2016\Alta\Sanrio - CCXP 2016-23.jpg" alt="" border="0" ></a></li>
      <li><a href="#" title="SHOPPING IBIRAPUERA"><img src="\intranetSDB\images\CCXP2016\Alta\Sanrio - CCXP 2016-23.jpg" alt="" border="0" ></a></li>
      <li><a href="#" title="SP DIVERSÕES 2016"><img src="\intranetSDB\images\CCXP2016\Alta\Sanrio - CCXP 2016-23.jpg" alt="" border="0" ></a></li>
      <li><a href="#" title="SUMMIT 2017"><img src="\intranetSDB\images\CCXP2016\Alta\Sanrio - CCXP 2016-23.jpg" alt="" border="0" ></a></li>
   
</ul>
</div>
</div>
</div>



<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
