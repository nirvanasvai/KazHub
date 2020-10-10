@role('admin')
  <div class="row right_now">
    <div class="col-12 hint">
      <span class="all ml-2"><i class="fas fa-square"></i> @lang('Все')</span>
      <span class="me ml-5"><i class="fas fa-square"></i> @lang('не')</span>
      <span class="guest ml-5"><i class="fas fa-square"></i> @lang('Гости')</span>
    </div>
    <div class="col-md-6 col-xl-4" style="font-size: 1.25rem; font-weight: 300;">
      <div class="card border-left">
      <div class="card-body">
        <div class="row">
          <div class="col-6 col-sm-5"><b>@lang('Вместимость')</b></div>
          <div class="col col-sm"><span title="{{number_format($keyCapacity)}}" data-toggle="tooltip">{{numberFormatShort($keyCapacity)}}</span></div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-5"><b>@lang('Осталось')</b></div>
          <div class="col col-sm">
            <span title="{{number_format($keyRemaining)}}" data-toggle="tooltip">
              {{numberFormatShort($keyRemaining)}}
              ({{$remainingPercentage}})
            </span>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="col-md-6 col-xl text-center">
      <div class="card border-left">
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <div class="right_now-text--primary">
              <span title="{{number_format($shortUrlCount)}}" data-toggle="tooltip">{{numberFormatShort($shortUrlCount)}}</span>
            </div>
            <div class="right_now-label">@lang('URL-адреса сокращены')</div>
          </div>
          <div class="col-4">
            <div class="right_now-text--secondary">
              <span title="{{number_format($shortUrlCountByMe)}}" data-toggle="tooltip">{{numberFormatShort($shortUrlCountByMe)}}</span>
            </div>
            <div class="right_now-label">@lang('URL-адреса сокращены')</div>
          </div>
          <div class="col-4">
            <div class="right_now-text--tertiary">
              <span title="{{number_format($shortUrlCountByGuest)}}" data-toggle="tooltip">{{numberFormatShort($shortUrlCountByGuest)}}</span>
            </div>
            <div class="right_now-label">@lang('URL-адреса сокращены')</div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="row right_now">
    <div class="col-md-6 col-xl-4 text-center">
      <div class="card border-left">
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <div class="right_now-text--primary">
              <span title="{{number_format($userCount)}}" data-toggle="tooltip">{{numberFormatShort($userCount)}}</span>
            </div>
            <div class="right_now-label">@lang('Зарегистрированные Пользователи')</div>
          </div>
          <div class="col-6">
            <div class="right_now-text--primary">
              <span title="{{number_format($guestCount)}}" data-toggle="tooltip">{{numberFormatShort($guestCount)}}</span>
            </div>
            <div class="right_now-label">@lang('Гости')</div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="col-md-6 col-xl text-center">
      <div class="card border-left">
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <div class="right_now-text--primary">
              <span title="{{number_format($clickCount)}}" data-toggle="tooltip">{{numberFormatShort($clickCount)}}</span>
            </div>
            <div class="right_now-label">@lang('Клики и Переадресации')</div>
          </div>
          <div class="col-4">
            <div class="right_now-text--secondary">
              <span title="{{number_format($clickCountFromMe)}}" data-toggle="tooltip">{{numberFormatShort($clickCountFromMe)}}</span>
            </div>
            <div class="right_now-label">@lang('Клики и Переадресации')</div>
          </div>
          <div class="col-4">
            <div class="right_now-text--tertiary">
              <span title="{{number_format($clickCountFromGuest)}}" data-toggle="tooltip">{{numberFormatShort($clickCountFromGuest)}}</span>
            </div>
            <div class="right_now-label">@lang('Клики и Переадресации')</div>
          </div>
        </div>
      </div>
      </div>
    </div>

  </div>
@else
  <div class="row right_now">
    <div class="col-sm-6 col-lg-3 text-center">
      <div class="card border-left">
      <div class="card-body">
        <div class="right_now-text--primary">
          <span title="{{number_format($shortUrlCountByMe)}}" data-toggle="tooltip">{{numberFormatShort($shortUrlCountByMe)}}</span>
        </div>
        <div class="right_now-label">@lang('URL-адреса сокращены')</div>
      </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3 text-center">
      <div class="card border-left">
      <div class="card-body">
        <div class="right_now-text--primary">
          <span title="{{number_format($clickCountFromMe)}}" data-toggle="tooltip">{{numberFormatShort($clickCountFromMe)}}</span>
        </div>
        <div class="right_now-label">@lang('Клики и Переадресации')</div>
      </div>
      </div>
    </div>
  </div>
@endrole
