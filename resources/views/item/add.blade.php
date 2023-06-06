@extends('adminlte::page')

@section('title', 'itemAdd')

@section('content_header')
    <h1>itemAdd</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">
                <form method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="item name">
                        </div>

                        <div class="form-group">
                            <label for="type">type</label>
                            <input type="number" class="form-control" id="type" name="type" placeholder="1, 2, 3, ...">
                        </div>

                        <div class="form-group">
                            <label for="detail">detail</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="Description of item">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-dark">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
