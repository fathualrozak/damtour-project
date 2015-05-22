<legend>Identitas Utama</legend>
<div class="form-group">
    {!! Form::label('firstname', 'Nama Depan') !!}
    {!! Form::text('firstname', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('lastname', 'Nama Belakang') !!}
    {!! Form::text('lastname', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('nickname', 'Nama Panggilan') !!}
    {!! Form::text('nickname', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('idcard_type', 'Jenis Identitas') !!}
    {!! Form::select('idcard_type', $properties['idcard_types'], null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('idcard_number', 'Nomor Identitas') !!}
    {!! Form::text('idcard_number', null, array('class' => 'form-control')) !!}
</div>
<div class="radio">
    <label class="radio-inline">
        {!! Form::radio('gender', 'male') !!} Laki-laki
    </label>
    <label class="radio-inline">
        {!! Form::radio('gender', 'female') !!} Perempuan
    </label>
</div>
<div class="form-group">
    {!! Form::label('birthplace', 'Tempat Lahir') !!}
    {!! Form::text('birthplace', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('birthdate', 'Tanggal Lahir') !!}
    {!! Form::input('date', 'birthdate', null, array('class' => 'form-control')) !!}
</div>

<legend>Alamat</legend>

<div class="form-group">
    {!! Form::label('line1', 'Baris 1') !!}
    {!! Form::text('line1', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('line2', 'Baris 2') !!}
    {!! Form::text('line2', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('district_id', 'Kecamatan') !!}
    {!! Form::select('district_id', $districts, null, array('class' => 'form-control', 'style' => 'text-transform:capitalize')) !!}
</div>
<div class="form-group">
    {!! Form::label('city_id', 'Kota') !!}
    {!! Form::select('city_id', $cities, null, array('class' => 'form-control')) !!}
</div>

<legend>Kontak &amp; Info</legend>

<div class="form-group">
    {!! Form::label('contact', 'Telp. / Hp.') !!}
    {!! Form::text('contact', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('profession', 'Pekerjaan') !!}
    {!! Form::text('profession', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('education', 'Pendidikan') !!}
    {!! Form::select('education', $properties['educations'], null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('has_umroh', 'Pernah Umroh') !!}
    {!! Form::select('has_umroh', ['Belum', 'Sudah' ], null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('has_hajj', 'Pernah Haji') !!}
    {!! Form::select('has_hajj', ['Belum', 'Sudah' ], null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('dress_size', 'Ukuran Baju') !!}
    {!! Form::select('dress_size', $properties['dress_sizes'], null, array('class' => 'form-control')) !!}
</div>

<legend>Ahli Waris</legend>
<div class="form-group">
    {!! Form::label('heir_firstname', 'Nama Depan') !!}
    {!! Form::text('heir_firstname', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('heir_lastname', 'Nama Belakang') !!}
    {!! Form::text('heir_lastname', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('relationship_id', 'Hubungan') !!}
    {!! Form::select('relationship_id', $relationships, null, array('class' => 'form-control')) !!}
</div>
<hr>
