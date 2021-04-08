@extends('default')
@section('content')
<article class="create-form a-popup">
    <form class="create-form__form" action="/request" method="POST" enctype="multipart/form-data">
        @csrf

        <section class="create-form__section">
            <label for="name">Naam</label>
            <input class="create-form__input" name="name" id="name" type="text" />
        </section>

        <section class="create-form__section">
            <label for="email">Email</label>
            <input class="create-form__input" name="email" id="email" type="text" />
        </section>

        <section class="create-form__section">
            <label for="phone_number">Telefoon nummer</label>
            <input class="create-form__input" name="phone_number" id="phone_number" type="tel" placeholder="0636418677"/>
        </section>

        <section class="create-form__section">
            <label for="question">Oppasvraag</label>
            <textarea input class="create-form__input create-form__input--big" name="description" id="description" type="text"></textarea>
        </section>

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Versturen</button>
        </section>
        
    </form>
</article>
@endsection
