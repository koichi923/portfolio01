@extends('layouts.app02')

@section('title')
<title>about | {{config('app.name')}}</title>
@endsection

@section('content')

<main id="about">
    <h2>アバウトページ</h2>
    <article id="profile">
        <img src="/img/profile.svg" alt="profile.svg">

        <h2 class="name">@KoichiWatanabe</h2>
        <ul>
            <li>Like: food</li>
            <li>Hobby: working/travel</li>
            <li>Work: junior Engineer</li>
            <li>email: brandnewaddress2017@gmail.com</li>
        </ul>
        <p class="profile">私の簡単なプロフィールです。</p>
    </article>
</main>

@endsection