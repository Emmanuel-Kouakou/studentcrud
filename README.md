## CRUD LARAVEL

- Le fichier web.php présent dans route permet de définir les différents chemins de notre application.

- Processus :

   - Le client veut accéder à une page via un chemein ou route (web.php).

   - On fait parvenir la requête au controller qui fait des traitements ou encore va prendre les infos au niveau du modèle pour ramener à la vue.

   - blade : Moteur de template que laravel utilise pour les vues.

   - La fonction Compact de blade permet de renvoyer une valeur d'une route à une vue. Exemple : return view("nomVue", conpact('var')); ou return view('nomVue', ['test'=>$test]);

   - Route::get('/etudiants', [EtudiantController::class, 'listerEtudiant']);
