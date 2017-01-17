@extends('layouts.main')

@section('title', 'Contact')


@section('slider')

    @include('partials._page_header')

@stop

@section('content')

    <section class="main container sbr clearfix">

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

                <form method="post" action="" class="comments-form" id="contactform">

                    <p class="input-block">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" />
                    </p>

                    <p class="input-block">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" id="email" />
                    </p>

                    <p class="input-block">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </p>

                    <p class="input-block">
                        <label for="verify">Are you human?</label>
                        <iframe src="php/capcha_page.php" height="29" width="80" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" class="capcha_image_frame" name="capcha_image_frame"></iframe>
                        <input class="verify" type="text" id="verify" name="verify" />
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