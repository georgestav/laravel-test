<form action="/movies/rate" method="post">
    @csrf
    <input type="hidden" name="movie_id" value="{{$movie->id}}">
    <div class="input__field">
        <label for="text">Your review</label>
        <input id="text" name="text" type="text">
    </div>
    
    <div class="input__field">
        <label for="user_id">Your ID</label>
        <input id="user_id" name="user_id" type="number">
    </div>
    
    {{-- <div class="input__field">
        <label for="rating">Rating</label>
        <input id="rating" name="rating" type="number">
    </div> --}}

    <div class="input__field">
        <button type="submit">Submit</button>
    </div>    
</form>
