@extends('guests.master-two-col')
@section('header')

@endsection
@section('content')
<div class="list-options">
                <span id="OrderBy">Sắp xếp theo:</span>
                <a href="" ng-click="getListSoftwaresWithCate(10,1,{{$cateId}},'id');" ng-class="{selected: order=='id'}">Phần mềm mới nhất</a>
                <a href=""  ng-click="getListSoftwaresWithCate(10,1,{{$cateId}},'downloaded');" ng-class="{selected: order=='downloaded'}"> Tải nhiều nhất</a>
</div>

            <div class="list-softs" data-ng-init="getListSoftwaresWithCate(10,1,{{$cateId}},'downloaded');">
            <div class="item clearfix" ng-repeat="software in listSoftwaresWithCate">
                <h2 class="title">
                    <img ng-src="{{asset('upload/images/32x32')}}/{%software.image%}" alt="{%software.name%}-{%software.title%}">
                    <a class="title" href="/neighbours-from-hell/download"><b>{%software.name%}</b></a> 
                    <i>{%software.title%}</i>
                </h2>
                <div class="item-info">
                    <a class="item-image" href="/neighbours-from-hell/download">
                        <img ng-src="{{asset('upload/images/96x96')}}/{%software.image%}" alt="{%software.name%}-{%software.title%}">
                    </a>

                    <div class="publisher-info">
                        <ul>
                            <li class="publisher-info">
                                <span class="item-label">Phát hành:</span>
                                <a class="item-info" href="">
                                    {%software.publisher_name%}
                                </a>
                            </li>
                            <li class="clearfix"></li>
                        <li class="brief-info">
                               {%software.description%}
                        </li>
                        </ul>
                    </div>
                    <div class="list-item-plus">
                        <ul class="specs-info">
                        <li class="download-info">
                            <a href="/neighbours-from-hell/download" class="download-button">
                                <span>Tải về</span>
                            </a>
                        </li>

                    </ul>
                </div>


                    <div class="clearfix">
                    </div>
                    <ul class="specs-info">

                        <li class="downloads-info">
                            <span class="item-label">Lượt tải:</span>
                            <span class="item-info">{%software.downloaded%}</span>
                        </li>

                        <li class="version-info">
                      
   <span class="item-label">Version:</span>
                                <span class="item-info">   {%software.version%}</span>
                        </li>


                            <li class="filesize-info">
                                <span class="item-label">Dung lượng:</span>
                                <span class="item-info">   {%software.size%}</span>
                            </li>

                            <li class="requirements-info">
                                <span class="item-label">Yêu cầu:</span>
                                <span class="item-info">{%software.system_require%}</span>
                            </li>
                                                    <li class="tags">
                                <span class="item-label">Tìm thêm:</span>
                                <span class="item-info">
                                     <a ng-repeat="n in [1,software.tags.split(',').length] | makeRange"  href="">  {% software.tags.split(',')[n]%}</a>
                                </span>
                            </li>
                    </ul>
                </div>
    
            </div>

        </div>





@endsection
@section('footer')

@endsection
