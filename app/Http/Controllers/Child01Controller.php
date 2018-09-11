<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChild01Request;
use App\Http\Requests\UpdateChild01Request;
use App\Repositories\Child01Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class Child01Controller extends AppBaseController
{
    /** @var  Child01Repository */
    private $child01Repository;

    public function __construct(Child01Repository $child01Repo)
    {
        $this->child01Repository = $child01Repo;
    }

    /**
     * Display a listing of the Child01.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->child01Repository->pushCriteria(new RequestCriteria($request));
        $child01s = $this->child01Repository->all();

        return view('child01s.index')
            ->with('child01s', $child01s);
    }

    /**
     * Show the form for creating a new Child01.
     *
     * @return Response
     */
    public function create()
    {
        $list1 = DB::table('list1')
        ->select('id','title')
        ->get();
        return view('child01s.create')
        ->with(['list1'=>$list1]);
    }

    /**
     * Store a newly created Child01 in storage.
     *
     * @param CreateChild01Request $request
     *
     * @return Response
     */
    public function store(CreateChild01Request $request)
    {
        $input = $request->all();

        $child01 = $this->child01Repository->create($input);

        Flash::success('Child01 saved successfully.');

        return redirect(route('child01s.index'));
    }

    /**
     * Display the specified Child01.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $child01 = $this->child01Repository->findWithoutFail($id);

        if (empty($child01)) {
            Flash::error('Child01 not found');

            return redirect(route('child01s.index'));
        }

        return view('child01s.show')->with('child01', $child01);
    }

    /**
     * Show the form for editing the specified Child01.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $child01 = $this->child01Repository->findWithoutFail($id);

        if (empty($child01)) {
            Flash::error('Child01 not found');

            return redirect(route('child01s.index'));
        }
        $list1 = DB::table('list1')
        ->select('id','title')
        ->get();
        return view('child01s.edit')->with(['child01'=>$child01,'list1'=>$list1]);
    }

    /**
     * Update the specified Child01 in storage.
     *
     * @param  int              $id
     * @param UpdateChild01Request $request
     *
     * @return Response
     */
    public function update($id, UpdateChild01Request $request)
    {
        $child01 = $this->child01Repository->findWithoutFail($id);

        if (empty($child01)) {
            Flash::error('Child01 not found');

            return redirect(route('child01s.index'));
        }

        $child01 = $this->child01Repository->update($request->all(), $id);

        Flash::success('Child01 updated successfully.');

        return redirect(route('child01s.index'));
    }

    /**
     * Remove the specified Child01 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $child01 = $this->child01Repository->findWithoutFail($id);

        if (empty($child01)) {
            Flash::error('Child01 not found');

            return redirect(route('child01s.index'));
        }

        $data = DB::table('child02')
            ->select('child02.title')
            ->where('child02.id','=',$id)
            ->get();
        //dd(count($data));
        if (count($data)>0) {
            Flash::error('data tidak bisa dihapus karna sudah ada'); 

            return redirect(route('child01s.index'));

        }else{
            $this->child01Repository->delete($id);

            Flash::success('Child01 deleted successfully.');

            return redirect(route('child01s.index'));    
        }
        
    }
}
