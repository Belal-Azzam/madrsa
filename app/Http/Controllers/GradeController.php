<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Http\Requests\StoreGradeRequest;
use Illuminate\Http\Request;
use \App\Repositories\Repository;
class GradeController extends Controller
{

    protected $model;

    function __construct(Grade $grade)
    {
        $this->model = new Repository($grade);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grades = $this->model->all();
        return view('grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('grades.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradeRequest $request)
    {
        //
        $validatedData = $request->validated();
        $this->model->create($validatedData);
        return redirect()->route('grades.index')->with('alert-success', 'Grade Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $grade = $this->model->show($id);
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
        $grade = $this->model->show($id);
        return view('grades.create', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGradeRequest $request, $id)
    {
        $validatedData = $request->validated();
        $this->model->update($validatedData, $id);
        return redirect()->route('grades.index')->with('alert-success', 'Grade Saved Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $this->model->delete($id);
        return redirect()->route('grades.index')->with('alert-success', 'Grade Deleted Successfully!');
    }
}
