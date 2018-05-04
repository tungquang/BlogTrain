<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Blog Train</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">Trang Chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/blog')}}">Bloger</a>
            </li>
            <li class="nav-item dropdown" >
              <a href="" class="nav-link">Tin Tức</a>   
             </li>
            <li class="nav-item dropdown" >
              <a href="" class="nav-link">Học Tập</a>    
           </li>
            <li class="nav-item">
              <a href="" class="nav-link" href="">Game</a>
            </li>
             <li class="nav-item">
              <a href="" class="nav-link" href="">Liên kết</a>
            </li>          
            <li class="nav-item">
              <a href="{{url('login')}}" class="nav-link" href="">Đăng Nhập</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>