<?php
/**
 * User: Aleksandrov Artem
 * Date: 20.10.2019
 * Time: 18:17
 */

namespace dugard\myTarget\api\resources\partner_platforms;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, предоставляющий список тематик баннеров
 * Class BannerTopics
 * @package dugard\myTarget\api\methods\partner_platforms
 * @see https://target.my.com/doc/api/ru/resource/BannerTopics
 */
class BannerTopics extends Resource
{
    /**
     * @return mixed
     */
    public function get()
    {
        return $this->request('get', 'banner_topics');
    }
}