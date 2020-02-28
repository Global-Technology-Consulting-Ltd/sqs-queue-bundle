<?php

namespace TriTran\SqsQueueBundle\Service;

/**
 * Class Message
 * @package TriTran\SqsQueueBundle\Service
 */
class Message
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $body;

    /**
     * @var array
     */
    private $attributes;

    /** @var array */
    private $messageAttributes;

    /**
     * @var string
     */
    private $receiptHandle;

    /**
     * Message constructor.
     *
     * @param string $body
     * @param array $attributes
     */
    public function __construct(string $body = '', array $attributes = [], array $messageAttributes = [])
    {
        $this->body = $body;
        $this->attributes = $attributes;
        $this->messageAttributes = $messageAttributes;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     *
     * @return $this
     */
    public function setBody(string $body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptHandle(): string
    {
        return $this->receiptHandle;
    }

    /**
     * @param string $receiptHandle
     *
     * @return $this
     */
    public function setReceiptHandle(string $receiptHandle)
    {
        $this->receiptHandle = $receiptHandle;

        return $this;
    }

    /**
     * @return array
     */
    public function getMessageAttributes(): array
    {
        return $this->messageAttributes;
    }

    /**
     * @param array $messageAttributes
	 *
	 * @return $this
     */
    public function setMessageAttributes(?array $messageAttributes)
    {
		if(empty($messageAttributes)){
			$messageAttributes = [];
		}
			
		$this->messageAttributes = $messageAttributes;
		
		return $this;
    }
}
