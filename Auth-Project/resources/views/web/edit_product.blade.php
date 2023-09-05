<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="modal fade" id="editModal_{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg bg-transparent">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel">Edit Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('update/'.$product->id) }}" method="POST">
                    @method('PUT')
                    @csrf 
                    <div class="mb-3">
                            <label class="form-label"><b>Product Name</b></label>
                            <input type="text" class="form-control" name="title" value="{{$product->product_title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><b>Decsription</b></label>
                            <input type="text" class="form-control" name="description" value="{{$product->description}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><b>Original Price</b></label>
                            <input type="number" class="form-control" name="oprice" value="{{$product->original_price}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><b>Current Price</b></label>
                            <input type="number" class="form-control" name="cprice" value="{{$product->current_price}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary mt-2">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>