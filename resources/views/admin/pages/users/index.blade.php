@extends('admin.layouts.master')

@section('page-header')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Tài khoản hệ thống
                </h4>
            </div>

        </div>

        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <span class="breadcrumb-item active">Tài khoản hệ thống</span>
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
            <livewire:admin.user.user-index />
        </div>
        <!-- /content -->
    </div>
@endsection

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
    </script>
@endsection
