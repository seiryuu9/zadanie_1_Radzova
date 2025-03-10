<?php

$jsonData = file_get_contents('../2117_infinite_loop/parts/galeria.json');

$gallery = json_decode($jsonData, true);

$imagesCount = count($gallery['images']);
?>
<section id="gallery" class="tm-gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-title">Our Gallery</h2>
            </div>
        </div>
        <div class="row tm-gallery">
            <?php for ($i = 0; $i < $imagesCount; $i++): ?>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="tm-gallery-item">
                        <a href="<?php echo htmlspecialchars($gallery['images'][$i]['src']); ?>" target="_blank">
                            <img src="<?php echo htmlspecialchars($gallery['images'][$i]['src']); ?>" alt="<?php echo htmlspecialchars($gallery['images'][$i]['alt']); ?>" class="img-fluid">
                        </a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>