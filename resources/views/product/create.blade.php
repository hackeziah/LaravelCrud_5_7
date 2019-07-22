@include('layouts/header')

<div class="container">
  <form action="{{route('product.store')}}" method="POST" name="">
        {{ csrf_field() }}

         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Product Name</strong>
                    <textarea name="productname"class="form-control" col="4"  placeholder="Enter Product Name"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <textarea  name= "price"class="form-control" col="4"
                     placeholder="Enter Price"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                    <div class="form-group">
                        <strong>Quantity</strong>
                        <textarea name="qty"class="form-control" col="4"
                         placeholder="Enter Quantity"></textarea>
                    </div>
            <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    @include('layouts/footer')
</div>
