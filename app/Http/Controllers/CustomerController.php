<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Step1;
use App\Models\Step2;

class CustomerController extends Controller
{
    public function customerdetails($id)
    {   
        $customer_data = Customer::find($id);
        $auditor_id = $customer_data->user_id;
        $user_data = User::where('id', $auditor_id)->get();

        $step1_data = Step1::where('customer_id', $id)->first();
        $step2_data = Step2::where('customer_id', $id)->first();
        
        return view('customerDetails',compact('customer_data', 'step1_data', 'step2_data'));
    }

    public function add_customer(Request $req)
    {
        $add_customer = new Customer();
        $add_customer->user_id = $req->user_id;
        $add_customer->name = $req->name;
        $add_customer->first_name = $req->first_name;
        $add_customer->email = $req->email;
        $add_customer->contact = $req->contact;
        $add_customer->address = $req->address;
        $add_customer->tax_income = $req->tax_income;
        $add_customer->people_on_hearth = $req->people_on_hearth;
        $add_customer->status = 1;
        $add_customer->save();  
        return redirect()->back()->with('success','Customer Created successfuly');
    }


    public function step1Store(Request $request)
    {   
        $customerId = $request->input('customerId');  
        $s1_aud_name = $request->input('s1_aud_name');  
        $s1_aud_f_name = $request->input('s1_aud_f_name');  
        $s1_aud_visit_date = $request->input('s1_aud_visit_date');  
        $s1_aud_st_num = $request->input('s1_aud_st_num');  
        $s1_cus_name = $request->input('s1_cus_name');  
        $s1_cus_f_name = $request->input('s1_cus_f_name');  
        $s1_cus_phone = $request->input('s1_cus_phone');  
        $s1_cus_email = $request->input('s1_cus_email');  
        $s1_people_on_earth = $request->input('s1_people_on_earth');  
        $s1_tax_income = $request->input('s1_tax_income');  
        $construction_date = $request->input('s1_cons_date');  
        $s1_altitude = $request->input('s1_altitude');  
        $s1_address = $request->input('s1_address');  
        $s1_accomodation = $request->input('s1_accomodation');  
        $s1_w_comfort_level = $request->input('s1_w_comfort_level');  
        $s1_s_comfort_level = $request->input('s1_s_comfort_level');  
        $s1_client_goals = $request->input('s1_client_goals');  
        $s1_heating_mode = $request->input('s1_heating_mode');  
        $isolationGesture = $request->input('isolationGesture');  
        $isolationGestureValue = $request->input('isolationGestureValue');  
        $lostAttics = $request->input('lostAttics');  
        $lostAtticsValue = $request->input('lostAtticsValue');  
        $lowfloor = $request->input('lowfloor');  
        $lowfloorValue = $request->input('lowfloorValue');  
        $s1_crawlers = $request->input('s1_crawlers');  
        $s1_crawlers_value = $request->input('s1_crawlers_value');  
        $s1_td_baloon = $request->input('s1_td_baloon');  
        $s1_td_baloon_val = $request->input('s1_td_baloon_val');  
        $waterheater_type = $request->input('s1_water_heater');  
        $s1_water_heater_val = $request->input('s1_water_heater_val');  
        $s1_cmv_hygro = $request->input('s1_cmv_hygro');  
        $s1_comments = $request->input('s1_comments');  
        

        $s1_client_goals_json = json_encode($s1_client_goals);
        $s1_heating_mode_json = json_encode($s1_heating_mode);

        $isolationGesture_json = json_encode($isolationGesture);
        $lostAttics_json = json_encode($lostAttics);
        $lowfloor_json = json_encode($lowfloor);
        $s1_crawlers_json = json_encode($s1_crawlers);
        $s1_td_baloon_json = json_encode($s1_td_baloon);
        $waterheater_type_json = json_encode($waterheater_type);
        $s1_cmv_hygro_json = json_encode($s1_cmv_hygro);
        
        
        if (Step1::where('customer_id', $customerId)->exists()) {

            $step1_query = Step1::where('customer_id', $customerId)->first();
            $step1_id = $auditor_id = $step1_query->id;
            $step1_update = Step1::find($step1_id);

            $step1_update->customer_id = $customerId;
            $step1_update->aud_f_name = $s1_aud_f_name;
            $step1_update->aud_visit_date = $s1_aud_visit_date;
            $step1_update->aud_statemnt_no = $s1_aud_st_num;
            $step1_update->people_in_hearth = $s1_people_on_earth;
            $step1_update->tax_income = $s1_tax_income;
            $step1_update->construction_date = $construction_date;
            $step1_update->altitude = $s1_altitude;
            $step1_update->occupancy_accomodation = $s1_accomodation;
            $step1_update->winter_comfortlevel = $s1_w_comfort_level;
            $step1_update->summer_comfortlevel = $s1_s_comfort_level;
            $step1_update->client_goals = $s1_client_goals_json;
            $step1_update->heatingmode_change = $s1_heating_mode_json;
            $step1_update->isolation_gesture_type = $isolationGesture_json;
            $step1_update->isolation_gesture_val = $isolationGestureValue;
            $step1_update->low_floor_type = $lowfloor_json;
            $step1_update->low_floor_val = $lowfloorValue;
            $step1_update->lost_attics_type = $lostAttics_json;
            $step1_update->lost_attics_val = $lostAtticsValue;
            $step1_update->crawlers_type = $s1_crawlers_json;
            $step1_update->crawlers_val = $s1_crawlers_value;
            $step1_update->tdynamic_baloon_type = $s1_td_baloon_json;
            $step1_update->tdynamic_baloon_val = $s1_td_baloon_val;
            $step1_update->waterheater_type = $waterheater_type_json;
            $step1_update->waterheater_val = $s1_water_heater_val;
            $step1_update->ventilation_sys_installation = $s1_cmv_hygro_json;
            $step1_update->comments = $s1_comments;
            $step1_update->update();  

            return response()->json(['success'=>'Data updated successfully.']);
        } else {
            $add_step1 = new Step1();

            $add_step1->customer_id = $customerId;
            $add_step1->aud_f_name = $s1_aud_f_name;
            $add_step1->aud_visit_date = $s1_aud_visit_date;
            $add_step1->aud_statemnt_no = $s1_aud_st_num;
            $add_step1->people_in_hearth = $s1_people_on_earth;
            $add_step1->tax_income = $s1_tax_income;
            $add_step1->construction_date = $construction_date;
            $add_step1->altitude = $s1_altitude;
            $add_step1->occupancy_accomodation = $s1_accomodation;
            $add_step1->winter_comfortlevel = $s1_w_comfort_level;
            $add_step1->summer_comfortlevel = $s1_s_comfort_level;
            $add_step1->client_goals = $s1_client_goals_json;
            $add_step1->heatingmode_change = $s1_heating_mode_json;
            $add_step1->isolation_gesture_type = $isolationGesture_json;
            $add_step1->isolation_gesture_val = $isolationGestureValue;
            $add_step1->low_floor_type = $lowfloor_json;
            $add_step1->low_floor_val = $lowfloorValue;
            $add_step1->lost_attics_type = $lostAttics_json;
            $add_step1->lost_attics_val = $lostAtticsValue;
            $add_step1->crawlers_type = $s1_crawlers_json;
            $add_step1->crawlers_val = $s1_crawlers_value;
            $add_step1->tdynamic_baloon_type = $s1_td_baloon_json;
            $add_step1->tdynamic_baloon_val = $s1_td_baloon_val;
            $add_step1->waterheater_type = $waterheater_type_json;
            $add_step1->waterheater_val = $s1_water_heater_val;
            $add_step1->ventilation_sys_installation = $s1_cmv_hygro_json;
            $add_step1->comments = $s1_comments;
            $add_step1->save();  
                        
            return response()->json(['success'=>'Data saved successfully.']);
        }
        
        
    }


