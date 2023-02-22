<div style="background-color: white;padding: 24px;border-radius: 4px">
    <div class="border-bottom">
        <small><span>Posted {{ $movie->created_at->diffForHumans() }}</span></small>
        <br>
        <strong><span class="card-title" style="font-size: 23px">{{ $movie->name }}</span></strong>
    </div>

    <div class="mt-4 border-bottom">
        <small><span>Director(Executive Director)</span></small>
        <div>
            <span style="font-size: 18px">Christopher Nolan</span><br>
        </div>
        <div class="mt-3">
            <i class="fa-solid fa-xl fa-envelope"></i>
            <i class="fa-brands fa-xl fa-fw fa-telegram"></i>
            <i class="fa-brands fa-xl fa-square-facebook"></i>
        </div>
    </div>
    <div class="mt-3">
        <span>Rate the movie</span>
    </div>

</div>
