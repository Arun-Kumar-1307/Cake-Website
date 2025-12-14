<?php

class Gallery{
    public $name;
    public $image;

    public function __construct($name, $image) {
        $this->name = $name;
        $this->image = $image;
    }
}

$galleryItems = [
    new Gallery("Cake Detail 1", "/placeholder.svg?key=exby2"),
    new Gallery("Wedding Cake", "/placeholder.svg?key=exby2"),
    new Gallery("Birthday Cake", "/placeholder.svg?key=exby2"),
    new Gallery("Chocolate Cake", "/placeholder.svg?key=exby2"),
    new Gallery("Cake Decoration", "/placeholder.svg?key=exby2"),
    new Gallery("Custom Design", "/placeholder.svg?key=exby2")
]

?>


<section id="gallery" class="gallery">
        <div class="container">
            <h2 class="section-title">Gallery</h2>
            <p class="section-subtitle">A showcase of our finest creations</p>
            
            <div class="gallery-grid" id="galleryGrid">

                <!-- Gallery images will be loaded -->
                 <?php foreach ($galleryItems as $item) { ?>
                 <div class="gallery-item">
                    <img src = "<?= $item-> image ?>" alt="<?= $item-> name ?>">
                 </div>
                <?php } ?>
            </div>
        </div>
    </section>