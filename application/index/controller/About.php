<?php
namespace app\index\controller;

use think\Db;

class About extends Common
{
    //文章展示
    public function show()
    {
         $this->base();
         $data = Db::name('chats')
             ->field('chat_id,date,content')
             ->where('is_show=1')
             ->order('date desc')
             ->select();
//         halt($data);
         $this->assign('list',$data);
        return $this->fetch();
    }
}
