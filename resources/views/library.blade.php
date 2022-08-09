@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Library. Main page') }}</div>

                <div class="card-body">

                    <div id="pagination_data">
                        @include('ajax-pagination', ['books' => $books])
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

