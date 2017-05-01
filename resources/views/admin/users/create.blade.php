<form method="POST" action="/users">
    {!! csrf_field() !!}
    <input type="text" name="name" placeholder="Username">
    <input type="email" name="email" placeholder="Your email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Sign Up">
</form>