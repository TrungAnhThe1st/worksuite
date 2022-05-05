@php($envatoUpdateCompanySetting = \Froiden\Envato\Functions\EnvatoUpdate::companySetting())
<div class="table-responsive">

    <table class="table table-bordered">
        <thead>
        <th>@lang('modules.update.systemDetails')</th>
        <th></th>
        </thead>
        <tbody>
        <tr>
            <td>Phiên bản ứng dụng</td>
            <td>{{ $updateVersionInfo['appVersion'] }}
                @if(!isset($updateVersionInfo['lastVersion']))
                <i class="fa fa fa-check-circle text-success"></i>
                @endif
            </td>
        </tr>
        <tr>
            <td>Phiên bản Laravel</td>
            <td>{{ $updateVersionInfo['laravelVersion'] }}</td>
        </tr>
        <td>Phiên bản PHP

        <td>
            @if (version_compare(PHP_VERSION, '7.4.0') >= 0)
                {{ phpversion() }} <i class="fa fa fa-check-circle text-success"></i>
            @else
                {{ phpversion() }} <i data-toggle="tooltip" data-original-title="@lang('messages.phpUpdateRequired')"
                                      class="fa fa fa-warning text-danger"></i>
            @endif
        </td>
        </td>
        @if(!is_null($mysql_version))
            <tr>
                <td>{{ $databaseType }}</td>
                <td>
                    {{ $mysql_version}}
                </td>
            </tr>
        @endif
        @if(!is_null($envatoUpdateCompanySetting->purchase_code))
            <tr>
                <td>Envato Purchase code</td>
                <td>
                    <span class="blur-code purchase-code">{{$envatoUpdateCompanySetting->purchase_code}}</span>
                    <span class="show-hide-purchase-code" data-toggle="tooltip"
                          data-original-title="{{__('messages.showHidePurchaseCode')}}">
                       <i class="icon far fa-eye-slash fa-fw cursor-pointer"></i>
                    </span>

                </td>
            </tr>
        @endif

        </tbody>
    </table>
</div>

