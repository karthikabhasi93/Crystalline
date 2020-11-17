<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         html, body {
        margin: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-color: #000;
      }
    </style>
</head>
<body>
    
<script src="https://pchen66.github.io/js/three/three.min.js"></script>
<script src="https://pchen66.github.io/js/panolens/panolens.min.js"></script>
<script>

const panorama = new PANOLENS.ImagePanorama('<?= base_url('assets/images/360/360.jpg') ?>' );
const viewer = new PANOLENS.Viewer( { output: 'console' } );
viewer.add( panorama );

</script>
</body>
</html>