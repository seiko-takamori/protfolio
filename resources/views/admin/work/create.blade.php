@extends('layouts.admin')

@section('title','Workの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="post_list">
                    <a href="{{ url('/admin/work') }}" class="btn btn-primary">投稿一覧</a>
                </div>

                <h2 class="mb-5">Work新規作成</h2>
                <form action="{{ action('Admin\WorkController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">詳細ページ担当</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="part">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">topページ画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">詳細ページメイン</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_path2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">詳細ページ画像（レスポンシブ）</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image_path3">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection