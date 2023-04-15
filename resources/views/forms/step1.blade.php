<!-- <div class="row"> -->
<!-- <div class="col-lg-12 align-self-center"> -->
<div class="text-heading">
  <!-- <h2> -->
  <!-- <span style="color: #54ba9e;"> -->
  GENERAL INFORMATIONS
  <!-- </span> -->
  <!-- </h2> -->
</div>
<!-- </div> -->
<!-- </div> -->
<!-- <hr color=' #54ba9e' > -->
<hr color=' #54ba9e'>
<form role="form" method="POST" class="form-horizontal" id="step1form" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="customerId" value="{{$customerId}}">
  <div class='text-subheading'>
    <!-- <h4> -->
    Informations générales de l'auditeur
    <!-- </h4> -->
  </div>
  <div class="row">
    <div class="col-lg-9">
      <div class="row">
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_aud_name"> Nom</label>
            <input name="s1_aud_name" class="form-control" type="text">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_aud_f_name">Prénom</label>

            <input name="s1_aud_f_name" class="form-control" type="text" value="<?php echo $step1_data->aud_f_name ?? ''; ?>">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_aud_visit_date">Date de visite</label>
            <input name="s1_aud_visit_date" class="form-control" type="date" value="<?php echo $step1_data->aud_visit_date ?? ''; ?>">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_st_num">N° de relevé</label>
            <input name="s1_aud_st_num" class="form-control" type="text" value="<?php echo $step1_data->aud_statemnt_no ?? ''; ?>">
          </div>
        </div>
      </div><!---row  end---->

    </div><!---col lg 9 end---->
  </div><!---outer row 1 end---->
  <!-- <hr> -->
  <hr color=' #54ba9e'>

  <div class="row">

    <div class="col-lg-3 align-self-center">
      <h4>Informations générales du client </h4>
    </div>
    <div class="col-lg-9">
      <div class="row">
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_cus_name"> Nom</label>
            <input name="s1_cus_name" class="form-control" type="text" value="{{$customer_data->name}}">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_cus_f_name">Prénom</label>
            <input name="s1_cus_f_name" class="form-control" type="text" value="{{$customer_data->first_name}}">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_cus_phone">N° de téléphone</label>
            <input name="s1_cus_phone" class="form-control" type="text" value="{{$customer_data->contact}}">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_cus_email">Adresse email</label>
            <input name="s1_cus_email" class="form-control" type="email" value="{{$customer_data->email}}">
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_people_on_earth">Nombres de personnes dans le foyer</label>
            <input name="s1_people_on_earth" class="form-control" type="text" value="<?php echo $step1_data->people_in_hearth ?? ''; ?>">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_tax_income">Revenu fiscal</label>
            <input name="s1_tax_income" class="form-control" type="text" value="<?php echo $step1_data->tax_income ?? ''; ?>">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_cons_date">Date de construction</label>
            <input name="s1_cons_date" class="form-control" type="date">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="s1_altitude">Altitude</label>
            <input name="s1_altitude" class="form-control" type="text" value="<?php echo $step1_data->altitude ?? ''; ?>">
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-8">
          <div class="form-group">
            <label for="s1_people_on_earth">Adresse</label>
            <textarea name="s1_address" class="form-control" rows="2">{{$customer_data->address}}</textarea>
          </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
  </div><!---row end---->


  <hr color=' #54ba9e'>

  <div class="row">
    <div class="col-lg-4">

      <div class="form-group">
        <label for="s1_accomodation">Occupation du logement</label>
        <select name="s1_accomodation" class="form_select_opt form-control">
          <option value="0" <?php echo ($step1_data->occupancy_accomodation == 0) ? 'selected' : ''; ?>>depuis plus d'un an </option>
          <option value="1" <?php echo ($step1_data->occupancy_accomodation == 1) ? 'selected' : ''; ?>>depuis moins d'un an</option>
        </select>

      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label for="s1_w_comfort_level">Niveau de confort - hiver</label>
        <select name="s1_w_comfort_level" class="form_select_opt form-control">
          <option value="0" <?php echo ($step1_data->winter_comfortlevel == 0) ? 'selected' : ''; ?>>mauvais</option>
          <option value="1" <?php echo ($step1_data->winter_comfortlevel == 1) ? 'selected' : ''; ?>>correct</option>
          <option value="2" <?php echo ($step1_data->winter_comfortlevel == 2) ? 'selected' : ''; ?>>Bon</option>
        </select>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label for="s1_s_comfort_level">Niveau de confort - été</label>
        <select name="s1_s_comfort_level" class="form_select_opt form-control">
          <option value="0" <?php echo ($step1_data->summer_comfortlevel == 0) ? 'selected' : ''; ?>>mauvais</option>
          <option value="1" <?php echo ($step1_data->summer_comfortlevel == 1) ? 'selected' : ''; ?>>correct</option>
          <option value="2" <?php echo ($step1_data->summer_comfortlevel == 2) ? 'selected' : ''; ?>>Bon</option>
        </select>
      </div>
    </div>

  </div><!---row end---->
  <hr color=' #54ba9e'>

  <div class="row">
    <div class="col-lg-2 align-self-center">
      <h4>Objectifs du client</h4>
    </div>
    <div class="col-lg-10">
      <div class="row">
        <?php
        if (isset($step1_data->client_goals)) {
          $goals_json = json_decode($step1_data->client_goals);
        } else {
          $goals_json = array('9');
        } ?>

        <div class="col-lg-4">
          <label>
            <input type="checkbox" name="s1_client_goals" value="0" <?php echo in_array('0', $goals_json) ? 'checked' : ''; ?>>
            &nbsp;Améliorer le confort thermique
          </label>
        </div>

        <div class="col-lg-4">
          <label>
            <input type="checkbox" name="s1_client_goals" value="1" <?php echo in_array('1', $goals_json) ? 'checked' : ''; ?>>
            &nbsp;Adapter/ réagencer le logement
          </label>
        </div>
        <div class="col-lg-4">
          <label>
            <input type="checkbox" name="s1_client_goals" value="2" <?php echo in_array('2', $goals_json) ? 'checked' : ''; ?>>
            &nbsp;Embellir le logement
          </label>
        </div>
        <div class="col-lg-6">
          <label>
            <input type="checkbox" name="s1_client_goals" value="3" <?php echo in_array('3', $goals_json) ? 'checked' : ''; ?>>
            &nbsp;Réduire l'emprunte environnementale
          </label>
        </div>
        <div class="col-lg-6">
          <label>
            <input type="checkbox" name="s1_client_goals" value="4" <?php echo in_array('4', $goals_json) ? 'checked' : ''; ?>>
            &nbsp;Faire des économies
          </label>
        </div>

        <div class="col-lg-6">
          <label>
            <input type="checkbox" name="s1_client_goals" value="5" <?php echo in_array('5', $goals_json) ? 'checked' : ''; ?>>
            &nbsp;Résoudre une panne / une dégradation
          </label>
        </div>
        <div class="col-lg-6">
          <label>
            <input type="checkbox" name="s1_client_goals" value="6" <?php echo in_array('6', $goals_json) ? 'checked' : ''; ?>>
            &nbsp; Augmenter la valeur du bien immobilier
          </label>
        </div>

      </div>

    </div>
  </div><!---row end---->
  <hr color=' #54ba9e'>

  <?php
  if (isset($step1_data->heatingmode_change)) {
    $heatingmode_chng_json = json_decode($step1_data->heatingmode_change);
  } else {
    $heatingmode_chng_json = array('9');
  }
  ?>
  <div class="row">
    <div class="col-lg-2 align-self-center">
      <h4>Préconisations (à remplir à la fin de la visite)</h4>
    </div>
    <div class="col-lg-10">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label for="s1_heating_mode">Changement de mode de chauffage</label>
            <div class="form-row">
              <div class="form-group col">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="s1_heating_mode" value="0" <?php echo in_array('0', $heatingmode_chng_json) ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="s1_heating_mode">PAC&nbsp;A/E</label>
                </div>
              </div>
              <div class="form-group col">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="s1_heating_mode" value="1" id="cap_aa" <?php echo in_array('1', $heatingmode_chng_json) ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="occupancy1">PAC&nbsp;A/A</label>
                </div>
              </div>
              <div class="form-group col">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="s1_heating_mode" value="2" <?php echo in_array('2', $heatingmode_chng_json) ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="occupancy1">Chaudière&nbsp;pellets </label>
                </div>
              </div>
              <div class="form-group col">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="s1_heating_mode" value="3" <?php echo in_array('3', $heatingmode_chng_json) ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="occupancy1">Autre</label>
                </div>
              </div>

            </div><!--form row end--->
          </div> <!--form group end--->
        </div><!--col lg 12 end--->
      </div><!--row end--->
      <hr color=' #54ba9e'>

      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label for="s1_isolation_gesture">Geste d'isolation</label>
          </div> <!--form group end--->
        </div><!--col lg 12 end--->
      </div><!--row end--->
      <div class="row">
        <div class="col-lg-5">
          <div class="row">
            <div class="col-lg-3">
              <label>
                <input type="radio" name="s1_isolation_gesture" value="0" <?php //echo in_array('0', $iso_gesture_type_json) ? 'checked' : '';
                                                                          ?>>
                &nbsp;ITE
              </label>
            </div>
            <div class="col-lg-3">
              <label>
                <input type="radio" name="s1_isolation_gesture" value="1" <?php //echo in_array('1', $iso_gesture_type_json) ? 'checked' : '';
                                                                          ?>>
                &nbsp; ITI
              </label>
            </div>
            <div class="col-lg-6">
              <input class="form-control" type="text" name="s1_isolation_ges_val" value="<?php echo $step1_data->isolation_gesture_val ?? ''; ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <label>
                <input type="checkbox" name="s1_lost_attics" value="true">
                &nbsp;Combles perdus
              </label>
            </div>

            <div class="col-lg-6">
              <input class="form-control" type="text" name="s1_lost_attics_val" value="<?php echo $step1_data->isolation_gesture_val ?? ''; ?>">
            </div>
          </div>

        </div><!--col lg 5 end--->
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
          <div class="row">
            <div class="col-lg-6">
              <label>
                <input type="checkbox" name="s1_lowfloor" value="true">
                &nbsp;Plancher bas
              </label>
            </div>

            <div class="col-lg-6">
              <input name="s1_lowfloor_value" class="form-control" type="text" value="<?php echo $step1_data->low_floor_val ?? ''; ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <label>
                <input type="checkbox" name="s1_crawlers" value="true">
                &nbsp;Rampants
              </label>
            </div>

            <div class="col-lg-6">
              <input name="s1_crawlers_value" class="form-control" type="text" value="<?php echo $step1_data->crawlers_val ?? ''; ?>">
            </div>
          </div>

        </div><!--col lg 5 end--->
      </div><!--row end--->

      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label for="email">Changement de mode d'ECS</label>
          </div> <!--form group end--->
        </div><!--col lg 12 end--->
      </div><!--row end--->

      <div class="row">
        <div class="col-lg-5">
          <div class="row">
            <div class="col-lg-5">
              <label>
                <input type="checkbox" name="s1_td_baloon" value="true">
                &nbsp;Ballon thermodynamique
              </label>
            </div>

            <div class="col-lg-7">
              <input class="form-control" type="text" name="s1_td_baloon_val" placeholder="L" value="<?php echo $step1_data->tdynamic_baloon_val ?? ''; ?>">
            </div>
          </div>
        </div><!--col lg 5 end--->
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
          <div class="row">
            <div class="col-lg-5">
              <label>
                <input type="checkbox" name="s1_water_heater" value="true">
                &nbsp;Chauffe-eau solaire individuel
              </label>
            </div>

            <div class="col-lg-7">
              <input class="form-control" type="text" name="s1_water_heater_val" placeholder="L" value="<?php echo $step1_data->waterheater_val ?? ''; ?>">
            </div>
          </div>
        </div><!--col lg 5 end--->

      </div><!--row end--->
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label for="">Installation d'un systéme de ventilation</label>
            <div class="form-row">
              <div class="form-group col">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="s1_cmv_hygro" value="VMC Hygro A">
                  <label class="form-check-label" for="s1_cmv_hygro">VMC Hygro A </label>
                </div>
              </div>
              <div class="form-group col">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="s1_cmv_hygro" value="VMC Hygro B">
                  <label class="form-check-label" for="s1_cmv_hygro">VMC Hygro B </label>
                </div>
              </div>
            </div><!--form row end--->
          </div> <!--form group end--->
        </div><!--col lg 12 end--->
      </div><!--row end--->
    </div>

  </div>

  <hr color=' #54ba9e'>

  <div class="row">
    <div class="col-lg-2 align-self-center">
      <h4>Commentaires</h4>
    </div>
    <div class="col-lg-10">
      <textarea name="s1_comments" class="form-control" rows="4"><?php echo $step1_data->comments ?? ''; ?></textarea>
    </div>
  </div>
  <hr color=' #54ba9e'>

</form>
<div class="text-right">
  <button type="button" class="button-29 next" id="step1Submit">sauvegarder et suivant</button>
</div>