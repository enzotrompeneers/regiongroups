<form class="review" action="/portfolios/{{ $portfolio->slug }}/reviews" method="post">
    @csrf
    <div class="grid-x">
        <div class="cell">
            <label for="rating">Rating</label>
            <input type="text" id="rating" value="{{ old('rating') }}" name="rating" placeholder="Rating" required>
        </div>
        <div class="cell">
            <label for="body">Review</label>
            <textarea name="body" id="body" required>{{ old('body') }}</textarea>
        </div>
        <div class="cell">
            <button type="submit" class="button">Review toevoegen</button>
        </div>
    </div>
</form>
@include('partials.errors')