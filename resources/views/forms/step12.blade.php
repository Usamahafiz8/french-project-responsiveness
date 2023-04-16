<div class="text-heading">
    <div class="col-lg-12 align-self-center">
        VENTILATION
    </div>
</div>
<hr color=' #54ba9e'>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="s12_ventillation">systéme de ventilation</label>
            <select name="s12_ventillation" class="form_select_opt form-control">
                <option value="0" selected> Par infiltration</option>
                <option value="1"> Grilles hautes et basses</option>
                <option value="2"> VMC Simple Flux Auto</option>
                <option value="3"> VMC Double Flux </option>
                <option value="4"> VMC Hygro A </option>
                <option value="5"> VMC Hygro B</option>
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="s12_no_pieces">Nombre de piéces</label>
            <input class="form-control" type="text" placeholder="" name="s12_no_pieces">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="s12_no_bathrooms">Nombre de salles de bains</label>
            <input class="form-control" type="text" placeholder="" name="s12_no_bathrooms">
        </div>
    </div>
</div> <!----row1 end-->


<hr color=' #54ba9e'>
<div class="row">
    <div class="col-lg-3 align-self-center">
        <h4>Systeme De Chauffage et ECS</h4>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s12_energy">Energie</label>
                    <select name="s12_energy" class="form_select_opt form-control">
                        <option value="Fuel oil" selected>Fioul</option>
                        <option value="Gas"> Gaz</option>
                        <option value="Propane"> Propane</option>
                        <option value="Wood"> Bois </option>
                        <option value="Electricity"> Electricité </option>
                        <option value="Coal"> Charbon</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s12_generator"> Générateur </label>
                    <select name="s12_generator" class="form_select_opt form-control">
                        <option value="0" selected>Chaudière haute T°</option>
                        <option value="1">Chaudière basse T°</option>
                        <option value="2">Chaudière condensation</option>
                        <option value="3">Convecteurs électriques</option>
                        <option value="4">Poêle à bois</option>
                        <option value="5"> Insert</option>
                        <option value="6"> Cheminée</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s12_year">Année</label>
                    <input class="form-control" type="date" placeholder="" name="s12_year">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s12_rated_p">P. nominale</label>
                    <input class="form-control" type="text" placeholder="" name="s12_rated_p">
                </div>
            </div>
        </div> <!----row1 end-->
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s12_yield_p_nominal"> Rendement P. nominale </label>
                    <input class="form-control" type="text" placeholder="" name="s12_yield_p_nominal">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s12_plcd_in_heated_vol"> Placé dans un volume chauffé </label>
                    <select name="s12_plcd_in_heated_vol" class="form_select_opt form-control">
                        <option value="1" selected>Oui</option>
                        <option value="0">Non</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s12_photo">Photo</label>
                    <input class="form-control" type="file" placeholder="" name="s12_photo">
                </div>
            </div>
        </div> <!----row2 end-->

    </div><!----col-lg-9 end-->
</div>

<hr color=' #54ba9e'>
<div class="text-right">
    <button type="button" class="button-29  prev">précédente</button>
    &nbsp; 
        <br/>
        <br/>
    <button type="button" class="button-29  next">sauvegarder et suivant</button>
</div>