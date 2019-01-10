<?php namespace api\event;

use api\base\Token;
use yii\base\Event;
use api\method\Method;
use api\response\Error;

/**
 * @author MehdiKhody <khody.khoram@gmail.com>
 * @since 1.0.0
 */
class RequestFailed extends Event
{

    /**
     * @var Token
     */
    public $token;

    /**
     * @var Error
     */
    public $error;

    /**
     * @var Method
     */
    public $method;
}