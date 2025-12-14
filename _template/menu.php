<?php

class MenuDataItem {
    public $id;
    public $name;
    public $description;
    public $category;
    public $price;
    public $image;

    public function __construct($id, $name, $description, $category, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->price = $price;
        $this->image = $image;
    }
}

$menuItems = [
    new MenuDataItem(1, "Classic Chocolate Cake", "Rich, decadent chocolate cake with silky frosting", "chocolate", 45, "/placeholder.svg?key=79j2n"),
    new MenuDataItem(2, "Vanilla Dreams", "Fluffy vanilla cake with buttercream and fresh berries", "vanilla", 40, "/placeholder.svg?key=pefs2"),
    new MenuDataItem(3, "Red Velvet Romance", "Elegant red velvet with cream cheese frosting", "specialty", 50, "/placeholder.svg?key=ea5pt"),
    new MenuDataItem(4, "Chocolate Truffle", "Double chocolate with ganache and truffles", "chocolate", 55, "/placeholder.svg?key=x1jlo"),
    new MenuDataItem(5, "Lavender Vanilla", "Delicate lavender and vanilla cake with floral notes", "vanilla", 48, "/placeholder.svg?key=acmuo"),
    new MenuDataItem(6, "Black Forest", "Classic black forest with cherries and chocolate", "specialty", 52, "/placeholder.svg?key=xdlzu"),
    new MenuDataItem(7, "Strawberry Bliss", "Light sponge with fresh strawberries and cream", "vanilla", 42, "/placeholder.svg?key=2oo96"),
    new MenuDataItem(8, "Salted Caramel Chocolate", "Chocolate cake with salted caramel drizzle", "chocolate", 50, "/placeholder.svg?key=ub98j")
];
?>

<section id="menu" class="menu">
        <div class="container">
            <h2 class="section-title">Our Menu</h2>
            <p class="section-subtitle">Exquisite flavors crafted to perfection</p>
            
            <div class="menu-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="chocolate">Chocolate</button>
                <button class="filter-btn" data-filter="vanilla">Vanilla</button>
                <button class="filter-btn" data-filter="specialty">Specialty</button>
            </div>

            <div class="menu-grid" id="menuGrid">
            <?php foreach ($menuItems as $item) {?>
                <div class="menu-card" data-category = "<?= $item->category?>">
                    <img src = "<?= $item ->image?>" alt="<?= $item->name?>" class="menu-card-image">
                    <div class="menu-card-content">
                        <h3 class="menu-card-title"><?= $item->name?></h3>
                        <p class="menu-card-description"><?php $item->description?></p>
                        <div>
                            <span class="menu-card-price-label">Price from</span>
                            <div class="menu-card-price">$<?= $item->price?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>