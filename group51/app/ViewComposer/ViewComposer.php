<?php

namespace App\ViewComposer;

use App\Repositories\UserRepository;
use Illuminate\View\View;

class ViewComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with(['webName' => 'ahmedfgdfgdd' , 'ty' => 767845]);
    }
}
