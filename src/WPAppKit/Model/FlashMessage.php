<?php

namespace WPAppKit\Model;

class FlashMessage
{
    const TYPE_NONE = 'none';
    const TYPE_SUCCESS = 'success';

    /**
     * @var string
     */
    protected $type = self::TYPE_NONE;

    /**
     * @var string
     */
    protected $message = '';

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return FlashMessage
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return FlashMessage
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }
}
