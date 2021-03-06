<table class="table table-responsive" id="contacts-table">
    <thead>
        <th>Salutation</th>
        <th>First Name:</th>
        <th>M.I.</th>
        <th>Last Name</th>
        <th>Phone No.:</th>
        <th>Account</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->salutation }}</td>
            <td>{{ $contact->first_name }}</td>
            <td>{{ $contact->mi }}.</td>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->office_phone }}</td>
            <td>{{ $contact->Accounts['name'] }}</td>
            <td>
                {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contacts.show', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contacts.edit', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>