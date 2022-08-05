@extends('admin.layouts.before_login')
@section('content')
    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Login card -->
        <form class="login-form form-validate" method="post" action="{{ route('admin.login') }}">
            @csrf
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">{{ trans('Đăng Nhập Hệ Thống Quản Trị') }}</h5>
                        <span class="d-block text-muted">{{ trans('Thông tin đang nhập') }}</span>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                        @error('email')
                            <label id="email-error" class="validation-invalid-label" for="email">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="password" class="form-control" name="password" placeholder="{{ trans('Mật khẩu!') }}" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                        @error('password')
                        <label id="email-error" class="validation-invalid-label" for="password">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="form-group d-flex align-items-center">
                        <div class="form-check mb-0">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-input-styled"  value="1" data-fouc>
                                {{ trans('Ghi nhớ đăng nhập') }}
                            </label>
                        </div>

                        <a href="login_password_recover.html" class="ml-auto">{{ trans('Quên Mật Khẩu?') }}</a>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">{{ trans('Đăng Nhập') }} <i class="icon-circle-right2 ml-2"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <!-- /login card -->
    </div>
    <!-- /content area -->
@endsection
