@extends('layouts.front')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="posts col-sm-12 content">
                <div class="col-sm-12 show">
                    <div class="show_top_img">
                        @if ($work->image_path2)
                            <img src="{{ asset('storage/image/' . $work->image_path2) }}">
                        @endif
                    </div><!--show_top_img-->
                    
                    <div class="show_title">
                        {{ $work->title }}
                    </div>
                    <div class="show_part">
                        {{ $work->part }}
                    </div>
                    <div class="show_body">
                        {{ $work->body }}
                    </div>
                    <div class="show_top_img">
                        @if ($work->image_path3)
                            <img src="{{ asset('storage/image/' . $work->image_path3) }}">
                        @endif
                    </div><!--show_top_img-->
                    
                    @if( !empty($prevWork) )
                        <a href="/work/{{$prevWork->id}}">prev</a>
                    @endif
                    
                    @if( !empty($nextWork) )
                        <a href="/work/{{$nextWork->id}}">next</a>
                    @endif

                </div><!--col-sm-12-->
            </div>
        </div>
    </div>
@endsection