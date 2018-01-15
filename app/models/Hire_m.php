<?php
class Hire_m extends Model
{

	function __construct(){
		parent::__construct();
	}
	function insert(){
	    return $this->db->insert('hire',array('name'=>$_POST['name'],'birth'=>$_POST['birth'],
            'phone'=>$_POST['phone'], 'address'=>$_POST['address'],'intro'=>$_POST['intro'],
            'married'=>$_POST['married']));
    }
}
