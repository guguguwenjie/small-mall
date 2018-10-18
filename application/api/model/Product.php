<?php
/**
 * Created by PhpStorm.
 * User: 0375
 * Date: 2018/10/16
 * Time: 15:37
 */

namespace app\api\model;


class Product extends BaseModel
{
    /**
     * 模型内部隐藏
     * @var array
     */
    protected $hidden = [
        'delete_time',
        'update_time',
        'create_time',
        'main_img_id',
        'pivot',
        'from',
        'category_id'
    ];

    /**
     * 通过获取器拼接main_img_url完整路径
     * @param $value
     * @param $data
     * @return string
     */
    public function getMainImgUrlAttr($value,$data)
    {
        return $this->prefixImgUrl($value,$data);
    }
}