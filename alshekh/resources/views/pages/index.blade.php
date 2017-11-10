@extends('layouts.frontend.master')

@section('title','موقع فضيلة الشيخ احمد بن عمر الحازمي')

@section('toolbar')
@include('layouts.frontend.toolbar')
@endsection

@section('content')
    <div class="mianContent ">
       <div class="uk-container">

        {{-- Navigate --}}
        @include('layouts.frontend.navigate')
        {{-- Navigate --}}

        {{-- Content --}}
        <div class="contentIndex">
            <div uk-grid>
                <div class="uk-width-1-4@m uk-column-1-1@m">
                    <div class="cardContent uk-card uk-card-default uk-card-body"> 
                            <div class="heading">
                                <h4><i class="fa fa-book fa-fw"></i> اخر الدروس </h4>
                            </div>
                            <div class="contentBody">
                                 <ul class="uk-list uk-list-large">
                                    <li><a href="#"> 283 باب الشروط في الجهاد والمصالحة مع أهل الحرب 11-03-1438 </a></li>
                                    <li><a href="#">283 باب الشروط في الجهاد والمصالحة مع أهل الحرب 11-03-1438 </a></li>
                                    <li><a href="#">283 باب الشروط في الجهاد والمصالحة مع أهل الحرب 11-03-1438 </a></li>
                                </ul>
                            </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="cardContent uk-card  uk-card-default uk-card-body"> 
                            <div class="heading">
                                <h4><i class="fa fa-archive fa-fw"></i> الارشيف </h4>
                            </div>
                            <div class="contentBody">
                                <ul class="uk-list uk-list-large">
                                <li> 8 شعبان 1436هـ </li>
                                <li> 8 رجب 1436هـ </li>
                                <li> 8 رمضان 1436هـ </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m uk-column-1-1@m">
                    <div class="cardContent uk-card uk-card-default uk-card-body"> 
                            <div class="heading">
                                <h4><i class="fa fa-inbox fa-fw"></i> اخر المقالات </h4>
                            </div>
                            <div class="contentBody">
                                <div class="uk-card uk-card-small uk-card uk-card-default uk-card-body">
                                    <div class="uk-card-header">
                                        <h3 class="uk-card-title"> بيان جنايات الدكتور أحمد العيسى وزير التعليم على العهد السلماني </h3>
                                        <i class="fa fa-clock-o fa-fw"></i> 1438/02/12
                                        <i class="fa fa-user fa-fw"></i> الشيخ الحازمي
                                    </div>
                                    <div class="uk-card-body">
                                    <p>
                                    الحمد لله وحده، وصلى الله وسلم وبارك على من لا نبي بعده، نبينا محمد وعلى آله وصحبه. أما بعد، فقد اطلعت على مقال نشر في شبكة المعلومات بتاريخ 3/2/1439هـ، بعنوان: «أريد 
                                    </p>
                                    </div>
                                    <div class="uk-card-footer">
                                        <a href="{{ route('topic.single',3) }}" class="uk-float-left uk-button uk-button-default"> قراءة المزيد </a>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <div class="uk-card uk-card-small uk-card uk-card-default uk-card-body">
                                    <div class="uk-card-header">
                                        <h3 class="uk-card-title"> بيان جنايات الدكتور أحمد العيسى وزير التعليم على العهد السلماني </h3>
                                        <i class="fa fa-clock-o fa-fw"></i> 1438/02/12
                                        <i class="fa fa-user fa-fw"></i> الشيخ الحازمي
                                    </div>
                                    <div class="uk-card-body">
                                    <p>
                                    الحمد لله وحده، وصلى الله وسلم وبارك على من لا نبي بعده، نبينا محمد وعلى آله وصحبه. أما بعد، فقد اطلعت على مقال نشر في شبكة المعلومات بتاريخ 3/2/1439هـ، بعنوان: «أريد 
                                    </p>
                                    </div>
                                    <div class="uk-card-footer">
                                        <a href="{{ route('topic.single',2) }}" class="uk-float-left uk-button uk-button-default"> قراءة المزيد </a>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <div class="uk-card uk-card-small uk-card uk-card-default uk-card-body">
                                    <div class="uk-card-header">
                                        <h3 class="uk-card-title"> بيان جنايات الدكتور أحمد العيسى وزير التعليم على العهد السلماني </h3>
                                        <i class="fa fa-clock-o fa-fw"></i> 1438/02/12
                                        <i class="fa fa-user fa-fw"></i> الشيخ الحازمي
                                    </div>
                                    <div class="uk-card-body">
                                    <p>
                                    الحمد لله وحده، وصلى الله وسلم وبارك على من لا نبي بعده، نبينا محمد وعلى آله وصحبه. أما بعد، فقد اطلعت على مقال نشر في شبكة المعلومات بتاريخ 3/2/1439هـ، بعنوان: «أريد 
                                    </p>
                                    </div>
                                    <div class="uk-card-footer">
                                        <button class="uk-float-left uk-button uk-button-default"> قراءة المزيد </button>
                                    </div>
                                </div>
                                    <ul class="uk-pagination uk-flex-center" uk-margin>
                                        <li><a href="#"><span uk-pagination-previous></span></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="uk-disabled"><span>...</span></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li class="uk-active"><span>7</span></li>
                                        <li><a href="#">8</a></li>
                                        <li><a href="#"><span uk-pagination-next></span></a></li>
                                    </ul>
                            </div>
                    </div>
                </div>
                <div class="uk-width-1-4@m uk-column-1-1@m">
                    <div class="cardContent uk-card uk-card-default uk-card-body"> 
                            <div class="heading">
                                <h4><i class="fa fa-bullhorn fa-fw"></i> اخر المحاضرات </h4>
                            </div>
                            <div class="contentBody">
                                 <ul class="uk-list uk-list-large">
                                    <li><a href="#"> 283 باب الشروط في الجهاد والمصالحة مع أهل الحرب 11-03-1438 </a></li>
                                    <li><a href="#">283 باب الشروط في الجهاد والمصالحة مع أهل الحرب 11-03-1438 </a></li>
                                    <li><a href="#">283 باب الشروط في الجهاد والمصالحة مع أهل الحرب 11-03-1438 </a></li>
                                </ul>
                            </div>
                    </div>
                    <br />
                    <br />
                    <div class="cardContent uk-card uk-card-default uk-card-body"> 
                            <div class="heading">
                                <h4><i class="fa fa-twitter fa-fw"></i> اخر التغريدات</h4>
                            </div>
                            <div class="contentBody tweets">
                                <a class="twitter-timeline" href="https://twitter.com/RttCy?ref_src=twsrc%5Etfw">Tweets by RttCy</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
@section('footer')
@include('layouts.frontend.footer')
@endsection

        {{-- Content --}}
       </div>
    </div>
@endsection

