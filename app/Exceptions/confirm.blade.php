@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">お問い合わせ</div>
                <div class="panel-body">
                    <p>誤りがないことを確認のうえ送信ボタンをクリックしてください。</p>
 
                    <table class="table">
                        <tr>
                            <th>お問い合わせ種類</th>
                            <td>{{ $type }}</td>
                        </tr>
                        <tr>
                            <th>お名前</th>
                            <td>{{ $contact->name }}</td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <th>性別</th>
                            <td>{{ $contact->gender }}</td>
                        </tr>
                        <tr>
                            <th>内容</th>
                            <td>{{ $contact->body }}</td>
                        </tr>
                    </table>
                    
                    <form action="/contact/complete" method="post" class="form-horizontal" id="post-input">
                        
                        
                    
 
                   <!--送信されたデータをgetAttributes()で取得-->
                    @foreach($contact->getAttributes() as $key => $value)
                        @if(isset($value))
                            @if(is_array($value))
                                @foreach($value as $subValue)
                                    <input name="{{ $key }}[]" type="hidden" value="{{ $subValue }}">
                                @endforeach
                            @else
                            <!-- hidden データを送る（表示はしない）-->
                                <input type="hidden" name="{{$key}}" value="{{$value}}"/>
                            @endif
 
                        @endif
                    @endforeach
 
                     <input type="submit" name="action" class="btn" value="戻る">
                     <input type="submit" name="action" class="btn btn-primary" value="送信">
         
                    {{ csrf_field() }}
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection