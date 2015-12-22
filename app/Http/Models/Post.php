<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['user_id', 'title', 'content', 'slug', 'status', 'pushlished_at'];

    protected $guarded = ['id', '_token'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function file()
    {
        return $this->hasMany('App\Model\File');
    }

    /*public static function getPostFromWebsite($htmlDom, $html)
    {
        $data = json_decode($html, TRUE);
        echo "<pre>";
        dd($data);
        echo "</pre>";exit;

        // Find all "A" tags and print their HREFs
        foreach($html->find('div.box_hot_news') as $e) {
            //get image
            $image = $e->find('img');
            $src = $image[0]->src;
            $title = $image[0]->alt;
            $shortContent = $e->find('div.news_lead');

            $linkContent = $e->find('a.txt_link');
            $contents = $htmlDom->file_get_html($linkContent[0]->href);
            foreach($contents->find('div.block_col_480>div.title_news') as $content) {
                dd($content);
            }
        }
    }*/
}
