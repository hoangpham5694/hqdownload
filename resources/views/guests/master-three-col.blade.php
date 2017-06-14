@extends('guests.master')
@section('header')

@endsection
@section('main')
<div class="col-sm-2 left-slidebar">
	<div class="row">
		<div id="leftNav">
			<ul id="leftnavigation" class="leftnavigation right">
				<li class="">
					<a class="first"><img src="//i.dowload.vn/data/image/icon/2015/documentsfolder.png"><span>Danh mục</span>
					</a>
				</li>
				<li>
					<a href="/download-phan-mem-bao-mat" class="dc-mega">

						<span>Phần mềm Bảo mật</span>
						<span class="dc-mega-icon"></span>
					</a>

				</li>
				<li>
					<a href="/download-diet-virus" class="dc-mega">

						<span>Diệt Virus - Spyware</span>
						<span class="dc-mega-icon"></span>
					</a>

				</li>
				<li>
					<a href="/download-game-tro-choi" class="dc-mega">
						
						<span>Game - Trò chơi</span>
						<span class="dc-mega-icon"></span>
					</a>

				</li>
				<li>
					<a href="/chat-goi-video-nhan-tin">
					
						<span>Chat, Gọi video, Nhắn tin</span>
					</a>
				</li>
				<li>
					<a href="/ban-do">
					
						<span>Bản đồ - Định vị</span>
					</a>
				</li>
				<li>
					<a href="/download-mang-xa-hoi">
						
						<span>Mạng xã hội</span>
					</a>
				</li>
				<li>
					<a href="/download-trinh-duyet-internet" class="dc-mega">
						
						<span>Trình duyệt</span>
						<span class="dc-mega-icon"></span>
					</a>

				</li>
			

			</ul>
		</div>

	</div>
