<!-- PAGE TITLE START -->
<div {{ $attributes->merge(['class' => 'page-title']) }}>
    <div class="page-heading">
        <h2 class="mb-0 pr-3 text-dark f-18 font-weight-bold">{{ $pageTitle }}

            <span class="text-lightest f-12 f-w-500 ml-2">
                <a href="{{ url('/') }}" class="text-lightest">@lang('app.menu.home')</a> &bull;
                @php
                    $link = '';
                @endphp

                @for ($i = 1; $i <= count(Request::segments()); $i++)
                    @if (($i < count(Request::segments())) && ($i> 0))
                        @php $link .= '/' . Request::segment($i); @endphp

                        @if (Request::segment($i) != 'account')
<<<<<<< HEAD
                            {{-- <a href="<?= $link ?>" class="text-lightest">{{ ucwords(str_replace('-', ' ', Request::segment($i))) }}</a> &bull; --}}
                            <a href="<?= $_ENV["APP_URL"] . $_ENV["ROOT_FOLDER_NAME"] . '/public' . $link ?>" class="text-lightest">@lang('app.menu.' . str_replace('-', '', Request::segment($i)))</a> &bull;
=======
                        <a href="<?= $_ENV["APP_URL"] . '/' . $_ENV["ROOT_FOLDER_NAME"] . '/public' . $link ?>" class="text-lightest">@lang('app.menu.' . str_replace('-', '', Request::segment($i)))</a> &bull;
>>>>>>> c439595b51d2acc18fb9a342a51a76cb11f743a2
                        @endif
                    @else
                        {{-- <!-- @lang('app.menu.' . $pageTitle) --> --}}
                        {{ $pageTitle }}
                    @endif
                @endfor

        </span>


        </h2>



    </div>
</div>
<!-- PAGE TITLE END -->
