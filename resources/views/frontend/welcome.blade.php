@extends('layouts.frontend')

@section('css_class', 'frontend home')

@section('content')
<div class="container home pt-5">
  @if (! Auth::check() and ! Config::get('urlhub.public_site'))
   <div class="row justify-content-md-center">
    <div class="col-lg-8 text-center welcome-msg">@lang('Пожалуйста, войдите, чтобы сократить URL-адреса')</div>
  </div>
  <div class="row mt-5 justify-content-md-center">
    <div class="col-lg-7">
      @include('messages')
    </div>
  </div>
  @else
  <div class="row justify-content-md-center">
    <div class="col-lg-8 text-center welcome-msg">Сократите ссылки, чтобы лучше распространять свою историю в социальных сетях.</div>
  </div>

  <div class="row mt-5 justify-content-md-center">
    <div class="col-lg-7">
      <form method="post" action="{{route('createshortlink')}}" class="mt-5 mb-3" id="formUrl">
      @csrf
        <div class="input-group input-group-lg original-url">
          <input name="long_url" placeholder="@lang('Вставьте ссылку для сокращение')" class="form-control" id="inputSourceLink" type="text" value="{{ old('long_url') }}">
          <div class="input-group-append">
            <button class="btn" type="submit" id="actProcess">@lang('Сократить')</button>
          </div>
        </div>

        <br>
        <div class="custom-url">
          <div class="custom-url--title">@lang('Пользовательский URL (необязательно)')</div>
          <span class="custom-url--description text-muted d-block">@lang('Замените неуклюжие URL-адреса понятными короткими ссылками, которые получают больше кликов.')</span>
          <div class="site-url">{{$_SERVER['SERVER_NAME']}}/</div>
          <input class="form-control form-control-sm url-field" id="custom_key" name="custom_key">
          <small class="ml-3" id="link-availability-status"></small>
        </div>
      </form>

      @include('messages')

    </div>
  </div>
  @endif
</div>
@endsection
