<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Thông tin Gmail hệ thống
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">
                        Địa chỉ email đăng kí: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="mailUsername" type="email" class="form-control">
                        @error('mailUsername')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Mật khẩu gmail ứng dụng: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="mailPassword" type="password" class="form-control">
                        @error('mailPassword')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="form-label">
                        Tên địa chỉ gmail gửi: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="mailFromName" type="text" class="form-control">
                        @error('mailFromName')
                        <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-gear-six"></i>
                Hành động
            </div>
            <div class="card-body d-flex align-items-center gap-1">
                <button wire:click="store" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Tạo mới</button>
                <a href="{{ route('admin.system-email.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