</div>
<div class="col-sm-6 center-content">
@yield('content')
</div>
<div class="col-sm-4 right-slidebar">

	<div id="rightsidebar" class="clearfix">


        <div class="row">
        	
				         <div class="bucket topdownloads clearfix" id="topdownloads">
        <div class="title">
            <span>Tải nhiều trong tuần</span>
        </div>
        <ul class="listbox-view clearfix">
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/minecraft/download" title="Minecraft">
                            Minecraft
                                <em>1.12</em>
                        </a>
                        <a class="item-image" href="/minecraft/download" title="Minecraft">
                            <img src="//i.dowload.vn/data/image/2015/01/20/minecraft.png"></a>
                        <span class="item-downloads">45.960</span>
                        <i>Game những khối vuông kỳ diệu</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/coc-coc/download" title="Cốc Cốc">
                            Cốc Cốc
                                <em>63.4</em>
                        </a>
                        <a class="item-image" href="/coc-coc/download" title="Cốc Cốc">
                            <img src="//i.dowload.vn/data/image/2014/04/08/coc-coc32.png"></a>
                        <span class="item-downloads">34.524</span>
                        <i>Trình duyệt hỗ trợ tải Video, tải file, tải Torrent</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/bluestacks-app-player-1/download" title="BlueStacks">
                            BlueStacks
                                <em>2.7</em>
                        </a>
                        <a class="item-image" href="/bluestacks-app-player-1/download" title="BlueStacks">
                            <img src="//i.dowload.vn/data/image/logos/2016/bluestacks-logo.png"></a>
                        <span class="item-downloads">30.373</span>
                        <i>Phần mềm giả lập Android trên Windows</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/unikey/download" title="UniKey">
                            UniKey
                                <em>4.2 RC4 Build 140823</em>
                        </a>
                        <a class="item-image" href="/unikey/download" title="UniKey">
                            <img src="//i.dowload.vn/data/image/logos_banners/u/unikey.png"></a>
                        <span class="item-downloads">25.504</span>
                        <i>Bộ gõ tiếng Việt miễn phí phổ biến nhất</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/droid4x/download" title="Droid4X">
                            Droid4X
                                <em>0.10</em>
                        </a>
                        <a class="item-image" href="/droid4x/download" title="Droid4X">
                            <img src="//i.dowload.vn/data/image/2016/06/02/droid4x-32.png"></a>
                        <span class="item-downloads">22.763</span>
                        <i>Phần mềm giả lập Android trên PC</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/cheat-engine/download" title="Cheat Engine">
                            Cheat Engine
                                <em>6.7</em>
                        </a>
                        <a class="item-image" href="/cheat-engine/download" title="Cheat Engine">
                            <img src="//i.dowload.vn/data/image/2012/thang10/31/cheat-engine.png"></a>
                        <span class="item-downloads">20.817</span>
                        <i>Phần mềm thay đổi thông số chơi game</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/zalo/download" title="Zalo">
                            Zalo
                                <em>2.7</em>
                        </a>
                        <a class="item-image" href="/zalo/download" title="Zalo">
                            <img src="//i.dowload.vn/data/image/2014/09/13/zalo.png"></a>
                        <span class="item-downloads">17.798</span>
                        <i>Nhắn gửi yêu thương - Trọn niền tâm sự</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/google-chrome/download" title="Google Chrome">
                            Google Chrome
                                <em>59.0</em>
                        </a>
                        <a class="item-image" href="/google-chrome/download" title="Google Chrome">
                            <img src="//i.dowload.vn/data/image/logos_banners/g/google-chrome.png"></a>
                        <span class="item-downloads">16.059</span>
                        <i>Duyệt web nhanh, bảo mật hơn</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/grand-theft-auto-vice-city-ultimate-vice-city-mod/download" title="Grand Theft Auto: Vice City Ultimate Vice City mod">
                            Grand Theft Auto: Vice City Ultimate Vice City mod
                                <em>2.1</em>
                        </a>
                        <a class="item-image" href="/grand-theft-auto-vice-city-ultimate-vice-city-mod/download" title="Grand Theft Auto: Vice City Ultimate Vice City mod">
                            <img src="//i.dowload.vn/data/image/2014/10/01/grand-theft-auto32.png"></a>
                        <span class="item-downloads">15.650</span>
                        <i>Bản mod cho game GTA nổi tiếng</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/foxit-reader/download" title="Foxit Reader">
                            Foxit Reader
                                <em>8.3</em>
                        </a>
                        <a class="item-image" href="/foxit-reader/download" title="Foxit Reader">
                            <img src="//i.dowload.vn/data/image/2015/09/06/foxit-reader-32x32.png"></a>
                        <span class="item-downloads">14.865</span>
                        <i>Đọc, chỉnh sửa và tạo file PDF miễn phí</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/open-broadcaster-software/download" title="Open Broadcaster Software">
                            Open Broadcaster Software
                                <em>0.659b</em>
                        </a>
                        <a class="item-image" href="/open-broadcaster-software/download" title="Open Broadcaster Software">
                            <img src="//i.dowload.vn/data/image/2014/02/22/open-broadcaster-software.png"></a>
                        <span class="item-downloads">13.247</span>
                        <i>Quay và truyền video màn hình trực tiếp</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/csm-talk/download" title="ccTalk">
                            ccTalk
                                <em>4.1</em>
                        </a>
                        <a class="item-image" href="/csm-talk/download" title="ccTalk">
                            <img src="//i.dowload.vn/data/image/2015/09/16/talktv-32.png"></a>
                        <span class="item-downloads">13.137</span>
                        <i>Phần mềm chat, tán gẫu, trò chuyện trực tuyến</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/nox-app-player/download" title="Nox APP Player">
                            Nox APP Player
                                <em>3.8</em>
                        </a>
                        <a class="item-image" href="/nox-app-player/download" title="Nox APP Player">
                            <img src="//i.dowload.vn/data/image/2015/12/20/nox-app-player-1.png"></a>
                        <span class="item-downloads">12.953</span>
                        <i>Phần mềm giả lập Android trên PC</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/vietkey/download" title="Vietkey">
                            Vietkey
                                <em>2007</em>
                        </a>
                        <a class="item-image" href="/vietkey/download" title="Vietkey">
                            <img src="//i.dowload.vn/data/image/logos_banners/v/vietkey.jpg"></a>
                        <span class="item-downloads">12.503</span>
                        <i>Bộ gõ tiếng Việt gọn nhẹ</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/winrar/download" title="WinRAR">
                            WinRAR
                                <em>5.40</em>
                        </a>
                        <a class="item-image" href="/winrar/download" title="WinRAR">
                            <img src="//i.dowload.vn/data/image/2016/06/03/winrar-32.png"></a>
                        <span class="item-downloads">12.322</span>
                        <i>Phần mềm nén, giải nén file hiệu quả</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/grand-theft-auto-v/download" title="Grand Theft Auto V">
                            Grand Theft Auto V
                        </a>
                        <a class="item-image" href="/grand-theft-auto-v/download" title="Grand Theft Auto V">
                            <img src="//i.dowload.vn/data/image/2015/01/19/gta-v-0.png"></a>
                        <span class="item-downloads">11.520</span>
                        <i>Game nhập vai GTA 5 mới nhất</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/itunes/download" title="iTunes">
                            iTunes
                                <em>12.6</em>
                        </a>
                        <a class="item-image" href="/itunes/download" title="iTunes">
                            <img src="//i.dowload.vn/data/image/logos_banners/a/apple-new.png"></a>
                        <span class="item-downloads">11.315</span>
                        <i>Đồng bộ nhạc, video, dữ liệu trên iPhone với PC</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/adobe-flash-player/download" title="Adobe Flash Player">
                            Adobe Flash Player
                                <em>26.0</em>
                        </a>
                        <a class="item-image" href="/adobe-flash-player/download" title="Adobe Flash Player">
                            <img src="//i.dowload.vn/data/image/2015/10/19/adobe-flash-player-32.png"></a>
                        <span class="item-downloads">11.026</span>
                        <i>Xem và chơi Flash trên trình duyệt</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/idm/download" title="IDM - Internet Download Manager">
                            IDM - Internet Download Manager
                                <em>6.28</em>
                        </a>
                        <a class="item-image" href="/idm/download" title="IDM - Internet Download Manager">
                            <img src="//i.dowload.vn/data/image/logos_banners/t/tonec.png"></a>
                        <span class="item-downloads">10.864</span>
                        <i>Tăng tốc download và tải Video</i>
                    </div>
                </li>
                <li class="list-item clearfix">
                    <div class="list-item-title">
                        <a class="title" href="/adobe-photoshop-cs5-extended/download" title="Adobe Photoshop CS6">
                            Adobe Photoshop CS6
                        </a>
                        <a class="item-image" href="/adobe-photoshop-cs5-extended/download" title="Adobe Photoshop CS6">
                            <img src="//i.dowload.vn/data/image/2015/01/14/adobe-photoshop-cs6.png"></a>
                        <span class="item-downloads">10.682</span>
                        <i>Phần mềm chỉnh sửa ảnh chuyên nghiệp</i>
                    </div>
                </li>
        </ul>
    </div>

        </div>
   




</div>
    </div>
</div>
@endsection
