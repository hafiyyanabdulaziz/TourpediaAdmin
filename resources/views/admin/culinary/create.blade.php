@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Culinary</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-shadow">
            <div class="card-body">
                <form action="{{ route('culinary.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title"
                            value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="about">Description</label>
                        <textarea name="description" rows="10"
                            class="d-block w-100 form-control">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Price"
                            value="{{ old('price') }}">
                    </div>
                    <div class="form-group">
                        <label for="restaurant">Restaurant Name</label>
                        <input type="text" name="restaurant" class="form-control" placeholder="Restaurant Name"
                            value="{{ old('restaurant') }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Link Maps</label>
                        <input type="text" name="link_maps" class="form-control" placeholder="link maps"
                            value="{{ old('link_maps') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
