<div class="row">
    <div class="col-lg-12 align-self-center">
        <h2><span style="color: #54ba9e;">Configuration du plancher haut</span></h2>
    </div>
</div>
<hr color=' #54ba9e'>
<form role="form" method="POST" class="form-horizontal" id="step2form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="customerId" value="{{$customerId}}">
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="email">Type de plancher haut</label>
                <select name="s2_low_floor_type" class="form_select_opt form-control">
                    <option value="0" selected>Combles perdus</option>
                    <option value="1">Combles aménagés</option>
                    <option value="2">Toiture terrasse</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="s2_bigwork">Gros-œuvre</label>
                <select name="s2_bigwork" class="form_select_opt form-control">
                    <option selected value="3">Bois</option>
                    <option value="2">Béton ou terre </option>
                    <option value="1">Plafond</option>
                    <option value="0">Je ne sais pas</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="s2_lfg_insulation">Isolation</label>
                <select name="s2_lfg_insulation" class="form_select_opt form-control">
                    <option selected value="0">Aucune</option>
                    <option value="1"> > 10 ans </option>
                    <option value="2">5 à 10 ans </option>
                    <option value="3">
                        < 5 ans </option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="s2_insulation_thick">Epaisseur de l'isolant</label>
                <input class="form-control" type="text" placeholder="In centimeter" name="s2_insulation_thick" value="<?php echo $step2_data->insulation_thickness     ?? ''; ?>">
            </div>
        </div>
    </div>
    <hr color=' #54ba9e'>
    <div class="row">
        <div class="col-lg-3 align-self-center">
            <h4>Si combles aménageables renseigner </h4>
        </div>
        <div class="col-lg-9">

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="s2_crawlers_surface">Surface des rampants</label>
                        <input class="form-control" type="text" placeholder="In meter Square" name="s2_crawlers_surface" value="<?php echo $step2_data->crawlers_surface ?? ''; ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="s2_exterior_ceiling">Surface du plafond extérieur</label>
                        <input class="form-control" type="text" placeholder="In meter Square" name="s2_exterior_ceiling" value="<?php echo $step2_data->exterior_ceiling ?? ''; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div><!---row end---->
    <hr color=' #54ba9e'>
    <div class="row">
        <div class="col-lg-3 align-self-center">
            <h4>Si combles perdus renseigner</h4>
        </div>
        <div class="col-lg-9">

            <div class="row">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Surface des combles perdus</label>
                        </div>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" placeholder="meter Square" name="s2_attic_area_val" value="<?php echo $step2_data->attic_area_val ?? ''; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-check-input" type="radio" name="s2_attic_area" value="Isolation déroulé" id="cap_aa">
                            <label class="form-check-label" for="occupancy1">Isolation déroulé</label>
                        </div>
                        <div class="col-sm-6">
                            <input class="form-check-input" type="radio" name="s2_attic_area" value="Isolation soufflée" id="cap_aa">
                            <label class="form-check-label" for="occupancy1">Isolation soufflée</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!---row end---->
    <hr color=' #54ba9e'>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4">
                    <div class="col-lg-6">
                        <label>Photo</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="file" name="s2_photo">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-6">
                        <label> Photo Plancher Haut 1</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="file" name="s2_hf_photo1">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-6">
                        <label> Photo Plancher Haut 2</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="file" name="s2_hf_photo2">
                    </div>
                </div>

            </div>
        </div>

        </div>
        <hr color=' #54ba9e'>
        <div class="row">
            <div class="col-lg-2 align-self-center">
                <h4>Observations</h4>
            </div>
            <div class="col-lg-10">
                <textarea name="s2_comments" class="form-control" rows="3"><?php echo $step2_data->comments ?? ''; ?></textarea>
            </div>
        </div>
        <hr color=' #54ba9e'>
</form>
<div class="text-right">
    <button type="button" class="btn btn-primary prev">précédente</button>
    <button type="button" class="btn btn-primary next" id="step2Submit">sauvegarder et suivant</button>
</div>