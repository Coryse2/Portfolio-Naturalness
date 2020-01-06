<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';


    /**
     * Recipes
     * Récupérer la liste des recettes par catégorie
     */
    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe', 'category_id');
    }
  
}