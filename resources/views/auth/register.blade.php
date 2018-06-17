@extends('layouts.app')

@section('content')

    <div class="contact_form_section">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Contact Form -->
                    <div class="contact_form_container">
                        <div class="contact_title text-center">Login</div>
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" id="contact_form" class="contact_form text-center">
                            @csrf
                            <input  type="text"
                                    name="name"
                                    id="contact_form_name"
                                    class="contact_form_name input_field"
                                    placeholder="Name"
                                    required="required" />
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
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
                                   data-error="Subject is required.">
                            <br/>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                            <input type="password"
                                   id="contact_form_subject"
                                   class="contact_form_name input_field"
                                   placeholder="Password confirmation"
                                   name="password_confirmation"
                                   required="required"
                                   data-error="Subject is required.">
                            <br/>
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                            <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Sign up<span></span><span></span><span></span></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Contact -->
