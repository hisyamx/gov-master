@if(count($errors) >= 1 )
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() AS $error)
    <ul>
        <li>{{$error}}</li>
    </ul>
    <button class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>
    @endforeach
</div>
@endif

@if(session('success'))

<div class="alert alert-success" role="alert">
    {{ session('success')}}
    <button class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>
</div>

@endif

@if(session('error'))

<div class="alert alert-danger" role="alert">
    {{ session('error')}}
    <button class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>
</div>

@endif
