@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインしました!
                </div>
            </div>
            
            <div class="mt-5">
                <a href="{{ url('/admin/work') }}" class="btn btn-primary">投稿一覧</a>
            </div>

        </div><!--col-md-8-->
    </div>
</div>
@endsection
