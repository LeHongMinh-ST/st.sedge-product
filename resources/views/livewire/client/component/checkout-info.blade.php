<div class="check-add">
    <h2 id="check-3-cat">2. Thông tin khách hàng</h2>
    <form wire:submit.prevent="checkout">
        <div class="row">
            <div class="form-group">
                <label>Họ và tên</label>
                <input wire:model.live="fullname" type="text" name="fullname" placeholder="Nhập họ và tên" value="{{ old('fullname') }}">
                @error('fullname')
                <label id="error-fullname" class="validation-error-label text-danger">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group">
                <label>Địa chỉ Email</label>
                <input wire:model.live="email" type="email"  name="email" placeholder="Nhập email (nếu có)" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input wire:model.live="phone_number" type="text" name="phone_number" placeholder="Nhập số điện thoại" value="{{ old('phone_number') }}">
                @error('phone_number')
                <label id="error-phone_number" class="validation-error-label text-danger">{{ $message }}</label>
                @enderror
            </div>

            <div class="form-group">
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Chọn Tỉnh / Thành phố</label>
                        <div wire:ignore>
                            <select class="form-control select2 select" id="selectProvince" aria-label=".form-select-sm">
                                <option value=""></option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('provinceId')
                        <label id="error-provinceId" class="validation error-label text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Chọn Quận / Huyện </label>
                        <div wire:ignore>
                            <select wire:model.live="districtId" class="form-select form-select-sm mb-3 select" id="selectDistrict" aria-label=".form-select-sm">
                                <option value=""></option>
                            </select>
                        </div>
                        @error('districtId')
                        <label id="error-districtId" class="validation error-label text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Chọn Xã / Phường </label>
                        <div wire:ignore>
                            <select wire:model.live="wardId" class="form-select form-select-sm select" id="selectWard" aria-label=".form-select-sm">
                                <option value=""></option>
                            </select>
                        </div>
                        @error('wardId')
                        <label id="error-wardId" class="validation error-label text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                </div>
            </div>

            <div class="form-group" style="">
                <label>Chi tiết địa chỉ nhận hàng</label>
                <input wire:model.live="address" type="text" name="address" placeholder="Nhập địa chỉ chi tiết đặt hàng" value="{{ old('address') }}">
                @error('address')
                <label id="error-address" class="validation-error-label text-danger">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group">
                <label>Ghi chú</label>
                <textarea wire:model.live="note" style="border: 1px solid #ced4da; border-radius: 4px" name="note" placeholder="Nhập ghi chú">{{ old('note') }}</textarea>
            </div>
        </div>
        <div class="check-btn enter">
            <a href="{{ route('todo.cart') }}" class="btn-style2 me-4">Quay lại</a>
            <button id="btn-order" type="submit" class="btn-style">Đặt hàng</button>
        </div>
    </form>
</div>

@section('script_custom')
    <script type="text/javascript">
        $('#selectProvince').select2({
            placeholder: "Chọn tỉnh / thành phố",
            allowClear: true,
        }).change(function (e) {
            Livewire.dispatch('changeProvince',[$(this).val()]);
            $('#selectDistrict').val(null).trigger('change')
            $('#selectWard').val(null).trigger('change')
        });

        $('#selectDistrict').select2({
            placeholder: "Chọn quận / huyện",
            allowClear: true
        }).change(function (e) {
            Livewire.dispatch('changeDistrict', [$(this).val()]);
            $('#selectWard').val(null).trigger('change')
        });

        $('#selectWard').select2({
            placeholder: "Chọn xã / phường",
            allowClear: true
        }).change(function (e) {
            Livewire.dispatch('changeWard', [$(this).val()]);
        });

        window.addEventListener('reloadDistrict', (e) => {
            let districts = e.detail.districts
            $('#selectDistrict').empty()
            $('#selectDistrict').append($('<option>', {value: '', text:  ''}))
            districts.forEach(item => {
                let option = $('<option>', {value: item.id, text:  item.name})
                $('#selectDistrict').append(option)
            })
        });

        window.addEventListener('reloadWard', (e) => {
            let wards = e.detail.wards
            $('#selectWard').empty()
            $('#selectWard').append($('<option>', {value: '', text:  ''}))
            wards.forEach(item => {
                let option = $('<option>', {value: item.id, text:  item.name})
                $('#selectWard').append(option)
            })
        });
    </script>
@endsection
