@props(['labelName', 'value', 'name' => 'description', 'rows' => 15])

<div class="form-group">
    <label style="color: gray">{{ $labelName }}</label>
    <textarea name="{{ $name }}" id="" class="form-control" cols="64" rows="{{ $rows }}">{{ $value }}</textarea>
</div>
