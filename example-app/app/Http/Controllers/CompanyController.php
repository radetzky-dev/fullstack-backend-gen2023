<?php

namespace App\Http\Controllers;

use App\Services\TransistorService;
use App\Models\Company;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Requests\StoreCompanyRequest;

class CompanyController extends Controller
{
    public function show()
    {
        return view('companies.welcome');
    }


    public function index()
    {
        $data['companies'] = Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', $data);
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('companies.create');
    }
    
    /**
     * edit
     *
     * @param  mixed $company
     * @return void
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }
    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(StoreCompanyRequest $request)
    {

        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('companies.index')
            ->with('success', 'La compagnia è stata creata con successo.');
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        try {
            $company = Company::findOrFail($id);
            $company->name = $request->name;
            $company->email = $request->email;
            $company->address = $request->address;
            $company->save();
            return redirect()->route('companies.index')
                ->with('success', 'Compagnia aggiornata con successo');
        } catch (Exception $e) {
            //TODO scrivo nel log l'errore
            return redirect()->route('companies.index')
                ->with('error', 'Compagnia NON aggiornata');
        }
    }

    
    /**
     * destroy
     *
     * @param  mixed $company
     * @return void
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')
            ->with('success', 'Company cancellata');
    }
}
