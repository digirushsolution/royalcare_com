@extends('layouts.admin.app')
@section('content')
<div class="page-wrapper">
  <div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Blogs</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Category Edit</li>
          </ol>
        </nav>
      </div>
    </div>
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
      <div class="card-header py-3">
        <h6 class="mb-0">Update Category</h6>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-5 mx-auto">
            <div class="card border shadow-none w-100">
              <div class="card-body">
                <form action="{{route('blog-category.update', $categories->id)}}" method="POST" class="row g-3">
                  @csrf
                  <div class="col-12">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="category_name" placeholder="Category name"
                      value="{{$categories->category_name}}" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="Slug name"
                      value="{{$categories->slug}}">
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-primary">Update Category</button>
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