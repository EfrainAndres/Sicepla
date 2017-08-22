@extends('auth.layouts.app')

@push('styles')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('assets/pages/css/login-5.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
@endpush

@section('content')
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset mt-login-5-bsfix">
                <div class="login-bg" style="background-image:url({{ asset('assets/pages/img/login/bg1.jpg') }})">
                    <img class="login-logo" src="{{ asset('assets/pages/img/login/logo.png') }}" />
                </div>
            </div>
            <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                <div class="login-content">
                    <h1>{{ $title or config('app.name') }}</h1>

                    <p> {{ $description or config('app.description') }} </p>

                    {!! Form::open(['role' => 'form', 'id' => 'form-login', 'novalidate', 'method' => 'POST', 'url' => route('login')]) !!}

                       {{--@include('layout.form-status')--}}

                        <div class="row">
                            <div class="col-xs-6">
                                {!! Field::email('email', old('email'), ['required', 'max' => 60, 'label' => 'Correo', 'autofused' => 'true'], ['icon' => 'fa fa-envelope-o', 'help' => 'Digita un correo.']) !!}
                            </div>
                            <div class="col-xs-6">
                                {!! Field::password('password', ['required', 'label' => 'Contraseña'], ['icon' => 'fa fa-key', 'help' => 'Digita la contreaseña.']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="rem-password">
                                    {!! Field::checkbox('remember', old('remember'), ['label' => 'Recordarme', old('remember') ? 'checked' : '']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                {{ Form::submit('Ingresar', ['class' => 'btn green']) }}
                            </div>
                            <div class="col-sm-12 text-right">
                                <div class="forgot-password">
                                    <a class="forget-password" href="{{ route('password.request') }}">¿Olvidó su cotraseña?</a>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
                <div class="login-footer">
                    <div class="row bs-reset">
                        <div class="col-xs-12 bs-reset">
                            <div class="login-copyright text-right">
                                <p>Copyright © {{ $footer or config('app.author') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugins')
<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/global/plugins/jquery-validation/js/localization/messages_es.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>



<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/pages/scripts/login-5.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/scripts/form-validation-md.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->



@endpush

@push('functions')
    <script type="text/javascript">
        var rules = {
            email: { email: true, required: true },
            password: { minlength: 5, required: true }
        };
        var messages = { };
        var form = $('#form-login');
        jQuery(document).ready(function() {
            FormValidationMd.init(form, rules, messages);
        });
    </script>
@endpush