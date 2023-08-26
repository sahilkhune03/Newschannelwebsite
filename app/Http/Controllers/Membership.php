<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\membership_table;

class Membership extends Controller
{
    function HomeIndex()
    {
        return view('layouts.membership');


    }





    function DataInsert(Request $request)
    {

        $name = $request->input('name');
        $address = $request->input('address');
        $city = $request->input('city');
        $state = $request->input('state');
        $promoter = $request->input('promoter');
        $date = $request->input('date');
        $validity_date = $request->input('validity_date');
        $to_validity_date = $request->input('to_validity_date');
        $mob = $request->input('mob');
        $dob = $request->input('dob');
        $email = $request->input('email');
        $profile = $request->input('profile');
        $payment = $request->input('payment');


        // File Upload: Profile
        if ($request->hasFile('profile')) {
            $profileFile = $request->file('profile');
            $profileFilename = time() . '.' . $profileFile->getClientOriginalExtension();
            $profilePath = public_path('profile');
            $profileFile->move($profilePath, $profileFilename);
            // Save the filename, not the $profile object
            $profile = $profileFilename;
        }

        // File Upload: Payment
        if ($request->hasFile('payment')) {
            $paymentFile = $request->file('payment');
            $paymentFilename = time() . '.' . $paymentFile->getClientOriginalExtension();
            $paymentPath = public_path('payment');
            $paymentFile->move($paymentPath, $paymentFilename);
            // Save the filename, not the $payment object
            $payment = $paymentFilename;
        }




        $isInsertSuccess = membership_table::insert([
            'name' => $name,

            'address' => $address,
            'city' => $city,
            'state' => $state,
            'promoter' => $promoter,
            'date' => $date,
            'validity_date' => $validity_date,
            'to_validity_date' => $to_validity_date,
            'mob' => $mob,
            'dob' => $dob,
            'email' => $email,
            'profile' => $profile,
            'payment' => $payment,


        ]);
        if ($isInsertSuccess)
            echo '<h2>Insert Successfull</h2>';
        else
            echo '<h1>Insert Failed</h1>';





    }
}