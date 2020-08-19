<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">



<!-- To connect with public folder -->
  <base href="/public">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



<!-- home Script -->



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
<body class="hold-transition sidebar-mini layout-fixed">


@include('admin.sidebar')



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>popular course</h1>
         
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
           <div class="w3-container">
  
<!-- popular couser start here -->

 <div class="populer-courses courses-bg overlay-black pd-top-100 pd-bottom-70">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <h2 class="section-title white-title">populer courses</h2>
               </div>
            </div>
            <div class="row">
               <div class="courses-wrapper nav-control">


                  @foreach($popularcourses as $popularcourse)

                  <div class="col-md-10">
                     <div class="courses-box-item">
                        <div class="course-bg ">
                           <div>

                              <img src="popularcourse/coverimages/{{$popularcourse->coverimage}}"/>

                           </div>
                           
                           <div class="course-title">
                              <h4>{{$popularcourse->title}}</h4>
                              
                           </div>
                           <div class="course-teach-img">
                              <img src="popularcourse/profileimages/{{$popularcourse->profileimage}}" alt="">
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
                            <button  data-toggle="modal" data-target="#AppointmentModal">Add</button>
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


<!-- test -->
<div class="modal fade" id="AppointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"> ADD POPULAR COURSE</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('admin.add.popularcourse')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="modal-body mx-3">
        <div class="md-form mb-3">

          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form34">Title</label>
          <input type="text" id="form34" name="title" class="form-control validate">
          
        </div>

        <div class="md-form mb-3">
          
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form34">Subtitle</label>
          <input type="text" id="form34" name="subtitle" class="form-control validate">
          
        </div>


        <div class="md-form">

          <i class="fas fa-pencil prefix grey-text"></i>
           <label data-error="wrong" data-success="right" for="form8">Description</label>
          <textarea type="text" id="form8" name="description" class="md-textarea form-control" rows="3"></textarea>
         
        </div>

        <div class="md-form mb-3">
          
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form34">Total seat</label>
          <input type="number" id="form34" name="seat" class="form-control validate">
          
        </div>


        <div class="md-form mb-3">
          
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form34">Cover Image</label>
          <input type="file" name="coverimage" id="form34" >
          
        </div>



        <div class="md-form mb-3">
          
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form34">Profile Imaget</label>
          <input type="file" name="profileimage" id="form34" >
          
        </div>

        

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <!-- <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button> -->
         <p class="text-center"><input type="submit" value="Book An Appointment"></p>
      </div>
    </div>
  </div>
</div>
</form>




<!--   popular course start here -->

            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>







 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

  
<!-- ./wrapper -->

<!-- jQuery -->

@include('admin.home.script');

</body>
</html>
