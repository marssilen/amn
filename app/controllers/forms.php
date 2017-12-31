<?php
class Forms extends Controller
{
	public function index($id='')
	{
//		$data=$this->formModel->get($id);
//		if(isset($data[0])){
			$data[0]='';
//			print_r($_POST);
        $req=array('name','company','cell','telegram','phone','activity','brands','address','submit');
        if(form::check($_POST,$req,false)){
            $file_name=$this->upload_a_file();;
            if($this->formModel->insert($file_name)){
                $this->view('form/msg',['data'=>'با موفقیت ثبت شد']);
            }
            else {
                $this->view('form/msg', ['خطایی رخ داد']);
                die();
            }
        }
        $this->view('form/index',['data'=>$data[0]]);
//		}else {
//			header('location:'.URL);
//		}
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
