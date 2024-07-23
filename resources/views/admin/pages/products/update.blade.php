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
                <span class="breadcrumb-item active">Cập nhật</span>
            </div>
        </div>

    </div>
</div>
@endsection

@section('page-content')
<div class="content">
    <!-- Content -->
    <div class="row">
        <div class="col-md-9 col-12">
            <div class="card">
                <div class="card-header bold">
                    <i class="ph-info"></i>
                    Thông tin sản phẩm
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <label for="productName" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="productName" value="{{ $product->name }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="descript" class="col-sm-2 col-form-label">Mô tả</label>
                            <div class="col-sm-8">
                                <textarea rows="3" cols="3" class="form-control" name="descript"> {{ $product->description}}</textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="price" class="col-sm-2 col-form-label">Giá</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="price" value="{{ $product->price}}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="thumbnail" class="col-sm-2 col-form-label">Hình ảnh</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="status" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-8">
                            <select class="form-select" name="status">
                                    <option value="">Chọn trạng thái</option>
                                    @foreach(App\Enums\Status::cases() as $status)
                                        <option value="{{ $status->value }}" {{ $product->status == $status->value ? 'selected' : '' }}>
                                            {{ $status->description() }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="quantity" class="col-sm-2 col-form-label">Số lượng</label>
                            <div class="col-sm-8">
                                <!-- <i?nput class="form-control" type="number" name="quantity" value="{{ $product->quantity }}"> -->
                                <input class="form-control" type="number" name="quantity" value="{{ $product->quantity }}"
                                {{ $product->status === App\Enums\Status::OutOfStock->value ? 'disabled' : '' }}>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-12">
            <div class="card mb-3">
                <div class="card">
                    <div class="card-header bold">
                        <i class="ph-gear-six"></i>
                        Hành động
                    </div>
                    <div class="card-body d-flex align-items-center gap-1">
                        <button type="submit" class="btn btn-primary"><i class="ph-floppy-disk"></i> Lưu</button>
                        <a href="{{ route('admin.products.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card">
                    <div class="card-header bold">
                        <i class="ph-stack"></i>
                        Danh mục
                    </div>
                    <div class="card-body">
                    @foreach($categories as $category)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category_id" value="{{ $category->id }}" id="category{{ $category->id }}" {{ $product->category_id == $category->id ? 'checked' : '' }}>
                            <label class="form-check-label" for="category{{ $category->id }}">
                                {{ $category->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        </form>
    </div>
    <!-- /content -->

</div>
@endsection