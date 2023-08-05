<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class AddWatermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $article_image_id;

    public function __construct($article_image_id)
    {
                $this->article_image_id = $article_image_id;
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->article_image_id);

        if (!$i) {
            return;
        }
        
        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        $watermarkedImage =Image::load($srcPath)->watermark(base_path('public/img/blur.png'));
    }
}
