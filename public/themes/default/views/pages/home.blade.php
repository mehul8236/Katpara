@extends('layouts.master')

@section('page_title') {{{ $page_title }}} @stop

@section('content')

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <!--Sidebar content-->
    </div>
    <div class="span10">
      <div ng-controller="WelcomeController">
		  <% greeting %>
		</div>
    </div>
  </div>
</div>
@stop

{!! Asset::add(Theme::js('home')); !!}