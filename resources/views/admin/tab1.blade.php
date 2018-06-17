@extends('layouts.admin')

@section('content')
    <!-- Contact -->

    <div class="contact_form_section">
        <div class="container">
            @foreach($elems as $elem)
                <pre>{{$elem->name}}</pre>
                <pre>{{$elem->wishes}}</pre>
                <pre>{{$elem->status}}</pre>
                <hr />
            @endforeach
        </div>
    </div>
@endsection


