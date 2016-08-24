<h2>Hai ricevuto un nuovo messagio dal sito ricambi.elettronicalowcost.it</h2>

<p>Dettaglio</p>

<ul>
    <li>Nome: <strong>{{ $name }}</strong></li>
    <li>Email: <strong>{{ $email }}</strong></li>
    <li>Telefono: <strong>{{ $phone }}</strong></li>
</ul>
<hr>
<p>
    @foreach($messageLines as $messageLine)
        {{ $messageLine }}<br>
    @endforeach
</p>

<hr>