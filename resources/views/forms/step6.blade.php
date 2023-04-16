<div class="row">
    <div class="col-lg-12 align-self-center">
        <h2><span style="color: #54ba9e;">Recensement de s ouvrants</span></h2>
        <h4><span style="color: #54ba9e;">facade est</span></h4>
    </div>
</div>
<hr color=' #54ba9e'>


<div class="row">
    <div class="col-lg-12 align-self-center">
        <div class="row">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
                <!-- <button type="button" class="btn btn-info add-new add-new-s6"><i class="fa fa-plus"></i> Add New</button> -->
                <input type="button" value="Delete Row" class="s6_deleteRow deleteRow btn btn-danger btn-sm">
                <input type="button" value="Add Row" class="s6_addRows addRows btn btn-success btn-sm">
            </div>
        </div>
        <div class="table-responsive">
            <div class="table-wrapper" style="width: 90vh; ">
                <!-- <div class="table-title">
            </div> -->
                <table class="table table-bordered" id="s6_rowsTable">
                    <tr>
                        <th>sélectionner</th>
                        <th>Type d’ouverture</th>
                        <th>Nbr</th>
                        <th>L(m) </th>
                        <th>H(m)</th>
                        <th>Huisserie</th>
                        <th>Vitrage</th>
                        <th>Volet</th>
                    </tr>
                    <tr>
                        <td class="s6_td1"><input type="checkbox" name="s6_record"></td>
                        <td class="s6_td1">
                            <select name="s6_kind_opening" class="form_select_opt s6_kind_opening form-control">
                                <option value="0" selected>Fenêtre</option>
                                <option value="1">Porte-fenêtre </option>
                                <option value="2"> Porte </option>
                                <option value="3"> Velux </option>
                                <option value="4"> Bale Vitrée </option>
                                <option value="5"> PF coulissante </option>
                                <option value="6"> Porte de garage </option>
                                <option value="7"> Brique de verre </option>
                            </select>
                        </td>
                        <td class="s6_td1"><input class="form-control s6_cop_no" type="text" name="s6_cop_no"></td>
                        <td class="s6_td1"><input class="form-control s6_cop_length" type="text" name="s6_cop_length"></td>
                        <td class="s6_td1"><input class="form-control s6_cop_height" type="text" name="s6_cop_height"></td>
                        <td class="s6_td1">
                            <select name="s6_frame" class="form_select_opt form-control">
                                <option value="PVC" selected>PVC</option>
                                <option value="Bios"> Bios </option>
                                <option value="Alu"> Alu </option>
                                <option value="Aucun"> Aucun </option>
                            </select>
                        </td>
                        <td class="s6_td1">
                            <select name="s6_glazing" class="form_select_opt form-control">
                                <option value="0" selected>Simple vitrage</option>
                                <option value="1"> Double vitrage ancien (>10 ans) </option>
                                <option value="2"> Double vitrage récent (< 10 ans) </option>
                                <option value="3"> Double vitrage VIR </option>
                                <option value="4"> Double fenêtre </option>
                                <option value="5"> Aucun </option>
                            </select>
                        </td>
                        <td class="s6_td1">
                            <select name="s6_shutter" class="form_select_opt form-control">
                                <option value="0" selected>Volet avec ajours </option>
                                <option value="1"> Volets battants bois </option>
                                <option value="2"> Volets battants PVC </option>
                                <option value="3"> Volets roulants PVC </option>
                                <option value="4"> Volets roulants alu </option>
                                <option value="5"> Persiennes coulissantes </option>
                                <option value="6"> Aucun </option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div><!---col-lg-9---->
</div>
<br/>
<hr color=' #54ba9e' >

<div class="row">
    <div class="col-lg-2">
        <label for="s6_photo">Photo</label>
    </div>
    <div class="col-lg-3">
        <input class="form-control" type="file" name="s6_photo">
    </div>
    <div class="col-lg-7">
    </div>
</div>

<div class="row">
    <div class="col-lg-2 align-self-center">
        <h4>Comments</h4>
    </div>
    <div class="col-lg-10">
        <textarea name="s6_comments" class="form-control" rows="5"></textarea>
    </div>
</div>
<hr color=' #54ba9e'>

<div class="text-right">
    <button type="button" class="btn btn-primary prev">précédente</button>
    <button type="button" class="btn btn-primary next">sauvegarder et suivant</button>
</div>