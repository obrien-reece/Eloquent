<div class="col-md-3 mb-3">
    <div class="card box-shadow-hover pointer">
        <div class="card shadow">
            <a href="/movies/{{ $movie->slug }}">
                <img src="/images/banner.jpg" style="border-radius: 5px" width="100%" alt="">
            </a>
            <div class="card-body">
                <span class="card-left-text">
                    <strong>{{ $movie->name }}</strong>
                </span>
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <small style="padding-right: 6px"><i class="fa-sharp fa-solid fa-film"></i></small>
                        <span> {{ $movie->director->name }}</span>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small style="padding-right: 6px"><i class="fa-solid fa-building"></i></small>
                        <span> {{ $movie->studio }}</span>
                    </div>
                    <small>
                        <span>{!! Str::of(\Stevebauman\Purify\Facades\Purify::clean($movie->description))->limit(100) !!}</span>
                    </small>
                </div>
                <div class="text-center">
                    <a href="/movies/{{ $movie->slug }}"
                       style="padding: 10px 74px 10px 74px"
                       class="btn btn-block btn-primary">
                        See Details
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
