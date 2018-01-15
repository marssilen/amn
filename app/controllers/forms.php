<?php
class Forms extends Controller
{
	public function index($id='')
	{
        $req=array('name','company','cell','telegram','phone','activity','brands','address','submit');
        if(form::check($_POST,$req,false)){
            $file_name=$this->upload_a_file();;
            if($this->formModel->insert($file_name)){
                $this->view('form/msg',['data'=>'با موفقیت ثبت شد']);
                die();
            }
            else {
                $this->view('form/msg', ['خطایی رخ داد']);
                die();
            }
        }
        $this->view('form/index',['data'=>'']);
	}
    private function upload_a_file(){
        $destination = 'public/cards/';
        $upload = new Upload($destination);
//        $upload->setDisableExtension();
        try {
            $max_file_size=9999999;
            $upload->setMaxSize($max_file_size);
            $upload->move();
            $result_upload = $upload->getMessages();
            $imagename=$upload->get_imagename();
            return $imagename;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
