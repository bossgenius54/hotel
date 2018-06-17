@extends('layouts.admin')

@section('content')
    <!-- Contact -->

    <div class="contact_form_section">
        <div class="container">
            <div style="display: block; max-height: 500px; overflow-y: auto; -ms-overflow-style: -ms-autohiding-scrollbar;" class="text-center">
                <table class="table table-hover table-striped  table-responsive-md">
                    <thead>
                    <tr class="row">
                        <th scope="col" class="col-md-1">#</th>
                        <th scope="col" class="col-md-2">Имя</th>
                        <th scope="col" class="col-md-2">Эл.Почта</th>
                        <th scope="col" class="col-md-4">Доп.Инфо</th>
                        <th scope="col" class="col-md-2">Статус</th>
                        <th scope="col" class="col-md-3">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($elems as $key => $elem)
                        <tr class="row">
                            <th scope="row" class="col-md-1">{{$key + 1}}</th>
                            <td class="col-md-2">{{$elem->name}}</td>
                            <td class="col-md-2"><a href="mailto:{{$elem->email}}" >{{$elem->email}}</a> </td>
                            <td class="col-md-4">
                                <div class="elements_accordions">
                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center"><div>WIshes</div></div>
                                        <div class="accordion_panel">
                                            <p>{{$elem->wishes}} Телефон: {{$elem->phone}}</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-2">
                                <a href="/" class="btn btn-outline-danger btn-xs" ><i class="fa fa-times-circle"></i>
                                    Отклонить
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


