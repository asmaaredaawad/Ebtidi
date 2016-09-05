@extends('layout')
@section('css')
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet"> -->
@endsection
@section('header')
    

    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Products / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">
            <form >
                <input type="hidden"  id="token" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">Name</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{ old("name") }}"/>
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('user_id')) has-error @endif">
                       <!-- <label for="user_id-field">User_id</label> -->
                    <input type="hidden" id="user_id-field" name="user_id" class="form-control" value="{{ Auth::user()->id }}
"/>
                       @if($errors->has("user_id"))
                        <span class="help-block">{{ $errors->first("user_id") }}</span>
                       @endif
                    </div>

                      <div class="form-group @if($errors->has('category_id')) has-error @endif">
                       <label for="category_id-field">Category Name</label>
                       <select id="category_id-field" name="category_id" class="form-control">
                       <option value="0">choose Category</option>
                        @foreach($cat as $cat)
                            <option value={{ $cat->id }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                       @if($errors->has("category_id"))
                        <span class="help-block">{{ $errors->first("category_id") }}</span>
                       @endif
                    </div>


                <div class="well well-sm">
                    <button id="create" class="btn btn-primary">Create</button>
                    <!-- <a class="btn btn-link pull-right" ><i class="glyphicon glyphicon-backward"></i> Back</a> -->
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')

<script src="{{URL::asset('js/add.js')}}"></script>

  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>-->
  <script>
    $('.date-picker').datepicker({
    });
  </script>


@endsection

