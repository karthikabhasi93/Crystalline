<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php 
    // css links
    foreach($css_files as $file): ?>
  <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
  <?php endforeach; ?>
  <link rel="stylesheet" href="https://bootswatch.com/3/readable/bootstrap.min.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2" style="background:#f4f4f4;min-height:100vh">
        <h3>Admin Read</h3>

        <ul>
          <li><a href="<?=base_url('admin/')?>">Home</a></li>
          <li><a href="<?=base_url('admin/slider')?>">Slider</a></li>
          <li><a href="<?=base_url('admin/aboutus')?>">About Us</a></li>
        </ul>
      </div>
      <div class="col-md-10 ">
        <div style="padding:20px">
          <?php echo $output; ?>
        </div>
      </div>
    </div>
  </div>

  <!--  scripts -->
  <?php foreach($js_files as $file): ?>
  <script src="<?php echo $file; ?>"></script>
  <?php endforeach; ?>
</body>

</html>