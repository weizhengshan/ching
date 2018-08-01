<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/27 0027
 * Time: 下午 16:14
 */

namespace app\admin\controller;
use think\Controller;
use think\Session;
use app\common\model\AuthRule as A;
class Plat extends   Common
{
    public function index(){
        $authRule=new A();
        $authRuleRes=$authRule->authRuleTree();
        //导航管理
        $this->base();
        $this->assign('authRuleRes',$authRuleRes);
        return $this->fetch();
    }
    public function price(){
        $authRule=new A();
        $authRuleRes=$authRule->authRuleTree();
        //导航管理
        $this->base();
        $this->assign('authRuleRes',$authRuleRes);
        return $this->fetch();
    }

}