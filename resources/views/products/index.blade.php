@extends('layout')


@section('header')
   
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Products
            <a class="btn btn-success pull-right" href="{{ route('products.create') }}"/><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($products->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                        <th>User Name</th>
                        <th>Category Name</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->user->name}}</td>
                                <td>{{$product->category->name}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('products.show', $product->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('products.edit', $product->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form   style="display: inline;" >
                                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                        <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden"  id='product_id-field'name="product_id" value="{{ $product->id }}">

                                        <button  id="delete"class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $products->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection


@section('scripts')
<script src="{{URL::asset('js/delete.js')}}"></script>

@endsection
