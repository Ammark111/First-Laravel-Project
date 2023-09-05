<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="navigation bg-primary" style=" position: fixed; width:100%; z-index: 10; top: 0;">
<div class="top-nav " style="width: 100%; height: 11vh;">
<div class="container d-flex justify-content-between">
  <div class="logo d-flex">
    <img src="{{ asset('image/logo.png')}}" alt="" class="mt-1 p-2" style="width: 60px; border-radius: 50px;">
    <h6 class="mt-3"> Jersey <br>Collection</h6>
  </div>
  <div class="phone d-flex mt-2">
    <div class="p-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
    </svg>
    </div>
    <div class="number ">
      <h6>0652-757-027</h6>
      <h6>0626-991-077</h6>
    </div>
    
  </div>
  <div class="icon mt-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
      <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
      <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
    </svg>
</div>
</div>

</div>
  <nav class="navbar navbar-expand" style="width: 90%; z-index:12; margin-left: 5vw; background-color: white; box-shadow: 0 5px 10px grey;" >
    <div class="container-fluid">
      <div class="nav-link d-flex ">
        <a href="#" class="p-2">Home</a>
        <a href="#" class="nav-link dropdown-toggle active p-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
         <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">About Us</a></li>
              <li><a class="dropdown-item" href="#">Term $ Condition</a></li>
              <li><a class="dropdown-item" href="#">Braches</a></li>
              <li><a class="dropdown-item" href="#">Transiportation & Delivery</a></li>
              <li><a class="dropdown-item" href="#">Lisence</a></li>
          </ul>
        <a href="#" class="nav-link dropdown-toggle active p-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
        <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">ion</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        <a href="#" class="p-2">Contacy Us</a>
      </div>
      <div class="auth">
        <a href="#" class="nav-link dropdown-toggle active p-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login | Register</a>
        <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">LogIn</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
            </ul>
      </div>
    </div>
  </nav>

</div>
<div class="home" style="
                        width: 100%; height: 100vh; 
                        margin-top: 19.6vh;
                        background-image: url({{ asset('image/bc4.webp')}});
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        text-align: left;">
    <div class="intro" >
        <!-- <h2 style="text-align: rignt; max-width:50%; margin-left: 80px;"><span >Welcome to... <br><b></b><span  style="font-size: 2.1em; color: #0f0a41d3;"><b>Jersey <br>Collection</b></span></h2> -->
    </div>
    <!-- <a href="#" style=" width: 16%; margin-left: 80px;"class="btn btn-primary mt-3">SHOP NOW</a> -->
</div>
<div class="title">
  <h3 style="text-align: center; padding-top: 2em;"><b>-Our Products-</b></h3>
  <h1 style="text-align: center;"><span style=" color: ;"><b>Choose Your Favourite</b></span></h1>
  <hr style=" border: none; height: 2px; background-color: blue; width: 80%; margin-left: 10em;">
