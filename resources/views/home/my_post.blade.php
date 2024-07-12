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
      @include('home.homecss')

<style>
    .card {
    width: 350px;
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 10px;
    text-align: center;
    background-color: #f9f9f9;
}

.card img {
    width: 100%;
    height: auto;
    border-radius: 5px 5px 0 0;
}

.card h4 {
    font-size: 18px;
    color: #333;
}

.card p {
    font-size: 14px;
    color: #666;
}

.card .btn_main a {
    display: inline-block;
    padding: 5px 10px;
    margin-top: 10px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.card .btn_main a:hover {
    background-color: #0056b3;
}
</style>

   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.homeheader')

         <!-- banner section start -->
         
         <!-- banner section end -->
      </div>
      @foreach ( $data as $data )
      <div class="col-md-4">
      <div class="card"><img src="/postimage/{{$data->image  }}"  class="services_img" style="width: 350px; height: 200px">
                <h4>
                 {{ $data->title }}
                </h4>
                <p>{{ $data->description }}</p>
                <div class="btn btn-danger"><a href="{{ url('my_post_delete',$data->id) }}">Delete</a></div>
      </div>
    </div>
      @endforeach
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