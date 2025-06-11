<form method="POST" action="{{ url('/register') }}">
    @csrf
    <input name="name" type="text" placeholder="Name" required>
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>
