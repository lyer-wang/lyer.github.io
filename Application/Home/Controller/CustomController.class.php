<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html;charset=utf-8");
class CustomController extends Controller {
    public function index(){
        $id=$_REQUEST['cus_id'];
//        var_dump($id);exit;
        session('cus_id',$id);
        $this->display();

    }
    public function login(){
        $data['name']=I('get.name');
        $data['phone']=I('get.phone');
        $data['number']=I('get.number');
        session('cus_name', $data['name']);
        session('cus_phone',$data['phone']);
        session('cus_number',$data['number']);
        $list=M('customer');
        $row = $list->where($data)->find();
        if($row){
            $where['name']=$data['name'];
            $where['phone']=$data['phone'];
            $row1=$list->where($where)->select();
//            echo $list->getLastSql();exit;
            session('customer_id',$row1[0]['id']);
            $this->redirect('credit/index');
        }else{
            $data['emp_id']=session('cus_id');
            $data['applicatiopn_status']='1';
            $data['record']=date('Y-m-d');
//            dump($data);exit;
            $sql=$list->add($data);
            if($sql){
                $where['name']=$data['name'];
                $where['phone']=$data['phone'];
                $row1=$list->where($where)->select();
//                echo $list->getLastSql();exit;
                session('customer_id',$row1[0]['id']);
                $this->redirect('credit/index');
            }else{
                $this->error('登录失败', U('index'), 2);
            }
        }
    }
}