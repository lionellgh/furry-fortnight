<?php

// app/NewsItem.php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use App\Models\Projet;



class NewsItem extends Projet implements Feedable
{
    public function toFeedItem() {

        return FeedItem::create([
            'id' => $this->id,
            'title' => $this->titre,
            'summary' => $this->text,
            'updated' => $this->created_at,
            'link' => route('projets.show', ['projet'=>$this->id]) ,
            'author' => $this->auteur
        ]);
    }

    public static function getFeedItems()
{
   return NewsItem::all();
}

}
