@extends('template')More actions

@section('content')

	<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-info">< Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/storeKaryawan" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="kodepegawai">
                Kode Karyawan
            </label>
            <div class="col-sm-6" style="margin-bottom: 18px;">
                <input class="form-control"
                    type="text"
                    id="kodepegawai"
                    placeholder="Masukkan Kode Pegawai (Contoh: K0001)"
                    name="kodepegawai"
                    maxlength="5"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="namalengkap">
                Nama Lengkap
            </label>
            <div class="col-sm-6" style="margin-bottom: 18px;">
                <input class="form-control"
                    type="text"
                    id="namalengkap"
                    placeholder="Masukkan Nama Lengkap Karyawan"
                    name="namalengkap"
                    maxlength="50"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="divisi">
                Divisi
            </label>
            <div class="col-sm-6" style="margin-bottom: 18px;">
                <input class="form-control"
                    type="text"
                    id="divisi"
                    placeholder="Masukkan Divisi (Contoh: HRD, IT)"
                    name="divisi"
                    maxlength="5"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="departemen">
                Departemen
            </label>
            <div class="col-sm-6" style="margin-bottom: 18px;">
                <input class="form-control"
                    type="number"
                    id="departemen"
                    placeholder="Masukkan Kode Departemen"
                    name="departemen"
                    required="required">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
