{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":3,"column":37},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":25},"action":"insert","lines":["use App\\Http\\Controllers\\BookController; //追加","use App\\Models\\Book; //追加"],"id":3}],[{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["",""]},{"start":{"row":24,"column":0},"end":{"row":25,"column":0},"action":"insert","lines":["",""]},{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["",""]},{"start":{"row":28,"column":0},"end":{"row":29,"column":0},"action":"insert","lines":["",""]},{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"insert","lines":["",""]},{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":1},"action":"insert","lines":["/"],"id":5},{"start":{"row":31,"column":1},"end":{"row":31,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":31,"column":2},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":23,"column":0},"end":{"row":38,"column":83},"action":"insert","lines":["//本：ダッシュボード表示(books.blade.php)","Route::get('/', [BookController::class,'index'])->middleware(['auth'])->name('book_index');","Route::get('/dashboard', [BookController::class,'index'])->middleware(['auth'])->name('dashboard');","","//本：追加 ","Route::post('/books',[BookController::class,\"store\"])->name('book_store');","","//本：削除 ","Route::delete('/book/{book}', [BookController::class,\"destroy\"])->name('book_destroy');","","//本：更新画面","Route::post('/booksedit/{book}',[BookController::class,\"edit\"])->name('book_edit'); //通常","Route::get('/booksedit/{book}', [BookController::class,\"edit\"])->name('edit');      //Validationエラーありの場合","","//本：更新画面","Route::post('/books/update',[BookController::class,\"update\"])->name('book_update');"],"id":7}],[{"start":{"row":19,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});",""],"id":8}],[{"start":{"row":36,"column":0},"end":{"row":37,"column":0},"action":"remove","lines":["",""],"id":9}]]},"ace":{"folds":[],"scrolltop":407.9999999999995,"scrollleft":0,"selection":{"start":{"row":36,"column":0},"end":{"row":36,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":107,"mode":"ace/mode/php"}},"timestamp":1692430018775,"hash":"7a657e233215541120b190d4c09333535945738a"}