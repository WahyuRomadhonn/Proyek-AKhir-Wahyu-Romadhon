<div class="table-responsive">
    <table class="table" id="jadwals-table">
        <thead>
        <tr>
            <th>No</th>
        <th>Matkul</th>
        <th>Keterangan</th>
        <th>Jam</th>
        <th>Ruangan</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jadwals as $jadwal)
            <tr>
                <td>{{ $jadwal->No }}</td>
            <td>{{ $jadwal->Matkul }}</td>
            <td>{{ $jadwal->Keterangan }}</td>
            <td>{{ $jadwal->Jam }}</td>
            <td>{{ $jadwal->Ruangan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['jadwals.destroy', $jadwal->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('jadwals.show', [$jadwal->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('jadwals.edit', [$jadwal->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
