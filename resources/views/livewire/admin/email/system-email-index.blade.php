<div class="col">
    @php
        use App\Enums\Role;
    @endphp
    <div class="card">
        <div class="card-body">
            <div class="content-header d-flex justify-content-between align-items-end">
                <div class="content-filter w-50">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="form-group">
                                <label for="user-search-input">Tìm kiếm</label>
                                <div class="form-control-feedback form-control-feedback-end">
                                    <input wire:model.live="search" type="text" name="q"
                                           placeholder="Nhập từ khoá để tìm kiếm..."
                                           class="form-control" id="user-search-input">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-action">
                    <a href="{{ route("admin.system-email.create") }}" class="btn btn-teal"><i
                            class="ph-plus-circle me-1"></i> Tạo mới</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">STT</th>
                        <th class="text-center">Địa chỉ gmail đăng kí</th>
                        <th class="text-center">Mật khẩu ứng dụng</th>
                        <th class="text-center">Địa chỉ gmail</th>
                        <th class="text-center" style="width: 150px; text-align: center">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($gmails as $gmail)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $gmail->mail_username }}</td>
                            <td class="text-center text-muted">{{ $gmail->mail_password }}</td>
                            <td class="text-center">{{ $gmail->mail_from_name }}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <ul class="form-control dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a href="{{ route('admin.system-email.edit', ['id'=>$gmail->id]) }}" class="dropdown-item">
                                                <i class="ph-pencil me-2"></i>
                                                Chỉnh sửa
                                            </a>
                                        </li>
                                        <li>
                                            <a wire:click="openDeleteModel({{ $gmail->id }})" class="dropdown-item text-danger">
                                                <i class="ph-trash me-2"></i>
                                                Xóa
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                    @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-end align-items-center w-100 mt-3">
                    <div class="pagination">
                        {{ $gmails->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script_custom')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('openDeleteModel', (event) => {
                Swal.fire({
                    title: "Bạn có chắc xóa gmail này không?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Có, xóa!",
                    cancelButtonText: "Không!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('confirmDelete');
                        Swal.fire({
                            title: "Xóa gmail thành công!",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </script>
@endsection
