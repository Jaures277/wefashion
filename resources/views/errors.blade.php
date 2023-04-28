@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
        <i class="fa fa-times-circle"></i> {{ $error }}
    @endforeach
</div>
@endIf
