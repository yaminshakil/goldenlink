

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Title -->
      <title>Golden Study Link - Global Education</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Font Awesome CSS-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!-- Owl Carousel CSS-->
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <!-- Nice Select CSS -->
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <!-- Slicknav CSS -->
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <!-- Magnific Popup CSS -->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <!-- Progress CSS -->
      <link rel="stylesheet" href="assets/css/custom-progress.css">
      <!-- Main CSS -->
      <link rel="stylesheet" href="style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
      <!-- Preloader CSS Start -->


      <!-- header part start here -->

     


<!-- Show sucess message for homepage -->

   @include('message.success_message')




@include('message.validation')<!-- this line will show validation errors -->




      @include('home.header')



      <!-- header part end here -->
      
<!-- Searched course section start here -->


  
         <div class="slider-item overlay-black slider-bg-4">
            <div class="slider-item-table">
               <div class="slider-item-tablecell">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-5">
                           <div class="slider-text">
                              <h3>welcome to</h3>
                              <h1>Golden Study Link</h1>
                              <p>A way you can find your dream study career. </p>
                              <a href="" class="study-plus-btn slide-btn">Read more</a>
                           </div>
                        </div>
                        <div class="col-md-4 col-md-offset-3">
                           <div class="search-box">
                              <h3>Search your course</h3>

                              <p>Fill the fileds to find your course</p>

                              <form action="{{route('searchedcourse')}}" method="POST">

                                 @csrf

                                 <p><input class="form-control" type="text" name="name" placeholder=" Name" ></p>
                  <p><input type="text"  class="form-control"  name="email" placeholder="Enter Email" ></p>
                                 <p>
                                    <select name="course" class="active-select" placeholder="Enter course name"  >
                                      <option value="">Select a Subject</option>
                                       <option value="BBA">BBA</option>
                                       <option value="CSE">CSE</option>
                                       <option value="EEE">EEE</option>
                                    </select>
                                 </p>
                                 <p>
                                    <select name="country" class="active-select" placeholder="Enter country name" >
                                       <option value="">Select Your Country</option>
                                        <option value="Malaysia">Malaysia</option>
                                         <option value="china">China</option>
                                         <option value="canada">China</option>
                                        
                                    </select>
                                 </p>
                                 <p class="text-center"><input type="submit" value="Send"></p>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Slider Area End -->



    <!--   Search couse section end here -->


      <!-- Why Choose Us Area Start -->

         @yield('why_choose_us')

       <!-- Why Choose Us Area nd -->



      
      <!-- Populer Courses Area Start -->



      @include('homebody.popular_course')

     
      <!-- Populer Courses Area End -->



      <!-- Courses Start Time Area Start -->


      @include('homebody.appointment')
  
      <!-- Courses Start Time Area End -->




      <!-- Achievements Area Start -->


      @include('homebody.achievements')

      
      <!-- Achievements Area End -->




      <!-- Lecturera Area Start -->


      @include('homebody.lecturer')


    
      <!-- Lecturera Area End -->



      <!-- Blog Area Start -->



      @include('homebody.blog')

     
      <!-- Blog Area End -->



      <!-- Partners Area Start -->


      @include('homebody.partners')


    
      <!-- Partners Area End -->

     <!--  footer area start here -->

      @include('home.footer')


     <!--  footer area end here -->




      <!--jquery JS -->
      @include('home.script');
   </body>
</html>

