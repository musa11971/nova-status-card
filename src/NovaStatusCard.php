<?php

namespace musa11971\NovaStatusCard;

use Laravel\Nova\Card;

class NovaStatusCard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * The meta information of the card.
     *
     * @var string
     */
    public $meta = [
        'title' => 'Status',
        'items' => [],
        'localize' => []
    ];

    public function __construct($component = null)
    {
        parent::__construct($component);

        $this->meta['localize']['noDataString'] = __('No data');
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-status-card';
    }

    /**
     * Sets the title of the card.
     *
     * @param string $title
     */
    public function title($title)
    {
        $this->meta['title'] = $title;
        return $this;
    }

    /**
     * Adds an item to the card.
     *
     * @param NovaStatusItem $item
     * @return NovaStatusCard
     */
    public function item($item)
    {
        $this->meta['items'][] = $item;
        return $this;
    }

    /**
     * Sets the items of the card.
     *
     * @param NovaStatusItem[] $items
     * @return NovaStatusCard
     */
    public function items($items)
    {
        $this->meta['items'] = $items;
        return $this;
    }
}
