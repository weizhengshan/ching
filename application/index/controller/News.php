<?php

namespace app\index\controller;

class News extends Common
{
    //公司news
    public function index()
    {

        $this->base();
        //新闻
        //关于我们的信息
        $id = 10;
        $wenid = input('param.wen_id');
        if ($wenid == '') {
            $wenid = 21;
        }
        $type = db('types')->where('type_id', $id)->find();
        $typeson = db('types')->where('type_pid', $type['type_id'])->order('type_sort')->select();
//                halt($typeson);
        $newdata = db('contents')->where('cont_pid', $wenid)->order('cont_id desc')->where('cont_states', 1)->select();
        $twoLevel = db('types')->where('type_id', $wenid)->find();
//        halt($newdata);
        $this->assign('twoLevel', $twoLevel['type_name']);
        $this->assign('typeson', $typeson);
        $this->assign('data', $newdata);
        return $this->fetch();
    }

    public function info()
    {

        $this->base();
        $id = input('param.id');
        $newdata = db('contents')->where('cont_id', $id)->where('cont_states', 1)->find();
//        halt($newdata);
        $this->assign('newdata',$newdata);
        return $this->fetch();

    }

    /**
     * 招聘信息
     */
    public function recruit()
    {
        $this->base();
        //招聘信息
        $page = input('param.page');//当前页默认为第一页;
        $pageSize = 5;//每页显示条数为5条；

        $totalRows = db('recruit')->where('states', 1)->count('rec_id');
        //数据表总数据条数;
        $maxPage = ceil($totalRows / $pageSize);
        if ($page < 1) {
            $page = 1;
        }
        if ($page > $maxPage) {
            $page = $maxPage;
        }
        $res = db('recruit')->where('states', 1)->order('sort desc')->page($page, $pageSize)->select();

        $wenid = input('param.wen_id');
        //halt($wenid);
        $this->assign('wenid', $wenid);
        $type_id = input('param.type_pid');
        //halt($type_id);

        //$typefind=db('types')->where('type_id',$type_id)->find();
        $typeson = db('types')->where('type_pid', $type_id)->order('type_sort')->select();
        //halt($typeson);
        $this->assign('typeson', $typeson);
        $this->assign('type_pid', $type_id);
        $this->assign('pid', $type_id);
        $this->assign('totalRows', $totalRows);
        $this->assign('page', $page);
        $this->assign('maxPage', $maxPage);
        $this->assign('res', $res);
        return $this->fetch();
    }

    /**
     * 用户浏览招聘信息增加
     */
    public function update_a()
    {
        //获得原来的
        $id = input('param.id');
        $iddata = db('recruit')->where('rec_id', $id)->column('follow');

        $updataid = $iddata[0] + 1;
        //halt($updataid);
        $res = db('recruit')->where('rec_id', $id)->update(['follow' => $updataid]);
        $data = db('recruit')->where('rec_id', $id)->field('rec_id,follow')->find();

        return json($data);
    }

}
