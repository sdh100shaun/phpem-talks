@extends ('layouts.master')

@section('content')
    <div class="col-lg-6 col-md-8 col-sm-12 center-block">
        <h1> Speaker Details </h1>
        {!! BootForm::vertical() !!}
        {!! BootForm::text('Firstname')  !!}
        {!! BootForm::text('Lastname')  !!}
        {!! BootForm::text('@Twitter')  !!}
        {!! BootForm::text('Telno')  !!}
        {!! BootForm::email('Email')  !!}
        {!! BootForm::textarea('Excerpt')  !!}
        {!! BootForm::textarea('Notes')  !!}

        {!!  BootForm::radios('organiser', 'Details taken by', $organisers, null)!!}
        {!! BootForm::submit('Add') !!}
        {!! BootForm::close() !!}
    </div>
@endsection