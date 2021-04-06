
<html>
    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link href="{{asset('css/monstyle.css')}}" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div class="container">
            <div class="row" style="background-color: #34393f">  
                <div class="col-xl-9 "> 
                    
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-info" href="index.html">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="enregistrer.html">enregistrer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="resultat.html">Resultat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="a_propos.html">a propos</a>
                        </li>
                    </ul>

                </div> 
            </div> 
            <div class="row bgform" style="background-color: #cdcdcd">
           
              <div class="col-xl-12">   
                <form action="#">
                <div class="form-group">
                    <label for="email">Votre email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    <label for="mdp">Votre mot de passe</label>
                    <input type="password" class="form-control" id="mdp" placeholder="nouveau mot de passe" name="mdp"><br>
                    
                    <button type="submit" class="btn btncolor">Se connecter</button>
                </form>
              </div>
            </div>
        </div>
            <!-- for img in bottom  -->
            <div class="row" style="background-color: #34393f">
                <h4 class="font-weight-bold text-info"style="margin-left: 150px">TEST</h4>
             
            </div> 
            </div>
    </body>
</html>