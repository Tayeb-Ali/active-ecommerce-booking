# update middleware:
> update AppServiceProvider::Class from
 ``` app\Providers\AppServiceProvider.php ```
  by update
  ``` ```
  //some call name space
  use Illuminate\Support\Facades\DB;

######


  public function boot(){
      // some code !!
       $middlewares = DB::table('middlewares')
            ->where('middleware_status', '=', 1)
            ->get();
        $router = app('router');
        foreach ($middlewares as $item) {
            $router->pushMiddlewareToGroup($item->middleware_group, $item->middleware_path . $item->middleware_name);
        } ```` ```
  }