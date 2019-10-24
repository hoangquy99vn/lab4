<h1>CALCULATE</h1>
{{ Form::open(array('url' => 'calculate')) }}
    <p>Nhập số a 
        {{ Form::number('num_1', $num_1??'') }}
    </p>

    <p>Nhập số b 
        {{ Form::number('num_2', $num_2??'') }}  
    </p>

    <p>
        {{ Form::submit('Check') }}
    </p>

    <p>Kết quả 
        {{ $result ?? ''}}
    </p>
{{ Form::close() }}

