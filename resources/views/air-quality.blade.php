<h1>Kualitas Udara</h1>

@if($data)
    <ul>
        @foreach($data['data']['iaqi'] as $parameter => $value)
            <li>{{ $parameter }}: {{ $value['v'] }}</li>
        @endforeach
    </ul>
@else
    <p>Data tidak tersedia.</p>
@endif