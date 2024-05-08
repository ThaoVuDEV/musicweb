@extends('admin.master')
@section('title')
    Lists Artits
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">List Artists</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Musicly</a></li>
                                <li class="breadcrumb-item active">Artists</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <div>
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="apps-ecommerce-add-product.html" class="btn btn-success"
                                                id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i>Add
                                                Artists</a>

                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" id="searchArtistsList"
                                                    placeholder="Tìm nhạc sĩ" oninput="searchArtists()">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active fw-semibold" data-bs-toggle="tab"
                                                    href="#productnav-all" role="tab">
                                                    Danh sách Artists <span
                                                        class="badge bg-danger-subtle text-danger align-middle rounded-pill ms-1">12</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <div id="selection-element">
                                            <div class="my-n1 d-flex align-items-center text-muted">
                                                Select <div id="select-content" class="text-body fw-semibold px-1"></div>
                                                Result <button type="button" class="btn btn-link link-danger p-0 ms-3"
                                                    data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <div class="tab-content text-muted table-responsive">
                                    <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                        <table class="table table-bordered">
                                            <thead class="table-dark">
                                                <!-- Sử dụng lớp table-dark để làm cho tiêu đề chữ to và nền đậm -->
                                                <tr>
                                                    <th class="fw-bold">ID</th>
                                                    <!-- Sử dụng lớp fw-bold để làm cho chữ đậm hơn -->
                                                    <th class="fw-bold">Tên Nghệ Sĩ</th>
                                                    <th class="fw-bold">Thể Loại</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nguyễn Văn A</td>
                                                    <td>Pop</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Trần Thị B</td>
                                                    <td>R&B</td>
                                                </tr>
                                                <!-- Thêm các hàng khác tương tự -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <script>
     
    </script>
@endsection
