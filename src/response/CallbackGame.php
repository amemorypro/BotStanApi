<?php namespace api\response;

/**
 * @author MehdiKhody <khody.khoram@gmail.com>
 * @since 1.0.0
 */
class CallbackGame extends Response
{

    /**
     * Response can have relations with other objects,
     * in this method we introduce all objects this object
     * have relations.
     *
     * @return array of objects
     */
    protected function relations()
    {
        return [];
    }
}