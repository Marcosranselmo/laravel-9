@csrf
<input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
<input type="email" name="email" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}">
<input type="password" name="password" placeholder="Senha:">
<input type="file" name="image" placeholder="Senha">
<button type="submit">
    Enviar
</button>