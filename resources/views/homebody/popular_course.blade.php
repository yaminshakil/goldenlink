 <div class="populer-courses courses-bg overlay-black pd-top-100 pd-bottom-70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2 class="section-title white-title">populer courses</h2>
               </div>
            </div>
            <div class="row">
               <div class="courses-wrapper nav-control">


                  @foreach($popularcourses as $popularcourse)

                  <div class="col-md-4">
                     <div class="courses-box-item">
                        <div class="course-bg ">
                           <div>

                              <img src="{{$popularcourse->coverimage}}"/>

                           </div>
                           
                           <div class="course-title">
                              <h4>{{$popularcourse->title}}</h4>
                              
                           </div>
                           <div class="course-teach-img">
                              <img src="{{$popularcourse->profileimage}}" alt="">
                           </div>
                        </div>
                        <div class="course-desc">
                           <h4>{{$popularcourse->subtitle}}</h4>
                           <p>{{$popularcourse->description}}</p>
                           <div class="course-rating">
                              <ul>
                                
                                 <li class="seat"><i class="fa fa-users"></i> {{$popularcourse->seat}}</li>
                              </ul>
                             
                           </div>
                        </div>
                     </div>
                  </div>
              

                  @endforeach
              <!-- Test START HERE -->





             <!--  TEST END HERE -->




               </div>
            </div>
         </div>
      </div>