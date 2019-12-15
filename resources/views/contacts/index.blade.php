@extends('layouts.front')
 
@section('content')
 
 
<div class="container">
    <div class="row">
        <div class="col-md-12 content">
            <div class="panel panel-default posts">
                <h2>Contact</h2>

                <div class="panel-body text-left">
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
                            ▪️お問い合わせ種類
                        </p>
                        <div class="col-sm-10">
                            @foreach($types as $key => $value)
                                <label class="checkbox-inline" for="{{$value}}">
                                    <input type="checkbox" name="type[]" value="{{ $value }}" id="{{$value }}" @if (is_array(old("type")) && in_array("$value", old('type'), true)) checked @endif />
                                    <!--@if (is_array(old("type")) && in_array("$value", old('type'), true)) checked @endif   チェックボックスのold関数 -->
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
                        <p>▪️お名前</p>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" />

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
 
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <p>▪️メールアドレス</p>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-conrol" value="{{ old('email') }}" />
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
 
                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        <p>▪️性別</p>
                        <div class="col-sm-10">
                            @foreach($genders as $key => $value)
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="{{ $value }}" @if($value == old('gender') ) checked @endif /> 
                                    <!-- @if($value == old('gender') ) checked @endif でラジオボタンのold関数-->
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
                        <p>▪️内容</p>
                        <div class="col-sm-10">
                            <textarea name="body" class="form-control">{{ old('body') }}</textarea>
                            
                            @if ($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
 
                    <div class="form-group mt-5 mb-5">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="submit" value="確認" class="btn btn-gray" />
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