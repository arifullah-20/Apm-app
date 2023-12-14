@extends('admin.layout')

@section('content')

<div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Data</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>1</td>
                    <td><span class="fw-medium">Logo</span></td>
                    <td><button type="button" class="btn-sm rounded-pill btn-info">Lihat</button>|<button type="button" class="btn-sm rounded-pill btn-primary">Ubah</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><span class="fw-medium">Alamat</span></td>
                    <td><button type="button" class="btn-sm rounded-pill btn-info">Lihat</button>|<button type="button" class="btn-sm rounded-pill btn-primary">Ubah</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><span class="fw-medium">Telepon</span></td>
                    <td><button type="button" class="btn-sm rounded-pill btn-info">Lihat</button>|<button type="button" class="btn-sm rounded-pill btn-primary">Ubah</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><span class="fw-medium">Wa</span></td>
                    <td><button type="button" class="btn-sm rounded-pill btn-info">Lihat</button>|<button type="button" class="btn-sm rounded-pill btn-primary">Ubah</button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><span class="fw-medium">Tentang APM</span></td>
                    <td><button type="button" class="btn-sm rounded-pill btn-info">Lihat</button>|<button type="button" class="btn-sm rounded-pill btn-primary">Ubah</button></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><span class="fw-medium">Sejarah</span></td>
                    <td><button type="button" class="btn-sm rounded-pill btn-info">Lihat</button>|<button type="button" class="btn-sm rounded-pill btn-primary">Ubah</button></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><span class="fw-medium">Visi</span></td>
                    <td><button type="button" class="btn-sm rounded-pill btn-info">Lihat</button>|<button type="button" class="btn-sm rounded-pill btn-primary">Ubah</button></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><span class="fw-medium">misi</span></td>
                    <td><button type="button" class="btn-sm rounded-pill btn-info">Lihat</button>|<button type="button" class="btn-sm rounded-pill btn-primary">Ubah</button></td>
                </tr>



            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->


@endsection
