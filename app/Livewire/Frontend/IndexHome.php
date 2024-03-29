<?php

namespace App\Livewire\Frontend;

use App\Models\Setting;
use Illuminate\Support\Facades\URL;
use Spatie\SchemaOrg\Schema;
use Livewire\Component;

class IndexHome extends Component
{
    public function render()
    {
        $settings = Setting::first();
        //SEO
        seo()
            ->title($title = $settings->title.' '.config('app.name'))
            ->description($description = $settings->meta_description)
            ->canonical($url = URL::current())
            ->addSchema(
                Schema::webPage()
                    ->name($title)
                    ->description($description)
                    ->url($url)
                    ->author(Schema::organization()->name($title))
            );
        return view('livewire.frontend.index-home',
            [



            ])->extends('layouts.main-layout',
            [

                'settings' => $settings,
                'title' => $title,
            ]);

    }
}
