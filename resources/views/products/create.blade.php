@extends('templates.template')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Create Product</h1>
        </div>
    </section>

    <div class="container">
        <form method="post" action="{{route('store.product')}}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">Name</label><br>
                <input type="text" required name="name">
            </div>
            <div class="form-group">
                <label for="sku">SKU</label><br>
                <input type="text" required name="sku">
            </div>
            <div class="form-group">
                <label for="description">Description</label><br>
                <input type="text" required name="description">
            </div>
            <div class="form-group">
                <label for="price">Price</label><br>
                <input type="text" required name="price">
            </div>
            <button class="btn btn-dark" type="submit">Create</button>
    </form>
    </div>
@endsection