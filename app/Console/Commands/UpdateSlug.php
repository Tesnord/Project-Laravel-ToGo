<?php

namespace App\Console\Commands;

use App\Models\Brand;
use Illuminate\Console\Command;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class UpdateSlug extends Command
{

    protected $signature = 'togo:update:slug';
    protected $description = 'Update all slugs of all brands';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): void
    {
        $brands = Brand::all();
        $brands->each(function (Brand $brand) {
            $brand->slug_brand = SlugService::createSlug(Brand::class, 'slug_brand', $brand->name);
            $this->info('ID: ' . $brand->id . ' TITLE: ' . $brand->name . ' SLUG: ' . $brand->slug_brand);
            $brand->save();
        });

    }
}
