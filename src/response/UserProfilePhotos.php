<?php namespace api\response;

/**
 * @author MehdiKhody <khody.khoram@gmail.com>
 * @since 1.0.0
 *
 * @property int total_count
 * @property array photos
 *
 * @method int getTotalCount()
 * @method array getPhotos()
 */
class UserProfilePhotos extends Response
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
        return [
            'photos' => PhotoSize::className()
        ];
    }
}