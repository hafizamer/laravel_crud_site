@extends('layouts.app')

@section('page_description')
@section('page_title', 'Yeehaw')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Info') }}</div>

                <div class="card-body">
                The end is always near
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
