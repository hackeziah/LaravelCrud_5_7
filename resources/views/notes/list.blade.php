@extends('notes.layout')

@section('content')
<div class="row mt40">
	<div class="col-md-10">
		<h2> List </h2>

	</div>
	<div class="col-md-2">
		<a href="{{ route('notes.create')}}" class="btn btn-danger"> Add Note</a>
	</div>
	<br><br>

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
	@endif

	@if($errors->any())
	<div class="alert alert-danger>">
		<strong>Opps!</strong>Something went wrong<br><br>
		<ul>
			@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
		<table class="table table-bordered" id="laravel_crud">
			<thead>
				<tr>
					<th> ID</th>
					<th>Title</th>
					<th>Description</th>
					<th>Created at</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($notes as $note)
					<tr>
							<td>{{ $note->id }}</td>
							<td>{{ $note->title }}</td>
							<td>{{ $note->description }}</td>
							<td>{{ date('d m Y', strtotime($note->created_at))}}</td>
							<td><a href="{{ route('notes.edit',$note->id)}}" class="btn btn- 
                  primary">Edit</a></td>
							<td><form action="{{ route('notes.destroy', $note->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
		 {!! $notes->links() !!}
</div>
@endsection
</div>