<div class="table-responsive">
    <table class="table" id="informasis-table">
        <thead>
        <tr>
            <th>No</th>
        <th>Fakultas</th>
        <th>Prodi</th>
        <th>Kelas</th>
        <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($informasis as $informasi)
            <tr>
                <td>{{ $informasi->No }}</td>
            <td>{{ $informasi->Fakultas }}</td>
            <td>{{ $informasi->Prodi }}</td>
            <td>{{ $informasi->Kelas }}</td>
            <td>{{ $informasi->Keterangan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['informasis.destroy', $informasi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('informasis.show', [$informasi->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('informasis.edit', [$informasi->id]) }}"
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
