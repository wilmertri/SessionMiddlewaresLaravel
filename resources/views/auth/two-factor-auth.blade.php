@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Two Factor Authentication Enable') }}</div>

                <div class="card-body">
                    @if (session('status') == 'two-factor-authentication-enabled')
                        <div class="mb-4 font-medium text-sm">
                            Please finish configuring two factor authentication below.
                        </div>
                    @endif
                    @if (session('status') == 'two-factor-authentication-confirmed')
                        <div class="mb-4 font-medium text-sm">
                            Two factor authentication confirmed and enabled successfully.
                        </div>
                    @endif
                    <form method="POST" action="{{ route('two-factor.enable') }}">
                        @csrf
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if (!$user->two_factor_secret)
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enabled') }}
                                    </button>
                                @else
                                    @method('delete')
                                    <p>
                                        {!! $user->twoFactorQrCodeSvg()  !!}
                                    </p>
                                    <h3>Recovery codes</h3>
                                    <ul>
                                        @foreach ($user->recoveryCodes() as $code)
                                            <li>{{ $code }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Disabled') }}
                                    </button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
