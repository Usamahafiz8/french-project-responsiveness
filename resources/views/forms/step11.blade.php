<div class="text-heading">
    <div class="col-lg-12 align-self-center">
        Architecture - Description Du Bati
    </div>
</div>

<hr color=' #54ba9e'>


<div class="row">
    <div class="col-lg-3 align-self-center">
        <h4>Configuration générale de la maison</h4>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th style="width: 25%; text-align: center;"></th>
                            <th style="width: 25%; text-align: center;">Surface habitable </th>
                            <th style="width: 25%; text-align: center;">Surface non chauffée</th>
                            <th style="width: 25%; text-align: center;">Hauteur sous plafond</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sous-sol</td>
                            <td><input class="form-control" type="text" name="basement_ls"></td>
                            <td><input class="form-control" type="text" name="basement_us"></td>
                            <td><input class="form-control" type="text" name="basement_ch"></td>
                        </tr>
                        <tr>
                            <td>Rez de chaussée</td>
                            <td><input class="form-control" type="text" name="groundfloor_ls"></td>
                            <td><input class="form-control" type="text" name="groundfloor_us"></td>
                            <td><input class="form-control" type="text" name="groundfloor_ch"></td>
                        </tr>
                        <tr>
                            <td>1er étage</td>
                            <td><input class="form-control" type="text" name="frstfloor_ls"></td>
                            <td><input class="form-control" type="text" name="frstfloor_us"></td>
                            <td><input class="form-control" type="text" name="frstfloor_ch"></td>
                        </tr>
                        <tr>
                            <td>2éme étage</td>
                            <td><input class="form-control" type="text" name="scndfloor_ls"></td>
                            <td><input class="form-control" type="text" name="scndfloor_us"></td>
                            <td><input class="form-control" type="text" name="scndfloor_ch"></td>
                        </tr>
                        <tr>
                            <td>3éme étage</td>
                            <td><input class="form-control" type="text" name="thrdfloor_ls"></td>
                            <td><input class="form-control" type="text" name="thrdfloor_us"></td>
                            <td><input class="form-control" type="text" name="thrdfloor_ch"></td>
                        </tr>
                    </tbody>
                </table>
            </div><!----col-lg-12 end-->
        </div><!----row1 end-->

        <div class="row">
            <div class="col-lg-4">
                <label>Surface habitable totale</label>
                <input class="form-control" type="text" placeholder="In meter Square" name="lvngspace_total">
            </div>
            <div class="col-lg-4">
                <label>Enfouissement d u soussol</label>
                <select name="burial_of_subfloor" class="form_select_opt form-control">
                    <option value="0" selected>Enterré</option>
                    <option value="1"> Enfouissement d u soussol </option>
                    <option value="2"> Semi-enterré </option>
                </select>
            </div>
            <div class="col-lg-4">
                <label>Forme du logement</label>
                <select name="housing_shape" class="form_select_opt form-control">
                    <option value="0" selected>Compact</option>
                    <option value="1"> Allongée </option>
                    <option value="2"> En L </option>
                    <option value="3"> En U </option>
                    <option value="4"> Autre </option>
                </select>
            </div>
        </div><!----row2 end-->

    </div><!----col-lg-9 end-->
</div><!----row end-->
<hr color=' #54ba9e'>


<div class="row">
    <div class="col-lg-3 align-self-center">
        <h4>Configuration du plancher bas
        </h4>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="low_floor_type">Type de plancher bas </label>
                    <select name="low_floor_type" class="form_select_opt form-control">
                        <option value="0" selected> Sur sous-so</option>
                        <option value="1">Vide sanitaire</option>
                        <option value="2"> Sur terre-plein</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="fatwork">Grosœuvre</label>
                    <select name="fatwork" class="form_select_opt form-control">
                        <option selected value="0">Bois</option>
                        <option value="1">Béton ou terre </option>
                        <option value="2">Brique</option>
                        <option value="3">Je ne sais pas</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="insulation">Isolation</label>
                    <select name="lfg_insulation" class="form_select_opt form-control">
                        <option selected value="4">Aucune</option>
                        <option value="3"> > 10 ans </option>
                        <option value="2">5 à 10 ans </option>
                        <option value="1">
                            < 5 ans </option>
                        <option value="0"> Je ne sais pas</option>
                    </select>
                </div>
            </div>
        </div> <!----row1 end-->
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="lfg_insulation_thickness">Epaisseur de l'isolant</label>
                    <input class="form-control" type="text" placeholder="centimeter" name="lfg_insulation_thickness">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="lfg_btm_floor_area">Surfa ce d u plancher ba s </label>
                    <input class="form-control" type="text" placeholder="meter square" name="lfg_btm_floor_area">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="lfg_insulated_area">Surface à isoler</label>
                    <input class="form-control" type="text" placeholder="meter square" name="lfg_insulated_area">
                </div>
            </div>


        </div> <!----row2 end-->

        <div class="row">

            <div class="col-lg-4">
                <label for="step11_photo">Photo</label>
                <input class="form-control" type="file" name="step11_photo">
            </div>
            <div class="col-lg-4">
                <label for="step11_photo1">Photo Plancher Bas 1</label>
                <input class="form-control" type="file" name="step11_photo1">
            </div>
            <div class="col-lg-4">
                <label for="step11_photo2">Photo Plancher Bas 2</label>
                <input class="form-control" type="file" name="step11_photo2">
            </div>

        </div> <!----row3 end-->

    </div><!----col-lg-9 end-->
</div><!----row end-->

<hr color=' #54ba9e'>

<div class="row">
    <div class="col-lg-3 align-self-center">
        <h4>Observations</h4>
    </div>
    <div class="col-lg-9">
        <textarea name="comments" class="form-control" rows="5"></textarea>
    </div>
</div>

<hr color=' #54ba9e'>

<div class="text-right">
    <button type="button" class="button-29  prev">précédente</button>
    &nbsp; 
        <br/>
        <br/>
    <button type="button" class="button-29  next">sauvegarder et suivant</button>
</div>