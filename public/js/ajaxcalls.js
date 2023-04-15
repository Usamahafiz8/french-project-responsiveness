$(function () {
      
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
});

$('#step1Submit').click(function (e) {
    e.preventDefault();

        var s1_client_goals = [];
        var s1_heating_mode = [];

        
        var customerId = $('input[name="customerId"]').val();
        var s1_aud_name = $('input[name="s1_aud_name"]').val();
        var s1_aud_f_name = $('input[name="s1_aud_f_name"]').val();
        var s1_aud_visit_date = $('input[name="s1_aud_visit_date"]').val();
        var s1_aud_st_num = $('input[name="s1_aud_st_num"]').val();
        var s1_cus_name = $('input[name="s1_cus_name"]').val();
        var s1_cus_f_name = $('input[name="s1_cus_f_name"]').val();
        var s1_cus_phone = $('input[name="s1_cus_phone"]').val();
        var s1_cus_email = $('input[name="s1_cus_email"]').val();
        var s1_people_on_earth = $('input[name="s1_people_on_earth"]').val();
        var s1_tax_income = $('input[name="s1_tax_income"]').val();
        var s1_cons_date = $('input[name="s1_cons_date"]').val();
        var s1_altitude = $('input[name="s1_altitude"]').val();


        var s1_address = $('textarea[name="s1_address"]').val();
        var s1_accomodation = $('select[name="s1_accomodation"]').val();
        var s1_w_comfort_level = $('select[name="s1_w_comfort_level"]').val();
        var s1_s_comfort_level = $('select[name="s1_s_comfort_level"]').val();
        

        
        $('input[name="s1_client_goals"]:checked').each(function() {
            s1_client_goals.push($(this).val());
        });
        
        $('input[name="s1_heating_mode"]:checked').each(function() {
            s1_heating_mode.push($(this).val());
        });
        
        
        var isolationGesture = $('input[name="s1_isolation_gesture"]:checked').val();
        var isolationGestureValue = $('input[name="s1_isolation_ges_val"]').val();

        var lostAttics = $('input[name="s1_lost_attics"]:checked').val();
        var lostAtticsValue = $('input[name="s1_lost_attics_val"]').val();

        var lowfloor = $('input[name="s1_lowfloor"]:checked').val();
        var lowfloorValue = $('input[name="s1_lowfloor_value"]').val();

        var s1_crawlers = $('input[name="s1_crawlers"]:checked').val();
        var s1_crawlers_value = $('input[name="s1_crawlers_value"]').val();

        var s1_td_baloon = $('input[name="s1_td_baloon"]:checked').val();
        var s1_td_baloon_val = $('input[name="s1_td_baloon_val"]').val();

        var s1_water_heater = $('input[name="s1_water_heater"]:checked').val();
        var s1_water_heater_val = $('input[name="s1_water_heater_val"]').val();

        var s1_cmv_hygro = $('input[name="s1_cmv_hygro"]:checked').val();
        var s1_comments = $('textarea[name="s1_comments"]').val()
        
    
    $.ajax({
        
        data: {
            
            customerId: customerId,
            s1_aud_name: s1_aud_name,
            s1_aud_f_name: s1_aud_f_name,
            s1_aud_visit_date: s1_aud_visit_date,
            s1_aud_st_num: s1_aud_st_num,
            s1_cus_name: s1_cus_name,
            s1_cus_f_name: s1_cus_f_name,
            s1_cus_phone: s1_cus_phone,
            s1_cus_email: s1_cus_email,
            s1_people_on_earth: s1_people_on_earth,
            s1_tax_income: s1_tax_income,
            s1_cons_date: s1_cons_date,
            s1_altitude: s1_altitude,

            s1_address: s1_address,
            s1_accomodation: s1_accomodation,
            s1_w_comfort_level: s1_w_comfort_level,
            s1_s_comfort_level: s1_s_comfort_level,
            s1_client_goals: s1_client_goals,
            s1_heating_mode : s1_heating_mode,
            isolationGesture: isolationGesture,
            isolationGestureValue: isolationGestureValue,
            lostAttics: lostAttics,
            lostAtticsValue: lostAtticsValue,
            lowfloor: lowfloor,
            lowfloorValue: lowfloorValue,
            s1_crawlers: s1_crawlers,
            s1_crawlers_value: s1_crawlers_value,
            s1_td_baloon: s1_td_baloon,
            s1_td_baloon_val: s1_td_baloon_val,
            s1_water_heater: s1_water_heater,
            s1_water_heater_val: s1_water_heater_val,
            s1_cmv_hygro: s1_cmv_hygro,
            s1_comments: s1_comments,
        
    
        },

        url: "/save_step1",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});


$('#step2Submit').click(function (e) {
    e.preventDefault();

    var formData = new FormData();
    formData.append('customerId', $('input[name="customerId"]').val());
    formData.append('s2_low_floor_type', $('select[name="s2_low_floor_type"]').val());
    formData.append('s2_bigwork', $('select[name="s2_bigwork"]').val());
    formData.append('s2_lfg_insulation', $('select[name="s2_lfg_insulation"]').val());
    formData.append('s2_insulation_thick', $('input[name="s2_insulation_thick"]').val());
    formData.append('s2_crawlers_surface', $('input[name="s2_crawlers_surface"]').val());
    formData.append('s2_exterior_ceiling', $('input[name="s2_exterior_ceiling"]').val());
    formData.append('s2_attic_area', $('input[name="s2_attic_area"]:checked').val());
    formData.append('s2_attic_area_val', $('input[name="s2_attic_area_val"]').val());
    formData.append('s2_photo', $('input[name="s2_photo"]')[0].files[0]);
    formData.append('s2_hf_photo1', $('input[name="s2_hf_photo1"]')[0].files[0]);
    formData.append('s2_hf_photo2', $('input[name="s2_hf_photo2"]')[0].files[0]);
    formData.append('s2_comments', $('textarea[name="s2_comments"]').val());

    $.ajax({
        data: formData,
        url: "/save_step2",
        type: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('success:', data);
        },
        error: function (xhr, status, error) {
            console.log('Error:', error);
            console.log('Status:', status);
            console.log('Response:', xhr.responseJSON);
        }
    });
});


// $('#step2Submit').click(function (e) {
//     e.preventDefault();

//         var customerId = $('input[name="customerId"]').val();
//         var s2_low_floor_type = $('select[name="s2_low_floor_type"]').val();
//         var s2_bigwork = $('select[name="s2_bigwork"]').val();
//         var s2_lfg_insulation = $('select[name="s2_lfg_insulation"]').val();
//         var s2_insulation_thick = $('input[name="s2_insulation_thick"]').val();
//         var s2_crawlers_surface = $('input[name="s2_crawlers_surface"]').val();
//         var s2_exterior_ceiling = $('input[name="s2_exterior_ceiling"]').val();
//         var s2_attic_area = $('input[name="s2_attic_area"]:checked').val();     
//         var s2_attic_area_val = $('input[name="s2_attic_area_val"]').val();
//         var s2_photo = $('input[name="s2_photo"]')[0].files[0];
//         var s2_hf_photo1 = $('input[name="s2_hf_photo1"]')[0].files[0];
//         var s2_hf_photo2 = $('input[name="s2_hf_photo2"]')[0].files[0];
//         var s2_comments = $('input[name="s2_comments"]').val();
        
//     $.ajax({
        
//         data: { 
//             // formData : formData,           
//             customerId: customerId,
//             s2_low_floor_type: s2_low_floor_type,
//             s2_bigwork: s2_bigwork,
//             s2_lfg_insulation: s2_lfg_insulation,
//             s2_insulation_thick: s2_insulation_thick,
//             s2_crawlers_surface: s2_crawlers_surface,
//             s2_exterior_ceiling: s2_exterior_ceiling,
//             s2_attic_area: s2_attic_area,
//             s2_attic_area_val: s2_attic_area_val,
//             s2_photo: s2_photo,
//             s2_hf_photo1: s2_hf_photo1,
//             s2_hf_photo2: s2_hf_photo2,
//             s2_comments: s2_comments,
//         },

//         url: "/save_step2",
//         type: "POST",
//         dataType: 'json',
//         enctype: 'multipart/form-data',
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         processData: false,
//         contentType: false,
//         success: function (data) {
//             console.log('success:', data);
//         },
//         error: function (xhr, status, error) {
//             console.log('Error:', error);
//             console.log('Status:', status);
//             console.log('Response:', xhr.responseJSON);
//         }
//     });
// });


// var s1_altitude = $('input[name="s1_altitude"]').val();
    //select        
    // var s1_accomodation = $('select[name="s1_accomodation"]').val();
    //radio
    // var isolationGesture = $('input[name="s1_isolation_gesture"]:checked').val();     