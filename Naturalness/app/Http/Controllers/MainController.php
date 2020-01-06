<?php

namespace App\Http\Controllers;

use App\Models\Reason;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\Material;
use App\Models\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function home()
    {
        $categoryList = Category::all();
        $reasonList = Reason::all();

        return view('home', [
            'categoryList' => $categoryList,
            'reasonList' => $reasonList,
        ]);
    }


    /**
     * Traitement de la recherche : Aller chercher dans la Bdd les mots correspondant à la query
     */

    // Récupération de l'objet $request de type Request
    public function search(Request $request)
    {
        //récupération de la query q
        $q = $request->input('q');

        //Récupération des résultats
        $collection = collect([
            $recipes = Recipe::where('name', 'like', '%' . $q . '%')->orWhere('explanation', 'like', '%' . $q . '%')->get(),
            $categories = Category::where('name', 'like', '%' . $q . '%')->orWhere('text', 'like', '%' . $q . '%')->get(),
            $components = Component::where('name', 'like', '%' . $q . '%')->orWhere('comment', 'like', '%' . $q . '%')->get(),
            $materials = Material::where('name', 'like', '%' . $q . '%')->orWhere('text', 'like', '%' . $q . '%')->get(),
        ]);

        //dump($collection);
        //try to count number of response keyed , to show the number of answer in the view

        //For next time : use collection in the view , need a loop on collection
        //tried but pb with the $v->id  : I only see 1 value in the view event if there are more
        // keyBy seemed to be a good idea by it didn't really helped to count the real number of answers
        foreach ($collection as $key => $value) {
             // foreach ($value as $i => $v){
            //  var_export($v->id);
            //give me a good result , but I am not able to give it to the view -> need to fix this
            //To have less code in the template (use serialize?? )
            //  var_export($v->name);
            //}
        };

        $collection = count($value);
        return view('search', [
            'recipes' => $recipes,
            'components' => $components,
            'materials' => $materials,
            'collection' => $collection,
            'q' => $q
        ]);
    }


    public function material()
    {
        $materialList = Material::orderBy('name', 'ASC')->get();

        return view('material', [
            'materialList' => $materialList,
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact.contact');
    }
}
