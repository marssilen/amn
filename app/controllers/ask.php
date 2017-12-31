<?php
class Ask extends Controller
{
	public function index()
	{
        $req=array('name','subject','email','submit');
        if(form::check($_POST,$req,false)){
            if($this->formModel->insertSubject()) {
                $this->view('ask/msg', ['data' => 'با موفقیت ثبت شد']);
                die();
            }
            else {
                $this->view('ask/msg', ['خطایی رخ داد']);
                die();
            }
        }
        $data=$this->formModel->getAllQuestions();
        $this->view('ask/index',$data);
	}
    function question($id=0){
        $data=$this->formModel->get($id);
        $title=$this->formModel->getTitle($id);
//        echo $title['subject'];
        $req=array('name','subject','email','submit');
        if(isset($data)){
            if(form::check($_POST,$req,false)){
                if($this->formModel->insert($id)) {
                    $this->view('ask/msg', ['data' => 'با موفقیت ثبت شد']);
                    die();
                }
                else {
                    $this->view('ask/msg', ['data' =>'خطایی رخ داد']);
                    die();
                }
            }
        $this->view('ask/question',['title'=>$title['subject'],'data'=>$data]);
        }else {
            header('location:'.URL);
        }
    }
}
