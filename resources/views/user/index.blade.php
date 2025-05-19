<h2>Form Tambah User</h2>

@if (session('success'))
<p style="color: green;">{{session('success')}}</p>
@endif

@if ($errors-.any())
<ul style-"color:red;">
    @foreach ($errors->all() as $errors)
    <li>{{ $errors-> }}</li>
    @endforeach
</ul>
@endif

<form method="POST" action="{{ route('user.store') }}>
</form>