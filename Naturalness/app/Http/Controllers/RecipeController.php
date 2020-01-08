<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class RecipeController extends Controller
{


    public function show()
    {

        $recipes = Recipe::all();

        return view('recipe/recipes', [
            'recipes' => $recipes,
        ]);
    }

    /**
     * Show a recipe
     *
     * @param int $id Recipe primary key
     */
    public function showById($id)
    {

        //get the recipe
        $recipe = Recipe::find($id);

        if ($recipe === null) {
            abort(404, 'Recette non trouvée');
        }

        //get the components and categories
        $components = $recipe->components;
        $category = $recipe->category;


        return view('recipe/showRecipe', [
            'recipe' => $recipe,
            'components' => $components,
            'category' => $category,
            // dump($category)
        ]);
    }

    public function recipePdf($id)
    {
        $recipe = Recipe::find($id);
        //get components and categories
        $components = $recipe->components;
        $category = $recipe->category;


        $pdf = PDF::loadView('recipe/recipepdf', compact('recipe', 'components', 'category'));
        $name = "Naturalness-recette-" . $recipe->title . ".pdf";
        return $pdf->download($name);
        return redirect()->route('recipe/showRecipe');
    }
}
