@extends('admin.layouts.master')

@section('page-header')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Bài viết
            </h4>
        </div>

    </div>

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="#" class="breadcrumb-item"><i class="ph-house"></i></a>
                <span class="breadcrumb-item active">Bài viết</span>
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
            callbacks: {
                onTemplate: function() {
                    this.barDom.innerHTML = '<div class="noty_body" style="background: #188251; color: #ffffff;">' + this.options.text + '</div>';
                    this.barDom.style.backgroundColor = 'transparent';
                }
            }
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
                                                <input type="text" name="q" value="" placeholder="Nhập từ khoá để tìm kiếm..." class="form-control" id="user-search-input">
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
                            <a href="{{route('admin.post.create')}}" class="btn btn-teal"><i class="ph-plus-circle me-1"></i> Tạo mới</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="content-table">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th class="" >#</th>
                                    <th class="" >Ảnh đại diện bài viết</th>
                                    <th class="" >Tiêu đề</th>
                                    <th class="" >Nội dung</th>
                                    <th class="" >Người đăng</th>
                                    <th class="" >Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($posts as $post)
                                    <td>{{ $post->id }}</td>
                                    <td><img src="{{ asset($post->thumbnail) }}" width="50"></td>
                                    <td>{{ $post->title }}</td>
                                    <td>{!! Str::limit(strip_tags($post->content), 100, '...') !!}</td>
                                    <td>{{ $post->user ? $post->user->fullname : 'Không có người đăng' }}</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                <i class="ph-list"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="{{route('admin.post.show', ['id' => $post->id])}}" class="dropdown-item">
                                                    <i class="ph-eye me-2"></i>
                                                    Xem chi tiết
                                                </a>
                                                <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('admin.post.edit',$post->id )}}" class="dropdown-item">
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
                            {{ $posts->links() }}
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
