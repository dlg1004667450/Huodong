<!--ǰ��ʹ����foundation���-->
<!DOCTYPE html>
<html>

<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>��ӭ��½�Ϸ�ѧԺ��ѧ���ƽ̨</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="<?=base_url()?>static/css/normalize.css">
  <link rel="stylesheet" href="<?=base_url()?>static/css/foundation.css">

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="<?=base_url()?>static/css/app.css">

  <script src="js/vendor/modernizr.js"></script>
  
  <script>
	//��ת
	function reg_goto()
	{
		window.location = "<?=base_url()?>index.php/member/register";
	}
  </script>
  
  <style>
	#container
	{
		text-align:center;
		margin:90px;
	}
	
	#regbox
	{
		
	width: 100%;
	position: absolute;
	top:150px;
	left:0;
	height: 300px;
	overflow: hidden;

	}

  </style>

</head>
<body>
  <!-- body content here -->

  <div id="container">
	<div id="header">
		<h1>���</h1><h3>�Ϸ�ѧԺ��ѧ���ƽ̨</h3>
	</div>

	<!--ע��ҳ-->
	<div id="regbox">
		<form action="<?=base_url()?>index.php/member/do_login" method="post" data-abide>
			
		<div class="row">
			<label>����<small>����</small>
				<input type="email" name="loginemail" required  placeholder="��������">
			</label>
			<small class="error">�����ʽ����ȷ</small>
		</div>
		<div class="row">
			<label>����<small>����</small>
				<input type="password" name="loginpwd" required>
			</label>
			<small class="error">���벻��Ϊ��</small>
		</div>
			<input type="submit"   name="submit" id="submit" class="button" value="��½">
			<input type="reset" name="cancel" id="resetbtn" class="button" value="ȡ��">
			<input type="button" class="button" value="ע��" onclick="reg_goto()">
		</form>
	   
	</div>

	<div id="footer"></div>
  </div>

  <script src="<?=base_url()?>static/js/vendor/jquery.js"></script>
  <script src="<?=base_url()?>static/js/foundation.min.js"></script>
  <script src="<?=base_url()?>static/js/foundation.abide.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>