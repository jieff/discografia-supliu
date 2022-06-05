<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Track;



class DiscographyController extends Controller
{


 

    /**
     * Ver lista de álbuns
     */
    public function index()
    {
        $albums = Album::get();
        
        return view('index', compact('albums'));
        
    }
    /**
     *  Ver detalhes do album, nome, ano, faixas e duração
     */

    public function show($id)
    {
        if(!$album = Album::find($id)){
            return redirect()->route('albums.index');
        }

        $album1 = Album::where('id', $id)->first();
        
        $tracks = $album1->tracks;

        return view('show', compact('album', 'tracks'));
    }

    /**
     * Pesquisa álbuns por nome 
     */
    public function search(Request $request)
    {
        if($request->name === null){
            return redirect()
                  ->route('albums.index')
                  ->with('message', 'Precisa informar palavra chave');
        }
        
        $search = Album::where('name', 'Like', '%'.$request->name.'%')->first();
          
        return view('searchAlbum', compact('search'));
    
    }

    /**
     * Adiciona um novo álbum 
     */
    public function albumStore(AlbumRequest $request)
    {
      
        Album::create($request->all());

        return redirect()->route('albums.index');
   
    }

    /**
     * Adiciona uma nova faixa em uma álbum
     */
    public function trackStore(Request $request)
    {
       
        $album = Album::where('name', $request->name )->first();
   
        $track = $album->track()->create();
    }
    /**
     *  Exclui uma faixa
     */
    public function trackDestroy($id)
    {
        if(!$track = Track::find($id)){
            return redirect()->route('albums.index');
        }
        
        $track->delete();

        return redirect()
                ->route('albums.index')
                ->with('message', 'Track Deletado com sucesso');

    }

    /**
     *  Exclui um álbum
     */
    public function albumDestroy($id)
    {
       if(!$album = Album::find($id)){
        return redirect()->route('albums.index');
       }
            

        $album->delete();

        return redirect()
                ->route('albums.index')
                ->with('message', 'Album Deletado com sucesso');
    }

    /**
     *  Chama a view cadastro de álbuns
     */
    public function albumCreate()
    {
        return view('albumCreate');
    }

     /**
     *  Chama a view cadastro de faixas
     */
    public function trackCreate()
    {
        $albums = Album::get();

        return view('trackCreate', compact('albums'));
    }
}