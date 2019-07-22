@extends('notes.layout')
   
@section('content')
 
<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2>Update Note</h2>
        </div>
    </div>
</div>
    
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Opps!</strong> Something went wrong<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
<form action="{{ route('notes.update', $note_info->id) }}" method="POST" name="update_note">
    {{ csrf_field() }}
    @method('PATCH')
   
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $note_info->title }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" col="4" name="description" placeholder="Enter Description" >{{ $note_info->description }}</textarea>
            </div>
        </div>
        <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    
</form>
@endsection