@extends('layouts.admin')

@section('content')
    <!-- Contact -->

    <div class="contact_form_section">
        <div class="container">
            <div class="row">
                <button type="button" class="btn btn-info btn-lg col-md-2" data-toggle="modal" data-target="#myModal">Жаңалық қосу</button>
            </div>
            <br />
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Жаңалықты қосу</h4>
                        </div>
                        <div class="modal-body">
                            <div class="contact_form_container">
                                <form action="{{ route('insert-news') }}" method="post"  id="contact_form" class="contact_form text-center">
                                    @csrf
                                    <input  type="text"
                                            name="title"
                                            id="contact_form_name"
                                            class="contact_form_name input_field"
                                            placeholder="Жаңалық атауы"
                                            style="width: 100%;"
                                            required="required" />
                                    <input  type="text"
                                            name="img_name"
                                            id="contact_form_name"
                                            class="contact_form_name input_field"
                                            placeholder="Суреттін атауы"
                                            style="width: 100%;"
                                            required="required" />
                                    <textarea id="contact_form_message" class="text_field contact_form_message" name="text" rows="4" required="required" data-error="Текст"></textarea>
                                </span>
                                    <br/>
                                    <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Жіберу<span></span><span></span><span></span></button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Жабу</button>
                        </div>
                    </div>

                </div>
            </div>
            <div style="display: block; max-height: 500px; overflow-y: auto; -ms-overflow-style: -ms-autohiding-scrollbar;" class="text-center">
                <table class="table table-hover table-striped  table-responsive-md">
                    <thead>
                    <tr class="row">
                        <th scope="col" class="col-md-1">#</th>
                        <th scope="col" class="col-md-2">Название</th>
                        <th scope="col" class="col-md-3">Фото</th>
                        <th scope="col" class="col-md-4">Текст</th>
                        <th scope="col" class="col-md-2"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($elems as $key => $elem)
                        <tr class="row">
                            <th scope="row" class="col-md-1">{{$key + 1}}</th>
                            <td class="col-md-2">{{$elem->title}}</td>
                            <td class="col-md-3">
                                <img src="/images/news/{{$elem->img_name}}" alt="here was img" style="width: 100px;" />
                            </td>
                            <td class="col-md-4">
                                <div class="elements_accordions">
                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center"><div>Кликните что бы смотреть больше</div></div>
                                        <div class="accordion_panel">
                                            <p>{{$elem->text}}</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-2">
                                <a class="btn btn-outline-danger" style="border:0!important;" href="/adminPanel/delete/{{$elem->id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


