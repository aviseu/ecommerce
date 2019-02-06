@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td><a href="{{ route('admin.product.show', [$product->id]) }}">{{ $product->name }}</a></td>
                                        <td>{{ money($product->price) }}</td>
                                        <td>{{ ucfirst($product->status) }}</td>
                                        <td>{{ $product->created_at->format('m/d/Y') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $products->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
