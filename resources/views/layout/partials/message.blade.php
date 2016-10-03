@if($message= session()->get('message'))
<div class='alert alert-danger'>
    {{Session::get('message')}}
</div>
@endif

@if(count($errors))
<div class="alert alert-warning">
    <ul>
        @foreach($errors->toArray() as $error)
        <li>{{ $error[0] }}</li>
        @endforeach
    </ul>
</div>
@endif