<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * ���ܣ���Աmember������
 *  
 * Created on 2014-3-14
 *
 * @author:qingsongwang
 *
 */

class Member extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library ( 'avatarlib' ); 
		$this->load->library ( 'user' ); 
	}
	
	//�û�������ҳ
	public function index()
	{
		$this->edit_user();
	}

	//ע��ҳ��
	public function register_old()
	{
		$this->logout();
		$this->load->view("/Member/register3.php");
	}
	
	//ע���½���
	function reg()
	{
		$this->load->view('/Member/register_new');
	}

	//��ʼע���û�
	public function submit_ok()
	{
 		if($this->input->post('submit'))
 		{
 			$this->load->model('Mmember');
 			$query = $this->Mmember->insert_user();
 			if($query)
 			{
				$this->session->sess_destroy();
 				$this->load->view("/Member/register_success.php");
				
 			}
 			else
 				echo "error";
 		}
 		else
 			echo "ûsubmit";
	}

	//�û���¼
	public function login()
	{
		$this->load->view("/Member/login.php");
	}
		 
	//�˳���¼
	function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('Member/login');
	}
	
	//��¼�����½��֤
	function do_login()
	{
		$loginemail = $_POST['loginemail'];
		$loginpwd = MD5($_POST['loginpwd']);
		
		
			$this->load->model('Mmember');
			$query = $this->Mmember->check_user_pwd($loginemail,$loginpwd);

			if($query->num_rows > 0)  //��ѯ���ݿ�����Ϊ0ʱ
			{
				$r = $query->row();
				$sess_data = array('uid'=>$r->tb_users_id,'email'=>$r->tb_users_email,'role_id'=>$r->role_id);
				$this->session->set_userdata($sess_data);  //����cookies
				echo '0';
			}
			else
				//echo "error!";
				echo '1';
	}

	//�����û���Ϣ
	function save_user()
	{
		if($this->input->post('submit'))
		{
			$uid =  $this->session->userdata('uid');  //get user's id from session
			$this->load->model('Mmember');
			$query = $this->Mmember->update_user($uid);
 			if($query)
 			{
				$this->load->view('/Member/edit_success');
			}
			else
				echo "error";
		}
	}
	
	//�ϴ�ͷ�񷽷�
	public function upload_avatar() 
	{ 
			if($this->user->session_check())
			{
				$data['uid'] = $this->session->userdata('uid');
				$data ['avatarflash'] = $this->avatarlib->uc_avatar ( $data ['uid'] ); 
				$data ['avatarhtml'] = $this->avatarlib->avatar_show($data ['uid'] ,'big'); 
				$this->load->view ( 'avatar', $data );
			}
			else
				$this->load->view('/Member/login');
	 	
	}
	
	//���ͷ���ϴ�
	function doavatar()
	{ 
		$action='on'.$_GET['a']; 
		$data = $this->avatarlib->$action(); 
		echo $data;
	}
	
	//�༭�û���Ϣ����½��ɺ�Ĭ����ʾ�Ľ��棩
	function edit_user()
	{
		
		if($this->user->session_check())
		{
			$data['email'] = $this->session->userdata('email');
			$data['uid'] = $this->session->userdata('uid');
			$this->load->model('Mmember');
			$row = $this->Mmember->get_user_info($data['uid']);   //����uid��ȡ�û�����Ϣ
			
			//user_infomations
			$data['name'] = $row['tb_users_name'];
			$data['stuId'] = $row['tb_users_stuId'];
			$data['sex'] = $row['tb_users_sex'];
			$data['province'] = $row['tb_users_province'];
			$data['birthdate'] = $row['tb_users_birthdate'];
			$data['age'] = $row['tb_users_age'];
			$data['idcard'] = $row['tb_users_idcard'];
			$data['politicStatus'] = $row['tb_users_politicStatus'];
			$data['telphone'] = $row['tb_users_telphone'];
			$data['email'] = $row['tb_users_email'];
			$data['department'] = $row['tb_users_department'];
			$data['class'] = $row['tb_users_class'];
			$data['address'] = $row['tb_users_address'];
			$data['skills'] = $row['tb_users_skills'];
			$data['signature'] = $row['tb_users_signature'];
			
			
			//$data ['avatarflash'] = $this->avatarlib->uc_avatar ( $data ['uid'] ); 
			$data ['avatarhtml'] = $this->avatarlib->avatar_show($data ['uid'] ,'middle');  //��ʾͷ�� 
		
			
			$this->load->view('Member/personal_info.php',$data);
		}
		else
			$this->login();
	}
		
	
	//ajax�ж������Ƿ��Ѿ���ע����
	function check_email()
	{
		$email =  $_GET['email'];
		//$email = 'cnsongzi@foxmail.com';
		$this->load->model('Mmember');
		$row = $this->Mmember->check_email($email);
		if($row > 0)
			echo 'false';
		else
			echo 'true';
	}
	

	
}