<?php
class Forms_m extends Model
{

	function __construct(){
		parent::__construct();
	}
	function insert($card=''){
	    return $this->db->insert('forms',array('name'=>$_POST['name'],'company'=>$_POST['company'],'cell'=>$_POST['cell'],
            'phone'=>$_POST['phone'], 'address'=>$_POST['address'],'brands'=>$_POST['brands'],
            'telegram'=>$_POST['telegram'],'activity'=>$_POST['activity'],'card'=>$card));
    }
}
