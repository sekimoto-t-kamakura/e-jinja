@extends('layouts.app')

{{-- ここにページごとのcssを入れる --}}
@section('stylesheet', asset('css/index.css'))
{{-- ここにページのタイトルを入れる --}}
@section('title', 'いい神社')

{{-- ここにメインのコンテンツを入れる --}}
@section('content')
    <section class="section area-section">
        <div class="h2-box h2-top-box">
            <div class="h2-text">
                <img class="h2-logo" src="img/material-icon/map.svg" alt="地図のアイコン">
                <h2 class="h2-title">神社を探す</h2>
            </div>
            <div id="back-button" class="h2-text" style="display: none;">
                <img class="h2-logo" src="img/material-icon/back-bow.svg" alt="戻る矢印">
                <p class="h2-back-button">戻る</p>
            </div>
        </div>
        <div>
            {{-- area --}}
            <ul class="container" id="area-list">
                @foreach ($areas as $area)
                    <li>
                        <a class="container__area" href="#"
                            data-prefectures="{{ json_encode(
                                $area->prefecture->map(function ($prefecture) {
                                    return [
                                        'id' => $prefecture->id,
                                        'name' => $prefecture->name,
                                    ];
                                }),
                            ) }}"
                            data-cities="{{ json_encode(
                                $area->prefecture->flatMap(function ($prefecture) {
                                    return $prefecture->city->map(function ($city) {
                                        return [
                                            'id' => $city->id,
                                            'name' => $city->name,
                                            'prefecture_id' => $city->prefecture_id,
                                        ];
                                    });
                                }),
                            ) }}">
                            {{ $area->name }}
                            <img class="container__right-bow" src="img/material-icon/right-bow.svg" alt="右矢印">
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- prefecture --}}
            <div id="prefecture-list" style="display: none;" class="prefecture-list">
                <ul id="prefectures" class="container"></ul>
            </div>

            {{-- city --}}
            <div id="modal-overlay" class="modal-overlay" style="display: none;">
                <div class="modal-content">
                    <span id="modal-close" class="modal-close">&times;</span>
                    <h2 id="modal-title" class="modal-title">市区町村の情報</h2>
                    <div id="modal-body" class="modal-body">ここに市区町村の情報などを表示します。</div>
                </div>
            </div>
        </div>

    </section>
    {{-- コラム一覧 --}}
    <section class="section">
        <div class="h2-box">
            <img class="h2-logo" src="img/material-icon/tori.svg" alt="鳥居のアイコン">
            <h2 class="h2-title">神社について知る</h2>
        </div>
        <ul class="about">
            <li class="about__list">
                <a class="about__link" href="{{ route('about-shirine') }}">
                    神社にあるものについて知りたい
                </a>
            </li>
            <li class="about__list about__list-border">
                <a class="about__link" href="{{ route('about-worship') }}">
                    参拝方法を知りたい
                </a>
            </li>
            <li class="about__list">
                <a class="about__link" href="{{ route('about-types') }}">
                    神社の種類を知りたい
                </a>
            </li>
            <li class="about__list about__list-border"><a class="about__link"
                    href="{{ route('about-festivals') }}">神社のお祭りを知りたい</a></li>
            <li class="about__list">
                <a class="about__link" href="{{ route('about-myths') }}">
                    日本神話を知りたい
                </a>
            </li>
        </ul>
    </section>
@endsection

{{-- ここにページごとのjsを入れる --}}
@section('script', 'js/script.js')
