@extends('layouts.app')

{{-- ここにページごとのcssを入れる --}}
@section('stylesheet', asset('css/cities/index.css'))

{{-- ここにページのタイトルを入れる --}}
@section('title', 'いい神社')

{{-- ここにメインのコンテンツを入れる --}}
@section('content')
    <section class="section">
        <h1 class="h1__title">{{ $city_name }}の神社一覧</h1>

        <ul class = "filter">
            <li class="filter__area-box">
                <p class="filter__key">エリア</p>
                <p class="filter__value">{{ $city_name }}</p>
            </li>
            <li class="filter__condition-box">
                <p class="filter__key">条件</p>
                <p class="filter__value">条件を入力する</p>
            </li>
        </ul>
        <ul class="city-lists">
            @foreach ($shirines as $shirine)
                <li class="city-card">
                    <a href="#">
                        <h2 class="city-list__name">{{ $shirine->name }}</h2>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
{{-- ここにページごとのjsを入れる --}}
@section('script', 'js/script.js')
