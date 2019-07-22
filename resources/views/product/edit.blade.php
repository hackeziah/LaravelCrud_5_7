@include('layouts/header')

{{ csrf_field() }}
<div class ="container">
        <form action="{{ route('product.update', $products->id) }}" method="POST" name="update_note">
                {{ csrf_field() }}
                @method('PATCH')

                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Product Name</strong>
                            <input type="text" name="productname" class="form-control" placeholder="Enter Product Name " value="{{ $products->product }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Price</strong>
                            <textarea class="form-control" col="4" name="price" placeholder="Enter Price" >{{ $products->price }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                            <div class="form-group">
                                <strong>Quantity</strong>
                                <textarea class="form-control" col="4" name="qty" placeholder="Enter Quantity" >{{ $products->qty }}</textarea>
                            </div>
                        </div>
                    <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
            @include('layouts/footer')
</div>
