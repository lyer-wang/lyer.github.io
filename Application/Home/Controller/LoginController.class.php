<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html;charset=utf-8");
class LoginController extends Controller {
    public function index(){

//        $qr_path = $this->createQrPath('$qr_path');
//        var_dump($qr_path);
//        echo '<img src="'.$qr_path.'">';
        $this->display();
    }
    public function regis(){
        $rules = array(
            array('username','require','用户名必须存在！'), // 用户名必须存在
            array('username','','用户名称已经存在！',0,'unique',1), // 验证用户名是否已经存在
            array('password','6,30','密码长度不正确',0,'length'), // 验证密码是否在指定长度范围
        );
//        var_dump($rules);exit;
//        $User-> setProperty("rule",$rules);
        $name=M('employees');
        $data['username'] = I('post.username');
        $data['password'] = I('post.password');
        $data['name'] = I('post.name');
        $data['phone'] = I('post.phone');
//        dump($data);exit;
//        $list=$name->create();
//        if(!$list){
//            exit($this->error());
//        }else{
            $id=$name->add($data);
            $where['username']= $data['username'];
            $where['password']= $data['password'];
            $sql=$name->field('id')->where($where)->select();
//            $url=A('Custom/index/id='.$sql[0]['id');
            $url="http://jinniu.duapp.com/index.php/Home/custom/index.html?cus_id=".$sql[0]['id'];
//            dump($sql[0]['id']);exit;
            $qr_path = $this->createQrPath($url);
            $data1['code']=$qr_path;
//

            $whe['id']=$sql[0]['id'];
            $sql1=$name->where($whe)->save($data1);
            // echo $name->getlastsql();exit;
//            $data['member_id'] = $id;
//            $id2=$name1->add($data);
//            //var_dump($id);exit;
//            $this->assign('id',$id);
            $this->success('注册成功！',U('home/Index/index'));
//        }

    }
    public function createQrPath($val){
        //二维码生成准备
        Vendor('phpqrcode.phpqrcode');
        //生成二维码图片
        $object = new \QRcode();
        $url = $val;
        $level=3;
        $size=4;
        $errorCorrectionLevel =intval($level) ;//容错级别
        $matrixPointSize = intval($size);//生成图片大小

        //图片路径准备
        //1,生成随机数   2，拼出需要保存的路径
        $raw_num = date('Ymd').str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        $qr_path = './Public/img/qr/'.$raw_num.'.jpg';

        //第二个参数是 图片保存的路径  false 为不保存
        $object->png($url, $qr_path , $errorCorrectionLevel, $matrixPointSize, 2);

        return $raw_num;

    }
}