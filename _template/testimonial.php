<?php 
class Testimonials{
    public $description;
    public $name;
    public $rating;

    public function __construct($description, $name, $rating) {
        $this->description = $description;
        $this->name = $name;
        $this->rating = $rating;
    }
}

$testimonialsList = [
    new Testimonials("The cake was absolutely delicious and beautifully decorated! Highly recommend Artisan Cake Studio for any special occasion.", "John Doe", 5),
    new Testimonials("I ordered a custom cake for my daughter's birthday, and it exceeded all my expectations. The flavors were amazing!", "Jane Smith", 5),
    new Testimonials("Artisan Cake Studio made our wedding cake, and it was stunning! Our guests couldn't stop raving about it.", "Emily Johnson", 5),
    new Testimonials("The customer service was excellent, and the cake tasted fantastic. Will definitely order again!", "Michael Brown", 5)
];

?>

<section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>
            
            <div class="testimonials-grid" id="testimonialsGrid">
                <?php foreach ($testimonialsList as $item) { ?>
                    <div class="testimonial-card">
                        <div class="testimonial-text"><?= $item->description ?></div>
                        <div class="testimonial-author">- <?= $item->name ?></div>
                        <div class="testimonial-rating"><?php for ($i = 0; $i<$item->rating; $i++){?>
                            ★
                        <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</section>



