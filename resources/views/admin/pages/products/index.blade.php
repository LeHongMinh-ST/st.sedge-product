@extends('admin.layouts.master')

@section('page-header')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Sản phẩm
            </h4>
        </div>

    </div>

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="#" class="breadcrumb-item"><i class="ph-house"></i></a>
                <span class="breadcrumb-item active">Sản phẩm</span>
            </div>
        </div>

    </div>
</div>
@endsection

@section('page-content')
<div class="content">
    <!-- Content -->
    @if (session('success'))
    <script>
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: "{{ session('success') }}",
            timeout: 2000,
            progressBar: true,
            theme: 'mint',
        }).show();
    </script>
    @endif
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="content-header d-flex justify-content-between align-items-end">
                        <div class="content-filter w-50">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <form action="" method="get" id="form-search">
                                        @csrf
                                        <div class="form-group">
                                            <label for="user-search-input">Tìm kiếm</label>
                                            <div class="form-control-feedback form-control-feedback-end">
                                                <input type="text" name="q" value="{{ request()->query('q') }}" placeholder="Nhập từ khoá để tìm kiếm..." class="form-control" id="user-search-input">
                                                <div class="form-control-feedback-icon">
                                                    <i class="ph-magnifying-glass"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="content-action">
                            <a href="{{ route('admin.products.create') }}" class="btn btn-teal"><i class="ph-plus-circle me-1"></i> Tạo mới</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="content-table">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th class="" width="1%">#</th>
                                    <th class="" width="10%">Tên sản phẩm</th>
                                    <th class="" width="15%">Mô tả</th>
                                    <th class="" width="10%">Giá</th>
                                    <th class="" width="8%">Hình ảnh</th>
                                    <th class="" width="4%">Trạng thái</th>
                                    <th class="" width="1%">Số lượng</th>
                                    <th class="" width="4%">Danh mục</th>
                                    <th class="" width="1%">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ number_format($product->price, 0, ',', '.') }} ₫</td>
                                    <td><img src="{{ asset($product->thumbnail) }}" alt="{{ $product->name }}" width="50"></td>
                                    <td>
                                        @if($product->status == \App\Enums\Status::InStock)
                                        <span class="badge bg-success bg-opacity-20 text-success">Còn hàng</span>
                                        @else
                                        <span class="badge bg-danger">Hết hàng</span>
                                        @endif
                                    </td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->category ? $product->category->name : 'Không có danh mục' }}</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                <i class="ph-list"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <form action="{{ route('admin.products.delete', ['id' => $product->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}" class="dropdown-item">
                                                        <i class="ph-pencil me-2"></i>
                                                        Chỉnh sửa
                                                    </a>
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ph-trash me-2"></i>
                                                        Xóa
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end">

                            <div class="pagination">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content -->

</div>
@endsection