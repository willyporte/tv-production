@if(Session::has('message'))
<div class="alert {{ Session::get('flash_type') }}">
    <p>{{ Session::get('message') }}</p>
</div>
@endif