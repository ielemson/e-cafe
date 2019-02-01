
@if(count($errors))

@foreach($errors->all() as $error)
<div class="row col-sm-12 displaystyle-leftborder displaystyle-rightborder displaystyle-danger  displaystyle-sm">
<strong>{{$error}}</strong>
</div>
@endforeach

@endif