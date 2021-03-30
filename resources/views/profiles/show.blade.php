@extends('layouts.app')

@section('content')

    <header class="mb-6 relative">
        <img
            src="/images/default-profile-banner.jpg"
            alt=""
            class="mb-2"
        >

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-3 00 py-2 px-2 text-black text-xs">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow me</a>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for
            previewing layouts and visual mockups.
        </p>

        <img
            src="{{$user->avatar}}"
            alt=""
            class="rounded-full mr-4 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 138px;"
        >

    </header>

    <hr>

    @include('_timeline', [
    'tweets' =>  $user->tweets
])
@endsection
