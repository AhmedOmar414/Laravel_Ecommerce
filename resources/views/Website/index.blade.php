<!DOCTYPE html>
<html>
{{--   Head--}}
@include('layouts.Website.head')
{{--End Head--}}
   <body>
      <div class="hero_area">
         <!-- header section starts -->
@include('layouts.Website.header')
         <!-- end header section -->
         <!-- slider section -->
@include('layouts.Website.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
@include('layouts.Website.section')
      <!-- end why section -->

      <!-- arrival section -->
@include(('layouts.Website.arival_section'))
      <!-- end arrival section -->
      <!-- product section -->
@include('layouts.Website.products_section')
      <!-- end product section -->

      <!-- subscribe section -->
@include('layouts.Website.subscribe_button')
      <!-- end subscribe section -->
      <!-- client section -->
@include('layouts.Website.clients_opinion')
      <!-- end client section -->
      <!-- footer start -->
@include('layouts.Website.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By Medo<br>
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         </p>
      </div>
      <!-- jQery -->
      <script src="{{url('Website')}}/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="{{url('Website')}}/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="{{url('Website')}}/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="{{url('Website')}}/js/custom.js"></script>
   </body>
</html>
