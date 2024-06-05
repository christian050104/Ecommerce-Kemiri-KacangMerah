@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Products Page</h4>
        <hr>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->selling_price}}</td>
                    <td>
                        <img src="{{asset('assets/uploads/category/'.$item->image)}}" alt="Image here" class="cate-image">
                    </td>
                    <td>
                        <a href="{{url('edit-prod/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<style>
    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }

    .table thead th {
        background-color: #343a40;
        color: #fff;
    }

    .cate-image {
        max-width: 100px;
        max-height: 100px;
        width: auto;
        height: auto;
    }

    .btn {
        margin: 2px 0;
    }
</style>
