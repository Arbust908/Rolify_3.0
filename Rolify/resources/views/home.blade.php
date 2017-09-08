@extends('layouts.app')

@section('content')
<div class="">
    <div class="">
        <div class="">Dashboard</div>

        <div class="">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            Thats how we roll!
        </div>
    </div>
</div>
@endsection
