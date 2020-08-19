@if ($errors->any())
    <div class="alert alert-danger">
     <!--  <span class="close" onclick="this.parentElement.style.display='none';">&times;</span> -->
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif