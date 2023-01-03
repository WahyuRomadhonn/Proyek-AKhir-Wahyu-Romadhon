<!-- No Field -->
<div class="col-sm-12">
    {!! Form::label('No', 'No:') !!}
    <p>{{ $pendaftaran->No }}</p>
</div>

<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('Nama', 'Nama:') !!}
    <p>{{ $pendaftaran->Nama }}</p>
</div>

<!-- Kota Field -->
<div class="col-sm-12">
    {!! Form::label('Kota', 'Kota:') !!}
    <p>{{ $pendaftaran->Kota }}</p>
</div>

<!-- Jenis Kelamin Field -->
<div class="col-sm-12">
    {!! Form::label('Jenis_Kelamin', 'Jenis Kelamin:') !!}
    <p>{{ $pendaftaran->Jenis_Kelamin }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('Email', 'Email:') !!}
    <p>{{ $pendaftaran->Email }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pendaftaran->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pendaftaran->updated_at }}</p>
</div>

