@extends('layouts.app')

@section('content')
  <div class="flex justify-center mt-4">
    <div class="w-8/12 bg-white p-6 rounded-lg">
      {{ $user->name }}
    </div>
  </div>
@endsection