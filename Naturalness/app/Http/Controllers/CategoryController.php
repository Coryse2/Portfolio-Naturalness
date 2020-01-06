<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
     /**
     * Show the category list
     */
    public function show()
    {
        $categories = Category::all();

        return view('category/categories', [
            'categories' => $categories, 
        ]);
    }

    /**
     * Show a category
     * 
     * @param int $id Category primary key
     */
    public function showById($id){

        $category= Category::find($id);

        if($category===null){
            abort(404, 'Catégorie non trouvée');
        }

        $recipe = $category->recipe;

        return view('category/showCategory',[
            'category'=>$category,
            'recipe'=> $recipe ,
        ]);

    }  
}

