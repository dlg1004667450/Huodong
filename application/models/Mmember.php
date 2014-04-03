<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * ��Ա����Model��
 *
 * Created on 2014-3-14
 *
 * @author:qingsongwang
 *
 *
 */
 header("Content-type:text/html;charset=utf-8"); //very important !
 
class Mmember extends CI_Model
{
	function  __construct(){
		parent::__construct();
		$this->load->library('pagination');  //���ط�ҳ��
		$this->load->helper('function');
		$this->load->database();
	}

	//�����û�
	function insert_user()
	{
		$email = $this->input->post('email');	//����
		$regpwd1 = MD5($this->input->post('regpwd1'));	//����
		$regpwd2 = MD5($this->input->post('regpwd2'));

		$stuId = $this->input->post('regstuId');  //ѧ��
		$name = $this->input->post('regname');  //����
		$telphone = $this->input->post('regtel');   //�ֻ�
	

		$sql = "INSERT INTO users(tb_users_id,tb_users_email,tb_users_password,tb_users_stuId,tb_users_name,tb_users_telphone,tb_users_createTime,tb_users_updateTime)
		VALUES('','$email','$regpwd1','$stuId','$name','$telphone',now(),now())";

		$this->db->query($sql);
		return $this->db->affected_rows();
	}
	
	//�����û���Ϣ
	function update_user($uid)
	{
		$name = $this->input->post('name');
		$stuId = $this->input->post('stuId');
		$sex = $this->input->post('sex_group');
		$province = $this->input->post('province');
		$birthdate = $this->input->post('birthdate');
		$age = $this->input->post('age');
		$idcard = $this->input->post('idcard');
		$politic = $this->input->post('politic_group');
		$department = $this->input->post('department');
		$address = $this->input->post('address');
		$skills = $this->input->post('skills');
		$signature = $this->input->post('signature');
		
		//������sql
		//$sql = "UPDATE users SET tb_users_name = $name ,tb_users_stuId = $stuId ,tb_users_sex = $sex, tb_users_province = $province, tb_users_birthdate = $birthdate, tb_users_age = $age, tb_users_idcard = $idcard ,tb_users_politicStatus = $politicStatus,tb_users_department = $department,tb_users_address = $address ,tb_users_skills = $skills , tb_users_signature = $signature
		//	WHERE tb_users_id = $uid)";
		
		//��ʱȥ����ʡ�ݣ�����
		
		$sql = "UPDATE users SET tb_users_name = '$name' ,tb_users_stuId = '$stuId' ,tb_users_sex = '$sex', tb_users_age = '$age', tb_users_idcard = '$idcard' ,tb_users_politicStatus = '$politic',tb_users_department = '$department',tb_users_address = '$address' ,tb_users_skills = '$skills' , tb_users_signature = '$signature'
			WHERE tb_users_id = $uid";	
		$this->db->query($sql);
		return $this->db->affected_rows();
	
	}
	
	//�����û�uid��ȡ�û���Ϣ
	function get_user_info($uid)
	{
		$sql = "SELECT * FROM users WHERE tb_users_id = '$uid'";
		$query = $this->db->query($sql);
			
		return $query->row_array();
	}

	//�ȶ��û���������
	function check_user_pwd($loginemail,$loginpwd)
	{
		$email = $loginemail;
		$password = $loginpwd;
		//print($email);
		$sql = "SELECT * FROM users WHERE tb_users_email = '$email' AND tb_users_password = '$password'";
		$query = $this->db->query($sql);
		
		
		return $query;
	}
	
	//��ѯ�����Ƿ��Ѿ�����
	function check_email($email)
	{
		$sql = "SELECT tb_users_email FROM users WHERE tb_users_email = '$email'";
		$query = $this->db->query($sql);
		return	$this->db->affected_rows();
	}
	
}