<?php @require('header.php')?>


<div class="container mt-3">
<h1>Veuillez repondre aux questions ci-dessous</h1>
    <p> Quel est selon vous votre niveau en Laravel ?</p>
    <div class="form-check">
        <label class="form-check-label" for="Debutant">
        <input type="checkbox" class="form-check-input" id="check1" name="oui" 
               value="something" checked> Débutant (je ne connais presque rien en informatique)
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label" for="Intermediaire">
        <input type="checkbox" class="form-check-input" id="check1" name="oui" 
               value="something" checked> Intermédiaire
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label" for="Avance">
        <input type="checkbox" class="form-check-input" id="check1" name="oui" 
               value="something" checked> Avancé
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label" for="Expert">
        <input type="checkbox" class="form-check-input" id="check1" name="oui" 
               value="something" checked> Expert(laravel n’a presque aucun secret pour moi)
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check1" name="non" 
               value="something" checked> NON, Preciser pourquoi? <input type="text" 
               class="form-control" id="pkw">
        
        </label>
    </div>
    <nav>
        <ul class="pagination">
            <li><a href="#" aria-label='Previous' >
                    <span aria-hidden='true'>&laquo;</span>
                    <span class="sr-only">Previous</span>
            </a></li>
            
            <li><a href="#">Q1</a></li>
            <li><a href="#">Q2</a></li>
            
            <li><a href="#" aria-label='Next' >
                    <span aria-hidden='true'>&raquo;</span>
                    <span class="sr-only">Next</span>
            </a></li>
        </ul>
    
    </nav>
        
        
    </nav>
</div>



<?php @include('footer.php');?>