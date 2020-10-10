@extends('layouts.backend')

@section('title', Str::title(Auth::user()->name) .' ‹ '. __('Change Password'))

@section('content')

@include('messages')

<div class="row">
  <div class="col-xl-6">
    <form method="post" action="{{route('user.change-password.post', $user->getRouteKey())}}">
    @csrf
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-0">
            @lang('Настройки аккаунта')
            <small class="text-muted">@lang('Сменить Пароль')</small>
          </h4>

          <hr />

          <div class="row mt-4 mb-4">
          <div class="col">
            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }} row">
              <label for="current-password" class="col-sm-3 col-form-label">@lang('Ваш Пароль')</label>

              <div class="col">
                <input id="current-password" type="password" class="form-control" name="current-password" placeholder="Введите ваш пароль" required>
              </div>
            </div>

            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }} row">
              <label for="new-password" class="col-sm-3 col-form-label">@lang('Новый Пароль')</label>

              <div class="col">
                <div class="input-group password-toggler-container">
                  <input type="password" class="form-control" id="new-password" name="new-password" aria-label="Enter a new password" placeholder="Введите новый пароль" required>
                  <div class="input-group-append">
                    <span class="input-group-text password-toggler">
                      <i class="fa fa-eye-slash"></i>
                      <i class="fa fa-eye d-none"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="new-password-confirm" class="col-sm-3 col-form-label">@lang('Подвердите')</label>

              <div class="col">
                <div class="input-group password-toggler-container">
                  <input type="password" class="form-control" id="new-password-confirm" name="new-password_confirmation" aria-label="Retype the new password" placeholder="Повторите новый пароль" required>
                  <div class="input-group-append">
                    <span class="input-group-text password-toggler">
                      <i class="fa fa-eye-slash"></i>
                      <i class="fa fa-eye d-none"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col text-right">
                <button type="submit" class="btn btn-secondary">
                  @lang('Сменить Пароль')
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
