@extends('layouts.app')

@section('content')
    <!-- Contact -->

    <div class="contact_form_section">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Contact Form -->
                    <div class="contact_form_container">
                        <div class="contact_title text-center">Login</div>
                        <form action="{{ route('login') }}" method="post"  aria-label="{{ __('Login') }}" id="contact_form" class="contact_form text-center">
                            @csrf
                            <input  type="email"
                                    name="email"
                                    id="contact_form_name"
                                    class="contact_form_name input_field"
                                    placeholder="Email"
                                    required="required" />
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <input type="password"
                                   id="contact_form_subject"
                                   class="contact_form_name input_field"
                                   placeholder="Password"
                                   name="password"
                                   required="required"
                                   data-error="Subject is required." />
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <br/>
                            <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Отправить<span></span><span></span><span></span></button>

                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color:white;padding-top: 30px;">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


