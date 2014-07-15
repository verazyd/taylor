@extends('layouts.master')

@section('content')
    <div class="row" style="margin: 1%;">
        <div class="col-md-8">
        <script src="http://maps.google.com/maps/api/js?sensor=false"type="text/javascript"></script>
           <div id="map" style="width: 750px; height: 400px;"></div>
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
        <div class="col-md-4">
            <p style="font-weight: bold; font-size: 25px;">Taylor&Preston Branches:</p>
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">VIC</a></li>
                    <li><a href="#tabs-2">Sydney</a></li>
                    <li><a href="#tabs-3">QLD</a></li>
                </ul>
                <div id="tabs-1">
                    <p>Level 13, 200 Queen Street, VIC 3000​.</p>
                    <p>101 Hope Street, Brunswick VIC 3056</p>
                    <p>Office 15, The Clocktower Complex, 255 Drummond Street, Carlton VIC 3053</p>
                </div>
                <div id="tabs-2">
                    <p>Level 26, 1 Bligh Street, Sydney NSW 2000.</p>
                </div>
                <div id="tabs-3">
                    <p>Coming Soon...</p>
                </div>

            </div>
            <div class="contact_form">

            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partials._contact_form')
            </div>
        </div>

@stop