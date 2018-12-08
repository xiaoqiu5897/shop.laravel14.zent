<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Product;
use Illuminate\Session\Store;

class ViewPostHandler
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function handle(Product $product)
    {
        if (!$this->isProductViewed($product))
        {
            $product->increment('view_count');
            $this->storeProduct($product);
        }
    }

    private function isProductViewed($product)
    {
        $viewed = $this->session->get('viewed_products', []);

        return array_key_exists($product->id, $viewed);
    }

    private function storeProduct($product)
    {
        $key = 'viewed_products.' . $product->id;

        $this->session->put($key, time());
    }





















}
