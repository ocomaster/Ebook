<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Repositories\AuthorRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Author;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class AuthorController extends AppBaseController
{
    /** @var  AuthorRepository */
    private $authorRepository;

    public function __construct(AuthorRepository $authorRepo)
    {
        $this->authorRepository = $authorRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Author.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $bio = $request->get('bio');

        $authors = $this->authorRepository->all();
        $authors = Author::orderBy('id','DESC')->name($name)->bio($bio)->paginate(4);

        return view('authors.index')
            ->with('authors', $authors);
    }

    /**
     * Show the form for creating a new Author.
     *
     * @return Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created Author in storage.
     *
     * @param CreateAuthorRequest $request
     *
     * @return Response
     */
    public function store(CreateAuthorRequest $request)
    {
        $input = $request->all();

        $author = $this->authorRepository->create($input);

        if($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $author->fill(['image' => asset($path)])->save();
        }

        Flash::success('Autor guardado con éxito.');

        return redirect(route('authors.index'));
    }

    /**
     * Display the specified Author.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $author = $this->authorRepository->find($id);

        if (empty($author)) {
            Flash::error('Author not found');

            return redirect(route('authors.index'));
        }

        return view('authors.show')->with('author', $author);
    }

    /**
     * Show the form for editing the specified Author.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $author = $this->authorRepository->find($id);

        if (empty($author)) {
            Flash::error('Autor no encontrado');

            return redirect(route('authors.index'));
        }

        return view('authors.edit')->with('author', $author);
    }

    /**
     * Update the specified Author in storage.
     *
     * @param int $id
     * @param UpdateAuthorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAuthorRequest $request)
    {
        $author = $this->authorRepository->find($id);

        if (empty($author)) {
            Flash::error('Autor no encontrado');

            return redirect(route('authors.index'));
        }

        $author = $this->authorRepository->update($request->all(), $id);

        if($request->file('image')){
            $path = Storage::disk('public')->put('photos',$request->file('image'));
            $author->fill(['image' => asset($path)])->save();
        } 

        Flash::success('Autor actualizado con éxito.');

        return redirect(route('authors.index'));
    }

    /**
     * Remove the specified Author from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $author = $this->authorRepository->find($id);

        if (empty($author)) {
            Flash::error('Autor no encontrado');

            return redirect(route('authors.index'));
        }

        $this->authorRepository->delete($id);

        Flash::success('Autor eliminado con éxito.');

        return redirect(route('authors.index'));
    }
}
