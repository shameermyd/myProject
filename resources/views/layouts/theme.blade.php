<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ShaZam - Test project</title>
<meta name="keywords" content="free css templates, free website templates, simple blue, light gray" />
<meta name="description" content="Simple Blue is a free CSS template from www.templatemo.com" />
<link href="/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="/css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">    
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div id="templatemo_site_title_bar_wrapper">
	<div id="templatemo_site_title_bar">
    	<div id="site_title">
            <h1><a href="/">ShaZam<span>Sample Project</span></a></h1>
        </div>
        
        <ul id="templatemo_menu">
            <li><a href="/" class="{{Request::path() === '/' ? 'current' : '' }}"><span></span>Home</a></li>
            <li><a href="/articles" class="{{Request::path() === 'article' ? 'current' : ''}}"><span></span>Articles</a></li>
			<li><a href="#" target="_blank"><span></span>Flash</a></li>    
            <li><a href="#" target="_blank"><span></span>Gallery</a></li>
            <li><a href="#"><span></span>About</a></li>        
            <li><a href="/contact" class="{{Request::path() === 'contact' ?     'current' : '' }}"><span></span>Contact</a></li>
        </ul>
        
        
       
	</div> <!-- end of templatemo_site_title_bar -->        
       
</div> <!-- end of templatemo_site_title_bar_wrapper -->

	


</div> <!-- end of templatemo_banner_wrapper -->
</div> <!-- end of templatemo_banner_wrapper_outter -->

<div id="templatemo_content">
	
@yield("content")
    
                
        

</div> <!-- end of templatemo_content -->
 

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer">

    <div class="section_w240">
        
        <h3>Privacy Policy</h3>
        
        <div class="sub_content">
            <p>Nullam ultrices tempor nisi, ac egestas diam aliquam a. Ut eleifend semper turpis, id feugiat arcu dignissim eu. Donec mattis adipiscing imperdiet.</p>
        </div>
        
    </div>

    <div class="section_w240">
        
        <h3>Partners</h3>
        
        <div class="sub_content">
            
            <ul class="footer_list">
                <li><a href="http://www.templatemo.com/page/1" target="_parent">Free CSS Templates</a></li>
                <li><a href="http://www.flashmo.com/page/1" target="_parent">Free Flash Templates</a></li>
                <li><a href="http://www.flashmo.com/store" target="_parent">Template Store</a></li>
                <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Tips</a></li>
                <li><a href="http://www.koflash.com" target="_parent">Best Flash Gallery</a></li>               
            </ul>
            
        </div>
        
    </div>
    
    <div class="section_w240">
        
        <h3>About</h3>
        
        <div class="sub_content">
        
            <ul class="footer_list">
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Cum sociis</a></li>
                <li><a href="#">Donec quam</a></li>
                <li><a href="#">Nulla consequat</a></li>
                <li><a href="#">In enim justo</a></li>
            </ul>
        
        </div>
        
    </div>
    
    <div class="section_w240">
        
        <h3>XHTML/CSS validations</h3>
        
        <div class="sub_content">
        	
            <p>Aliquam vehicula accumsan arcu, vestibulum cursus purus lobortis eu. Pellentesque vitae neque non lorem vehicula adipiscing. </p>
            
            <div class="cleaner_h20"></div>
        
            <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
            
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
            
        </div>
            
    </div>
    
    <div class="cleaner_h40"></div>
    
    
    <center>
        Copyright © 2048 <a href="#">Your Company Name</a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </center>
    

</div> <!-- end of footer -->
</div> <!-- end of footer wrapper -->

<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>