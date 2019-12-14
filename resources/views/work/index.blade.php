@extends('layouts.top')

@section('content')
    <div class="container mb-5">
        <div class="row pb-5">
            <div class="col-sm-12 content">
                <h2 id="about">About</h2>
                <div class="d-flex justify-content-between">
                    <div class="col-sm-5 img">
                        <img src="{{ asset('img/img_about.png') }}" alt="about">
                    </div>
                    <div class="col-sm-7">
                        <p class="text">東京でWEBデザイナーをしています。</p>
                        <p class="text">2015年よりWEBディレクターを経験し、WEB制作をしていきたいという思いが強くなり、2016年からWEBサイト制作に関わってきました。ディレクターの経験も踏まえ、企画からコーディングまでWEBサイト制作全体の流れを踏まえ、制作をしていきます。</p>
                        <p class="text">WEBデザインの仕事の他に紅茶に携わる仕事もしてきました。<br>一杯の紅茶が驚くほど心に染みることがあるように、ご依頼者の要望をしっかりと受け止め、見ている人の心に響くWEBサイト制作をしていけるようになりたいと思います。</p>
                    </div>
                </div>
            </div><!--col-sm-12-->
        </div><!--row-->
    </div>
    <div class="container mb-5">
        <div class="row pb-5">
            <div class="col-sm-12 content">
                <h2 id="skill">Skill</h2>
                <div class="d-flex justify-content-between">
                    <div class="col-sm-4">
                        <img src="{{ asset('img/icon_pen.png') }}" alt="icon">
                        <p class="box-title">企画・デザイン</p>
                        <p class="box-text">ご要望をしっかりとヒアリングし、閲覧する方がわかりやすい、ワイヤーフレームやデザインを作成し提案します。WEBサイト制作全体の流れを踏まえた、スケジュールを考えサイト制作することを心掛けています。</p>
                        <p class="box-note">Photoshop・Illustrator</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('img/icon_mouse.png') }}" alt="icon">
                        <p class="box-title">コーディング</p>
                        <p class="box-text">HTML5・CSS3でデザインの沿った内容でマークアップしていきます。Javascriptを使用した動きのあるサイトも制作します。大規模なサイトでは一部にPHPを使用したりしながら、メンテナンス性も考えながらコーディングしていきます。</p>
                        <p class="box-note">PHTML5・CSS3・Javascript</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('img/icon_device.png') }}" alt="icon">
                        <p class="box-title">レスポンシブ</p>
                        <p class="box-text">様々なデバイスに対応したサイトを制作していきます。どんなデバイスでもわかりやすく・見やす区・使いやすいサイトを心掛けています。</p>
                        <p class="box-note">HTML5・CSS3・Javascript</p>
                    </div>
                </div>
            </div><!--col-sm-12-->
        </div><!--row-->
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="posts col-sm-12 content">
                <h2 id="work">Work</h2>
                <div class="d-flex justify-content-between flex-wrap">
                        @foreach($posts as $post)
                            <div class="post col-sm-6 p-4">
                                <div class="image text-right mt-4">
                                    @if ($post->image_path)
                                       <a href="/work/{{$post->id}}"><img src="{{ asset('storage/image/' . $post->image_path) }}"></a>
                                    @endif
                                </div>
                                <div class="text">
                                    <div class="title">
                                        {{ str_limit($post->title, 150) }}
                                    </div>
                                </div>
                            </div><!--post-->
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection