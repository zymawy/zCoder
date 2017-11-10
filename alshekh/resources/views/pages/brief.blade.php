@extends('layouts.frontend.master')

@section('title','النبذة الشخصية')

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
                                    <div class="uk-card-header">
                                    <h3 class="uk-card-title"><i class="fa fa-user fa-fw"></i> احمد بن عمر الحازمي </h3>
                                    </div>
                                    <p class="    line-height: 2.0em;
    margin-bottom: 15px;
    font-size: 1.1em;">
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
                                    </p>    
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