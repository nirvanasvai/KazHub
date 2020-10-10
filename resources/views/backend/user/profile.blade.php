@extends('layouts.backend')

@section('title', Str::title(Auth::user()->name) .' ‹ '. __('Edit Profile'))

@section('content')

@include('messages')

<div class="row">
  <div class="col-xl-6">
    <form method="post" action="{{route('user.update', $user->getRouteKey())}}">
    @csrf
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-0">
            @lang('Найстройки Аккаунта')
            <small class="text-muted">@lang('Профиль')</small>
          </h4>

          <hr />

          <div class="row mt-4 mb-4">
          <div class="col">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
              <label for="name" class="col-sm-3 col-form-label">@lang('Имя пользователя')</label>

              <div class="col">
                <input value="{{$user->name}}" id="name" type="text" class="form-control" name="name" disabled>
                <small class="text-muted"><i>@lang('Имена пользователей не могут быть изменены.')</i></small>
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
              <label for="email" class="col-sm-3 col-form-label">@lang('E-mail')</label>

              <div class="col">
                <input value="{{$user->email}}" id="email" type="email" class="form-control" name="email">

                @if ($errors->has('email'))
                <span class="help-block text-danger">
                  {{ $errors->first('email') }}
                </span>
                @endif
              </div>
            </div>

            <div class="row">
              <div class="col text-right">
                <button type="submit" class="btn btn-secondary">
                  @lang('Сохранить')
                </button>
              </div>
            </div>
          </div><!--col-->
          </div><!--row-->
        </div><!--card-body-->
      </div><!--card-->
    </form>
  </div>
</div>
@endsection
