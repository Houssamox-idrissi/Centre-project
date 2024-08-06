<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function index()
    {
       
    }

    public function add(Request $request)
    {
        $request->validate([
            'nom_complete' => 'required|max:255|string|unique:etudiants,nom_complete',
            'branche' => 'required|string|max:255',
            'matier' => 'required|string|max:255',
            'niveau_etude' => 'required|string|max:255',
            'duree' => 'required|numeric',
            'prix' => 'required|numeric',
            'age' => 'required|integer',
        ]);

        Etudiant::create($request->all());
        return redirect()->route('')->with('success', 'Etudiant ajouté avec succès');
    }
    public function delete(Etudiant $id){

        $id->delete();
        return redirect()->route('')->with('succes','Etudiant deleted successfully');
        }
        public function update(Etudiant $id , Request $request){
      $request->validate([
        'nom_complete' => 'required|max:255|string|unique:etudiants,nom_complete',
        'branche' => 'required|string|max:255',
        'matier' => 'required|string|max:255',
        'niveau_etude' => 'required|string|max:255',
        'duree' => 'required|numeric',
        'prix' => 'required|numeric',
        'age' => 'required|integer',
      ]);
      Etudiant::where('id',$id)->update($request->all());
        }
}
