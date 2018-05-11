<?php
    namespace App\Http\ViewComposers;

    use App\Model\User;
    use Illuminate\Contracts\View\View;

    class RecentPostsComposer{

        private $users;

        public function __construct(User $user)
        {
            $this->posts = $user;
        }

        public function compose(View $view){
            $view->with('haha',"heihei");
        }
    }
