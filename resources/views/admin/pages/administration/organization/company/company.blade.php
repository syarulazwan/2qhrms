@extends('admin.main')

@section('pages')

    <style>
        body {
            font-family: 'Nunito Sans', sans-serif;
        }

        table#dummyTable {
            border-collapse: collapse;
            width: 100%;
            font-size: 12px;
            font-family: 'Nunito Sans', sans-serif;
        }

        table#dummyTable th,
        table#dummyTable td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        table#dummyTable thead {
            background-color: #f8f9fa;
            font-weight: 00;
        }

        table#dummyTable tbody tr:hover {
            background-color: #f1f1f1;
        }

    </style>

    <div class="page-title">
        <div class="col-xl-12 col-sm-5 box-col-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">
                    <svg class="stroke-icon">
                        <use href="{{ asset('../assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                    </svg></a>
                </li>
                <li class="breadcrumb-item">Administration</li>
                <li class="breadcrumb-item">Organization Management</li>
                <li class="breadcrumb-item active">Company</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid default-dashboard">
        <div class="container-fluid basic_table">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="btn-place" class="text-right" style="margin-right: 10px;"></div>
                                    <div class="">
                                        <table id="dummyTable" class="display table table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Submission Date</th>
                                                    <th>Distributor Name</th>
                                                    <th>Application Type</th>
                                                    <th>Registration Type</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>13-Apr-2025</td>
                                                    <td>STANDARD FINANCIAL ADVISER SDN BHD</td>
                                                    <td>New</td>
                                                    <td>-</td>
                                                    <td>Approved</td>
                                                    <td><button>👁 View</button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>13-Apr-2025</td>
                                                    <td>RHB UNIT TRUST MANAGEMENT BERHAD</td>
                                                    <td>New</td>
                                                    <td>-</td>
                                                    <td>Approved</td>
                                                    <td><button>👁 View</button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>13-Apr-2025</td>
                                                    <td>ING FUNDS BERHAD</td>
                                                    <td>New</td>
                                                    <td>-</td>
                                                    <td>Approved</td>
                                                    <td><button>👁 View</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $('#dummyTable').DataTable({
            lengthMenu: [5, 10, 25, 50, 100],
            pageLength: 10,
            responsive: true,
        });
    </script>
@endpush
