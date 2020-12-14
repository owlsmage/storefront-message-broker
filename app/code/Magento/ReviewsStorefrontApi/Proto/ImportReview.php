<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: reviews/reviews.proto

namespace Magento\ReviewsStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.reviewsStorefrontApi.proto.ImportReview</code>
 */
class ImportReview extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string product_id = 2;</code>
     */
    protected $product_id = '';
    /**
     * Generated from protobuf field <code>string title = 3;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string nickname = 4;</code>
     */
    protected $nickname = '';
    /**
     * Generated from protobuf field <code>string text = 5;</code>
     */
    protected $text = '';
    /**
     * Generated from protobuf field <code>string customer_id = 6;</code>
     */
    protected $customer_id = '';
    /**
     * array of scope codes
     *
     * Generated from protobuf field <code>repeated string visibility = 7;</code>
     */
    private $visibility;
    /**
     * Generated from protobuf field <code>repeated .magento.reviewsStorefrontApi.proto.Rating ratings = 8;</code>
     */
    private $ratings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $product_id
     *     @type string $title
     *     @type string $nickname
     *     @type string $text
     *     @type string $customer_id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $visibility
     *           array of scope codes
     *     @type \Magento\ReviewsStorefrontApi\Proto\Rating[]|\Google\Protobuf\Internal\RepeatedField $ratings
     * }
     */
    public function __construct($data = null)
    {
        \Magento\ReviewsStorefrontApi\Metadata\Reviews::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, true);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string product_id = 2;</code>
     * @return string
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Generated from protobuf field <code>string product_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProductId($var)
    {
        GPBUtil::checkString($var, true);
        $this->product_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, true);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nickname = 4;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, true);
        $this->nickname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string text = 5;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>string text = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, true);
        $this->text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string customer_id = 6;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Generated from protobuf field <code>string customer_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, true);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * array of scope codes
     *
     * Generated from protobuf field <code>repeated string visibility = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * array of scope codes
     *
     * Generated from protobuf field <code>repeated string visibility = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVisibility($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->visibility = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.reviewsStorefrontApi.proto.Rating ratings = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.reviewsStorefrontApi.proto.Rating ratings = 8;</code>
     * @param \Magento\ReviewsStorefrontApi\Proto\Rating[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRatings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\ReviewsStorefrontApi\Proto\Rating::class);
        $this->ratings = $arr;

        return $this;
    }
}
