<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo asset('template/vendor/bootstrap/css/bootstrap.min.css') ; ?>" rel="stylesheet">
    <link href="<?php echo asset('template/vendor/font-awesome/css/font-awesome.min.css') ; ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo asset('template/css/guest.css') ; ?>" rel="stylesheet" type="text/css">
       @yield('header')
</head>
<body>
<div class="container">
	<div id="header">
		<div class="logo">
			<a href="/"></a>
		</div>
		<div class="search-box">
			
        <form action="/timkiem" method="get">
            <input type="text" name="q" id="q" placeholder="Tìm kiếm ứng dụng" x-webkit-speech="">
            <select id="platforms" name="platformId">
                <option value="">Tất cả </option>
                <option value="windows">Windows </option>
                <option value="mac">Mac </option>
                <option value="web">Web</option>
                <option value="linux">Linux </option>
                <option value="ios">iOS </option>
                <option value="android">Android </option>
                <option value="windowsphone">Windows Phone </option>
            <option value="tip">Hướng dẫn</option></select>
            <input id="btnHeaderFind" type="submit" value="Tìm kiếm">
        </form>
 
   
		</div>
		<div class="clearfix"></div>
	</div>
	<div id="main-nav" class="clearfix">
    <div class="tabs">
        <ul class="navigation clearfix"><li class="first home-menu"><a href="/">Tất cả</a>

     </li>
     <li id="windows" class="item windows">
            <a href="https://download.com.vn/windows">
                <img src="//i.dowload.vn/data/image/icon/2017/windows.png">
                <span>Windows</span>
            </a>
                
        </li><li id="mac" class="item mac">
            <a href="https://download.com.vn/mac">
                <img src="//i.dowload.vn/data/image/icon/2015/mac-os.png">
                <span>Mac</span>
            </a>
                
        </li><li id="android" class="item android">
            <a href="https://download.com.vn/android">
                <img src="//i.dowload.vn/data/image/icon/2015/android.png">
                <span>Android</span>
            </a>
               
        </li><li id="ios" class="item ios">
            <a href="https://download.com.vn/ios">
                <img src="//i.dowload.vn/data/image/icon/2015/ios.png">
                <span>iOS</span>
            </a>
           
        </li>

        <li id="web" class="item web">
            <a href="https://download.com.vn/web">
                <img src="//i.dowload.vn/data/image/icon/2015/globe.png">
                <span>Web Apps</span>
            </a>
              
        </li>


        <li id="docs" class="item docs">
            <a href="https://download.com.vn/docs">
                <img src="//i.dowload.vn/data/image/icon/2015/documentsfolder.png">
                <span>Tài liệu</span>
            </a>

        </li><li id="Tip" class="item tip">
		<a href="//tip.download.com.vn">
			<img src="//i.dowload.vn/data/image/icon/2015/tip.png">
			<span>Hướng dẫn</span>
		</a>



     </li></ul>
    </div>

</div>
<hr>
<div id="main">
@yield('main')
</div>
<div id="footer">
	
</div>
@yield('footer')
</body>
</html>