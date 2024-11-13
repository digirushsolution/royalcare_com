<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Blog;

class SitemapController extends Controller
{
    /**
     * Generate the sitemap content as a string.
     *
     * @return string
     */
    protected function generateSitemapContent()
    {
        $blogs = Blog::latest()->get();
        
        // Start the sitemap content
        $sitemapContent = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemapContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        // Static URLs
        $sitemapContent .= '
        <url>
            <loc>https://royalcaretravels.com/</loc>
            <lastmod>2024-07-22T12:20:17+00:00</lastmod>
            <priority>1.00</priority>
        </url>
        <url>
            <loc>https://royalcaretravels.com/last-minute-flights-booking-deals</loc>
            <lastmod>2024-07-22T12:20:17+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc>https://royalcaretravels.com/cheap-hotels-booking</loc>
            <lastmod>2024-07-20T14:00:00+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>1.00</priority>
        </url>
        <url>
            <loc>https://royalcaretravels.com/cheap-car-rental-deals</loc>
            <lastmod>2024-07-22T12:20:17+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc>https://royalcaretravels.com/tour-and-travel-packages</loc>
            <lastmod>2024-07-22T12:20:17+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc>https://royalcaretravels.com/about</loc>
            <lastmod>2024-07-22T12:20:17+00:00</lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc>https://royalcaretravels.com/contact</loc>
            <lastmod>2024-07-22T12:20:17+00:00</lastmod>
            <priority>0.80</priority>
        </url>';

        // Dynamic URLs for blogs
        foreach ($blogs as $blog) {
            $sitemapContent .= '
            <url>
                <loc>' . url('/blog/' . $blog->slug) . '</loc>
                <lastmod>' . $blog->updated_at->toAtomString() . '</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>';
        }

        // Close the sitemap content
        $sitemapContent .= '</urlset>';

        return $sitemapContent;
    }

    /**
     * Update the sitemap file in the public directory.
     *
     * @return void
     */
    public function updateSitemap()
    {
        $sitemapContent = $this->generateSitemapContent();
        $filePath = public_path('sitemap.xml');
        File::put($filePath, $sitemapContent);
    }

    /**
     * Handle requests to view the sitemap XML.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filePath = public_path('sitemap.xml');

        if (!File::exists($filePath)) {
            // If the file does not exist, generate and save it
            $this->updateSitemap();
        }

        return response()->file($filePath, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
?>
