@extends('admin.master')
@section('title', 'Sửa thể loại')
@section('content-admin')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Sửa thể loại</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('categories.update', $category->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$category->name}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
