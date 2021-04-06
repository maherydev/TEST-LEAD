@extends("header")

@section('content')
< class="container mt-3">
<h1>Veuillez tous remplir</h1>
  <form action=" {{ route('inscrire') }} " method="post">
      {{ csrf_field() }}
    <div class="form-group">
        <label for="usr">nom:</label>
        <input type="text" class="form-control" id="usr" name="nomRes">
    </div>
    <div class="form-group">
        <label for="pwd">mot de passe:</label>
        <input type="password" class="form-control" id="pwd" name="pwdRes">
    </div><br>
    <p><input type="submit" value="Enregistrer"></p>


  </form>
</div>
@endsection



