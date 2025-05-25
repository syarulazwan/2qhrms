@extends('admin.main')

@section('pages')
    
    <div class="page-title">
        <div class="col-xl-12 col-sm-5 box-col-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                    </svg></a>
                </li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Default</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid default-dashboard">
        
    </div>
@endsection

@push('scripts')
@endpush