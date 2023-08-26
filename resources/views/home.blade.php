@extends('layouts.main')
@section('main-section')
<main class="container-fluid">
        <div class="row gx-3 gy-2">
        <h3>Advertisement</h3>
            <div class="col-xxl-2  d-xxl-flex d-none">
                <img class="w-100 align-self-start"  width=100% src="{{asset('asset/images/1.png')}}" alt="ad">
            </div>
           
            

                <br>
                    
                    <div class="col-xxl-9">
                        <centre>
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                                <li data-target="#demo" data-slide-to="3"></li>
                            </ul>
                            <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('asset\images\samratasok.PNG')}}" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="{{asset('asset\images\banner\a1.jpg')}}" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="{{asset('asset\images\banner\a2.jpg')}}" class="d-block w-100" >
    </div>
 
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          
            </section>               
        <br>
          
            <div class="col-md-12 col-12 d-flex align-items-center p-0">
                <div class="recentSection row mx-3">
                    <div class="eachItem dashedBelow col-lg-4 col-md-3 p-1 g-2">
                    <video width="100%" height="250px"autoplay loop muted  style="background-color:black;">
                                       <source src="{{asset('asset\video\v1.mp4')}}" type="video/mp4">
                                         
                                      </video>
                    </div>
                    <div class="eachItem dashedBelow col-lg-4 col-md-3 p-1 g-2">
                    <video width="100%" height="250px" autoplay loop muted  style="background-color:black;">
    <source src="{{asset('asset\video\v2.mp4')}}" type="video/ogg">
</video>

</video>

                            
                        
                    </div>
                    <div class="eachItem dashedBelow col-lg-4 col-md-3 p-1 g-2">
                    <video width="100%" height="250px"autoplay loop muted   style="background-color:black;">
                                         
                                          <source src="{{asset('asset\video\v3.mp4')}}" type="video/ogg">
                                      </video>
             

</div>
                  <br>
                    <h3 class="header">ताजा खबरें</h3>
                    <a class="viewMoreBtn" href="#"><span>View
            More</span></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <center><h3>You can watch Live! </h3></center>
            <iframe id="crnt_vidplaying" class="crnt_playing" src="https://mbcworld.livebox.co.in/livebox/player/?chnl=mbc" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay
                        videotitle="You Can Watch Live Mahabodhi Channel." videothumbnail="" videoid="7Xy-RJUo0ls"></iframe>

                </div>
              
        <div style="bgcolor:black">
        <div class="col add my-3 text-center" style="height: 90%;width: 100%;">

                                            <h3>Advertisement</h3>
                                            <img src="{{asset('asset/images/2.png')}}">
                                        </div>
                    </div>
        
                            <!--world news-->
                            <div class="world-news">
                                <div class="row">
                                    <div class="col-sm-12 mr-0 pr-0">
                                        <div class="d-flex position-relative  float-left">
                                        <h3 class="header">World News</h3>
                                        <br>
                                        <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3 mr-0 pr-0">

                                        <div class="card">
                                            <div class="card-header p-0">
                                                <div class="position-relative image-hover">
                                                    <img src="https://mahabodhichannel.com/worldnewsImg/news3.jpg" class="" alt="world-news" style="width: 100%;height: 200px;" />
                                                    <span class="thumb-title"><a href="https://mahabodhichannel.com/news" class="text-white">news</a></span>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <h5 class="font-weight-600 mt-3">
                                                    The small city of Nagpur is a fascinating place to spend some quiet time in, perennially isolated from all the rush of a metro city.
                                                </h5>
                                                <!--<a href="#" class="font-weight-bold text-dark pt-2"-->
                                                <!--  >Read Article</a>-->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mr-0 pr-0">

                                        <div class="card">
                                            <div class="card-header p-0">
                                                <div class="position-relative image-hover">
                                                    <img src="https://mahabodhichannel.com/worldnewsImg/t2.jpg" class="" alt="world-news" style="width: 100%;height: 200px;" />
                                                    <span class="thumb-title"><a href="https://mahabodhichannel.com/travel" class="text-white">travel</a></span>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <h5 class="font-weight-600 mt-3">
                                                    The small city of Nagpur is a fascinating place to spend some quiet time in, perennially isolated from all the rush of a metro city.
                                                </h5>
                                                <!--<a href="#" class="font-weight-bold text-dark pt-2"-->
                                                <!--  >Read Article</a>-->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mr-0 pr-0">

                                        <div class="card">
                                            <div class="card-header p-0">
                                                <div class="position-relative image-hover">
                                                    <img src="https://mahabodhichannel.com/worldnewsImg/a1.jpeg" class="" alt="world-news" style="width: 100%;height: 200px;" />
                                                    <span class="thumb-title"><a href="https://mahabodhichannel.com/culture" class="text-white">culture</a></span>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <h5 class="font-weight-600 mt-3">
                                                    Social Justice Is Now the Fourth Purpose of Public Schools and All Four Are in Conflict
                                                </h5>
                                                <!--<a href="#" class="font-weight-bold text-dark pt-2"-->
                                                <!--  >Read Article</a>-->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mr-0 pr-0">

                                        <div class="card">
                                            <div class="card-header p-0">
                                                <div class="position-relative image-hover">
                                                    <img src="https://mahabodhichannel.com/worldnewsImg/b1.jpg" class="" alt="world-news" style="width: 100%;height: 200px;" />
                                                    <span class="thumb-title"><a href="https://mahabodhichannel.com/business" class="text-white">business</a></span>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <h5 class="font-weight-600 mt-3">
                                                    The small city of Nagpur is a fascinating place to spend some quiet time in, perennially isolated from all the rush of a metro city.
                                                </h5>
                                                <!--<a href="#" class="font-weight-bold text-dark pt-2"-->
                                                <!--  >Read Article</a>-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--world news end-->
                            <div class="col my-3">


                            </div>


        <script>
            $(document).on('click', '.subHead span', (e) => {
                const getId = e.target.getAttribute("dataId");
                const getName = e.target.getAttribute("dataName");
                $(`.container .eachLocContainer`).removeClass('activeContainer');
                $(`.subHead .activeContainerToggle`).removeClass('activeContainerToggle');
                $(`.container .eachLocContainer[dataId=${getId}]`).addClass('activeContainer');
                $(`.subHead span[dataId=${getId}]`).addClass('activeContainerToggle');
                $(`.viewMoreBtn.dynamic`).attr('href', `${location.origin}/view-more/${getName}`);
            })
            $(document).on('click', '.head span', (e) => {
                const getId = e.target.getAttribute("dataId");
                $(`.container .eachLocContainer`).removeClass('activeContainer');
                $(`.subHead .activeContainerToggle`).removeClass('activeContainerToggle');
                $(`.head span`).removeClass('activeHead');
                if (getId == "Vidharbha") {
                    $(`.subHead`).addClass('active');
                    $(`.head span[dataId=Vidharbha`).addClass('activeHead');
                    $(`.subHead span[dataId=1]`).addClass('activeContainerToggle');
                    $(`.container .eachLocContainer[dataId=1]`).addClass('activeContainer');
                    $(`.viewMoreBtn.dynamic`).attr('href', `${location.origin}/view-more/Nagpur`);
                }
                if (getId == "Maharashtra") {
                    $(`.subHead`).removeClass('active');
                    $(`.head span[dataId=Maharashtra`).addClass('activeHead');
                    $(`.container .eachLocContainer[dataId=Maharashtra]`).addClass('activeContainer');
                    $(`.viewMoreBtn.dynamic`).attr('href', `${location.origin}/view-more/Maharashtra`);
                }
            })
        </script>

    </main>



@endsection
