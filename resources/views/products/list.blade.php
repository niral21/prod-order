@extends('templates.template')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Product Listing</h1>
        </div>
    </section>

    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <th>{{$product->id}}</th>
                        <th>{{$product->sku}}</th>
                        <th>{{$product->name}}</th>
                        <th>{{$product->description}}</th>
                        <th>{{$product->price}}</th>
                        <th>
                            <a href="{{"/produtos/{$product->id}/editar"}}">Edit</a> |
                            <a href="{{"/produtos/{$product->id}/excluir"}}">Delete</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection