
<div class="studyplus-preloader-wrapper">
         <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
         </div>
      </div>
      <!-- Preloader CSS End -->
      <!-- Header Top Area Start -->
      <div class="header-top-area">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div  class="header-top-nav">
                     <ul>
                        <li><a href="index.html">Faq</a></li>
                        <li><a href="index.html">Help  & Support</a></li>
                        <li><a href="index.html">Language</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-6 text-right">
                  <div class="social-link">
                     <a href="https://www.facebook.com/goldenstudylink/?ref=bookmarks"><i class="fa fa-facebook"></i></a>
                     <a href="index.html"><i class="fa fa-linkedin"></i></a>
                     <a href="index.html"><i class="fa fa-twitter"></i></a>
                     <a href="index.html"><i class="fa fa-youtube"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Header Top Area End -->
      <!-- Header Area Start -->
      <div class="header-area">
         <div class="container">
            <div class="row">
               <div class="col-sm-4">
                  <div class="logo">
                     <h2><a href="index.html"><img src="assets/img/logo.png" alt=""></a></h2>
                  </div>
               </div>
               <div class="col-sm-8 text-right">
                  <a href="index.html" class="studyplus-contact-box">
                     <i class="fa fa-phone"></i>
                     <p>+880-1708-420440</p>
                     <p>+880-1613-083375</p>
                  </a>
                  <a href="index.html" class="studyplus-contact-box">
                     <i class="fa fa-envelope"></i>
                     <p>info@goldenstudylink.com</p>
                     <p>career@goldenstudylink.com</p>
                  </a>
                  <a href="index.html" class="studyplus-contact-box">
                     <i class="fa fa-location-arrow "></i>
                     <p>Suite:1301 , Sel Trident Tower</p>
                     <p>Naya Paltan, Dhaka - 1213</p>
                  </a>
               </div>
            </div>
            <div class="responsive-menu"></div>
         </div>
      </div>
      <!-- Header Area End -->
      <!-- Mainmenu Area Start -->
      <div class="mainmenu-area">
         <div class="container">
            <div class="row">
               <div class="col-sm-10">
                  <div class="mainmenu">
                     <ul>
                        <li><a href="index.html">home </a></li>
                        <li><a href="about.html">about us</a></li>
                        <li>
                           <a href="index-2.html#">Countries <i class="fa fa-angle-down"></i></a>
                           <ul>
                              <li><a href="courses-grid.html">Malaysia</a></li>
                              <li><a href="courses-list.html">China</a></li>
                              <li><a href="course-details.html">Canada</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="http://srtheme.com/studyplus/E">Events <i class="fa fa-angle-down"></i></a>
                           <ul>
                              <li><a href="event-grid.html">Sheraton-Aug-2019</a></li>
                              <li><a href="event-list.html">Sonargaon-Nov-2018</a></li>
                              <li><a href="event-details.html">Westin-Sep-2017</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="index-2.html#">Top Universities <i class="fa fa-angle-down"></i></a>
                           <ul>
                              <li><a href="blog-grid.html">All Universities</a></li>
                              <li><a href="blog-left-sidebar.html">Student Favourite</a></li>
                              <li><a href="blog-right-sidebar.html">World Ranking 2019</a></li>
                              <li><a href="blog-details.html">Country-Wise</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="index-2.html#">Top Subjects<i class="fa fa-angle-down"></i></a>
                           <ul>
                              <li><a href="teacher.html">World Ranking</a></li>
                              <li><a href="teacher-details.html">University Wises</a></li>
                           </ul>
                        </li>
                                                <li>
                           <a href="index-2.html#">Fees<i class="fa fa-angle-down"></i></a>
                           <ul>
                              <li><a href="teacher.html">University Wise</a></li>
                              <li><a href="teacher-details.html">Subject Wises</a></li>
                           </ul>
                        </li>
                        <li><a href="contact.html">contact us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-2">
                  <!-- <a href="" data-toggle="modal" data-target="AppointmentModal" class="apply-btn">Book An Appointment</a> -->


                  <a href="" class="apply-btn" data-toggle="modal" data-target="#AppointmentModal">Book an Appointment</a>

               </div>
            </div>
         </div>
      </div>






<div class="modal fade" id="AppointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" >
  
 <!--  <div class="modal-dialog" role="document">
    <div class="modal-content"> -->
      
      
        




        <div class="container">
            <div class="row">
               <div class="col-md-4 col-md-offset-1 text-center">
                  
               </div>
               <div class="col-md-5 col-sm-6 col-sm-offset-3 col-md-offset-1">
                  <div class="sign-up-form">

                     <h2>Book an Appointment</h2>
                     <form action="{{route('appointment')}}" method="POST">
                        @csrf
                        <p><input class="form-control" type="text" name="name" placeholder="Your Name" required></p>


                        <p><input class="form-control" type="tel" maxlength="11" name="phone" placeholder="Your Phone" required></p>

    






                        <p><input class="form-control" type="email" name="email" placeholder="Your Email" required></p>
                        <p class="text-center"><input type="submit" value="Book An Appointment"></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>

  
    </div>
  </div>
</div>
