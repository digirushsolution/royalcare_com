@extends('layouts.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Setting</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i
                                    class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Setting</li>
                    </ol>
                </nav>
            </div>
        </div>
        <h6 class="mb-0 text-uppercase">Setting Option</h6>
        <hr />
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        @if(Session::has('errors'))
        <div class="alert alert-danger">
            {{Session::get('errors')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body flex flex-col p-6">
                <header class="mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">Setting</div>
                    </div>
                </header>
                <div class="card-text h-full  nav_tab_Dashboard">
                    <div>
                        <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4"
                            id="tabs-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#tabs-profile"
                                    class="nav-link w-full block font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent active dark:text-slate-300"
                                    id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile"
                                    role="tab" aria-controls="tabs-profile" aria-selected="false">Contact Details</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#tabs-settings"
                                    class="nav-link w-full block font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300"
                                    id="tabs-settings-tab" data-bs-toggle="pill" data-bs-target="#tabs-settings"
                                    role="tab" aria-controls="tabs-settings" aria-selected="false">Meta</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tabs-tabContent">
                            <div class="tab-pane fade" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab">
                                <div class="col-md-8">
                                    <form action="{{route('setting.update')}}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-2 col-from-label" for="avatar">Add Image</label>
                                            <div class="col-md-10">
                                                <input type="hidden" name="types[]" value="header_logo">
                                                <input type="file" name="header_logo" accept="image/*" id="avatar"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-sm-auto col-4">
                                                <div class="avatar avatar-xl position-relative">
                                                    <div>
                                                        <label for="file-input"
                                                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="" aria-hidden="true"
                                                                data-bs-original-title="Edit Image"
                                                                aria-label="Edit Image"></i>
                                                        </label>
                                                        <span
                                                            class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                            <img src="{{ static_asset(uploaded_asset(get_setting('header_logo'))) }}"
                                                                alt="img" class="w-100 border-radius-lg shadow-sm">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right btn_bcnd-updte">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tabs-profile" role="tabpanel"
                                aria-labelledby="tabs-profile-tab">
                                <form action="{{ route('setting.update') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row my-2">
                                                <label class="col-md-2 col-from-label" for="avatar">Phone</label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="types[]" value="header_phone">
                                                    <input type="text" name="header_phone"
                                                        value="{{ get_setting('header_phone') }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-md-2 col-from-label" for="avatar">Second Phone</label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="types[]" value="header_phone_sec">
                                                    <input type="text" name="header_phone_sec"
                                                        value="{{ get_setting('header_phone_sec') }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-md-2 col-from-label" for="avatar">Email</label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="types[]" value="main_email">
                                                    <input type="email" name="main_email"
                                                        value="{{ get_setting('main_email') }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">

                                                <label class="col-md-2 col-from-label" for="avatar">Address</label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="types[]" value="main_address">
                                                    <input type="text" name="main_address"
                                                        value="{{ get_setting('main_address') }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row icon_main_rigth">
                                                <label class="col-from-label" for="avatar">Social Links</label>
                                                <div class="input-group form-group my-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fa fa-pinterest"></i>Facebook</span>
                                                    </div>
                                                    <input type="hidden" name="types[]" value="facebook_link">
                                                    <input type="text" class="form-control" placeholder="http://"
                                                        name="facebook_link" value="{{ get_setting('facebook_link') }}">
                                                </div>
                                                <div class="input-group form-group my-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fa fa-pinterest"></i>Pinterest</span>
                                                    </div>
                                                    <input type="hidden" name="types[]" value="pinterest_link">
                                                    <input type="text" class="form-control" placeholder="http://"
                                                        name="pinterest_link"
                                                        value="{{ get_setting('pinterest_link') }}">
                                                </div>
                                                <div class="input-group form-group my-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fa fa-instagram"></i>Instagram</span>
                                                    </div>
                                                    <input type="hidden" name="types[]" value="instagram_link">
                                                    <input type="text" class="form-control" placeholder="http://"
                                                        name="instagram_link"
                                                        value="{{ get_setting('instagram_link') }}">
                                                </div>
                                                <div class="input-group form-group my-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fa fa-youtube"></i>Youtube</span>
                                                    </div>
                                                    <input type="hidden" name="types[]" value="youtube_link">
                                                    <input type="text" class="form-control" placeholder="http://"
                                                        name="youtube_link" value="{{ get_setting('youtube_link') }}">
                                                </div>
                                                <div class="input-group form-group my-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fa fa-youtube"></i>Twitter</span>
                                                    </div>
                                                    <input type="hidden" name="types[]" value="twitter_link">
                                                    <input type="text" class="form-control" placeholder="http://"
                                                        name="twitter_link" value="{{ get_setting('twitter_link') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right btn_bcnd-updte">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tabs-messages" role="tabpanel"
                                aria-labelledby="tabs-messages-tab">
                            </div>
                            <div class="tab-pane fade" id="tabs-settings" role="tabpanel"
                                aria-labelledby="tabs-settings-tab">
                                <div class="container">
                                    <div class="row">
                                        <form action="{{ route('settings.new_meta') }}" method="post">
                                            @csrf
                                            <div class="col-md-12 mt-3">
                                                <div>
                                                    <label class="form-label" for="selectmeta">Select Meta Type
                                                        :</label>
                                                    <select name="metaselect" class="form-select" required id="">
                                                        <option value="" selected>Select your meta type</option>
                                                        <option value="description_">Description</option>
                                                        <option value="title_">Title</option>
                                                        <option value="keyword_">Keyword</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div>
                                                    <label class="form-label" for="type">Name :</label>
                                                    <input class="form-control" type="text" name="type" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div>
                                                    <label class="form-label" for="value">Value To Display :</label>
                                                    <input class="form-control" type="text" name="value" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <button class="btn btn-success btn-sm mt-4 mb-3" type="submit">Add
                                                    Value</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="container">
                                    <ul class="nav nav-tabs mt-4 mb-5" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">Description</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Keyword</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                                data-bs-target="#contact" type="button" role="tab"
                                                aria-controls="contact" aria-selected="false">Title</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <table
                                                class="table table-success table-bordered table-striped text-center mt-3">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Meta Name</th>
                                                        <th>Meta Value</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                @foreach($descriptionsettings as $description)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $description->type }}</td>
                                                        <td>{{ $description->value }}</td>
                                                        <td><a href="{{ route('settings.edit_meta', ['id' => $description->id])}}"
                                                                class="btn btn-primary btn-sm ">Edit</a>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <table
                                                class="table table-success table-bordered table-stripped text-center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Meta Name</th>
                                                        <th>Meta Value</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                @foreach($keywordsettings as $keyword)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $keyword->type }}</td>
                                                        <td>{{ $keyword->value }}</td>
                                                        <td><a href="{{ route('settings.edit_meta', ['id' => $keyword->id])}}"
                                                                class="btn btn-primary btn-sm ">Edit</a>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                            aria-labelledby="contact-tab">
                                            <table class="table table-success table-bordered table-striped text-center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Meta Name</th>
                                                        <th>Meta Value</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                @foreach($titlesettings as $title)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $title->type }}</td>
                                                        <td>{{ $title->value }}</td>
                                                        <td><a href="{{ route('settings.edit_meta', ['id' => $title->id])}}"
                                                                class="btn btn-primary btn-sm ">Edit</a>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection