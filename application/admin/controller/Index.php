<?php
namespace app\admin\controller;
use think\Controller;
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2017/12/20
 * Time: 16:22
 */
class Index extends Controller{
    public function index(){

        return $this->fetch();
    }
}