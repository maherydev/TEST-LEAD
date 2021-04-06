@extends("header")

@section('content')
            <div class="row bgform" style="background-color: #cdcdcd">
              <div class="col-xl-4">
                  <h3 id="h3center"style="margin-top: 50px;margin-left: 150px">Authentification</h3>
                  <a class="text-primary" href="index.html"style="margin-top: 50px;margin-left: 150px">cliquer ici</a> <p style="margin-left: 150px"> si mot de passe oublié?</p>
              </div>
              <div class="col-xl-4">
                <form action="#">
                <div class="form-group">
                    <label for="email">Votre adresse de messagerie(Obligatoire)</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    <label for="mdp">Nouveau mot de passe</label>
                    <input type="password" class="form-control" id="mdp" placeholder="nouveau mot de passe" name="mdp">
                    <label for="mdp">confirmer le mot de passe</label>
                    <input type="password" class="form-control" id="mdp" placeholder="nouveau mot de passe" name="mdp"><br>
                    <button type="submit" class="btn btncolor">enregistrer</button>
                </form>
              </div>
                <div class="col-xl-4">  </div>
            </div>
        </div>
            <!-- for img in bottom  -->
            <div class="row" style="background-color: #34393f">
                <h4 class="font-weight-bold text-info"style="margin-left: 250px">TEST</h4>

            </div>
            </div>
@endsection
