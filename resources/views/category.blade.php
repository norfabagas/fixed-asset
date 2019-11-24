@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Asset Category') }}
                    <button class="btn btn-primary float-right add-category">{{ __('Add') }}</button>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable" data-url="{{ route('category.table') }}">
                            <thead>
                                <tr>
                                    <th data-field="name" data-searchable="true" data-orderable="true">{{ __('Name') }}</th>
                                    <th data-field="description" data-searchable="true" data-orderable="true">{{ __('Description') }}</th>
                                    <th data-field="action">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.category_modal')

@endsection

@section('script')
<script src="{{ asset('js/category.js') }}"></script>
@endsection