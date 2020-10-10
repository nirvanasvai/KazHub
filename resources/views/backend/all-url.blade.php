@extends('layouts.backend')

@section('title', __('Все Url-адреса'))

@section('content')
<div class="all-url">
  <div class="card">
    <div class="card-body">
      <div class="row mb-3">
      <div class="col-sm-6">
        <h4 class="card-title mb-0">
          @lang('Все URL')
        </h4>
      </div><!--col-->
      <div class="col-sm-6">
        <a class="nav-link float-right" href="{{ url('./') }}" target="_blank" title="@lang('Все URL')" data-toggle="tooltip"><i class="fas fa-plus"></i></a>
      </div><!--col-->
      </div><!--row-->

      @include('messages')

      <div class="table-responsive-md">
        <table id="dt-allUrls" class="table table-striped">
          <thead>
            <tr>
              <th scope="col">@lang('Короткий URL')</th>
              <th scope="col">@lang('Оригинальный URL')</th>
              <th scope="col">@lang('Клики')</th>
              <th scope="col">@lang('Created By')</th>
              <th scope="col">@lang('Дата')</th>
              <th scope="col">@lang('Действие')</th>
            </tr>
          </thead>
        </table>
      </div>

    </div>
  </div>
</div>
@endsection
