@if(Session::get('success'))
    <div class="alert alert-primary" role="alert">
    <i class="fa fa-times-circle"></i> {{Session::get('success')}}
</div>
@endIf
