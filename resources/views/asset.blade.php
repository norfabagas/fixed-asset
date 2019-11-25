@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Asset') }}</div>

                <div class="card-body">
                    <table class="datatable" data-url="{{ route('asset.table') }}">
                        <thead>
                            <tr>
                                <th data-field="name">{{ __('Name') }}</th>
                            </tr> 
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/asset.js') }}"></script>
@endsection