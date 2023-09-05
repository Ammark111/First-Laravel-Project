<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<div class="container d-flex justify-content-center">
    <div class="image mt-5" style="width: 50vw; height: 80vh; text-align:center; box-shadow: 5px 5px 10px grey;">
        <h5>Your payment proceed</h5>
        <img src="{{asset('image/load.gif')}}" alt="" style="width: 300px;">
        <h6>Please Check Your phone </h6><br>
        <a href="{{route('cart')}}"><button  class="btn btn-primary">already payed</button></a><br>
        <a href="{{route('cart')}}"><button class="btn btn-danger mt-2">Cancel</button></a>
    </div>
</div>