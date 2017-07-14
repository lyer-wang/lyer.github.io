<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html;charset=utf-8");
class CreditController extends Controller {
    public function index(){
        $list=M('car');
        $sql=$list->select();
        $this->assign('sql',$sql);
        $this->display();
    }
    public function receive(){
        $data=I('get.class');
//        dump($data);exit;
        if($data=='one'){
            $car_name="光大";
        }else if($data=="two"){
            $car_name="浦发";
        }
        $user=M('customer');
        $where['id']=session('customer_id');
        $wheres['name']=session('cus_name');
        $wheres['phone']=session('cus_phone');
        $wheres['number']=session('cus_number');
//        dump($where);exit;
        $list=$user->field('car_name')->where($wheres)->select();
//        echo $user->getLastSql();exit;
//        dump($list);exit;
        $car=$list[0]['car_name'];
//        dump($car);exit;
//        $car2=explode(",",$car);
//        dump($car2);exit;
        if($list[0]['car_name'] =='') {
//            echo "1";exit;
            $where1['car_name'] =  $car_name;
            $where1['record']=date('Y-m-d');
            $list1 = $user->where($where)->save($where1);
        }else {
            if($car_name ===$list[0]['car_name'] or $car_name ===$list[1]['car_name']){
//                echo "2";exit;
                $wheres['car_name']=$car_name;
                $list2=$user->field('id')->where($wheres)->select();
//                dump($list2);exit;
                $where5['id']=$list[0]['id'];
                $where2['record']=date('Y-m-d');
                $list1=$user->where($where5)->save($where2);
            }else{
//                echo "3";exit;
                $where3['name']=session('cus_name');
                $where3['phone']=session('cus_phone');
                $where3['number']=session('cus_number');
                $where3['emp_id']=session('cus_id');
                $where3['applicatiopn_status']==0;
//                $where1['car_name']=$car.",".$car_name;
                $where3['record']=date('Y-m-d');
                $where3['car_name'] =  $car_name;
                $list1=$user->add($where3);
            }
        }
    }

}