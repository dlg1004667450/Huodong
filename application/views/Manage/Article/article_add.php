 <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          

        
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            
            <li >
                <a>
                    <i class="icon-edit"></i>
                    <span>文章管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul>
                    <li><a href="articleAdd">写文章</a></li>
                    <li><a href="categoryList">目录分类</a></li>
                </ul>
            </li>         
          
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">
        
  
        <div class="container-fluid">
            <div id="pad-wrapper">
                
				<div id=msg></div>
                <!-- products table-->
                <!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
                <div>标题：<input class="input-xxlarge" type="text" id="title" name="title"></div>
				
                <div>作者：<input  type="text" id="author" name="authour"></div>
                
				<div>分类：
                <select class="span2"  id="category" name="category">
					<option>社团新闻</option>
                    <option>2</option>
				</select>
				
                </div>
			
			  <div style="margin:10px 0 auto" >
				<p>文章内容：
			    <textarea class="summernote" id="content"  name="content"></textarea>                
			  </div>
              
              <div>
              	<button class="btn btn-primary" onclick="submitAdd()">发布</button>
                <button class="btn btn-primary">重置</button>
              </div>

              
            </div>
        </div>
    </div>
	
	<link rel="stylesheet" href="<?=base_url()?>static/summernote/summernote.css">
	<script type="text/javascript" src="<?=base_url()?>static/summernote/summernote.js"></script>
	<script type="text/javascript" src="<?=base_url()?>static/js/article.js"></script>