<!-- No Field -->
<div class="col-sm-12">
    {!! Form::label('No', 'No:') !!}
    <p>{{ $jadwal->No }}</p>
</div>

<!-- Matkul Field -->
<div class="col-sm-12">
    {!! Form::label('Matkul', 'Matkul:') !!}
    <p>{{ $jadwal->Matkul }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('Keterangan', 'Keterangan:') !!}
    <p>{{ $jadwal->Keterangan }}</p>
</div>

<!-- Jam Field -->
<div class="col-sm-12">
    {!! Form::label('Jam', 'Jam:') !!}
    <p>{{ $jadwal->Jam }}</p>
</div>

<!-- Ruangan Field -->
<div class="col-sm-12">
    {!! Form::label('Ruangan', 'Ruangan:') !!}
    <p>{{ $jadwal->Ruangan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $jadwal->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $jadwal->updated_at }}</p>
</div>

