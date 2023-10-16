<?php

namespace App\ViewComposer;

use App\Repositories\UserRepository;
use Illuminate\View\View;

class HeaderComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct() {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with(['myusername' => 'ziad' , 'mobile' => 215548552]);
    }
}
