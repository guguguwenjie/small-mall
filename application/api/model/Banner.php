<?php
/**
 * Created by PhpStorm.
 * User: 0375
 * Date: 2018/9/14
 * Time: 16:59
 */
namespace app\api\model;

class Banner extends BaseModel
{
    /**
     * 模型内部隐藏/展示某些字段
     * @var array
     */
    protected $hidden = [
        'update_time',
        'delete_time'
    ];
    protected $visible = [];

    /**
     * 关联查询banner_item表中具体banner信息
     * @return \think\model\relation\HasMany
     */
    public function items()
    {
        return $this->hasMany('BannerItem','banner_id','id');
    }

    /**
     * 通过banner_id获取banner内容
     * @param $id
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function getBannerByID($id)
    {
        $banner = self::with(['items','items.img'])->find($id);
        return $banner;
        //$res = Db::query("select * from banner_item where banner_id=?",[$id]);
        //$res = Db::table('banner_item')->where('banner_id','=',$id)->select();
        // $res = Db::table('banner_item')
        //->where(function ($query) use ($id){
        //$query->where('banner_id','=',$id)->where(true);
        //})
        //->select();
    }
}