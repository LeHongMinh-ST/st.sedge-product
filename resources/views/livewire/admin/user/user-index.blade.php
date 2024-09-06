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
                    @if(auth()->user()->role == Role::SuperAdmin)
                    <a href="{{ route("admin.users.create") }}" class="btn btn-teal"><i
                            class="ph-plus-circle me-1"></i> Tạo mới</a>
                    @endif
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
                        <th class="text-center">Họ và tên</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Số điện thoại</th>
                        <th class="text-center">Vai trò</th>
                        <th class="text-center" style="width: 150px; text-align: center">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td class="text-center">{!! $user->roleText !!}</td>
                            <td class="text-center">
                            @if(auth()->user()->role == Role::SuperAdmin)
                                    <div class="dropdown">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <ul class="form-control dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="{{ route('admin.users.reset-password',['id' => $user->id]) }}" class="dropdown-item">
                                                    <i class="ph-key me-2"></i>
                                                    Đổi mật khẩu
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.users.edit',['id'=>$user->id]) }}" class="dropdown-item">
                                                    <i class="ph-note-pencil me-2"></i>
                                                    Chỉnh sửa
                                                </a>
                                            </li>
                                            <li>
                                                <a wire:click="openDeleteModel({{ $user->id }})" class="dropdown-item text-danger">
                                                    <i class="ph-trash me-2"></i>
                                                    Xóa
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                            @elseif(auth()->id() == $user->id)
                                    <div class="dropdown">
                                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <ul class="form-control dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="{{ route('admin.users.reset-password',['id' => $user->id]) }}" class="dropdown-item">
                                                    <i class="ph-key me-2"></i>
                                                    Đổi mật khẩu
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.users.edit',['id'=>$user->id]) }}" class="dropdown-item">
                                                    <i class="ph-note-pencil me-2"></i>
                                                    Chỉnh sửa
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                            @endif
                            </td>
                    @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-end align-items-center w-100 mt-3">
                    <div class="pagination">
                        {{ $users->appends(request()->input())->links() }}
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
                    title: "Bạn có chắc xóa tài khoản này không?",
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
                            title: "Xóa tài khoản thành công!",
                            icon: "success"
                        });
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            Livewire.on('check', () => {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Bạn không có quyền thực hiện chức năng này!",
                    showConfirmButton: false,
                    timer: 2000
                });
            });
        });
    </script>
@endsection
