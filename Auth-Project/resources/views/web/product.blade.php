<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="content d-flex">
    <div class="menu bg-dark" style="width: 15vw; height: 100vh;">
        <div class="logo" style="width: 85%; height: 10%; margin: 1em 1em;">
            <!-- <img style=" width: 100px; border-radius: 10px;" src="{{asset('image/logo.jpg')}}" alt="" > -->
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
    <div class="modal fadex" id="exampleModal" tabindex="-3" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg bg-transparent">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{route('product')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label"><b>Product Name</b></label>
                                <input type="text" class="form-control" name="title" placeholder="Eg: Smart Watch">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Decsription</b></label>
                                <input type="text" class="form-control" name="description" placeholder="Simple Description About product">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Original Price</b></label>
                                <input type="number" class="form-control" name="oprice" placeholder="Eg: 10 000">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Current Price</b></label>
                                <input type="number" class="form-control" name="cprice" placeholder="Must be less than original price">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Product Image</b></label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary mt-2">Save Product</button>
                            </div>
                        </form>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <div class="body" style="width: 80vw; height: 100vh; margin-left: 15vw;">
        <nav class="nav bg-dark" style=" width:100%; height: 5vh; position: fixed;">
            <!-- <div class="logo"> -->
            <!-- <img class="m-1" style=" width: 50px; height: 50px; border-radius: 10px;" src="{{asset('image/logo.jpg')}}" alt="" >                -->
        </nav>
        <button  style=" margin: 8vh 0vh 0vh 10vh;"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Product</button>
        @if(session('success'))
            <div id="success-message" style="position: fixed; top: 8vh; right: 10vw; width: 270px; height: 50px; border-radius: 3px; background-color: #35c535;">
                 <p style="padding: 10px;">  {{ session('success') }}</p>
            </div>
            <script>
                // Add JavaScript to hide the success message after a delay
                setTimeout(function() {
                    var successMessage = document.getElementById('success-message');
                    successMessage.style.display = 'none';
                }, 3000); // 5000 milliseconds (5 seconds) delay before hiding
            </script>
        @endif
        @if(session('danger'))
            <div id="danger-message" style="position: fixed; top: 8vh; right: 10vw; width: 270px; height: 50px; border-radius: 3px; background-color: #ca1407c4;">
                 <p style="padding: 10px;">  {{ session('danger') }}</p>
            </div>
            <script>
                // Add JavaScript to hide the success message after a delay
                setTimeout(function() {
                    var successMessage = document.getElementById('danger-message');
                    successMessage.style.display = 'none';
                }, 3000); // 5000 milliseconds (5 seconds) delay before hiding
            </script>
        @endif
        @if(session('edit'))
            <div id="edit-message" style="position: fixed; top: 8vh; right: 10vw; width: 270px; height: 50px; border-radius: 3px; background-color:  #35c535;">
                 <p style="padding: 10px;">  {{ session('edit') }}</p>
            </div>
            <script>
                // Add JavaScript to hide the success message after a delay
                setTimeout(function() {
                    var successMessage = document.getElementById('edit-message');
                    successMessage.style.display = 'none';
                }, 3000); // 5000 milliseconds (5 seconds) delay before hiding
            </script>
        @endif
        <div class="container" style=" margin-top: 5vh; width: 90%;">
            <table class="table table-striped table-hover ">
                <thead class="table-dark" style="">
                    <tr style="height: 40px;">
                        <th scope="col">ID</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">ORGINAL PRICE</th>
                        <th scope="col">CURRENT PRICE</th>
                        <th scope="col">IMAGE</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1; // Initialize a counter variable
                    @endphp
                    @foreach($products as $product)
                        <tr style="height: 40px;">
                            <td>{{$counter}}</td>
                            <td>{{$product->product_title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->original_price}}</td>
                            <td>{{$product->current_price}}</td>
                            <td>sample</td> 
                            <td>
                                <a href="{{ url('edit/'.$product->id)}}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal_{{ $product->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </a>
                                <a href="{{ url('delete/'.$product->id)}}" class="btn btn-danger ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @php
                            $counter++; // Increment the counter variable
                        @endphp
                    @include('web.edit_product')
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>   
</div>

