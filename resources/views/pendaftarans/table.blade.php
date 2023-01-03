<div class="table-responsive">
    <table class="table" id="pendaftarans-table">
        <thead>
        <tr>
            <th>No</th>
        <th>Nama</th>
        <th>Kota</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pendaftarans as $pendaftaran)
            <tr>
                <td>{{ $pendaftaran->No }}</td>
            <td>{{ $pendaftaran->Nama }}</td>
            <td>{{ $pendaftaran->Kota }}</td>
            <td>{{ $pendaftaran->Jenis_Kelamin }}</td>
            <td>{{ $pendaftaran->Email }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pendaftarans.destroy', $pendaftaran->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pendaftarans.show', [$pendaftaran->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pendaftarans.edit', [$pendaftaran->id]) }}"
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
