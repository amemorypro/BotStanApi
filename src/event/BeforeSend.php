<?php namespace api\event;

use api\base\Token;
use yii\base\Event;
use api\method\Method;

/**
 * @author MehdiKhody <khody.khoram@gmail.com>
 * @since 1.0.0
 */
class BeforeSend extends Event
{

    /**
     * @var Token
     */
    public $token;

    /**
     * @var Method
     */
    public $method;
}