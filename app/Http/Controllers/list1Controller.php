<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createlist1Request;
use App\Http\Requests\Updatelist1Request;
use App\Repositories\list1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class list1Controller extends AppBaseController
{
    /** @var  list1Repository */
    private $list1Repository;

    public function __construct(list1Repository $list1Repo)
    {
        $this->list1Repository = $list1Repo;
    }

    /**
     * Display a listing of the list1.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->list1Repository->pushCriteria(new RequestCriteria($request));
        $list1s = $this->list1Repository->all();

        return view('list1s.index')
            ->with('list1s', $list1s);
    }

    /**
     * Show the form for creating a new list1.
     *
     * @return Response
     */
    public function create()
    {
        return view('list1s.create');
    }

    /**
     * Store a newly created list1 in storage.
     *
     * @param Createlist1Request $request
     *
     * @return Response
     */
    public function store(Createlist1Request $request)
    {
        $input = $request->all();

        $list1 = $this->list1Repository->create($input);

        Flash::success('List1 saved successfully.');

        return redirect(route('list1s.index'));
    }

    /**
     * Display the specified list1.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $list1 = $this->list1Repository->findWithoutFail($id);

        if (empty($list1)) {
            Flash::error('List1 not found');

            return redirect(route('list1s.index'));
        }

        return view('list1s.show')->with('list1', $list1);
    }

    /**
     * Show the form for editing the specified list1.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $list1 = $this->list1Repository->findWithoutFail($id);

        if (empty($list1)) {
            Flash::error('List1 not found');

            return redirect(route('list1s.index'));
        }

        return view('list1s.edit')->with('list1', $list1);
    }

    /**
     * Update the specified list1 in storage.
     *
     * @param  int              $id
     * @param Updatelist1Request $request
     *
     * @return Response
     */
    public function update($id, Updatelist1Request $request)
    {
        $list1 = $this->list1Repository->findWithoutFail($id);

        if (empty($list1)) {
            Flash::error('List1 not found');

            return redirect(route('list1s.index'));
        }

        $list1 = $this->list1Repository->update($request->all(), $id);

        Flash::success('List1 updated successfully.');

        return redirect(route('list1s.index'));
    }

    /**
     * Remove the specified list1 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $list1 = $this->list1Repository->findWithoutFail($id);
        
        if (empty($list1)) 
        {
            Flash::error('List1 not found');

            return redirect(route('list1s.index'));
        }

        $data = DB::table('child01')
                    ->select('child01.title')
                    ->where('child01.id','=',$id)
                    ->get();
        // dd(count($data));
        if(count($data)>0) 
        {
             Flash::error('data tidak bisa dihapus karna sudah ada');

            return redirect(route('list1s.index'));

        }else{
         $this->list1Repository->delete($id);

            Flash::success('List1 deleted successfully.');

            return redirect(route('list1s.index'));
        }
   }
}
