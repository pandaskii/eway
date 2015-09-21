<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\Collection;

use XiNG\eWAY\Common\Helper;

/**
 * Class Collection
 * @package XiNG\eWAY\Collection
 */
abstract class CollectionAbstract implements CollectionInterface
{
    /**
     * @var
     */
    protected $parameters;

    /**
     * @param null $parameters
     */
    public function __construct($parameters = null)
    {
        $this->initialize($parameters);
    }

    /**
     * @param array $parameters
     * @return $this
     */
    public function initialize(array $parameters = array())
    {
        Helper::initialize($this, $parameters);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Get one parameter.
     *
     * @return mixed A single parameter value.
     */
    protected function getParameter($key)
    {
        return isset($this->parameters[$key]) ? $this->parameters[$key] : null;
    }

    /**
     * Set one parameter.
     *
     * @param string $key Parameter key
     * @param mixed $value Parameter value
     * @return CreditCard provides a fluent interface.
     */
    protected function setParameter($key, $value)
    {
        $this->parameters[$key] = $value;

        return $this;
    }
}
