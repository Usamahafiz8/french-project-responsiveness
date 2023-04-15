<div class="row">
    <div class="col-lg-12 align-self-center">
        <h2><span style="color: #54ba9e;">Production d'ECS</span></h2>
    </div>
</div>

<hr color=' #54ba9e' >


<div class="row">
    <div class="col-lg-4">
        <label>Production d'ECS Typer</label>
        <select name="s14_type" class="form_select_opt form-control">
            <option value="0" selected>Instantanée</option>
            <option value="1"> Générateur de chauffage</option>
            <option value="2">Chauffe-eau gaz </option>  
            <option value="3"> Autre </option>
            
        </select>    
    </div>
    <div class="col-lg-4">
        <label>Accumulation</label>
        <select name="s14_accumulation" class="form_select_opt form-control">
            <option value="0" selected>Instantanée</option>
            <option value="1"> Générateur de chauffage</option>
            <option value="2"> Chauffe-eau électrique </option>  
            <option value="3"> Ballon thermodynamique  </option>
            <option value="4"> Autre</option>
        </select>    
    </div>
    <div class="col-lg-4">
        <label for="s14_volume">Volume </label>
        <input class="form-control" type="text" name="s14_volume">
    </div>
    
</div> <!----row1 end-->

<div class="row">
    <div class="col-lg-4">
        <label for="s14_ecs_seniority">Ancienneté ECS</label>
        <select name="s14_ecs_seniority" class="form_select_opt form-control">
            <option value="0" selected>< 5 ans </option>
            <option value="1"></option>
            <option value="2">5-10 ans</option>
            <option value="3">>15 ans</option>
        </select>    
    </div>
    <div class="col-lg-4">
        <label for="s14_plcd_in_heated_vol"> Placé dans un volume chauffé </label>
        <select name="s14_plcd_in_heated_vol" class="form_select_opt form-control">
            <option value="1" selected>Oui</option>
            <option value="0">Non</option>
        </select>    
    </div>
    <div class="col-lg-4">Compteur électrique
        <label>Photo</label>
        <input class="form-control" type="file" name="s14_photo">
    </div>
    <div class="col-lg-4">
        
    </div>
</div> <!----row2 end-->


<div class="text-right">
        <button type="button" class="btn btn-primary prev">précédente</button>
        <button type="button" class="btn btn-primary next">sauvegarder et suivant</button>
</div>    
