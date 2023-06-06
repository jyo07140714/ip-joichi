@extends('adminlte::page')

@section('title', 'itemAll')

@section('content_header')
    <h1>itemAll</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="mx-auto">
                    <!-- <div class="card-tools text-center"> -->
                        <div class="mx-auto" style="margin:0 auto">
                            <!-- 検索フォーム -->
                            <form method="get" action="{{ route('items.index') }}" class="form">
                                {{ csrf_field() }}
                                <div class="form-group row justify-content-center">
                                    <div class="col-8"><input type="text" name="keyword" class="form-control" 
                                        value="{{$keyword}}" placeholder="search name or detail"></div>
                                    <div class="col-auto"><input type="submit" value="search" class="btn btn-dark"></div>
                                </div>
                            </form>
                            <div class="input-group-append row justify-content-center">
                                <a href="{{ url('items/add') }}" class="btn btn-dark">itemAdd</a>
                                <a href="{{ url('output') }}" class="btn btn-dark">PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>type</th>
                                <th>detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->detail }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
