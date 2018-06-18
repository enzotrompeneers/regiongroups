<form class="review-form" action="/portfolios/{{ $portfolio->slug }}/reviews" method="post">
    @csrf
    <div class="grid-x">
        <div class="cell">
            <div class="rating">
                @for ($i = 5; $i > 0; $i--)
                <span>
                    <input type="radio" name="rating" id='str<?=$i?>' value="<?=$i?>">
                    <label for="str<?=$i?>" class="fa fa-star"></label>
                </span>
                @endfor
            </div>
        </div>
        <div class="cell">
            <label for="body">Review</label>
            <textarea rows="4" name="body" id="body" placeholder="Review..." required>{{ old('body') }}</textarea>
        </div>
        <div class="cell">
            <button type="submit" class="button">Review toevoegen</button>
        </div>
    </div>
</form>
@include('partials.errors')

<script>
    
</script>