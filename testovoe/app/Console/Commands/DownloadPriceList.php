<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DownloadPriceList extends Command
{
    protected $signature = 'app:download-price-list';

    protected $description = 'Download and save price list';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now = now();
        if ($now->isTuesday() || $now->isThursday()) {
            $response = Http::get('https://www.stavtrack.ru/files/price.pdf');
            Storage::disk('public')->put('price-stavtrack.pdf', $response);
            $this->info('Прайс лист загружен и сохранён.');
        }else{
            $this->info('Сегодня не Вторник или Четверг. Никаких действий не принимается');
        }
    }
}
