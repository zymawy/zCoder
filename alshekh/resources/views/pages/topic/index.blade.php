@extends('layouts.frontend.master')

@section('title','المقالات')

@section('toolbar')
@include('layouts.frontend.toolbar')
@endsection

@section('content')

        {{-- Navigate --}}
        @include('layouts.frontend.navigate')
        {{-- Navigate --}}

    <div class="singleTopic">
        <div uk-grid>    
        @include('layouts.frontend.sidebar')
                <div class="uk-width-3-4@m uk-column-1-1@m">
                    <div class="cardContent uk-card uk-card-default uk-card-body"> 
                            <div class="contentBody">
                                
                                    <div class="uk-card-body">
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
                </div>
            </div>
    </div>
@endsection

@section('footer')
@include('layouts.frontend.footer')
@endsection