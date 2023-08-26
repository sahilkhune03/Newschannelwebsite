@include('layouts.header')

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mahabodhhi Channel- Membership Form</title>
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
    <script src="https://kit.fontawesome.com/f5eaa6dac9.js" crossorigin="anonymous"></script>
    <style>
      #more {display: none;}
      .form-control {
        height: auto;
      }
    </style>
    <style type="text/css">
      .reveal-if-active {
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        font-size: 16px;
        transform: scale(0.8);
        transition: 0.5s;
      }
      .reveal-if-active label {
        margin: 0 0 3px 0;
      }
      .reveal-if-active input[type=text] {
        width: 100%;
      }
      input[type="radio"]:checked ~ .reveal-if-active, input[type="checkbox"]:checked ~ .reveal-if-active {
        opacity: 1;
        max-height: 100px;
        overflow: visible;
      }
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
      .social-media li a {
        padding: 21px 10px 10px;
      } 
      .social-media li a i {
        font-size: 30px;
      }
      .navbar-bottom-menu .navbar-nav .nav-item .nav-link:hover {
        color: red;  
      }
    </style>
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller" style="background-image: url('{{asset('images/04.png')}}')">
      <!-- Your existing code here -->
      <!-- news section -->
      <div class="container-scroller">
        <div class="main-panel">
          <div class="container">
            <div class="one">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-flex position-relative  float-left">
                    <h3 class="section-title">Membership Pariwar</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 grid-margin mb-5 mb-sm-2 mt-5">
                  <div class="p-3" style="box-shadow: 1px 2px 15px rgb(100 100 100 / 30%);">
                    <form method="post" action="DataInsert" enctype="multipart/form-data" class="mb-5">
                      @csrf
                      <!-- <input type="hidden" name="_token" value="CnqZLTNoT1JdjTPWOolZeArUmIXeGegXVGtVnpob"> -->
                      <div class="row mb-5">
                        <div class="col-md-12 text-center">
                          <h4 class="text-danger">Membership Form:</h4>
                          <p class="text-success">नोट : पारिवारिक विज्ञापन का प्रसारण करने के लिए दो दिन पहले पूरा विवरण दें (अन्यथा विज्ञापन का प्रसारण नहीं होगा )</p>
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-8">
                          <label for="profile">Profile</label><br>
                          <input type="file" class="" id="profile" name="profile">
                        </div>
                        <div class="col-md-4">
                          <label for="date">Date</label><br>
                          <input type="date" class="" id="date" name="date" onchange="setDate()">
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-12">
                          <label for="validity_date">Validity</label><br>
                          <input type="date" class="" id="date2" name="validity_date">
                          <label for="validity">To</label>
                          <input type="text" class="" id="date3" name="to_validity_date" style="width: 149.600px;" placeholder="dd-mm-yyyy" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control  is-invalid " id="name" name="name">
                       
                        </span>
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control " name="address" id="address" placeholder="1234 Main St">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="city">City</label>
                          <input type="text" class="form-control " id="city" name="city">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="state">State</label>
                          <select id="state" name="state" class="form-control ">
                            <option selected>Choose...</option>
                            <option>Maharashtra</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="number">Mobile No.</label>
                          <input type="number" class="form-control " id="number" name="mob">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="email">Email</label><br>
                          <input type="email" class="form-control " id="email" name="email">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="dob">DOB</label><br>
                          <input type="date" class="form-control " id="dob" name="dob">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12 ">
                          <label for="promoter">Promoter</label><br>
                          <input type="text" class="form-control " id="promoter" name="promoter" value="">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="patment" class="mt-3">Payment Mode :</label>
                          <img src="{{asset('asset/images/QR.jpeg')}}" class="img-fluid">
                        </div>
                        <div class="align-self-center col-lg-6 form-group pl-5 py-5">
                          <label for="file">Upload Payment Screenshot or PDF :</label>
                          <input type="file" class="form-control-file " id="file" name="payment">
                        </div>
                      </div>   
                      <button type="submit" class="mb-5 btn btn-primary float-right">Next</button>
                      
                    </form>
                  </div>
                </div>
                <div class="col-md-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal" id="myModal">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here</p>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://www.jqueryscript.net/demo/Small-jQuery-Number-Counter-Plugin-with-Easing-Effects-counter-js/js/counter.min.js"></script>
    <script type="text/javascript">
      $(window).on('load', function(){
        var counterUp = $('.counter-list .count').each(function(){
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
    <script src="https://mahabodhichannel.co  m/front/assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
    <!-- inject:js -->
    <script src="https://mahabodhichannel.com/front/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="https://mahabodhichannel.com/front/assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <script type="text/javascript">
      var FormStuff = {
        init: function() {
          this.applyConditionalRequired();
          this.bindUIActions();
        },
        bindUIActions: function() {
          $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);
        },
        applyConditionalRequired: function() {
          $(".require-if-active").each(function() {
            var el = $(this);
            if ($(el.data("require-pair")).is(":checked")) {
              el.prop("required", true);
            } else {
              el.prop("required", false);
            }
          });
        }
      };
      FormStuff.init();
    </script>
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
    <script>
      function setDate() {
        var input1 = document.getElementById("date");
        var input2 = document.getElementById("date2");
        var input3 = document.getElementById("date3");
      
        var date = new Date(input1.value);
        input2.value = input1.value;
      
        // Add one year to the date
        date.setFullYear(date.getFullYear() + 1);
      
        var year = date.getFullYear();
        var month = String(date.getMonth() + 1).padStart(2, '0');
        var day = String(date.getDate()).padStart(2, '0');
      
        // Format the date as dd-mm-yyyy
        var formattedDate = day + '-' + month + '-' + year;
        input3.value = formattedDate;
      }
    </script>
  </body>
</html>

@include('layouts.footer')
