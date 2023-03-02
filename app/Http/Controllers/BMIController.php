<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    function calculateBMI(){
        return view('BMI.calc');
    }

    function displayBMIResult(Request $request){
        $weight_kg = $request->weight;
        $height_cm = $request->height;
        $height_m2 = ($height_cm / 100) ** 2;
        $bmi_res = round($weight_kg / $height_m2, 2);

        if ($bmi_res < 17){
            $deductions = "severely underweight";
            $text_colour = "crimson";
        }
        elseif ($bmi_res > 17 && $bmi_res < 18.5){
            $deductions = "underweight";
            $text_colour = "goldenrod";
        }
        elseif ($bmi_res >= 18.5 && $bmi_res < 25){
            $deductions = "normal";
            $text_colour = "forestgreen";
        }
        elseif ($bmi_res >= 25 && $bmi_res < 30){
            $deductions = "overweight";
            $text_colour = "goldenrod";
        }
        else{
            $deductions = "obese";
            $text_colour = "firebrick";
        }

        return view('BMI.result', [
            'index' => $bmi_res,
            'bmi_value' => $deductions,
            'colour' => $text_colour
        ]);
    }
}
