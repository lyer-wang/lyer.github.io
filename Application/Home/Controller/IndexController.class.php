<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html;charset=utf-8");
class IndexController extends Controller {
    public function index(){

        $this->display();
    }
    public function login(){
        $list=M('employees');
        $data['username'] = I('post.username');
        $data['password'] = I('post.password');
        $row1 = $list->where($data)->select();
//        echo $list->getLastSql();exit;
        $row = $list->where($data)->find();

        if($row){
            session('name',$row1[0]['name']);
            session('id',$row1[0]['id']);
            session('code',$row1[0]['code']);
            $this->redirect('manager/index');
        }else{
            $this->error('用户名或密码错误', U('index'), 3);
        }
    }

}