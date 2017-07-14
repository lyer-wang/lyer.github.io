<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html;charset=utf-8");
class ManagerController extends Controller
{
    public function index()
    {
//        asdasdasd;
        $list=M('customer');
        $arr=session('name');
        $where['emp_id']=session('id');
        $where['code']=session('code');
//        dump($where);exit;
        $data=$list->where($where)->order('record desc')->select();
//        echo $list->getLastSql();exit;

        foreach($data as $k=>$v){
            if($v['application_status'] == 0){
                 $data[$k]['application']="审核中";
            }else if($v['application_status'] == 1){
                 $data[$k]['application']="通过";
            }else if($v['application_status'] == 2){
                 $data[$k]['application']="未通过";
            }
        }
        foreach ($data as $key => $value) {
            $data1[] = $value['application_status'];
        }
//        dump($data1);exit;
        $count=count($data);
//        dump($count);exit;
//        echo $list->getLastSql();exit;
//        dump($data);exit;
        $this->assign('count',$count);
        $this->assign('data',$data);
        $this->display();
    }
}
