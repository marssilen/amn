<?php
class Page extends Controller
{
	public function index($id='')
	{
		$data=$this->formModel->get($id);
		if(isset($data[0])){
			$this->formModel->add_view($data[0]['id'],$data[0]['view']);
			$data[0]['image']=$this->formModel->get_images($id);
            $tags=$this->formModel->get_tags($id);
			$this->view('page/index',['data'=>$data[0],'tags'=>$tags]);
		}else {
			header('location:'.URL);
		}
	}
}
