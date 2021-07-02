@if(Session::has('success'))
<div class="alert alert-success">
{{Session::get('success')}}
</div>
@endif

@if(Session::has('fail'))
<div class="alert alert-fail">
{{Session::get('fail')}}
</div>
@endif