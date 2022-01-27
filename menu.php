
<?php
/*
    Recipe vegetable ragout
    2 - tablespoons vegetable oil
    2 - garlic cloves, minced
    2 - cups onions, chopped
    2 - medium carrots, sliced in 0.5 pieces
    4 - medium celery ribs, chopped
    1, 0.5 - cups cut green beans
    2 - bay leaves
    1 - pinch dried thyme
    1, 0.5 - cups dry red wine
    1, 0.5 - cups zucchini, sliced
    450 - gram sliced mushrooms
    2 - medium potatoes, cut into chunks

*/

    function cookAOvpshnoyRagu
    (int $vegetable_oil, 
    int $garlic, 
    int $onion, 
    int $carrot,
    int $celery, 
    float $beans, 
    float $bay_leaves, 
    int $dried_thyme,                    
    float $red_wine, 
    float $zucchini, 
    int $mushroom, 
    int $potatoe, 
    string $good_words)
            {
                echo 
                "1. Heat the $vegetable_oil oil in a heavy stew pot. Saute the $onion onions, $garlic garlic, $carrot carrots, $celery celery and
                $beans green beans for 3-4 minutes.<br>
                2. Add the $bay_leaves bay leaves, $dried_thyme thyme and $red_wine red wine and boil, uncovered for 3 minutes.<br>
                3. Reduce heat, cover, and simmer for 5 minutes.<br>
                4. Add the $zucchini zucchini and $mushroom mushrooms.<br>
                5. Combine the sauce ingredients and then stir the sauce into the vegetables.<br>
                6. Simmer about 30 minutes until the vegetables are tender.<br>
                7. While the vegetables are stewing, cook the $potatoe potatoes separately in salted boiling water until they are tender.<br>
                8. Drain and add them to the ragout a few minutes before serving.<br>
                $good_words";

                /*
                    People cook vegetable stew in different ways, we will cook in our own way.Heat the oil in a heavy stew pot. Saute the 
                    onions, garlic, carrots, celery and green beans for 3-4 minutes.Add the bay leaves, thyme and red wine and boil, uncovered 
                    for 3 minutes.Reduce heat, cover, and simmer for 5 minutes.Add the zucchini and mushrooms.Combine the sauce ingredients and 
                    then stir the sauce into the vegetables.Simmer about 30 minutes until the vegetables are tender.While the vegetables are 
                    stewing, cook the potatoes separately in salted boiling water until they are tender.Drain and add them to the ragout a few 
                    minutes before serving.
                    Bon appetit!)
                */

            }

    cookAOvpshnoyRagu(2, 2, 2, 2, 4, 1, 2, 1, 0.5, 1, 1, 2, 'Delicious')

        
/*
Ibra's code
Hodgepodge recipe:
3 Potatoes  
500g Meat (chicken thigh)
150g Sausages
4 Cucumbers 
2 Onions
*/
        
function cookAhodgepodge 
( int $potatoes, 
  float $meat, 
  float $sausages, 
  int $cucumbers, 
  int $onions, 
  string $horoshieslova )
{
    echo 
    "1) Prepare the ingredients. <br>
     2) Cut them all. <br>
     3) Boil them. <br>
     4) Prepare for serving. <br>
     5) Serve. <br>
     6) Eat. <br>
     $horoshieslova";
 
/*
We cook the broth from beef, add bay leaf and black pepper.
We cut the meat from the broth, sausages, sausage (or raw smoked sausage).
Finely chop the onions, cucumbers and parsley and simmer for 10 minutes with tomato paste.
We put the stew mixture in the broth and cook for no more than 10 minutes. 
Then add meat, sausages and sausage. Cook until the broth boils. 
Pour the olives into the hodgepodge along with the brine (the olives should be pitted).
 Bring to a boil and turn off immediately. Serve with a slice of lemon and sour cream.

*/
 
} 
cookAhodgepodge(3, 500, 150, 4, 2, 'Bon appetit!');
