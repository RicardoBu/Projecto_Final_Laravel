<form method="POST" action="/register">
    @csrf

    <input name="name" placeholder="Nome">
    <input name="email" type="email">
    <input name="password" type="password">
    <input name="password_confirmation" type="password">

    <button type="submit">Register</button>
</form>
