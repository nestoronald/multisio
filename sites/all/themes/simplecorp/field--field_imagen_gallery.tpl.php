<div class="field field-name-field-imagen-gallery field-type-image">
    <div class="field-items">
<?php
$items = array_reverse($items);
foreach ($items as $key => $value) {
  ?>
  <div class="field-item"><?php print render($value); ?>
  <span class="gallery_title"><?php print($value['#item']['title']); ?></span>
  </div>
  <?php
}
?>
    </div>
</div>

<!-- <div class="field field-name-field-imagen-gallery field-type-image field-label-hidden">
    <div class="field-items">
      <div class="field-item even">
        <a href="http://vulcanologia.igp.gob.pe/sites/vulcanologia.igp.gob.pe/files/imagen_prueba1_0.jpg" title="titulo de la imagen" class="colorbox init-colorbox-processed cboxElement" rel="gallery-node-131-field_imagen_gallery">
        <img typeof="foaf:Image" src="http://vulcanologia.igp.gob.pe/sites/vulcanologia.igp.gob.pe/files/styles/gallery_small_colobox/public/imagen_prueba1_0.jpg?itok=k-g7QtRz" width="185" height="160" alt="" title="titulo de la imagen">
        <span class="gallery_title">titulo de la imagen</span>
        </a>
      </div>
      <div class="field-item odd">
        <a href="http://vulcanologia.igp.gob.pe/sites/vulcanologia.igp.gob.pe/files/noavatar_0.jpg" title="titulo de la imagen 2" class="colorbox init-colorbox-processed cboxElement" rel="gallery-node-131-field_imagen_gallery">
        <img typeof="foaf:Image" src="http://vulcanologia.igp.gob.pe/sites/vulcanologia.igp.gob.pe/files/styles/gallery_small_colobox/public/noavatar_0.jpg?itok=0DGeDbF_" width="185" height="160" alt="" title="titulo de la imagen 2">
        <span class="gallery_title">titulo de la imagen 2</span>
        </a>
      </div>
    </div>
</div> -->