<?php

/**
 * One photo in the gallery. Content lives in config/data/gallery-items.php.
 */
class GalleryItem
{
    /**
     * @param string $focus Which part of the photo to keep when the tile crops
     *                      it — any CSS object-position value, e.g. 'center top'.
     *                      Set this when a tall photo loses its subject.
     */
    public function __construct(
        public string $title,
        public string $tag,
        public string $image,
        public string $alt = '',
        public string $focus = 'center'
    ) {
    }

    /** Fall back to the title when no dedicated alt text is written. */
    public function altText(): string
    {
        return $this->alt !== '' ? $this->alt : $this->title;
    }
}
