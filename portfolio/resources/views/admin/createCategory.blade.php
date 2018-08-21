@extends('admin.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

        <form style="width:100%;">
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="category"></label>
            <input type="text" class="form-control" id="category" placeholder="Title">
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
        </form>  
</div>
@endsection