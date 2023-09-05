<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<div class="home d-flex">
    <div class="container">
    <h2 class="m-5">-Order With Us-</h2>
        <div class="cart m-5" style="width: 95%; height: auto; box-shadow: 7px 7px 10px grey;">
            <table class="table table-striped table-hover ">
                <thead class="" style="">
                    <tr style="height: 40px;">
                        <th class="bg-primary" scope="col">S/N</th>
                        <th class="bg-primary" scope="col">PRODUCT TITLE</th>
                        <th class="bg-primary" scope="col">PRICE</th>
                        <th class="bg-primary" scope="col">SIZE</th>
                        <th class="bg-primary" scope="col">COLOR</th>
                        <th class="bg-primary" scope="col">QUANTITY</th>
                        <th class="bg-primary" scope="col">TOTAL</th>
                        <th class="bg-primary" scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $grandTotal = 0;
                    $prodTotal = 0;
                @endphp
                @php
                    $counter = 1; // Initialize a counter variable
                @endphp
                @foreach($orders as $order)
                    @php
                        $total = $order['price'] * $order['quantity'];
                        $grandTotal += $total;
                        $prodTotal +=  $order['quantity'];
                    @endphp
                    <tr>
                        <td>{{$counter }}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->size}}</td>
                        <td>{{$order->color}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>
                        {{ $total }} Tsh
                        </td>
                        <td>
                        <a href="{{ url('edit_cart/'.$order->id)}}" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#example" data-bs-whatever="@mdo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </a>
                            <a href="{{ url('delete_cart/'.$order->id)}}" type="button" class="btn btn-danger">
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
                @endforeach
                </tbody>
            </table>
            <div class="add"  style="position: fixed; bottom: 7em; right: 10em;">
                <h4 style="" >Add Order</h4>
                <a href="{{route('home')}}">
                    <button class="btn btn-primary" style="margin-left: 1em;"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="payment m-5 border border-primary" style="width: 40vw; height: 50vh; box-shadow: 7px 7px 10px grey">
        <div class="head bg-primary" style="text-align:center; height: 13vh; ">
            <h3 class="pt-4">Payment Details</h3>
        </div>
        <div class="m-5">
            <h5 class="mb-3">>>Total Products: <b>{{ $prodTotal }} Items</b></h5>
            <h5>>>Total Price:  <b>{{$grandTotal}} Tsh</b></h5>
            <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Checkout</button>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Payment </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('loading')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"><b>Enter Your Phone Number</b></label>
                            <input type="number" class="form-control" placeholder="0XXX-XXX-XXX" name="phone">
                        </div>
                        <h3><b>Amount:</b> {{$grandTotal}} Tsh</h3>
                        <div class="mb-3">
                            <input type="number" class="form-control" value="{{$grandTotal}}" name="amount" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button  type="submit" class="btn btn-primary">Pay Now</button>
                        </div>
                        <div class="below " style="width: 100%; height: 30%;q">
                            <h6 style="color: ;"><b>Payment accepted by:</b></h6>
                            <img src="{{ asset('image/tg.jpg')}}" alt="" style=" height: 40px; width: 87px;">
                            <img src="{{ asset('image/air.jpg')}}" alt="" style=" height: 40px; width: 87px;">
                            <img src="{{ asset('image/hal.png')}}" alt="" style=" height: 40px; width: 87px;">
                            <img src="{{ asset('image/tp.png')}}" alt="" style=" height: 40px; width: 87px;">
                            <img src="{{ asset('image/voda.png')}}" alt="" style=" height: 40px; width: 87px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>