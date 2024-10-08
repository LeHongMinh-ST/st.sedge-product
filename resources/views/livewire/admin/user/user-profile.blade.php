<div class="card">
    @php
        use App\Enums\Role;
    @endphp
    <div class="card-header" style="background-color: #b3deed">
        <div class="row">
            <div class="col-md-6">
                <i class="ph-address-book"></i>
                <span style="font-size: 20px">Hồ sơ cá nhân</span>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a class="btn btn-primary btn-custom" href="{{ route('admin.users.edit',['id'=>auth()->id()]) }}">Chỉnh sửa thông tin</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="mt-1">
            <div class="row mb-3 ">
                <div class="col-1 text-end text-muted">
                    <i class="ph-user-square"></i>
                </div>
                <div class="col-2 fw-bold text-muted">Họ và tên :</div>
                <div class="col">{{ $user->fullname }}</div>
            </div>
            <div class="row mb-3 ">
                <div class="col-1 text-end text-muted">
                    <i class="ph-suitcase-simple"></i>
                </div>
                <div class="col-2 fw-bold text-muted">Chức vụ :</div>
                @if($user->role == Role::Admin)
                    <div class="col">Quản trị viên</div>
                @else
                    <div class="col">Quản trị viên cấp cao</div>
                @endif
            </div>
            <div class="row mb-3 ">
                <div class="col-1 text-end text-muted">
                    <i class="ph-telegram-logo"></i>
                </div>
                <div class="col-2 fw-bold text-muted">Email :</div>
                <div class="col">{{ $user->email }}</div>
            </div>
            <div class="row mb-3 ">
                <div class="col-1 text-end text-muted">
                    <i class="ph-phone"></i>
                </div>
                <div class="col-2 fw-bold text-muted">Số điện thoại :</div>
                <div class="col">{{ $user->phone_number }}</div>
            </div>
        </div>
    </div>
</div>
