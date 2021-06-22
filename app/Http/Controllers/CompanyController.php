<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

    public function index()
    {
        $descProfile = Company::find(1);
        return view('admin/manage-profile', ['descProfile' => $descProfile]);
    }

    public function edit()
    {
        $descProfile = Company::find(1);
        return view('admin/update-profile', compact('descProfile'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Company::where('id', 1)
            ->update([
                'description_company' => $request->descProfile
            ]);
            return redirect('admin/manage-profile');
    }

}
