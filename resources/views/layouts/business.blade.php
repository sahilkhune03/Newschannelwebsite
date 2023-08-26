@include('layouts.header')

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mahabodhhi Channel- Travel</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="https://mahabodhichannel.com/front/assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="https://mahabodhichannel.com/front/assets/vendors/aos/dist/aos.css/aos.css" />
    <link
      rel="stylesheet"
      href="https://mahabodhichannel.com/front/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://mahabodhichannel.com/front/assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="https://mahabodhichannel.com/front/assets/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="https://mahabodhichannel.com/front/assets/css/style.css">
    <!-- endinject -->
    <script src="https://kit.fontawesome.com/f5eaa6dac9.js" crossorigin="anonymous"></script>    <style>
#more {display: none;}
</style>
     <style>
         @media (max-width: 999px) {
             .navbar-close {
               background: rgb(0 123 255 / 64%);
                border: none;
                position: fixed;
                right: 20px;
                top: 20px;
                display: none;
                font-size: 20px;
              }
         }
        .social-media li a:hover{
           
            background-color: red;
           
            color: #ffffff;
        } 
        .social-media li a{
           padding: 21px 10px 10px;
        } 
        .social-media li a i {
         font-size: 30px;
        }
        .navbar-bottom-menu .navbar-nav .nav-item .nav-link:hover{
          color: red;  
        }
     </style>
    <!-- endinject -->
  </head>

  <body>



  <div class="container-scroller">
  <div class="main-panel">
        
    <div class="container">
      <div class="world-news">
        <div class="row">
          <div class="col-sm-12">
            <div class="d-flex position-relative  float-left">
              <h3 class="section-title">Business News</h3>
            </div>
          </div>
        </div>
        <div class="row">
             
                        <div class="col-md-3">
             
                <div class="card">
                    <div class="card-header p-0"><div class="position-relative image-hover">
                          <img
                            src="https://mahabodhichannel.com/worldnewsImg/b1.jpg"
                            class=""
                            alt="world-news"
                          style="width: 100%;height: 200px;" />
                          <span class="thumb-title">business</span>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <h5 class="font-weight-600 mt-3">
                            <p class="fs-15 font-weight-normal">The small city of Nagpur is a fascinating place to spend some quiet time in, perennially isolated from all the rush of a metro city.
                                <span id="dots">...</span>
                                <span id="more" data-toggle="modal" data-target="#myModal"> 
                                </span>
                            </p>
                            <a href="" class="font-weight-bold text-primary pt-2"  data-toggle="modal" data-target="#myModal">Read Article</a>
                        </h5>
                    </div> 
                </div>
            </div>
                        <div class="col-md-3">
             
                <div class="card">
                    <div class="card-header p-0"><div class="position-relative image-hover">
                          <img
                            src="https://mahabodhichannel.com/worldnewsImg/ln2.jpg"
                            class=""
                            alt="world-news"
                          style="width: 100%;height: 200px;" />
                          <span class="thumb-title">business</span>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <h5 class="font-weight-600 mt-3">
                            <p class="fs-15 font-weight-normal">The small city of Nagpur is a fascinating place to spend some quiet time in, perennially isolated from all the rush of a metro city.
                                <span id="dots">...</span>
                                <span id="more" data-toggle="modal" data-target="#myModal"> 
                                </span>
                            </p>
                            <a href="" class="font-weight-bold text-primary pt-2"  data-toggle="modal" data-target="#myModal">Read Article</a>
                        </h5>
                    </div> 
                </div>
            </div>
                    </div>
      </div>
    </div>
        
  </div>
</div>
   
  
<div class="modal" id="myModal" >
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
    </div>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Small-jQuery-Number-Counter-Plugin-with-Easing-Effects-counter-js/js/counter.min.js"></script>
<script type="text/javascript">
  
  $(window).on('load', function(){
  var counterUp =
    $('.counter-list .count').each(function(){
    var countNum = $(this).attr('data-count');
    var view = $(this).find('.show-count');
    $(view).counter({
        autoStart: true,
        duration: 1000,
        countTo: countNum,
        placeholder: 0,
        easing: "easeOutCubic"
    });
  });
  
});
</script>
<script type="text/javascript">
	
</script>
 <script src="https://kit.fontawesome.com/f5eaa6dac9.js" crossorigin="anonymous"></script>
<!-- inject:js -->
    <!-- <script src="assets/vendors/js/vendor.bundle.base.js"></script> -->
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="https://mahabodhichannel.com/front/assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="https://mahabodhichannel.com/front/assets/js/demo.js"></script>
    <script src="https://mahabodhichannel.com/front/assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
    <!-- inject:js -->
     <script src="https://mahabodhichannel.com/front/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="https://mahabodhichannel.com/front/assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
     <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>


</body>
</html>
@include('layouts.footer')
