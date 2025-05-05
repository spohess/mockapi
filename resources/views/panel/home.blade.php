@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-9">
        @livewire('api.user-list')
    </div>
    <div class="col-3">
        @livewire('api.new-api')
    </div>
</div>
@endsection
