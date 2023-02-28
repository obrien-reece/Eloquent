@props(['trigger'])


<div class="container">
    <di class="row">
        <div class="col-md-8">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to Lutrix</h1>
                <p class="lead">We are a movie info website that aims to provide all the relevant information that is concerned with movies on demand</p>
                {{--    <hr class="my-4">--}}
                <p>If you want the most comprehensive information on movies, here is the place</p>
            </div>
            <br>
            <div class="text-center">
                <span class="display-6" style="font-family: 'Luxurious Roman', cursive;">
                    {{ $slot }}
                </span>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>Find the movie you are looking for <u>without any hustle</u></h3>

                    {{ $trigger }}

                        <div class="form-group">
                            <label for=""><small>Search for movie studio, name, description</small></label>
                            <input
                                type="text"
                                name="search"
                                class="form-control mb-2"
                                placeholder="Search for...">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </di>
</div>
