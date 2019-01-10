<?php namespace api\method;

use api\response\Error;
use api\response\WebhookInfo;

/**
 * @author MehdiKhody <khody.khoram@gmail.com>
 * @since 1.0.0
 *
 * @method WebhookInfo|Error send()
 */
class getWebhookInfo extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return WebhookInfo::className();
    }
}