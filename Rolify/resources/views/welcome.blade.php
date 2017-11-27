@extends('layouts.app')

@section('content')
  <div class="flex-center position-ref full-height">
      <div class="content">
          <div class="title m-b-md">
              Rolify 3.0
          </div>

          <div class="links">
              <a href="{{ url('/about') }}">About</a>
              <a href="{{ url('/tables') }}">Tables</a>
              <a href="{{ url('/monster')}}">Monster Manual</a>
              {{-- <a href="https://flatuicolors.com/">Forge</a>
              <a href="https://flatuicolors.com/">GitHub</a> --}}
          </div>
      </div>
  </div>
@endsection
