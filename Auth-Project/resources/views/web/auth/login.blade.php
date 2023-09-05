<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <div class="container " style="width:35%; padding-top: 100px;">
        @if(session('danger'))
            <div style="width: 33.3vw; height: 50px; border-radius: 3px; background-color: #ca1407c4;">
                <p style="padding: 10px; color: white;">  {{session('danger')}}</p>
            </div>
        @endif
        <form  action="{{route('userlogin')}}" method="POST" class="bg-success p-5">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phone" placeholder="0XXX XXX XXX">
                <div id="emailHelp" class="form-text">We'll never share your phone number with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <a class="dropdown-item" style="color: white;" href="{{route('register')}}">Don't have account, Register </a>
            <button type="submit" class="btn btn-primary  mt-2">Login</button>
        </form>
    </div>
</div>
