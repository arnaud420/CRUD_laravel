<?php


//page d'accueil
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

//route utilisateurs
Route::resource('users', 'UsersController');

//permet de retourner la page user commentaire en fonction de son id
Route::resource('users.commentaires', 'UserCommentairesController', array('parameters' => 'singulier'));

//route admin
Route::group(['middleware' => 'isAdmin', 'as' => 'admin'], function () {
    Route::get('admin', 'admin\AdminController@index');
    Route::resource('admin/users', 'admin\AdminUsersController');
    Route::resource('admin/commentaires', 'admin\AdminCommentairesController');
    Route::resource('admin/users.notes', 'admin\AdminNotesController');
    Route::resource('admin/avatars', 'admin\AdminAvatarsController');
});

//route de login
Route::get('login', ['uses' => 'LoginController@index', 'as' => 'login.index']);
Route::post('login', ['uses' => 'LoginController@connexion', 'as' => 'login.connexion']);
Route::get('logout', ['uses' => 'LoginController@deconnexion', 'as' => 'login.deconnexion']);

//route utilisant un midleware pour connaître son ip
Route::get('/ip', ['middleware' => 'Ip', function() {
    return '';
}]);

//route sitemap
Route::get('sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
    // by default cache is disabled
    $sitemap->setCache('laravel.sitemap', 60);

    // check if there is cached sitemap and build new only if is not
    if (!$sitemap->isCached())
    {
        // add item to the sitemap (url, date, priority, freq)
        $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
        $sitemap->add(URL::to('users'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');
        $sitemap->add(URL::to('login'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');
        $sitemap->add(URL::to('admin'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

        // get all posts from db
        $posts = DB::table('commentaires')->orderBy('created_at', 'desc')->get();

        // add every post to the sitemap
        foreach ($posts as $post)
        {
            $sitemap->add($post->auteur, $post->contenu, $post->created_at);
        }
    }

    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
    return $sitemap->render('xml');

});