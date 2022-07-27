<center><h1>test page</h1></center>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif