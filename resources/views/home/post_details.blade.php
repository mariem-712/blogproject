<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>A World</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <base href="/public">
      @include('home.homecss')

      <style>
        .col-md-4 {
            float: none;
    margin: 0 auto;
    width: 50%;
            text-align: center;
    width: 33.33%;
    padding: 15px;
  
}

.services_img {
    width: 100%;
    height: auto;
    padding-top: 50px;
   
   
}

h4 {
    font-size: 30px;
    color: #333;
}

h3 {
    font-size: 25px;
    color: #333;
}

p {
    font-size: 15px;
    color: #666;
}

.btn_main a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}
      </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.homeheader')
         
      </div>
      
      <div  class="col-md-4" >
        <div><img src="postimage/{{ $post->image }}"  class="services_img"></div>
        <h3>
          {{ $post->title }}
        </h3>
        <h4>{{ $post->description }}</h4>
        <p>Post by<b>{{ $post->name }}</b></p>
     </div>
      
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>