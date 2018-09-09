<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChild03Request;
use App\Http\Requests\UpdateChild03Request;
use App\Repositories\Child03Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Child03Controller extends AppBaseController
{
    /** @var  Child03Repository */
    private $child03Repository;

    public function __construct(Child03Repository $child03Repo)
    {
        $this->child03Repository = $child03Repo;
    }

    /**
     * Display a listing of the Child03.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->child03Repository->pushCriteria(new RequestCriteria($request));
        $child03s = $this->child03Repository->all();

        return view('child03s.index')
            ->with('child03s', $child03s);
    }

    /**
     * Show the form for creating a new Child03.
     *
     * @return Response
     */
    public function create()
    {
        return view('child03s.create');
    }

    /**
     * Store a newly created Child03 in storage.
     *
     * @param CreateChild03Request $request
     *
     * @return Response
     */
    public function store(CreateChild03Request $request)
    {
        $input = $request->all();

        $child03 = $this->child03Repository->create($input);

        Flash::success('Child03 saved successfully.');

        return redirect(route('child03s.index'));
    }

    /**
     * Display the specified Child03.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $child03 = $this->child03Repository->findWithoutFail($id);

        if (empty($child03)) {
            Flash::error('Child03 not found');

            return redirect(route('child03s.index'));
        }

        return view('child03s.show')->with('child03', $child03);
    }

    /**
     * Show the form for editing the specified Child03.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $child03 = $this->child03Repository->findWithoutFail($id);

        if (empty($child03)) {
            Flash::error('Child03 not found');

            return redirect(route('child03s.index'));
        }

        return view('child03s.edit')->with('child03', $child03);
    }

    /**
     * Update the specified Child03 in storage.
     *
     * @param  int              $id
     * @param UpdateChild03Request $request
     *
     * @return Response
     */
    public function update($id, UpdateChild03Request $request)
    {
        $child03 = $this->child03Repository->findWithoutFail($id);

        if (empty($child03)) {
            Flash::error('Child03 not found');

            return redirect(route('child03s.index'));
        }

        $child03 = $this->child03Repository->update($request->all(), $id);

        Flash::success('Child03 updated successfully.');

        return redirect(route('child03s.index'));
    }

    /**
     * Remove the specified Child03 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $child03 = $this->child03Repository->findWithoutFail($id);

        if (empty($child03)) {
            Flash::error('Child03 not found');

            return redirect(route('child03s.index'));
        }

        $this->child03Repository->delete($id);

        Flash::success('Child03 deleted successfully.');

        return redirect(route('child03s.index'));
    }
}
