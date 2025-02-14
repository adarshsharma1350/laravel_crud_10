public function count()
    // {
    //     $userCount = User::count();
    //     $usermin = User::min('id');
    //     $usermax = User::max('id');
    //     return view('count', compact('usermin', 'usermax', 'userCount'));
    // }


     public function index()
    {
        $users = User::all();

        // return $users;
        // foreach ($users as $user) {
        //     echo $user->name . "<br>";
        // }

        // $users = User::find([23, 3, 4, 55, 22, 222, 123], ['name', 'email', 'password']);
        // $user = User::count();

        return view('home', compact('users'));
    }
