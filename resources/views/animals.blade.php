@extends('default')
@section('content')
<li class="a-popup u-list-style-none gridCard">
    <a href="">
    <article>
        <header class="gridCard__header u-flex-v-center">
            <h2 class="gridCard__heading">{{$animal->name}}</h2>
        </header>
        <figure class="gridCard__figure">
            <img class="gridCard__image" src="{{$animal->image}}" alt=""/>
        </figure>
        <section class="gridCard__textSection u-flex-v-center">
            <p class="gridCard__text">Description: {{$animal->description}}</p>
        </section>
    </article>
    </a>
</li>
@endsection