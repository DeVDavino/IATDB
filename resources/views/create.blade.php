@extends('default')
@section('content')
<article class="create-form a-popup">
    <form class="create-form__form" action="/pets/create" method="POST" enctype="multipart/form-data">
        @csrf

        <section class="create-form__section">
            <label for="name">Naam</label>
            <input class="create-form__input" name="name" id="name" type="text" />
        </section>

        <section class="create-form__section">
            <label for="animal">Soort</label>
            <input class="create-form__input" name="animal" id="animal">
                
            </input>
        </section>

        <section class="create-form__section">
            <label for="kind">Ras</label>
            <input class="create-form__input" name="kind" id="kind" type="text">
                
            </input>
        </section>
        
        <section class="create-form__section">
            <label for="hourly_rate">Uurtarief</label>
            <input class="create-form__input" name="hourly_rate" id="hourly_rate">
                
            </input>
        </section>

        <section class="create-form__section time-section__wrapper">

            <section class="create-form__section">
                <label for="time_from">Van</label>
                <input class="create-form__input" name="time_from" id="time_from" type="text" placeholder="00:00" required>
                    
                </input>
            </section>

            <section class="create-form__section">
                <label for="time_to">Tot</label>
                <input class="create-form__input" name="time_to" id="time_to" type="text" placeholder="00:00" required>
                    
                </input>
            </section>

        </section>

        <section class="create-form__section">
            <label for="date">Datum</label>
            <input class="create-form__input" name="date" id="date" type="date">
                
            </input>
        </section>

        <section class="create-form__section">
            <label for="description">Description</label>
            <textarea input class="create-form__input create-form__input--big" name="description" id="description" type="text"></textarea>
        </section>

        <section class="create-form__section">
            <label for="image">Afbeelding</label>
            <input class="create-form__input" id="image" name="image" type="file" accept="image/*">
              
            </input>
        </section>

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Versturen</button>
        </section>
        
    </form>
</article>
@endsection
