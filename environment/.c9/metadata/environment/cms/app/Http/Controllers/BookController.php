{"filter":false,"title":"BookController.php","tooltip":"/cms/app/Http/Controllers/BookController.php","undoManager":{"mark":36,"position":36,"stack":[[{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"remove","lines":["/"],"id":39},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["r"],"id":40},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":["e"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"insert","lines":["t"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["u"]}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["r"],"id":41},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":[" "],"id":42},{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"insert","lines":["v"]},{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"insert","lines":["i"]}],[{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"insert","lines":["e"],"id":43},{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":["w"]}],[{"start":{"row":16,"column":19},"end":{"row":16,"column":21},"action":"insert","lines":["()"],"id":44}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["@"],"id":45}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"remove","lines":["@"],"id":46}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["@"],"id":47}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"remove","lines":["@"],"id":48}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["`"],"id":49}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"remove","lines":["`"],"id":50}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":22},"action":"insert","lines":["''"],"id":51}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"insert","lines":["b"],"id":52},{"start":{"row":16,"column":22},"end":{"row":16,"column":23},"action":"insert","lines":["o"]},{"start":{"row":16,"column":23},"end":{"row":16,"column":24},"action":"insert","lines":["o"]},{"start":{"row":16,"column":24},"end":{"row":16,"column":25},"action":"insert","lines":["k"]},{"start":{"row":16,"column":25},"end":{"row":16,"column":26},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"insert","lines":[";"],"id":53}],[{"start":{"row":5,"column":28},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":54},{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":14},"action":"insert","lines":["use Validator;"],"id":55}],[{"start":{"row":39,"column":9},"end":{"row":39,"column":10},"action":"remove","lines":["/"],"id":56},{"start":{"row":39,"column":8},"end":{"row":39,"column":9},"action":"remove","lines":["/"]},{"start":{"row":39,"column":4},"end":{"row":39,"column":8},"action":"remove","lines":["    "]},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":39,"column":0},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":57},{"start":{"row":40,"column":0},"end":{"row":41,"column":0},"action":"insert","lines":["",""]},{"start":{"row":41,"column":0},"end":{"row":42,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "],"id":58}],[{"start":{"row":39,"column":4},"end":{"row":39,"column":8},"action":"insert","lines":["    "],"id":59}],[{"start":{"row":39,"column":8},"end":{"row":68,"column":20},"action":"insert","lines":["   //** ↓ 下をコピー ↓ **","   ","      ","    //バリデーション","    $validator = Validator::make($request->all(), [","         'item_name' => 'required|min:3|max:255',","         'item_number' => 'required | min:1 | max:3',","         'item_amount' => 'required | max:6',","         'published'   => 'required',","    ]);","","    //バリデーション:エラー ","    if ($validator->fails()) {","        return redirect('/')","            ->withInput()","            ->withErrors($validator);","    }","    //以下に登録処理を記述（Eloquentモデル）","","  // Eloquentモデル","  $books = new Book;","  $books->item_name   = $request->item_name;","  $books->item_number = $request->item_number;","  $books->item_amount = $request->item_amount;","  $books->published   = $request->published;","  $books->save(); ","  return redirect('/');","  ","  ","   //** ↑ 上をコピー ↑ **"],"id":60}],[{"start":{"row":18,"column":8},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":61},{"start":{"row":19,"column":0},"end":{"row":19,"column":8},"action":"insert","lines":["        "]},{"start":{"row":19,"column":8},"end":{"row":20,"column":0},"action":"insert","lines":["",""]},{"start":{"row":20,"column":0},"end":{"row":20,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":19,"column":8},"end":{"row":23,"column":4},"action":"insert","lines":["    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    "],"id":62}],[{"start":{"row":19,"column":10},"end":{"row":19,"column":11},"action":"remove","lines":[" "],"id":63},{"start":{"row":19,"column":9},"end":{"row":19,"column":10},"action":"remove","lines":[" "]},{"start":{"row":19,"column":8},"end":{"row":19,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":19,"column":8},"end":{"row":19,"column":9},"action":"remove","lines":[" "],"id":64}],[{"start":{"row":20,"column":4},"end":{"row":20,"column":8},"action":"insert","lines":["    "],"id":65}],[{"start":{"row":20,"column":8},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":66},{"start":{"row":21,"column":0},"end":{"row":21,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":22,"column":4},"end":{"row":22,"column":8},"action":"remove","lines":["    "],"id":67},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"remove","lines":["    "]},{"start":{"row":21,"column":30},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"remove","lines":["    "],"id":68},{"start":{"row":21,"column":47},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":121,"column":6},"end":{"row":121,"column":10},"action":"remove","lines":["  //"],"id":69},{"start":{"row":121,"column":6},"end":{"row":122,"column":31},"action":"insert","lines":["    $book->delete();       //追加","    return redirect('/');  //追加"]}],[{"start":{"row":122,"column":4},"end":{"row":122,"column":8},"action":"insert","lines":["    "],"id":70}],[{"start":{"row":121,"column":9},"end":{"row":121,"column":10},"action":"remove","lines":[" "],"id":71},{"start":{"row":121,"column":8},"end":{"row":121,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":98,"column":8},"end":{"row":99,"column":52},"action":"insert","lines":["        //{books}id 値を取得 => Book $books id 値の1レコード取得","        return view('booksedit', ['book' => $book]);"],"id":72}],[{"start":{"row":98,"column":12},"end":{"row":98,"column":16},"action":"remove","lines":["    "],"id":73},{"start":{"row":98,"column":8},"end":{"row":98,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":99,"column":53},"end":{"row":99,"column":54},"action":"remove","lines":["/"],"id":74},{"start":{"row":99,"column":52},"end":{"row":99,"column":53},"action":"remove","lines":["/"]}],[{"start":{"row":111,"column":5},"end":{"row":111,"column":10},"action":"remove","lines":["   //"],"id":75},{"start":{"row":111,"column":5},"end":{"row":138,"column":8},"action":"insert","lines":[" //** ↓ 下をコピー ↓ **","","","        //バリデーション","         $validator = Validator::make($request->all(), [","             'id' => 'required',","             'item_name' => 'required|min:3|max:255',","             'item_number' => 'required|min:1|max:3',","             'item_amount' => 'required|max:6',","             'published' => 'required',","        ]);","        //バリデーション:エラー","         if ($validator->fails()) {","             return redirect('/booksedit/'.$request->id)","                 ->withInput()","                 ->withErrors($validator);","        }","        ","        //データ更新","        $books = Book::find($request->id);","        $books->item_name   = $request->item_name;","        $books->item_number = $request->item_number;","        $books->item_amount = $request->item_amount;","        $books->published   = $request->published;","        $books->save();","        return redirect('/');","        ","        "]}]]},"ace":{"folds":[],"scrolltop":1763.7999999999959,"scrollleft":0,"selection":{"start":{"row":138,"column":8},"end":{"row":138,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":109,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1692435344952,"hash":"8b8fd55b8831933df36ad446cd07492c880be0f8"}