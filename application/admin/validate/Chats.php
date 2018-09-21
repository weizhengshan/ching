<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/19 0019
 * Time: 下午 16:02
 */

namespace app\admin\validate;


use think\Validate;

class Chats extends Validate
{
    protected $rule= [
        'date'=>'require',
        'content'=>'require',


    ];
    protected $message=[
        'date.require'=>'时间不能为空',
        'content.require'=>'事件不能为空',
    ];

}