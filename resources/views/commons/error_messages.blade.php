@if ( count($errors)>1 )
    <ul class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
         <li class="ml-4">{{ $error }}</li>
        @endforeach
    </ul>
@endif