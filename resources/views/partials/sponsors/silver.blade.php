<div class="4u 12u(medium)" style="float:left; padding: 5px;">

    <!-- Box -->
    <a href="{{ $sponsor->website }}" class="feature-link">
        <section class="feature box" style="max-width: 20em; margin-left: auto; margin-right: auto;">
            <img src="{{ asset('storage/'.$sponsor->image) }}" alt="" class="image sponsor-image" />
        <!--
            <div>
                <header>
                    <h2>{{ $sponsor->name }}</h2>
                </header>
                <p>{{ $sponsor->desc }}</p>
            </div>
            -->
        </section>
    </a>

</div>