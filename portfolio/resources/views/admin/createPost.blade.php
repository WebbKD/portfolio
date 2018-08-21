@extends('admin.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

        <form style="width:100%;">
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title">
            </div>

            <div class="form-group col-md-6">
                <label for="category">Category</label>
                <select id="category" class="form-control">
                    <option>Project</option>
                    <option>Blog</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="category">Tags</label>
                <select id="category" class="form-control">
                    <option>SEO</option>
                    <option>Freelance</option>
                    <option>Case Study</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="editor">Content</label>
            <textarea class="form-control" id="editor" rows="3" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
        </form>  
</div>
@endsection

@section('javascriptLinks')
    <script>
        $(document).ready(function() {
            $('#editor').summernote();
        });
    </script>
@endsection