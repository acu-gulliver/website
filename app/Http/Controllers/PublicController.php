<?php

namespace App\Http\Controllers;

use App\Model\GalleryMedia;
use App\Post;
use Corcel\Model\Post as WP_Post;
use Corcel\Model\Taxonomy;
use Illuminate\Http\Request;
use Thunder\Shortcode\Parser\WordpressParser;

class PublicController extends Controller
{
    /**
     *
     * Mostra i post dell'home page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('welcome', [
            'primaPagina' => WP_Post::published()->taxonomy('category', "primapagina")->orderBy('ID', 'DESC')->take(1)->get(),
            'posts' => WP_Post::published()->where('post_type', 'post')->orderBy('ID', 'DESC')->skip(1)->take(3)->with('taxonomies')->get(),
            'categories' => Taxonomy::where('taxonomy', 'category')->get()
        ]);
    }

    /**
     * Mostra tutti i post per una categoria
     * @param $category string categoria cercata
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCategory($category)
    {
        return view('category', [
            "posts" => WP_Post::published()->taxonomy('category', $category)->orderBy('ID', 'DESC')->with('taxonomies')->paginate(24),
            'current_category' => $category
        ]);
    }

    /**
     * Mostra la pagina per la gallery
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function gallery()
    {
        $media = GalleryMedia::orderBy('meta_id', 'DESC')->get();
        $path = $media->reject(function ($item) {
            $ext = substr($item->meta_value, -3);
            if ($ext !== "jpg" && $ext !== "png")
                return $item;
        })
            ->map(function ($media) {
                return $media->meta_value;
            });
        //return response()->json($path, 200);
        return view('gallery', [
            "media" => $path
        ]);
    }

    /**
     * Mostra un singolo post
     * @param $category string categoria cercata
     * @param $post string slug del post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPost($category, $post)
    {
        $postID = Post::where('post_name', $post)->get()->first()->ID;
        $postData = WP_Post::find($postID);
        $postData->setShortcodeParser(new WordpressParser());
        return view('post', [
            "post" => $postData,
            "category" => $category,
        ]);
    }

    /**
     * Mappa tutti i media e restituisce soltanto i path delle immagini
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMedia()
    {
        $media = GalleryMedia::orderBy('meta_id', 'DESC')->get();
        $path = $media->reject(function ($item) {
            $ext = substr($item->meta_value, -3);
            if ($ext !== "jpg" && $ext !== "png")
                return $item;
        })
            ->map(function ($media) {
                return $media->meta_value;
            });
        return response()->json($path, 200);
    }

    public function ricerca(Request $request)
    {

        if ($request->has("search")) {
            $search = "%$request->search%";
            return view('category', [
                "posts" => WP_Post::published()->where('post_type', 'post')->where('post_title', 'LIKE', $search)->orderBy('ID', 'DESC')->with('taxonomies')->paginate(24),

                'current_category' => $request->search
            ]);
        }
        echo "NO PARAMS";
        return response()->json($request);

    }

}
