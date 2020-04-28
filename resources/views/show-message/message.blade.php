
{{--FORM validation message...--}}

@if ($errors->any())
    <div class="alert alert-danger fade in">
        <ul>
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif


{{--ALERT message...--}}

@if(session()->has('message'))
    <div class="alert alert-{{ session('type') }} fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ session('message') }}
    </div>
@endif
