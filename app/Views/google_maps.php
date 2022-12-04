<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href=<?php echo base_url('/css/styleMaps.css'); ?>>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Google Maps</title>
</head>

<body class="container">
  <div class="row">
    <div class="child-maps col-12 container-maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.609384696619!2d-74.05762342424995!3d4.663531041977048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a5e4af210e5%3A0x80cf36185ca00890!2sEAN%20-%20Legacy!5e0!3m2!1ses!2sco!4v1670079704834!5m2!1ses!2sco" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-12">
      <h1>
        Google Maps de la ubicación de la Universidad EAN
      </h1>
    </div>
    <div class="col-12">
      <p class="text--center"><a href="<?php echo base_url('/task') ?>">Regresar</a></p>
    </div>
  </div>

</body>

</html>