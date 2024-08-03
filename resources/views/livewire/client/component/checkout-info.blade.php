<div class="check-add">
    <h2>2. Thông tin khách hàng</h2>
    <form wire:submit.prevent="checkout">
        <ul>
            <li>
                <label>Họ và tên</label>
                <input wire:model.live="fullname" type="text" name="fullname" placeholder="Nhập họ và tên" value="{{ old('fullname') }}">
            </li>
            @error('fullname')
            <label id="error-thumbnail" class="validation-error-label text-danger"
                   for="thumbnail">{{ $message }}</label>
            @enderror
            <li>
                <label>Địa chỉ Email</label>
                <input wire:model.live="email" type="email"  name="email" placeholder="Nhập email (nếu có)" value="{{ old('email') }}">
            </li>
            <li>
                <label>Số điện thoại</label>
                <input wire:model.live="phone_number" type="text" name="phone_number" placeholder="Nhập số điện thoại" value="{{ old('phone_number') }}">
            </li>
            @error('phone_number')
            <label id="error-thumbnail" class="validation-error-label text-danger"
                   for="thumbnail">{{ $message }}</label>
            @enderror
{{--            <li>--}}
{{--                <label>Chọn Tỉnh / Thành phố</label>--}}
{{--                <select wire:model="province_id" class="form-select form-select-sm mb-3 select" id="city" aria-label=".form-select-sm">--}}
{{--                    <option value="" selected>Tỉnh / Thành phố</option>--}}
{{--                    @foreach($provinces as $province)--}}
{{--                        <option value="{{ $province->id }}">{{ $province->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <label>Chọn Quận / Huyện </label>--}}
{{--                <select wire:model="district_id" class="form-select form-select-sm mb-3 select" id="district" aria-label=".form-select-sm">--}}
{{--                    <option value="" selected>Quận / Huyện</option>--}}
{{--                    @foreach($districts as $district)--}}
{{--                        <option value="{{ $district->id }}">{{ $district->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <label>Chọn Xã / Phường </label>--}}
{{--                <select wire:model="ward_id" class="form-select form-select-sm select" id="ward" aria-label=".form-select-sm">--}}
{{--                    <option value="" selected>Xã / Phường</option>--}}
{{--                    @foreach($wards as $ward)--}}
{{--                        <option value="{{ $ward->id }}">{{ $ward->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </li>--}}
            <li>
                <label>Chi tiết địa chỉ nhận hàng</label>
                <input wire:model.live="address" type="text" name="address" placeholder="Nhập địa chỉ đặt hàng" value="{{ old('address') }}">
            </li>
            @error('address')
            <label id="error-thumbnail" class="validation-error-label text-danger"
                   for="thumbnail">{{ $message }}</label>
            @enderror
            <li>
                <label>Ghi chú</label>
                <textarea wire:model.live="note" style="border: 1px solid #a6a6a6;" name="note" placeholder="Nhập ghi chú">{{ old('note') }}</textarea>
            </li>
        </ul>
        <div class="check-btn enter">
            <a href="{{ route('todo.cart') }}" class="btn-style2 me-4">Quay lại</a>
            <button id="btn-order" type="submit" class="btn-style">Đặt hàng</button>
        </div>
    </form>
</div>

{{--@script--}}
{{--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
{{--<script>--}}
{{--    $wire.on('post-created', () => {--}}
{{--        Swal.fire({--}}
{{--            title: "Đặt hàng thành công!",--}}
{{--            icon: "success",--}}
{{--            showConfirmButton: false,--}}
{{--            timer:2000,--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--@endscript--}}