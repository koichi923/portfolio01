@extends('layouts.app02')

@section('title')
<title> works | {{config('app.name')}}</title>
@endsection

@section('content')
<main id="works">
    <h2>ワークスページ</h2>
    <p>このページでは、私がこれまでに作成した作品を掲載しています。</p>

    <article>
        <section>
            <h3>TODOアプリ</h3>
            <ul>
                <a href="http://54.199.77.31/tasks">TODO</a>
                <li>簡単なTODO管理アプリです。</li>
            </ul>
            <p class="">xxx</p>
        </section>
    </article>
</main>

@endsection