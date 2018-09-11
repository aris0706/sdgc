<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChild02Request;
use App\Http\Requests\UpdateChild02Request;
use App\Repositories\Child02Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class Child02Controller extends AppBaseController
{
    /** @var  Child02Repository */
    private $child02Repository;

    public function __construct(Child02Repository $child02Repo)
    {
        $this->child02Repository = $child02Repo;
    }

    /**
     * Display a listing of the Child02.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->child02Repository->pushCriteria(new RequestCriteria($request));
        $child02s = $this->child02Repository->all();

        return view('child02s.index')
            ->with('child02s', $child02s);
    }

    /**
     * Show the form for creating a new Child02.
     *
     * @return Response
     */
    public function create()
    {
        $child01 = DB::table('child01')
        ->select('id','title')
        ->get();
        return view('child02s.create')
        ->with(['child01'=>$child01]);
 
    }

    /**
     * Store a newly created Child02 in storage.
     *
     * @param CreateChild02Request $request
     *
     * @return Response
     */
    public function store(CreateChild02Request $request)
    {
        $input = $request->all();

        $child02 = $this->child02Repository->create($input);

        Flash::success('Child02 saved successfully.');

        return redirect(route('child02s.index'));
    }

    /**
     * Display the specified Child02.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $child02 = $this->child02Repository->findWithoutFail($id);

        if (empty($child02)) {
            Flash::error('Child02 not found');

            return redirect(route('child02s.index'));
        }

        return view('child02s.show')->with('child02', $child02);
    }

    /**
     * Show the form for editing the specified Child02.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $child02 = $this->child02Repository->findWithoutFail($id);

        if (empty($child02)) {
            Flash::error('Child02 not found');

            return redirect(route('child02s.index'));
        }
        $child01 = DB::table('child01')
        ->select('id','title')
        ->get();
        return view('child02s.edit')->with(['child02'=>$child02,'child01'=>$child01]);
    }

    /**
     * Update the specified Child02 in storage.
     *
     * @param  int              $id
     * @param UpdateChild02Request $request
     *
     * @return Response
     */
    public function update($id, UpdateChild02Request $request)
    {
        $child02 = $this->child02Repository->findWithoutFail($id);

        if (empty($child02)) {
            Flash::error('Child02 not found');

            return redirect(route('child02s.index'));
        }

        $child02 = $this->child02Repository->update($request->all(), $id);

        Flash::success('Child02 updated successfully.');

        return redirect(route('child02s.index'));
    }

    /**
     * Remove the specified Child02 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $child02 = $this->child02Repository->findWithoutFail($id);

        if (empty($child02)) {
            Flash::error('Child02 not found');

            return redirect(route('child02s.index'));
        }

        $data = DB::table('child03')
            ->select('child03.title')
            ->where('child03.id','=',$id)
            ->get();

        if (count($data)>0) {
            Flash::error('data tidak bisa dihapus karna sudah ada');

            return redirect(route('child02s.index'));
        }else{

            $this->child02Repository->delete($id);

            Flash::success('Child02 deleted successfully.');

            return redirect(route('child02s.index'));
        }
    }
}
