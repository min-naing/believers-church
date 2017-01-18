@extends('layouts.main')

@section('title', 'Contact')

@section('styles')

    <style>
        #contactform .has-error label {
            color: #a94442;
        }
        #contactform .has-error input {
            border-color: #a94442;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        }
        #contactform .has-error input:focus {
            border-color: #843534;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        }

    </style>

    @stop

@section('header_script')
    {{--<script src='https://www.google.com/recaptcha/api.js'></script>--}}
@stop

@section('slider')

    @include('partials._page_header')

@stop

@section('content')

    <section class="main container sbr clearfix" id="content">

        <!-- - - - - - - - - - Breadcrumbs - - - - - - - - - - - - -->

        <div class="breadcrumbs">

            <a title="Home" href="index.html">Home</a>
            <span>Contact</span>

        </div><!--/ .breadcrumbs-->

        <!-- - - - - - - - - end Breadcrumbs - - - - - - - - - - - -->

        <div id="map" class="map"></div><!--/ #map-->

        <div class="nine columns">

            <h3>Send an Email</h3>

            <section id="contact">

                @if(Session::has('success'))
                    <p class="info type-2">{{ Session::get('success') }}</p>
                @endif

                <form method="post" action="{{ route('contactus.store') }}" class="comments-form" id="contactform">
                    {{ csrf_field() }}

                    <p class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" />
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </p>

                    <p class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}" />
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </p>

                    <p class="input-block {{ $errors->has('message') ? 'has-error' : '' }}">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" cols="30" rows="10">{{ old('message') }}</textarea>
                        <div>
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        </div>
                    </p>

                    <p class="input-block {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">
                        <label for="verify">Are you human?</label>
                        {!! app('captcha')->display() !!}
                        <div>
                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                        </div>
                    </p>

                    <p class="input-block">
                        <button class="button default" type="submit" id="submit">Submit</button>
                    </p>

                </form><!--/ .comments-form-->

            </section><!--/ #contact-->

        </div><!--/ .nine .columns-->

        <div class="seven columns">

            <h3>Main Office</h3>

            <span>
				Address:   &nbsp;&nbsp;&nbsp;&nbsp; 12 Street, Los Angeles, CA, 94101 <br />
				Phone:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   +1 800 123 4567 <br />
				FAX:       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;   +1 800 891 2345 <br />
				Email:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; testmail@sitename.com
			</span>

        </div><!--/ .seven .columns-->


    </section><!--/ .main -->

@stop