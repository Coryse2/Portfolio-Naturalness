# Data dictionnary

## Recipe (`recipe`)
|Range|Type|Spécificities|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|id of this recipe|
|name|VARCHAR(255)|NOT NULL|name of the recipe|
|shelf_-_life|VARCHAR(64)|NOT NULL|shelf life of the recipe|
|explanation|TEXT| NULL|explanation |
|category_id|INT| NULL|name of category of the recipe|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|creation date of the recipe|
|updated_at|TIMESTAMP|NULL|date of the recipe last update|

## Category (`category`})
|Range|Type|Spécificities|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|id of this subject|
|name|VARCHAR(64)|NOT NULL|name of the category |
|text|VARCHAR(64)|NOT NULL|text of the category |
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|creation date of category|
|updated_at|TIMESTAMP|NULL|date of the category last update|

## Component (`component`)
|Range|Type|Spécificities|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|id of this component|
|name|VARCHAR(64)|NOT NULL|name of the component|
|recipe_id|INT|NOT NULL|id of related recipe|
|amount|INT|NOT NULL|amount of the component|
|comment|TINY TEXT| NULL|explanation or alternative  component|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|creation date of the component|
|updated_at|TIMESTAMP|NULL|date of the component last update|



## user (`user`)
|Range|Type|Spécificities|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|id of this user|
|username|VARCHAR(64)|NOT NULL|username of the user|
|email|VARCHAR(64)|NOT NULL|email of the user|
|password|VARCHAR(64)|NOT NULL|password of the user|
|status|VARCHAR(64)|NOT NULL|status of the user, user by default 0|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|creation date of the user|
|updated_at|TIMESTAMP|NULL|date of the user last update|

## material (`material`)
|Range|Type|Spécificities|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|id of this user|
|name|VARCHAR(64)|NOT NULL|username of the user|
|text|VARCHAR(255)|NOT NULL|text of the category |
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|creation date of the user|
|updated_at|TIMESTAMP|NULL|date of the user last update|





