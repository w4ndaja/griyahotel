<?php


namespace App\Traits;

use App\Models\View;

trait Viewable
{
    public function view()
    {
        return $this->morphOne(View::class, 'viewable');
    }

    public function addOneView()
    {
        return $this->view()->create(['times' => 1]);
    }

    public function addViewCount()
    {
        return $this->view()->increment('times');
    }

    public function anyView()
    {
        return $this->view()->exists() ? true : false;
    }

    public function getViewsAttribute()
    {
        return $this->view['times'];
    }
}
