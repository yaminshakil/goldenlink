    <div class="course-start-time-area pd">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-md-offset-1 text-center">
                  <div class="course-start-timing">
                     <div class="course-start-text">
                        <h2>get our new courses  </h2>
                        <h5>computer programming</h5>
                        <p>Has Been Comming Soon , Hurry Up Sing in Before</p>
                     </div>
                     <div class="timer" id="countdown"></div>
                     <p>Claritas est etiam processus dynamicus qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica quam nunc putamus parum quar</p>
                  </div>
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