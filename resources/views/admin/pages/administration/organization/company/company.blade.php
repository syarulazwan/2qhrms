@extends('admin.main')

@section('pages')

    <style>
        body {
            font-family: 'Nunito Sans', sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 12px;
            font-family: 'Nunito Sans', sans-serif;
        }

        table th,
        table td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        table thead {
            background-color: #f8f9fa;
            font-weight: 00;
        }

        table tbody tr:hover {
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-end">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalgetbootstrap" data-whatever="@getbootstrap">Add Company</button>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <table id="tablecompany" class="display table table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Website</th>
                                                    <th>Logo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
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

    
    <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog" aria-labelledby="exampleModalgetbootstrap" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document"> <!-- Tambah modal-dialog-centered di sini -->
            <div class="modal-content">
                <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
                    <h6 class="modal-header justify-content-left border-0 txt-dark">Created Company</h6>
                    <hr>
                    <h6 class="modal-header justify-content-left border-0 txt-dark">COMPANY INFORMATION</h6>
                    <div class="modal-body">
                        <form id="companyForm" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label txt-dark" for="name">Name</label>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Enter your company" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label txt-dark" for="email">Email Address</label>
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label txt-dark" for="logo">Logo</label>
                                    <input class="form-control" id="logo" name="logo" type="file" placeholder="Enter your company" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label txt-dark" for="website">Website</label>
                                    <input class="form-control" id="website" name="website" type="text" placeholder="Enter your email" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="col-md-12"> 
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="button" id="submitCompanyBtn">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {

            $('#tablecompany').DataTable({
                processing: true,
                serverSide: false, 
                ajax: {
                    url: '{{ route("administration.ajaxcompany") }}',
                    type: 'GET'
                },
                lengthMenu: [5, 10, 25, 50, 100],
                pageLength: 10,
                columns: [
                    { data: 'no', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'website', name: 'website' },
                    { data: 'logo', name: 'logo', orderable: false, searchable: false },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });

            $('#submitCompanyBtn').on('click', function (event) {

                event.preventDefault();
                
                let form = document.getElementById('companyForm');
                let formData = new FormData(form);

                $.ajax({
                    url: "{{ route('company.store') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        Swal.fire({
                            title: "Good job!",
                            text: "Company created successfully!",
                            icon: "success"
                        });

                        $('#exampleModalgetbootstrap').modal('hide');
                        form.reset();

                        $('#tablecompany').DataTable().ajax.reload(null, false);
                    },
                    error: function (xhr) {
                        let errors = xhr.responseJSON?.errors;

                        if (errors) {
                            let errorMessages = Object.values(errors).flat().join('<br>');
                            Swal.fire({
                                title: "Validation Error",
                                html: errorMessages,
                                icon: "warning"
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: "Something went wrong.",
                                icon: "error"
                            });
                        }
                    }
                });
            });

        });

    </script>
@endpush
