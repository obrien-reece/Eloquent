@props(['labelName', 'value', 'rows' => 15])

<div class="form-group">
    <label style="color: gray">{{ $labelName }}</label>
    <textarea name="description" id="" class="form-control" cols="64" rows="{{ $rows }}">{{ $value }}</textarea>
</div>
