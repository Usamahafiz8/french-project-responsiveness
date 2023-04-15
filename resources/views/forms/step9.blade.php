<div class="row">
    <div class="col-lg-12 align-self-center">
        <h2><span style="color: #54ba9e;">Configuration des murs extérieurs</span></h2>
        <h4><span style="color: #54ba9e;">facade Ouest</span></h4>
    </div>
</div>
<hr color=' #54ba9e' >


<div class="row">
    <div class="col-lg-3 align-self-center">
    <h4>Composition du mur extérieur</h4>
    </div>
    <div class="col-lg-9">
    <div class="row">
    <div class="col-lg-4">
                <div class="form-group">
                    <label for="s9_rock">Pierre</label>
                    <select name="s9_rock" class="form_select_opt form-control">
                    <option value="1" selected>Parpaing</option>
                    <option value="2">Béton banché </option>
                    <option value="3">Béton de mâchefer</option>
                    <option value="4">Béton cellulaire</option>
                    <option value="0"> Non</option>
                    </select>    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s9_concrete">Béton</label>
                    <select name="s9_concrete" class="form_select_opt form-control">
                    <option value="1" selected>Parpaing</option>
                    <option value="2">Béton banché </option>
                    <option value="3">Béton de mâchefer</option>
                    <option value="4">Béton cellulaire</option>
                    <option value="0"> Non</option>
                    </select>    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="s9_brick">Brique</label>
                    <select name="s9_brick" class="form_select_opt form-control">
                    <option  selected value="3">Brique pleine</option>
                    <option value="2"> Brique alvéolée</option>
                    <option value="1">Brique creuse</option>
                    <option value="0"> Non</option>
                    </select>    
                </div>
            </div>
        </div><!---- row end--->
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_earth">Terre</label>
                    <select name="s9_earth" class="form_select_opt form-control">
                        <option value="2" selected>Pisé</option>
                        <option value="1">Torchis / Pan de bois</option>
                        <option value="0">Non</option>
                    </select>    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_drink">Bois</label>
                    <select name="s9_drink" class="form_select_opt form-control">
                    <option  selected value="2">Madrier</option>
                    <option value="1">Ossature bois</option>
                    <option value="0">Non</option>
                    </select>    
                </div>
            </div>
            
        </div><!---- row end--->
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s9_wall_thickness">Epaisseur du mur</label>
                    <input class="form-control" type="text" placeholder="In centimeter" name="s9_wall_thickness">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s9_insulation">Isolation</label>
                    <select name="s9_insulation" class="form_select_opt form-control">
                    <option value="0" selected>Aucune</option>
                    <option value="1"> > 10 ans </option>
                    <option value="2"> 5 to 10 ans </option>
                    <option value="3"> < 5 ans </option>
                    <option value="4">Je ne sais pas </option>
                    </select>    
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s9_thickness">Epaisseur de l' isolant</label>
                    <input class="form-control" type="text" placeholder="In centimeter" name="s9_thickness">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="s9_facade_orientation">Orientation de la facade</label>
                    <select name="s9_facade_orientation" class="form_select_opt form-control">
                    <option value="SO" selected>SO</option>
                    <option value="O"> O </option>
                    <option value="NO"> NO </option>
                    </select>    
                </div>
            </div>
        </div><!---- row end--->
        
    </div><!--col-lg-9 end--->
    
    
</div><!---- row end--->
<hr color=' #54ba9e' >


<div class="row">
    <div class="col-lg-3 align-self-center">
    <h4>Dimensions du mur extérieur</h4>
    </div>
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-6">  
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_height">Hauteur</label>
                    <input class="form-control" type="text" placeholder="In meter" name="s9_height">
                </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_length">Longueur</label>
                    <input class="form-control" type="text" placeholder="In meter" name="s9_length">
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-6">  
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_surface">Surface</label>
                    <input class="form-control" type="text" placeholder="In meter square" name="s9_surface">
                </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="s9_adjoining_area">Surface mitoyenne</label>
                    <input class="form-control" type="text" placeholder="In meter square" name="s9_adjoining_area">
                </div>
                </div>
            </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="">Si présences de sous-façades, ou si façade non rectangulaire, rensigner</label>
            </div><!--col-lg-3 end--->

            <div class="col-lg-3">
                <label for="area2">Surface 2 </label>
                <input class="form-control" type="text" name="s9_area2">
            </div><!--col-lg-3 end--->

            <div class="col-lg-3">
                <label for="area3">Surface 3</label>
                <input class="form-control" type="text" name="s9_area3">
            </div><!--col-lg-3 end--->

            <div class="col-lg-3">
                <label for="area4">Surface 4</label>
                <input class="form-control" type="text" name="s9_area4">
            </div><!--col-lg-3 end--->
            
        </div><!--row end--->
        <div class="row">

            <div class="col-lg-4">
                <label for="s9_t_srfc_area">Surface totale de la façade</label>
                <input class="form-control" type="text" name="s9_t_srfc_area" placeholder="meter square">
            </div><!--col-lg-4 end--->
            <div class="col-lg-4">
                <label for="s9_area_tobe_insltd">Surface à isoler</label>
                <input class="form-control" type="text" name="s9_area_tobe_insltd" placeholder="In meter square">
            </div><!--col-lg-4 end--->
            <div class="col-lg-4">
                <label for="s9_photo">Photo</label>
                <input class="form-control" type="file" name="s9_photo">
            </div><!--col-lg-4 end--->

        </div><!--row end--->
    </div><!--col-lg-9 end--->
</div><!---- row end--->
<hr color=' #54ba9e' >


    <div class="text-right">
        <button type="button" class="btn btn-primary prev">précédente</button>
        <button type="button" class="btn btn-primary next">sauvegarder et suivant</button>
    </div>    
