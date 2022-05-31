@extends('template')
@section('content')
<div class="row">
    <div class="">
        <div class="">
            login
        </div>
        <div class="">
            @if ($errors->any())
            @foreach ($errors->all() as $ror)
                <p class="alert">{{ $ror }}</p>
            @endforeach

        @endif
        <form action="{{ route('login.action') }}" method="post">
        @csrf
            <input type="text" name="username" placeholder="username" value="{{ old('username') }}">

            <input type="password" name="password" placeholder="password">

            <button>login</button>

        </form>
        </div>
    </div>
</div>
    