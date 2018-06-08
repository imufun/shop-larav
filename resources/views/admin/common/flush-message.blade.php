
@if(Session::has('flash_message_error'))

<div class="alert alert-danger alert-dismissible fade show messageTimeout" role="alert">
    {!! session('flash_message_error') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(Session::has('flash_message_logout'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    {!! session('flash_message_logout') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif