        {{-- Marquee --}}
        <div class="marquee uk-child-width-expand@s" uk-grid>
              <div class="uk-width-3-4">
                <div>
                   <marquee direction ="right" class="news" width="100%"> 
                شرح صحيح البخاري يوميا عدا الجمعة بعد صلاة المغرب بالمسجد النبوي
                </marquee>
                </div>
              </div>
              <div>
                <div class="uk-width-2-4">
                   <div class="news searchNav" width=""> 
                    <div class="uk-margin">
                        <form class="uk-search uk-search-default">
                            <a href="" class="uk-search-icon-flip" uk-search-icon></a>
                            <input class="uk-search-input" type="search" placeholder="بحث...">
                        </form>
                    </div>
                </div>
                </div>
              </div>
        </div>
        {{-- Marquee --}}
        
        <div class="navigate">
        <div class="uk-grid-match uk-child-width-expand@s uk-text-center" uk-grid>
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <a href="{{ route('lesson.all') }}"><div class="uk-card uk-card-hover uk-card-default uk-card-body"> <h3>الدروس</h3> </div></a>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <a href="{{ route('topic.all') }}"><div class="uk-card  uk-card-hover uk-card-default uk-card-body"> <h3> المقالات </h3> </div></a>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <a href="{{ route('lecture.all') }}"><div class="uk-card  uk-card-hover uk-card-default uk-card-body"> <h3> المحاضرات </h3> </div></a>
            </div>
             <div class="uk-width-1-3@m uk-width-1-2@s">
                <a href="{{ route('live') }}"><div class="uk-card  uk-card-hover uk-card-default uk-card-body"> <h3> البث المباشر </h3> </div></a>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <a href="{{ route('contect') }}"><div class="uk-card  uk-card-hover uk-card-default uk-card-body"> <h3> اتصل بنا </h3> </div></a>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <a href="{{ route('brief') }}"><div class="uk-card  uk-card-hover uk-card-default uk-card-body"> <h3> النبذة الشخصية </h3> </div></a>
            </div>
        </div>
        </div>