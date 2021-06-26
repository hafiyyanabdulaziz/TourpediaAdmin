@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Image</h1>
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
                <form action="{{ route('destination-image.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Destination</label>
                        <select name="id_destinations" required class="form-control">
                            <option value="">Pilih Destination</option>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination->id }}">
                                    {{ $destination->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="link_image">Image</label>
                        <input type="file" class="form-control" name="link_image" placeholder="Image">
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
