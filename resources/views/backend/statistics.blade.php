@extends('layouts.backend')

@section('title', __('Статистика'))

@section('content')
<div class="statistics">
<div class="card">
<div class="card-body">

<div class="alert alert-danger" role="alert">
  Извините, эта страница в разработке
</div>
  <h3>Статистика по nurhub</h3>
<br>
  <b>Вместимость</b>   : <span title="{{number_format($keyCapacity)}}" data-toggle="tooltip">{{numberFormatShort($keyCapacity)}}</span> <br>
  <b>Осталось</b>  : <span title="{{number_format($keyRemaining)}}" data-toggle="tooltip">
                        {{numberFormatShort($keyRemaining)}}
                        ({{$remainingPercentage}})
                      </span> <br>

<br>

  <b>Всего короткий URL</b> <br>
  Значение          : <span title="{{number_format($shortUrlCount)}}" data-toggle="tooltip">{{numberFormatShort($shortUrlCount)}}</span> <br>
  Значение по гостю   : <span title="{{number_format($shortUrlCountByGuest)}}" data-toggle="tooltip">{{numberFormatShort($shortUrlCountByGuest)}}</span> <br>

<br>

  <b>Всего кликов</b> <br>
  Значение             : <span title="{{number_format($clickCount)}}" data-toggle="tooltip">{{numberFormatShort($clickCount)}}</span> <br>
  Значение по гостю     : <span title="{{number_format($clickCountFromGuest)}}" data-toggle="tooltip">{{numberFormatShort($clickCountFromGuest)}}</span> <br>

<br>

  <b>Всего пользователей</b> <br>
  Зарегистрированный Пользователь   : <span title="{{number_format($userCount)}}" data-toggle="tooltip">{{numberFormatShort($userCount)}}</span> <br>
  Незарегистрированный пользователь : <span title="{{number_format($guestCount)}}" data-toggle="tooltip">{{numberFormatShort($guestCount)}}</span> <br>


</div>
</div>
</div>
@endsection
