<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              @if (!Auth::check())
                <li><a title="@lang('core.register')" href="#about">@lang('core.register')</a></li>
                <li class="divider-vertical"></li>
                @if ($errors->has())
                <li class="dropdown open">
                @else      
                <li class="dropdown">
                @endif
                  <a class="dropdown-toggle" title="@lang('core.login')" href="#" data-toggle="dropdown">@lang('core.login')<strong class="caret"></strong></a>
                  <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                    {!! Form::open(['route' => 'login', 'id' => 'login_form', 'name' => 'login_form', 'accept-charset' => "UTF-8"]) !!}
                      @if ($errors->has())
                      <div class="form-group">
                        @foreach ($errors->all() as $error)
                          <p style="  color: #b94a48;"><strong>Error!</strong> {{ $error }}</p>
                        @endforeach
                      </div>
                      @endif
                      <div class="form-group">
                        {!! Form::text('username', Input::old('username'), ['id' => "username", 'placeholder' => Lang::get('core.username'), 'class' => 'form-control', 'required' => '' ]) !!}
                          <p id="username_error" class="hide" style="color: red;">Username is too short.</p>
                      </div>
                      <div class="form-group">
                        {!! Form::password('password', ['id' => "password", 'placeholder' => Lang::get('core.password'),
                        'class' => 'form-control','required' => '' ])!!}
                        <p id="password_error" class="hide" style="color: red;">Password is too short.</p>
                      </div>
                      <div class="form-group remember">
                        {!! Form::checkbox('remember_me', "1", null, ['id' => "remember_me", 'style' => "float: left; margin-right: 10px;"]) !!}
                        {!! Form::label('remember_me', Lang::get('core.remember_me'), ['class' => 'string optional'])!!}
                      </div>
                      <div class="form-group" style="padding-top: 5px;">
                        {!! Form::submit(Lang::get('core.login_button'), [ 'id' => 'sign-in', 'data-ng-disabled' => 'login_form.$invalid', 'class' => "btn btn-primary btn-block" ] ); !!}
                      </div>
                      <div class="form-group last" style="padding-top: 10px;">
                        {!! HTML::linkRoute('forgotton', Lang::get('core.forgotton')) !!}
                      </div>
                    {!! Form::close() !!}
                  </div>
                </li>
              @else
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->firstname }}<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{{ URL::route('dashboard') }}">@lang('core.dashboard')</a></li>
                      <li class="divider"></li>
                      <li><a href="#exit">@lang('core.create_ad')</a></li>
                      <li><a href="#exit">@lang('core.create_event')</a></li>
                      <li><a href="#exit">@lang('core.create_gallery')</a></li>
                      <li class="divider"></li>
                      <li><a href="{{ URL::route('logout', null) }}">@lang('core.logout')</a></li>
                    </ul>
                </li>
              @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>    
    