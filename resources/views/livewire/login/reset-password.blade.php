<form wire:submit="resetPassword()" class="login-form">
    <label for="password">Mật khẩu:</label>
    <input wire:model.live="password" type="password" id="password" name="password" placeholder="Nhập mật khẩu mới" value="{{ old('username') }}" class="form-control">
    @error('password')
    <label class="text-danger mb-3">{{ $message }}</label>
    @enderror

    <label class="mt-2" for="confirmPassword">Nhập lại mật khẩu:</label>
    <input wire:model.live="confirmPassword" type="password" id="confirmPassword" name="confirmPassword" placeholder="Nhập lại mật khẩu"  value="{{ old('confirmPassword') }}" class="form-control">
    @error('confirmPassword')
    <label class="text-danger mb-3">{{ $message }}</label>
    @enderror

    <div class="d-flex justify-content-center">
        <button type="submit" class="w-50 h-50" style="font-size: 18px">Thay đổi</button>
    </div>
</form>
