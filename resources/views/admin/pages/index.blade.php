@extends('main')

@section('pages')
    {{-- content  --}}
@endsection

@push('scripts')
    <script src="{{ asset('js/product/product.js') }}"></script>
    <script src="{{ asset('js/product/product-add.js') }}"></script>
    <script src="{{ asset('js/product/product-view.js') }}"></script>
    <script src="{{ asset('js/product/product-update.js') }}"></script>
    <script src="{{ asset('js/product/product-delete.js') }}"></script>
@endpush