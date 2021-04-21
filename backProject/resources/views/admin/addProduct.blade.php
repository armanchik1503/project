@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top:150px;">
            <div class="card">
                <div class="card-header">
                    Добавить товар
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('admin.product.post')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="firstName" class="form-label">Название</label>
                            <input type="text" name="title" class="form-control" id="firstName" placeholder="" value="">
                            <label for="price" class="form-label">Цена</label>
                            <input name="price" style="margin-bottom: 20px;" type="text" class="form-control" id="firstName" placeholder="" value="">
                            <label for="in_stock" class="form-label">В наличий</label>
                            <input name="in_stock" style="margin-bottom: 20px;" type="text" class="form-control" id="firstName" placeholder="" value="">
                            <label for="description" class="form-label">Описание</label>
                            <input name="description" style="margin-bottom: 20px;" type="text" class="form-control" id="firstName" placeholder="" value="">
                            <label for="category_id" class="form-label">Категория</label>
                            <input name="category_id" style="margin-bottom: 20px;" type="text" class="form-control" id="firstName" placeholder="" value="">
                            <label for="file">Choose file</label>
                            <input type="file" style="margin-bottom: 20px;" class="form-controll" name="img" id="file">
                        </div>
                        <button type="submit" class="btn btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->

@endsection