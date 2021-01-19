<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('frontend/styles/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/cc75a31cdc.js"></script>
    <link rel="icon" type="image/png" href="{{ url('frontend/img/perisai.png') }}">
    <title>@yield('title')</title>
</head>
<body>

  
      @yield('content')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script>
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

       var c = function(pos){
            var lat  = pos.coords.latitude,
                long = pos.coords.longitude,
                coords = lat + ', ' + long;

                document.getElementById('google_map').setAttribute('src', 'https://maps.google.com/?q=' + coords + '&z=60&output=embed');
                google_map.style.width ='600px';
                google_map.style.height ='600px';
                document.getElementById("get_location").style.display = "none";
                alert("Jika maps tidak terlihat, silahkan zoom out/perkecil maps!");
       }     

       document.getElementById('get_location').onclick = function(){
           navigator.geolocation.getCurrentPosition(c);
           return false;
       }   

    </script>
</body>
</html>