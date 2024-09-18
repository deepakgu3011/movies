<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Response;


class SitemapController extends Controller
{
     public function index()
    {
        $urls = [
            [
                'loc' => url('/'),
                'lastmod' => now()->toDateString(),
                'changefreq' => 'daily',
                'priority' => '1.0'
            ],
            [
                'loc' => url('/aboutus'),
                'lastmod' => now()->toDateString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => url('/contact'),
                'lastmod' => now()->toDateString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => url('/policy'),
                'lastmod' => now()->toDateString(),
                'changefreq' => 'yearly',
                'priority' => '0.5'
            ],
            [
                'loc' => url('/sitemap'),
                'lastmod' => now()->toDateString(),
                'changefreq' => 'yearly',
                'priority' => '0.5'
            ]
        ];

        $xml = new \SimpleXMLElement('<urlset/>');
        $xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        foreach ($urls as $url) {
            $urlElement = $xml->addChild('url');
            $urlElement->addChild('loc', $url['loc']);
            // $urlElement->addChild('lastmod', $url['lastmod']);
            // $urlElement->addChild('changefreq', $url['changefreq']);
            // $urlElement->addChild('priority', $url['priority']);
        }

        return Response::make($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }
}