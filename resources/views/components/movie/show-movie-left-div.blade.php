<div>
    <img src="{{ asset('/storage/' . $movie->image) }}" style="border-radius: 5px" width="100%" alt="Banner Image">
</div>
<div class="mt-4" style="background-color: #e5e7eb;border-radius: 4px;padding: 22px">
    <strong><u><span style="font-size: 20px">Movie Description</span></u></strong><br>
    <span>{!! \Stevebauman\Purify\Facades\Purify::clean($movie->description) !!}</span>
</div>
