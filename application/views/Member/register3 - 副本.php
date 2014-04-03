<!--ǰ��ʹ����foundation���-->

<html class="no-js"  lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>��ӭע��Ϸ�ѧԺ��ѧ���ƽ̨</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="../../static/css/normalize.css">
  <link rel="stylesheet" href="../../static/css/foundation.css">

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="../../static/css/app.css">

  <script src="js/vendor/modernizr.js"></script>
  
  <style>
	#container
	{
		text-align:center;
		margin:20px;
	}
	
	#regbox
	{
		
	width: 100%;
	position: absolute;
	
	left:0;
	height: 700px;
	overflow: hidden;

	}

  </style>

</head>
<body>
  <!-- body content here -->

  <div id="container">
	<div id="header">

	</div>

	<!--ע��ҳ-->
	<div id="regbox">
	   <form action="../../index.php/member/submit_ok" method="post" data-abide>
			<div class="row">
				<label>����<small>����</small>
					<input type="email" id="email" name="email" required  placeholder="��������">
				</label>
				<small class="error">�����ʽ����ȷ</small>
			</div>

			<div class="row">
				<label>����<small>����</small>
					<input type="password" id="regpwd1" name="regpwd1" required pattern="pwd"  placeholder="ע�Ᵽ��">
				</label>
				<small class="error">����̫��</small>
			</div>
			
			<div class="row">
				<label>����<small>����</small>
					<input type="password" id="regpwd2" name="regpwd2"  required  data-equalto="regpwd1" placeholder="ע�Ᵽ��">
				</label>
				<small class="error">���벻һ��</small>
			</div>
			
			<div class="row">
				<label>ѧ��<small></small>
					<input type="text" id="regstuId" name="regstuId" required pattern="stuid"  placeholder="����ѧ��">
				</label>
				<small class="error">ѧ�Ų���ȷ</small>
			</div>
			
			<div class="row">
				<label>����<small>����</small>
					<input type="text" id="regname" name="regname" required  pattern="name" placeholder="��������">
				</label>
				<small class="error">����д��ȷ������</small>
			</div>
			
			<div class="row">
				<label>�ֻ�<small>����</small>
					<input type="text" id="regtel" name="regtel" required pattern="tel" placeholder="�ֻ�">
				</label>
				<small class="error">����д��ȷ���ֻ���</small>
			</div>

		
			
			<div class="row">
				
					<input type="submit"   name="submit" id="submit" class="button" value="ע��">
					<input type="reset" name="cancel" id="resetbtn" class="button" value="����">
				
			</div>


	   </form>
	   
	</div>




	<div id="footer"></div>
  </div>




 <script src="../../static/js/vendor/jquery.js"></script>
  <script src="../../static/js/foundation.min.js"></script>
  <script src="../../static/js/foundation.abide.js"></script>
  <script>
    $(document).foundation({
    abide : {
      patterns: {
		pwd:/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/,
		name: /[\u4E00-\u9FA5]{2,4}/,
		stuid: /^\d{10}$/,
		tel: /^(13[0-9]|15[0|3|6|7|8|9]|18[8|9])\d{8}$/,
        ip_address: /^((25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\.){3}(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])$/
      }
    }
  });
  </script>
</body>
</html>