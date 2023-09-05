<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="content d-flex">
    <div class="menu bg-dark" style="width: 15vw; height: 100vh;">
        <div class="logo" style="width: 85%; height: 10%; margin: 1em;">
            <!-- <h5>RajaStore Shopping Center</h5> -->
        </div>
        <div class="links">
            <a href="{{route('dashboard')}}">Dashboard</a>
            <a href="{{route('product')}}">Products</a>
            <a href="">Orders</a>
            <a href="{{route('userList')}}">Client List</a>    
            <a href="">Payment History</a>    
            <a href="">logout</a>    
        </div>
    </div>
    <div class="body" style="width: 85vw; height: 100vh; margin-left: 15vw;">
        <nav class="nav bg-dark " style="width: 85vw; height: 5vh; position: fixed;">
            <div class="logo">
                <!-- <img class="m-1" style=" width: 50px; height: 50px; border-radius: 10px;" src="{{asset('image/logo.jpg')}}" alt="" >                -->
            </div>
            
        </nav>
        <div class="container d-flex" style=" margin-top: 16vh; width: 80%;">
            <div class="card m-2 bg-primary" style="width: 18rem;">
                <div class="card-body">
                    <h1>1.34M</h1>
                    <p class="card-text">
                        <b>Products</b> 
                    </p>
                </div>
            </div>      
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body bg-warning">
                    <h1>134k</h1>
                    <p class="card-text">
                        <b>Clients</b> 
                    </p>
                    </div>
            </div>      
            <div class="card m-2 bg-" style="width: 18rem;">
                <div class="card-body bg-secondary">
                    <h1>50,435</h1>
                    <p class="card-text">
                        <b>Orders</b> 
                    </p>
                </div>
            </div>      
        </div>
        <div class="container d-flex" style=" margin-top: 6vh; width: 80%;">              
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body bg-success">
                    h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>      
            <div class="card m-2 border" style="width: 18rem;">
                <div class="card-body bg-danger">
                    h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="card m-2 bg-light" style="width: 18rem;">
                <div class="card-body">
                    h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div> 
                  
        </div>
    </div>   
</div>