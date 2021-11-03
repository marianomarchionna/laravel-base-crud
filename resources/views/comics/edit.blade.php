@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', $comic['id']) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{ $comic['title'] }}" type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input value="{{ $comic['description'] }}" type="text" name="description" class="form-control" id="description" placeholder="Enter comic description">
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumb">Thumb</label>
                        <input value="{{ $comic['thumb'] }}" type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter comic thumb">
                        @error('thumb')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input value="{{ $comic['price'] }}" type="text" name="price" class="form-control" id="price" placeholder="Enter comic price">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="series">Series</label>
                        <input value="{{ $comic['series'] }}" type="text" name="series" class="form-control" id="series" placeholder="Enter comic series">
                        @error('series')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Sale date</label>
                        <input value="{{ $comic['sale_date'] }}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter comic sale date">
                        @error('sale_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input value="{{ $comic['type'] }}" type="text" name="type" class="form-control" id="type" placeholder="Enter comic type">
                        @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection