<?php
class Hire extends Controller
{
	public function index()
	{
        $req=array('name','birth','phone','married','intro','address','submit');
        if(form::check($_POST,$req,false)){
            if($this->formModel->insert()){
                $this->view('hire/msg',['data'=>'با موفقیت ثبت شد']);
                die();
            }
            else {
                $this->view('hire/msg', ['خطایی رخ داد']);
                die();
            }
        }
        $this->view('hire/index',['data'=>'']);
	}
}
