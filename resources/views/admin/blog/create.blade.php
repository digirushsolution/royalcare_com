@extends('layouts.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Blogs</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('blog.create') }}"><button type="button" class="btn btn-primary">Blog
                            Create</button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">New Blog</h5>
                        <form class="row g-3" id="add_form" class="form-horizontal" enctype="multipart/form-data"
                            action="{{ route('blog.store') }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label for="input1" class="form-label">Blog Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Blog Title"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label for="input1" class="form-label">Slug
                                    <small>(https://royalcaretravels.com/blogs)</small></label>
                                <input type="text" name="slug" class="form-control" id="slug" placeholder="" required>
                            </div>
                            <div class="col-md-12">
                                <label for="input7" class="form-label">Category</label>
                                <select class="form-select" name="category_id" id="category_id" required>
                                    <option value="">Select One</option>
                                    @foreach ($blog_categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="input7" class="form-label">Image</label><br>
                                <input type="file" name="banner" accept=".jpg, .png, image/jpeg, image/png">
                                <div id="image-info" style="margin-top: 10px;"></div>
                            </div>
                            <div class="col-md-12">
                                <label for="input1" class="form-label">Banner Alt</label>
                                <input type="text" name="banner_alt" class="form-control" id="title"
                                    placeholder="Banner Alt" required>
                            </div>
                            <div class="col-md-12">
                                <label for="blog_description" class="form-label">Description</label>
                                <textarea class="form-control" id="blog_description" name="description"
                                    placeholder="Description ..." rows="3"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="signinSrEmail">
                                    Meta Image
                                    <small>(824*324)</small>
                                </label>
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            <input type="file" name="meta_img" class="selected-files">
                                        </div>
                                    </div>
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Meta Description</label>
                                <textarea name="meta_description" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">
                                    Meta Keywords
                                </label>
                                <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                    placeholder="Meta Keywords">
                            </div>
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<link href="{{ custom_asset('assets/admin/plugins/fancy-file-uploader/fancy_fileupload.css') }}" rel="stylesheet" />
<script src="{{ custom_asset('assets/admin/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ custom_asset('assets/admin/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ custom_asset('assets/admin/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ custom_asset('assets/admin/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script>
    $('#fancy-file-upload').FancyFileUpload({
        params: {
            action: 'fileuploader'
        },
        maxfilesize: 1000000,
    });
</script>
<script>
    $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
    })
</script>
@endsection