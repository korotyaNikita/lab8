@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Підтвердіть email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Нове посилання для підтвердження відправлено на вашу електронну адресу') }}
                        </div>
                    @endif

                    {{ __('Перш ніж продовжити, перевірте свою електронну пошту на наявність посилання для підтвердження.') }}
                    {{ __('Якщо ви не отримували email,') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('натисніть тут, щоб відправити нове') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
