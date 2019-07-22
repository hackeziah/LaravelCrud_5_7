@include('layouts/header')
    <br>
    <br>
   <div class="container">

        <td><button class="btn btn-info" type="submit"><a href="{{ route('product.create')}}">Add Product</a></button>

		<table class="table table-bordered" id="laravel_crud">
			<thead>
				<tr>
					<th> ID</th>
					<th>Prodcut</th>
					<th>Price</th>
                    <th>Qty</th>

					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
                @foreach ($products as $product)
                <tr>
                            <td>{{$product->id}}</td>
							<td>{{$product->product}}</td>
							<td>{{$product->price}}</td></td>
                            <td>{{$product->qty}}</td>

                            <td><a href="{{ route('product.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
                            <td><form action="{{ route('product.destroy', $product->id)}}" method="post">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                  </form>
                            </td>
					</tr>
             @endforeach
			</tbody>
        </table>
    </div>
    @include('layouts/footer')
