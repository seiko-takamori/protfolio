@extends('layouts.app')
 
@section('content')
 
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">お問い合わせ</div>
                <div class="panel-body">
                    {{-- エラーの表示 --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/contact/confirm" method="post" class="form-horizontal">
 
                    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        <p class="col-sm-2 control-label">
                            お問い合わせ種類
                        </p>
                        <div class="col-sm-10">
                            @foreach($types as $key => $value)
                                <label class="checkbox-inline" for="{{$value}}">
                                    <input type="checkbox" name="type[]" value="{{ $value }}" id="{{$value }}" />
                                     {{ $value }} 
                                </label>
                            @endforeach
                            @if ($errors->has('type'))
                                <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
 
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <p>お名前</p>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" />

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
 
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <p>メールアドレス</p>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-conrol"/>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
 
                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        <p>性別</p>
                        <div class="col-sm-10">
                            @foreach($genders as $key => $value)
                                <label class="checkbox-inline">
                                    <input type="radio" name="gender" value="{{ $value }}" /> 
                                     {{ $value }} 
                                </label>
                            @endforeach
                            @if ($errors->has('gender'))
                                <span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
 
                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <p>内容</p>
                        <div class="col-sm-10">
                            <textarea name="body" class="form-control"></textarea>
                            
                            @if ($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
 
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="submit" value="確認" class="btn btn-primary" />
                        </div>
                    </div>
                       {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection