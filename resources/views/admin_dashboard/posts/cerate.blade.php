
@extends("admin_dashboard.layouts.app")

@section("style")
    <link href="{{ asset('admin_dashboard_assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2-bootstrap4.css')}}">
@endsection

@section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">eCommerce</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Orders</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Adicionar novo Post</h5>
                    <hr/>
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Post Title</label>
                                        <input type="email" class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Slug</label>
                                        <input type="email" class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Resumo</label>
                                        <input type="email" class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Categoria</label>
                                        <input type="email" class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Conteudo</label>
                                        <textarea class="form-control" id="inputProductDescription" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Product Images</label>
                                        <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--end page wrapper -->
@endsection

@section("script")
    <script src="{{ asset('admin_dashboard_assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#image-uploadify').imageuploadify();
        })
    </script>
@endsection
