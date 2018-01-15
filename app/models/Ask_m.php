<?php
class Ask_m extends Model
{

	function __construct(){
		parent::__construct();
	}
    function getAllQuestions(){
        return $this->db->select("SELECT * FROM asktable ORDER BY id DESC");
    }
	function get($id){
		return $this->db->select("SELECT * FROM asks WHERE table_id= :id AND public != 0",array('id' => $id));
	}
	function insert($id){
	    return $this->db->insert('asks',array('name'=>$_POST['name'],'email'=>$_POST['email'],
            'ask'=>$_POST['subject'],'table_id'=>$id));
    }
    function insertSubject(){
	    return $this->db->insert('asktable',array('name'=>$_POST['name'],'email'=>$_POST['email'],
            'subject'=>$_POST['subject']));
    }
    function getTitle($id){
        $title=$this->db->select('SELECT * FROM asktable WHERE id=:id',array('id'=>$id));
        if(isset($title[0]))
            return $title[0];
    }
}
