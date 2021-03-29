@extends('backend.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        Master Data Barang
        <div class="float-right">
            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#createModal">
                <i class="fas fa-plus"></i>&ensp;
                Tambah Data
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        @livewire('stuff.table')
    </div>
</div>

@livewire('stuff.create')

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            window.livewire.on('close-create', () => {
                $('#createModal').modal('hide');
            });

            window.livewire.on('close-edit', () => {
                $('#editModal').modal('hide');   
            });

            $('#exampleModal').on('hidden.bs.modal', function () {
                window.livewire.emit('reset-variable');
            });
        });
    </script>
@endsection