</div>
<div class="container">
  <div class="page d-flex justify-content-start flex-wrap">
  @foreach($productz as $prod)
    <div style="width: 15rem; height: 420px; margin: 2em 1em; box-shadow: 3px 1px 10px grey; ">
      <div class="card border">
        <img src="{{asset('image/images (6).jfif')}}" class="card-img-top" alt="..." style="">
        <!-- <hr> -->
          <div class="card-body" style="box-shadow: 0 -1px 5px grey">
            <h5 class="card-title">{{$prod->product_title}}</h5>
            <p class="card-text">{{$prod->description}}</p>
            <div class="price d-flex justify-content-sm-around">
              <h5><s>{{$prod->original_price}}Tsh</s></h5>
              <h3><b>{{$prod->current_price}}Tsh</b></h3>
            </div>
            <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$prod->id}}" data-bs-whatever="@mdo">BUY NOW</a>
          </div>
      </div>   
    </div>
  <div class="modal fade" id="exampleModal{{$prod->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{$prod->product_title}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex">
          <div class="image">
            <img src="{{asset('image/images (6).jfif')}}" class="card-img-top" alt="...">
          </div>
          <form  action="{{route('cart')}}" method="POST">
            @csrf
            <h4>Price<b> {{$prod->current_price}}Tsh</b></h4>
            <div class="input-group mb-3">
              <label class="input-group-text bg-primary" for="inputGroupSelect01"><b>Size:</b></label>
              <select class="form-select" id="inputGroupSelect01" name="size">
                <option selected>Choose Your size</option>
                <option value="S" >S</option>
                <option value="M" >M</option>
                <option value="L" >L</option>
                <option value="XL" >XL</option>
                <option value="XXL" >XXL</option>
              </select>
            </div>
            <div class="mb-3">
              <label  class="form-label"><b>Quantity:</b></label>
              <input type="number"  class="form-control" placeholder=" Product Quantity" name="quantity">
              <input type="text" name="title" value="{{$prod->product_title}}" class="form-control" hidden>
              <input type="text" name="price" value="{{$prod->current_price}}" class="form-control" hidden>
            </div>
            <div class="mb-3">
                <label  class="form-label"><b>Choose color:</b></label><br>
                <input class="form-check-input bg-primary" type="radio" name="color" value="Blue" id="flexCheckDefault" style="width: 50px; height:50px;">
                <input class="form-check-input bg-secondary" type="radio" name="color" value="Grey" id="flexCheckDefault" style="width: 50px; height:50px;">
                <input class="form-check-input bg-success" type="radio" name="color" value="Green" id="flexCheckDefault" style="width: 50px; height:50px;">
                <input class="form-check-input bg-light" type="radio" name="color" value="White" id="flexCheckDefault" style="width: 50px; height:50px;">
                <input class="form-check-input bg-warning" type="radio" name="color" value="Yellow" id="flexCheckDefault" style="width: 50px; height:50px;">
                <input class="form-check-input bg-dark" type="radio" name="color" value="Black" id="flexCheckDefault" style="width: 50px; height:50px;">
                <input class="form-check-input bg-danger" type="radio" name="color" value="Red" id="flexCheckDefault" style="width: 50px; height:50px;">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add to cart</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    @endforeach
    </div>
</div>
<footer class="footer d-flex" style=" width: 100%; height: 70vh;
                         background-image: url({{ asset('image/bc5.jpg')}});
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        background-color: black;">
  <div class="footerIntro " style="width: 30%; height: 100%; background-color: #0e0e3ad3;">
    <img src="{{ asset('image/logo.png')}}" alt="" class="m-5" style="width:   ; border-radius: 5px;">
    <h2 style="color: white;" class="m-5 mt-1">Jersey Collection</h2>
  </div>
  <div class="footerIntro " style="width: 70%; height: 100%; ">
      <div class="top d-flex justify-content-around p-5" style="width: 100%; height: 70%; color: white; background-color:  #0e0e3ad3;">
        <div class="detail">
          <h4>Company</h4><hr>
          <p>About Us</p>
          <p>Term & Condions</p>
          <p>Lisence</p>
        </div>
        <div class="detail">
          <h4>Categories</h4><hr>
          <p>New season</p>
          <p>Trendings</p>
          <p>Last season</p>
          <p>Most sells</p>
        </div>
        <div class="detail">
          <h4>Address</h4><hr>
          <p>Address: 1249 - Nane Nane Bus Terminal,<br> 1st Floor 4rth Office \ Dodoma Tanzania</p>
          <p>Message: Rajastore@zepson.com</p>
          <p>Phone: 0 652 757 027 | 0 626 991 077</p>
        </div>
      </div>
      <div class="below " style="width: 100%; height: 30%; background-color: #0e0e3ad3;">
        <h6 style="color: white;">Payment accepted by:</h6>
        <img src="{{ asset('image/tg.jpg')}}" alt="" style=" height: 60px; width: 130px;">
        <img src="{{ asset('image/air.jpg')}}" alt="" style=" height: 60px; width: 130px;">
        <img src="{{ asset('image/hal.png')}}" alt="" style=" height: 60px; width: 130px;">
        <img src="{{ asset('image/tp.png')}}" alt="" style=" height: 60px; width: 130px;">
        <img src="{{ asset('image/voda.png')}}" alt="" style=" height: 60px; width: 130px;">
      </div>
  </div>
</footer>
