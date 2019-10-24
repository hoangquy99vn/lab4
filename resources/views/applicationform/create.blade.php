{{ Form::open(array('url' => 'applicationform')) }}
    <h1>Application Form</h1>

    <table>
        <tr>
            <td>Full name</td>
            <td>{{ Form::text('fullname') }}</td>
        </tr>
        <tr>
            <td>ID number</td>
            <td>{{ Form::text('idnumber') }}</td>
        </tr>
        <tr>
            <td>Hometow</td>
            <td>{{ Form::select('hometow',$provinces) }}</td>
        </tr>
        <p>
            {{ Form::submit('check') }}
        </p>
        <p>
            {{$result ??''}}
        </p>
    </table>

{{ Form::close() }}