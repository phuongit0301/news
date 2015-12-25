<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tmdb\Helper\ImageHelper;
use Tmdb\Repository\MovieRepository;
use Tmdb\Laravel\Facades\Tmdb;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $movies;
    private $helper;

    function __construct(MovieRepository $movies, ImageHelper $helper)
    {
        parent::__construct();
        $this->movies = $movies;
        $this->helper = $helper;
    }

    public function index()
    {
        // returns information of a movie
        $movies = $this->movies->getPopular();
        foreach($movies as $movie) {
            $urlImagePoster = $this->helper->getUrl($movie->getPosterPath());
            $title = $movie->getOriginalTitle();
            $overview = $movie->getOverview();
            $originalLanguage = $movie->getOriginalLanguage();
            $genres = $movie->getGenres();
            $productCompanies = $movie->getProductionCompanies();
            $productCountries = $movie->getProductionCountries();
            $releaseDate = $movie->getReleaseDate();
            $runtime = $movie->getRuntime();
            $spokenLanguages = $movie->getSpokenLanguages();
            $status = $movie->getStatus();
            $tagLine = $movie->getTagline();
            $voteAverage = $movie->getVoteAverage();
            $voteCount = $movie->getVoteCount();
            $budget = $movie->getBudget();
            $keyWords = $movie->getKeywords();
            $similarMovies = $movie->getSimilarMovies();
            $videos = $movie->getVideos();
            $movieTrailers = $movie->getMovieTrailers();
            dd($movieTrailers);
            //$content = file_get_contents($urlImagePoster);
        }

        //Store in the filesystem.
        $local = config("images.uploads.webpath")."/abc.jpg";
        
        $fp = fopen($local, "w");
        fwrite($fp, $content);
        fclose($fp);
        //$image = $this->movies->getMovie(177677);
        print_r($image);
        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Tmdb::getMoviesApi()->getMovie($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
