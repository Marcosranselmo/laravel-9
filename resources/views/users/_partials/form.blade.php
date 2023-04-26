@csrf
<input type="text" name="name" placeholder="Nome:" value="{{ $user->name }}">
<input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}">
<input type="password" name="password" placeholder="Senha">
{{-- <input type="file" name="password" placeholder="Senha"> --}}
<button type="submit">
    Enviar
</button>