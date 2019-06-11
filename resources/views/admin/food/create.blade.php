<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mylife</title>
    </head>
    <body>
        <h1>生活管理画面</h1>
    </body>
    
            {{-- layouts/admin.blade.phpを読み込む --}}
    @extends('layouts.admin')
    
    
    {{-- admin.blade.phpの@yield('title')に'新規作成'を埋め込む --}}
    @section('title', '新規作成')
    
    {{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>新規作成</h2>
                     <form action="{{ action('Admin\foodController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">食品名(name)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="type">種類(type)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="type" value="{{ old('type') }}">
                        </div>   
                    </div>       
                    <div class="form-group row">
                        <label class="col-md-2" for="amount">数量(amount)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="amount" value="{{ old('amount') }}">
                        </div>
                    </div>        
                    <div class="form-group row">
                        <label class="col-md-2" for="price">価格(price)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
                </div>
            </div>
        </div>
    @endsection
    
</html>