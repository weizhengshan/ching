<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/19 0019
 * Time: 下午 14:40
 */

namespace app\admin\controller;


use Symfony\Component\Yaml\Tests\A;
use think\Controller;
use think\Db;
use think\Loader;

class Chats extends Common
{
    public function index()
    {
        $this->base();
        $data = db('chats')
            ->field('chat_id,date,content,is_show')
            ->where('is_show=1')
            ->select();
        $this->assign('arr', $data);
//        halt($data);
        return $this->fetch();
    }

    public function add()
    {
        $this->base();
        if (request()->isPost()) {
            $input = input('post.');
            $input['date'] = strtotime($input['date']);
            $validate = Loader::validate('Chats');
            if (!$validate->check($input)) {
                $this->error($validate->getError());
            } else {
                $list = Db::name('chats')->insert($input);
                if ($list) {
                    $this->success('新增成功', 'Chats/index');
                }
            }
        } else {
            echo '模板赋值';
            return $this->fetch();
        }
    }

    public function edit(){
        $this->base();
        if (request()->isPost()) {
            $input = input('post.');
            $input['date'] = strtotime($input['date']);
            $validate = Loader::validate('Chats');
            if (!$validate->check($input)) {
                $this->error($validate->getError());
            } else {
                $list = Db::name('chats')->update($input);
                if ($list) {
                    $this->success('修改成功', 'Chats/index');
                }
            }
        } else {
            $chat_id = input('get.chat_id');
            $list = Db::name('chats')->find($chat_id);
            $this->assign('list',$list);
            return $this->fetch();
        }
    }

    public function delete(){
        $chat_id = input('get.chat_id');
        $list = Db::name('chats')->delete($chat_id);
        if ($list) {
            $this->success('刪除成功', 'Chats/index');
        }else{
            $this->error('刪除失敗');
        }
    }
}