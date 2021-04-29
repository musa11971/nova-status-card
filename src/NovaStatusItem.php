<?php

namespace musa11971\NovaStatusCard;

use Laravel\Nova\Makeable;

class NovaStatusItem
{
    use Makeable;

    /**
     * The name of the status item.
     *
     * @var string
     */
    public $name;

    /**
     * The type of the status item.
     *
     * @var string
     */
    public $type = 'string';

    /**
     * The value of the status item.
     *
     * @var mixed
     */
    public $value = null;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Sets the type of this item to percentage.
     *
     * @return $this
     */
    public function percentage()
    {
        $this->type = 'percentage';
        return $this;
    }

    /**
     * Sets the type of this item to string.
     *
     * @return $this
     */
    public function string()
    {
        $this->type = 'string';
        return $this;
    }

    /**
     * Sets the type of this item to status indicator.
     *
     * @return $this
     */
    public function statusIndicator()
    {
        $this->type = 'statusIndicator';
        return $this;
    }

    /**
     * Sets the value of this item.
     *
     * @return $this
     */
    public function value($callbackOrValue)
    {
        // The value should be assigned with a callback
        if(is_callable($callbackOrValue)) {
            // For status indicator, we always want a NovaStatusIndicatorValue as the value
            if($this->type == 'statusIndicator') {
                $returnedValue = $callbackOrValue(new NovaStatusIndicatorValue);

                // If no NovaStatusIndicatorValue was returned, we fabricate an empty one
                if($returnedValue instanceof NovaStatusIndicatorValue) {
                    $this->value = $returnedValue;
                }
                else $this->value = new NovaStatusIndicatorValue;
            }
            // Assign whatever value the callback returns
            else $this->value = $callbackOrValue();
        }
        // The value should be assigned directly
        else $this->value = $callbackOrValue;

        return $this;
    }
}
