<?php

namespace musa11971\NovaStatusCard;

class NovaStatusIndicatorValue
{
    /**
     * The status of the status indicator.
     *
     * @var mixed
     */
    public $status = null;

    /**
     * The hint that is shown for the status indicator.
     *
     * @var string|null
     */
    public $hint = null;

    /**
     * Sets the hint of the status indicator.
     *
     * @param string $hint
     * @return $this
     */
    public function hint($hint)
    {
        $this->hint = $hint;
        return $this;
    }

    /**
     * Sets the status to 'ok'.
     *
     * @return $this
     */
    public function ok()
    {
        $this->status = 'ok';
        return $this;
    }

    /**
     * Sets the status to 'risky'.
     *
     * @return $this
     */
    public function risky()
    {
        $this->status = 'risky';
        return $this;
    }

    /**
     * Sets the status to 'danger'.
     *
     * @return $this
     */
    public function danger()
    {
        $this->status = 'danger';
        return $this;
    }

    /**
     * Sets the status to 'unknown'.
     *
     * @return $this
     */
    public function unknown()
    {
        $this->status = null;
        return $this;
    }
}
