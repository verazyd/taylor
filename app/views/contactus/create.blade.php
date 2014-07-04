@extends('layouts.master')
@section('content')
<div class="container" style="margin-top: 15%;margin-bottom: 10%;">
    <div class="row">
        <div class="col-md-6">
            <h4>Receive a free case evaluation</h4>
            {{ Form::open(['method' => 'POST', 'route' => 'contactus.store']) }}
            <!--Email Form Input -->
            <div class="form-group">
                {{ Form::label('email', 'Email* ') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email Address',  'required' => 'required']) }}
                {{ errors_for('email', $errors) }}
            </div>
            <!--From Form Input -->
            <div class="form-group">
                {{ Form::label('from', 'From* ') }}
                {{ Form::text('from', null, ['class' => 'form-control', 'placeholder' => 'Your Name', 'required' => 'required']) }}
                {{ errors_for('from', $errors) }}
            </div>
            <div class="form-group">
                {{ Form::label('subject', 'Subject* ') }}
                {{ Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Subject...', 'required' => 'required']) }}
                {{ errors_for('subject', $errors) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'Description* ') }}
                {{ Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Explain in details about any legal problems']) }}
                {{ errors_for('description', $errors) }}
            </div>
            <button type="submit" class="btn btn-primary form_submit">
                <i class="fa fa-envelope"></i>&nbsp;
                Submit
            </button>
            {{ Form::close() }}
        </div>
        <div class="col-md-6">
            <h3>Locations:</h3>
            <script src="http://maps.google.com/maps/api/js?sensor=false"type="text/javascript"></script>
            <div id="map" style="width: 610px; height: 445px;"></div>
            <script type="text/javascript">

                var locations = [
                    ['101 Hope Street, Brunswick VIC 3056',  -37.813260, 144.960406,2],
                    ['Level 13, 200 Queen Street, VIC 3000​', -37.763139, 144.954549, 2],
                    ['Office 15, The Clocktower Complex, 255 Drummond Street, Carlton VIC 3053​', -37.799560, 144.967933, 4],
                    ['Level 26, 1 Bligh Street, Sydney NSW 2000.', -33.864492, 151.211007,1]
                ];

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 5,
                    center: new google.maps.LatLng(-37.82, 144.98),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                var infowindow = new google.maps.InfoWindow();

                var marker, i;

                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
            </script>
        </div>
<!--        <div class="col-md-2">-->
<!--            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>-->
<!--            {{ HTML::script("js/feedback._form.js")}}-->
<!--            <div class="feedback">-->
<!--                <a id="feedback_button">Feedback</a>-->
<!---->
<!--                <div class="form">-->
<!--                    <h2>Please Send Us Your Feedback</h2>-->
<!--                    <span class="status"></span>-->
<!--                    <textarea id="feedback_text"></textarea>-->
<!--                    <input type="button" value="Send" id="submit_form" />-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
    </div>
</div>
@stop
