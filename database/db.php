<?php

//* creo le categorie
$categories = [
    'cat' => new Category('Cats', 'fa-solid fa-cat'),
    'dog' => new Category('Dogs',  'fa-solid fa-dog'),
  ];
  
  
  
  //* creo un array che contiene tutti i prodotti
  $products = [
  // Cibo per cani 1
  //* creo un nuovo oggetto (prodotto)
                              // title         price      image           category        weight  ingredients
  $dogCrunchyBites = new Food('Crunchy Bites', 43.99, 'img/img1.jpg', $categories['dog'], '545g', ['Ham', 'Rice']),
  
  // Cibo per cani 2
  $dogSalmonPeas = new Food('Salmon and Peas', 44.99, 'img/img2.webp', $categories['dog'], '600g', ['Salmon', 'Peas']),
  
  // Cibo per gatti
  $catChicken = new Food('Chicken for cats', 44.99, 'img/img3.jpg', $categories['cat'], '400g', ['Chicken']),
  
  // Kong classic
  $dogToy = new Toy('Kong classic, Dog toy', 13.49, 'img/img4.jpg', $categories['dog'], 'Floats and bounces', '8,5 cm x 10 cm'),
  
  // Topo di peluche
  $catPlushMouse = new Toy('Plush mouse, Cat toy', 4.99, 'img/img5.jpg', $categories['cat'], 'Soft with rope tail', '8,5 cm x 10 cm'),
  
  ];
  






?>