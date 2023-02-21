<!-- make register form -->
<form action="{{ route('register') }}" method="POST">
    @csrf
    <p class="ket-input-name">Name</p>
    <input type="text" name="name" placeholder="name" class="input-name">
    <p class="ket-input-address">Address</p>
    <input type="text" name="address" placeholder="address" class="input-address">
    <p class="ket-input-email">Email</p>
    <input type="text" name="email" placeholder="email" class="input-email">
    <p class="ket-input-password">Password</p>
    <input type="password" name="password" placeholder="password" class="input-password">
    <button type="submit" class="btn-submit">Register</button>
</form>
