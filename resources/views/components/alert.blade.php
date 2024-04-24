@props(['type','text'])
<div class="alert alert-{{$type}}" role="alert">
    {{$slot}}
</div>
