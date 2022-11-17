<?php

use Illuminate\Support\Str;


Route::namespace('Panel')
    ->middleware(['auth.panel', 'auth', 'verified'])
    ->prefix('panel')
    ->group(function ($panel) {

        $panel->get('/', 'DashboardController@dashboard')->name("dashboard");
        $panel->get('/iframe', 'DashboardController@iframe')->name("iframe");
        $panel->get('/videos', 'DashboardController@videos')->name("videos");


        /* panel/profile */
        $panel->put('profile', 'AdministratorController@profileUpdate')->name('administrators.profileUpdate');
        $panel->get('profile', 'AdministratorController@profile')->name('administrators.profile');


        /* panel/users */
        $panel->put('administrators/image', 'AdministratorController@updateImageCrop')->name('administrators.updateImageCrop');
        $panel->get('administrators/crop/{id}', 'AdministratorController@imageCrop')->name('administrators.imageCrop');
        $panel->resource('administrators', AdministratorController::class);

        $panel->get('administrators/{user}/profiles', 'ProfileController@index')->name('administrators.profiles');
        $panel->post('administrators/{user}/profile/add', 'ProfileController@store')->name('administrators.profile.add');
        $panel->delete('administrators/{user}/profile/{profile}/remove', 'ProfileController@destroy')->name('administrators.profile.remove');
        $panel->post('administrators/profile/{profile}/toggle', 'ProfileController@toggleActive')->name('administrators.profile.toggleActive');


        /* panel/types */
        $panel->resource('types', TypeController::class);

        /* panel/cities */
        $panel->any('cities/find', 'CityController@find')->name('cities.find');


    /* panel/clients */
        $panel->get('clients/download/{client}', 'ClientController@download')->name('clients.download');
        $panel->get('clients/leads', 'ClientController@leads')->name('clients.leads');
        $panel->resource('clients', ClientController::class);

    /* panel/planos */
        $panel->resource('planos', PlanoController::class);

        # rotas para panel

        /*
         * Rotas de relatórios
         * */

        /*
         * Rotas de crop de imagens
         * */
    });

Route::get('panel/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('panel.logout');

Route::group(['prefix' => 'editor', 'as' => 'editor.', 'middleware' => ['auth']], function () {

    Route::post('upload-images', function () {
        $imageTypes = ['image/gif', 'image/jpeg', 'image/pjpeg', 'image/jpeg', 'image/jpg', 'image/png', 'image/x-png']; // Image types.
        $allowedExts = ['gif', 'jpeg', 'jpg', 'png', 'bmp']; // Allowed extentions.

        $fileData = request()->file('file');

        // Retorna mime type do arquivo (Exemplo image/png)
        $mimeType = $fileData->getMimeType();

        // Retorna o nome original do arquivo
        $originalName = $fileData->getClientOriginalName();

        // Extensão do arquivo
        $extension = $fileData->getClientOriginalExtension();
        //dd($mimeType, $originalName, $extension);

        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = Str::slug(str_replace('.' . $extension, '', $originalName)) . '_' . uniqid(date('HisYmd'));

        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";

        $destinationPath = 'uploads/editor/images/';

        if (in_array($mimeType, $imageTypes) && in_array(strtolower($extension), $allowedExts)) {

            $fileData->move($destinationPath, $nameFile);

            $completePath = url('/' . $destinationPath . $nameFile);
            //$completePath = '//' . $destinationPath . $nameFile;

            return stripslashes(response()->json(['link' => $completePath])->content());
        }
    });

    Route::post('upload-files', function () {

        $fileData = request()->file('file');

        // Retorna mime type do arquivo (Exemplo image/png)
        $mimeType = $fileData->getMimeType();

        // Retorna o nome original do arquivo
        $originalName = $fileData->getClientOriginalName();

        // Extensão do arquivo
        $extension = $fileData->getClientOriginalExtension();
        //dd($mimeType, $originalName, $extension);

        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = Str::slug(str_replace('.' . $extension, '', $originalName)) . '_' . uniqid(date('HisYmd'));

        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";

        $destinationPath = 'uploads/editor/files/';

        $fileData->move($destinationPath, $nameFile);

        $completePath = url('/' . $destinationPath . $nameFile);
        //$completePath = '//' . $destinationPath . $nameFile;

        return stripslashes(response()->json(['link' => $completePath])->content());
        exit;

    });

    Route::get('list-images', function () {
        $response = []; // Array of image objects to return.
        $image_types = ['image/gif', 'image/jpeg', 'image/pjpeg', 'image/jpeg', 'image/jpg', 'image/png', 'image/x-png']; // Image types.
        $fnames = scandir($_SERVER['DOCUMENT_ROOT'] . '/uploads/editor/'); // Filenames in the uploads folder.
        if ($fnames) { // Check if folder exists.
            arsort($fnames);
            foreach ($fnames as $name) { // Go through all the filenames in the folder.
                if (!is_dir($name)) { // Filename must not be a folder.
                    if (in_array(mime_content_type(getcwd() . '/uploads/editor/' . $name), $image_types)) { // Check if file is an image.
                        // Build the image.
                        $img = new StdClass;
                        $img->url = '/uploads/editor/' . $name;
                        $img->thumb = '/uploads/editor/' . $name;
                        $img->name = $name;
                        array_push($response, $img); // Add to the array of image.
                    }
                }
            }
        } else {
            $response = new StdClass;
            $response->error = 'Images folder does not exist!';
        }
        $response = json_encode($response);

        echo stripslashes($response); // Send response.
    });

    Route::post('delete-images', function () {
        $src = (isset($_POST['src']) ? $_POST['src'] : '');
        if (file_exists(getcwd() . $src) && !empty($src))
            unlink(getcwd() . $src);
    });
});

Route::prefix('files/archives')
    ->group(function ($files) {
        $files->get('{filename}', function ($filename) {
            $filename = 'files/archives/' . $filename;
            $file = Storage::get($filename);
            $mimetype = Storage::mimeType($filename);

            return Response::make($file, 200, [
                'Content-Type' => $mimetype,
            ]);
        });
    });
