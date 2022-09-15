<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateauthorRequest;
use App\Http\Requests\UpdateauthorRequest;
use App\Repositories\authorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class authorController extends AppBaseController
{
    /** @var authorRepository $authorRepository*/
    private $authorRepository;

    public function __construct(authorRepository $authorRepo)
    {
        $this->authorRepository = $authorRepo;
    }

    /**
     * Display a listing of the author.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $authors = $this->authorRepository->all();

        return view('authors.index')
            ->with('authors', $authors);
    }

    /**
     * Show the form for creating a new author.
     *
     * @return Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created author in storage.
     *
     * @param CreateauthorRequest $request
     *
     * @return Response
     */
    public function store(CreateauthorRequest $request)
    {
        $input = $request->all();

        $author = $this->authorRepository->create($input);

        Flash::success('Author saved successfully.');

        return redirect(route('authors.index'));
    }

    /**
     * Display the specified author.
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
     * Show the form for editing the specified author.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $author = $this->authorRepository->find($id);

        if (empty($author)) {
            Flash::error('Author not found');

            return redirect(route('authors.index'));
        }

        return view('authors.edit')->with('author', $author);
    }

    /**
     * Update the specified author in storage.
     *
     * @param int $id
     * @param UpdateauthorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateauthorRequest $request)
    {
        $author = $this->authorRepository->find($id);

        if (empty($author)) {
            Flash::error('Author not found');

            return redirect(route('authors.index'));
        }

        $author = $this->authorRepository->update($request->all(), $id);

        Flash::success('Author updated successfully.');

        return redirect(route('authors.index'));
    }

    /**
     * Remove the specified author from storage.
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
            Flash::error('Author not found');

            return redirect(route('authors.index'));
        }

        $this->authorRepository->delete($id);

        Flash::success('Author deleted successfully.');

        return redirect(route('authors.index'));
    }
}
