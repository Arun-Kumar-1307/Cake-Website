<?php

/**
 * One cake on the menu.
 *
 * Content for these lives in config/data/menu-items.php — add a cake there,
 * it appears on the site and in the detail modal automatically.
 */
class MenuItem
{
    /**
     * @param string   $category    Filter key: chocolate | vanilla | specialty
     * @param string[] $ingredients Chips shown in the detail modal
     * @param array[]  $sizes       [['label' => '6" round', 'serves' => '8–10', 'price' => 45], ...]
     * @param string   $badge       Optional ribbon, e.g. "Bestseller" ('' hides it)
     */
    public function __construct(
        public int $id,
        public string $name,
        public string $shortDescription,
        public string $longDescription,
        public string $category,
        public string $image,
        public array $ingredients = [],
        public array $sizes = [],
        public string $badge = '',
        public float $rating = 5.0,
        public int $reviewCount = 0,
        public string $leadTime = '48 hours notice'
    ) {
    }

    /** Lowest listed price — what the card shows as "from". */
    public function basePrice(): int
    {
        $prices = array_column($this->sizes, 'price');

        return $prices ? (int) min($prices) : 0;
    }

    /** Human label for the category filter key. */
    public function categoryLabel(): string
    {
        return match ($this->category) {
            'chocolate' => 'Chocolate',
            'vanilla'   => 'Vanilla & Fruit',
            default     => 'Specialty',
        };
    }

    /** Rounded star count (1–5) for star-icon rendering. */
    public function stars(): int
    {
        return (int) max(1, min(5, round($this->rating)));
    }
}
