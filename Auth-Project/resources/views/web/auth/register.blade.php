<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- <div style="width:100%; padding: 0; margin: 0; height:100%; background-image:url({{asset('image/bc1.jpeg')}}); background-size: cover; background-position: center;"> -->
    <div class="container" style="width:35%; padding-top: 90px;">
        <form class="mt-10 bg-success p-5" action="{{route('newUser')}}" method="POST" >
            @csrf   
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Eg: Rajab Kassim">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phone_number" placeholder="0XXX-XXX-XXX">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="pass">
            </div>
            <a class="dropdown-item" style="color: white;" href="{{route('login')}}">Do you have account, Login </a>
            <button type="submit" class="btn btn-primary mt-2">Register</button>
        </form>
    </div>
</div>