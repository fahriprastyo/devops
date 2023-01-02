@extends('layouts.auth')

@section('title')
  Thriftophia | Registrasi Success
@endsection

@push('addon-style')
<style>
    .success{
        padding: 1.25rem 2rem 5rem;
    }

    .img{
        width: 83.333333%;
        margin-bottom: 0.625rem;
        object-fit: cover;
        object-position: center;
    }
    .title-text{
        font: 600 3rem/2.25rem Muli, sans-serif;
        color: #252525;
        letter-spacing: 0.025em;
        margin-bottom: 1.5rem;
    }
    .caption-text{
        margin-bottom: 2rem;
        color: #636363;
        font-size: 1rem;
        letter-spacing: 0.025em;
        line-height: 1.75rem;
    }
    .btn-view{
        font: 600 1.125rem/1.75rem Muli, sans-serif;
        padding: 1rem 2rem;
        border-radius: 0.75rem;
        background-color: #e7ab3c;
        transition: 0.3s;
    }
    .btn-view:hover{
        background-color: #e7ab3f;
        transition: 0.3s;
    }
    @media (min-width: 576px) {
        .success{
            padding: 1.25rem 2rem 8rem;
        }
        .img{
            width: auto;
        }
    }
</style>
@endpush

@section('content')
<div class="success mx-auto d-flex align-items-center justify-content-center flex-column">
    <img class="img" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-1.png" alt="">
    <div class="text-center w-100">
        <h1 class="title-text">
            Registrasi Berhasil
        </h1>
        <p class="caption-text">
            Silahkan lakukan login dan nikmati semua fitur kami.
        </p>
        <div class="d-flex justify-content-center">
            <a href="{{route('logout')}}" class="btn btn-view d-inline-flex text-white">
                Login
            </a>
        </div>
    </div>
</div>
@endsection

