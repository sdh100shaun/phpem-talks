@extends ('layouts.master')

@section('content')
    <div class="col-lg-6 col-md-8 col-sm-12 center-block">
        <h1> Speaker Details </h1>
        {!! BootForm::vertical() !!}
        {!! BootForm::text('firstname')  !!}
        {!! BootForm::text('lastname')  !!}
        {!! BootForm::text('@twitter')  !!}
        {!! BootForm::text('telno')  !!}
        {!! BootForm::email('email')  !!}
        {!! BootForm::textarea('excerpt')  !!}
        {!! BootForm::textarea('notes')  !!}

        {!! BootForm::radios('organiser', 'Details taken by', $organisers, null)!!}
        {!! BootForm::submit('add') !!}
        {!! BootForm::close() !!}
    </div>
@endsection