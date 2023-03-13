@extends('admin.layout.app')

@section('title', 'Edit Blog Category')

@section('page-content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Blog Category </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.categories') }}">Blog Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Blog Category</li>
                </ol>
            </nav>
        </div>


        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Default form</h4> --}}
                        {{-- <p class="card-description"> Basic form layout </p> --}}
                        <form class="forms-sample" action="{{ route('blog.categories.update', encrypt($blogCategory->id)) }}" method="POST">
                            @csrf @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="categoryName">Category Name</label>
                                        <input type="text" name="name" class="form-control" id="categoryName"
                                            value="{{ old('name', $blogCategory->name ?? '') }}" placeholder="Category name" />
                                            @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-3 pr-3">
                                <button type="submit" class="btn btn-primary btn-icon-text ml-auto">
                                    <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                                <a href="{{ route('blog.categories') }}" class="btn btn-outline-secondary btn-md ml-2">
                                    Cancel </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection