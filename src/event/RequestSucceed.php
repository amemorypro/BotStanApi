<?php namespace api\event;

use api\base\Token;
use yii\base\Event;
use api\method\Method;
use api\response\Response;

/**
 * @author MehdiKhody <khody.khoram@gmail.com>
 * @since 1.0.0
 */
class RequestSucceed extends Event
{

    /**
     * @var Token
     */
    public $token;

    /**
     * @var Method
     */
    public $method;

    /**
     * @var Response|array|bool
     */
    public $result;
}