    public function step2Store(Request $request)
    {   
        $customerId = $request->input('customerId');  
        $s2_low_floor_type = json_encode($request->input('s2_low_floor_type'));
        $s2_bigwork = json_encode($request->input('s2_bigwork'));
        $s2_lfg_insulation = json_encode($request->input('s2_lfg_insulation'));
        $s2_insulation_thick = $request->input('s2_insulation_thick');  
        $s2_crawlers_surface = $request->input('s2_crawlers_surface');  
        $s2_exterior_ceiling = $request->input('s2_exterior_ceiling');  
        $s2_attic_area = json_encode($request->input('s2_attic_area'));
        $s2_attic_area_val = $request->input('s2_attic_area_val');  
        $s2_photo = $request->file('s2_photo');  
        $s2_hf_photo1 = $request->file('s2_hf_photo1');  
        $s2_hf_photo2 = $request->file('s2_hf_photo2');  
        $s2_comments = $request->input('s2_comments');  
        
        if (Step2::where('customer_id', $customerId)->exists()) {
            $step2_query = Step2::where('customer_id', $customerId)->first();
            $step2_id = $step2_query->id;
            $step2_update = Step2::find($step2_id);
            $step2_update->customer_id = $customerId;
            $step2_update->low_floor_type = $s2_low_floor_type;
            $step2_update->bigwork = $s2_bigwork;
            $step2_update->lfg_insulation = $s2_lfg_insulation;
            $step2_update->insulation_thickness = $s2_insulation_thick;
            $step2_update->crawlers_surface = $s2_crawlers_surface;
            $step2_update->exterior_ceiling = $s2_exterior_ceiling;
            $step2_update->attic_area = $s2_attic_area;
            $step2_update->attic_area_val = $s2_attic_area_val;
            $step2_update->comments = $s2_comments;
            
            if ($s2_photo != null) {
                $s2_photo_name = time() . '_' . $s2_photo->getClientOriginalName();
                $s2_photo->move(public_path('images'), $s2_photo_name);
                $step2_update->photo = $s2_photo_name;
            }
            if ($s2_hf_photo1 != null) {
                $s2_hf_photo1_name = time() . '_' . $s2_hf_photo1->getClientOriginalName();
                $s2_hf_photo1->move(public_path('images'), $s2_hf_photo1_name);
                $step2_update->hf_photo1 = $s2_hf_photo1_name;
            }
            if ($s2_hf_photo2 != null) {
                $s2_hf_photo2_name = time() . '_' . $s2_hf_photo2->getClientOriginalName();
                $s2_hf_photo2->move(public_path('images'), $s2_hf_photo2_name);
                $step2_update->hf_photo2 = $s2_hf_photo2_name;
            }

            $step2_update->update();  
            return response()->json(['success'=>'Step2 updated successfully.']);
        } else {
            $add_step2 = new Step2();
            $add_step2->customer_id = $customerId;
            $add_step2->low_floor_type = $s2_low_floor_type;
            $add_step2->bigwork = $s2_bigwork;
            $add_step2->lfg_insulation = $s2_lfg_insulation;
            $add_step2->insulation_thickness = $s2_insulation_thick;
            $add_step2->crawlers_surface = $s2_crawlers_surface;
            $add_step2->exterior_ceiling = $s2_exterior_ceiling;
            $add_step2->attic_area = $s2_attic_area;
            $add_step2->attic_area_val = $s2_attic_area_val;
            $add_step2->comments = $s2_comments;
            if ($s2_photo != null) {
                $s2_photo_name = time() . '_' . $s2_photo->getClientOriginalName();
                $s2_photo->move(public_path('images'), $s2_photo_name);
                $add_step2->photo = $s2_photo_name;
            }
            if ($s2_hf_photo1 != null) {
                $s2_hf_photo1_name = time() . '_' . $s2_hf_photo1->getClientOriginalName();
                $s2_hf_photo1->move(public_path('images'), $s2_hf_photo1_name);
                $add_step2->hf_photo1 = $s2_hf_photo1_name;
            }
            if ($s2_hf_photo2 != null) {
                $s2_hf_photo2_name = time() . '_' . $s2_hf_photo2->getClientOriginalName();
                $s2_hf_photo2->move(public_path('images'), $s2_hf_photo2_name);
                $add_step2->hf_photo2 = $s2_hf_photo2_name;
            }
            $add_step2->save();  
            return response()->json(['success'=>'Step2 saved successfully.']);
        }
    }


    public function step3Store(Request $request)
    {   
        $customerId = $request->input('customerId');  
        $s1_comments = $request->input('s1_comments');  
        $s1_comments = json_encode($s1_comments);
        if (Step1::where('customer_id', $customerId)->exists()) {
            $step1_query = Step1::where('customer_id', $customerId)->first();
            $step1_id = $auditor_id = $step1_query->id;
            $step1_update = Step1::find($step1_id);
            $step1_update->customer_id = $customerId;
            $step1_update->update();  
            return response()->json(['success'=>'Data updated successfully.']);
        } else {
            $add_step1 = new Step1();
            $add_step1->customer_id = $customerId;
            $add_step1->save();  
            return response()->json(['success'=>'Data saved successfully.']);
        }
    }
}
