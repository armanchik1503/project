@extends('layouts.main')

@section('title', 'Home')
@section('custom_css')
<link rel="stylesheet" type="text/css" href="/styles/product.css">
<link rel="stylesheet" type="text/css" href="/styles/product_responsive.css">
@endsection

@section('custom_js')
<script src="/js/product.js"></script>
@endsection

<!-- Home -->
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div>
                <h2 style="margin-top: 50px;
                display: flex;
                justify-content: space-around;">Все товары</h2>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid" style="margin-top: 25px;">
        <section class="content">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th style="width: 5%">
                                    Название
                                </th>
                                <th style="width: 5%">
                                    Цена
                                </th>
                                <th style="width: 8%">
                                    Новая цена
                                </th>
                                <th style="width: 5%">
                                    В наличий
                                </th>
                                <th style="width: 25%">
                                    Описание
                                </th>
                                <th style="width: 10%">
                                    категория id
                                </th>
                                <th style="width: 30%">
                                    фото
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    {{$product['id']}}
                                </td>
                                <td>
                                    {{$product['title']}}
                                </td>
                                <td>
                                    {{$product['price']}}
                                </td>
                                <td>
                                    {{$product['new_price']}}
                                </td>
                                <td>
                                    {{$product['in_stock']}}
                                </td>
                                <td>
                                    {{$product['description']}}
                                </td>
                                <td>
                                    {{$product['category_id']}}
                                </td>
                                <td>
                                    @php
                                    $image = '';
                                    if (count($product->images) > 0) {
                                    $image = $product->images[0]['img'];
                                    }else {
                                    $image = 'product_6.jpg';
                                    }
                                    @endphp
                                    <div class="product_image"><img style="width: 200px;height: 200px;" src="/images/{{$image}}" alt="{{$product->$image}}"></div>

                                </td>
                                <td>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редактировать
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Удалить
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection