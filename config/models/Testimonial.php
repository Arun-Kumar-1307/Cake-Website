<?php

/**
 * One customer review. Content lives in config/data/testimonials.php.
 */
class Testimonial
{
    public function __construct(
        public string $quote,
        public string $author,
        public string $occasion,
        public int $rating = 5
    ) {
    }

    /** Initials for the avatar circle, e.g. "Sarah Mitchell" → "SM". */
    public function initials(): string
    {
        $parts = preg_split('/\s+/', trim($this->author)) ?: [];
        $initials = '';

        foreach (array_slice($parts, 0, 2) as $part) {
            $initials .= mb_strtoupper(mb_substr($part, 0, 1));
        }

        return $initials !== '' ? $initials : '?';
    }

    public function stars(): int
    {
        return (int) max(1, min(5, $this->rating));
    }
}
