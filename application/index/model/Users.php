<?php
namespace app\index\model;
use think\Model;
class Users extends Model
{
    
    // email查询
    protected function scopeEmail($query) // ,$e
    {
        $query->where('email', 'tpshop@tpshop.cn');
        //$query->where('email', $a);        
    }

//    // level查询
    protected function scopeLevel($query)
    {
        $query->where('level', 1);
    }  
//    
    // 全局查询范围
    protected static function base($query)
    {        
        $query->where('user_id',1);
    }    
//    // 类型转换
//    protected $type = array(
//                'birthday' => 'timestamp:Y-m-d', 
//    );
//    // 自动完成  insert update auto
//    protected $update = array(
//        'sex' => 0,
//        //'sex',
//    );

    // sex 属性修改器
//    protected function setSexAttr($value,$data)
//    {
//        return  $data['head_pic'] == 'boy.jpg' ? 1 : 0; 
//    }

    /*
    // RegTime读取器
    protected function getRegTimeAttr($regtime)
    {
        return '===='.date('Y-m-d', $regtime);
    }    

    // Email读取器
    protected function getEmailAttr($a,$data)
    {
        return $data['password'];
        //return print_r($data,true);
        //return '----------'.$a;
    } 
    
    // 写入器
    protected function setRegTimeAttr($value)
    {
        return strtotime($value);
        //return 1234567890;
    } 
     * 
     */       
}
 
