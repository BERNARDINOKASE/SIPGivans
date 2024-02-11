<h1 style="color: orange">HALAMAN ADMIN CUKIMAY</h1>
<form action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit">Keluar</button>
</form>