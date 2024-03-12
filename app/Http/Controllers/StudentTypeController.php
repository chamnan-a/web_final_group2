<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentTypeRequest;
use App\Http\Requests\UpdateStudentTypeRequest;
use App\Models\StudentType;

class StudentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreStudentTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentType  $studentType
     * @return \Illuminate\Http\Response
     */
    public function show(StudentType $studentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentType  $studentType
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentType $studentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentTypeRequest  $request
     * @param  \App\Models\StudentType  $studentType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentTypeRequest $request, StudentType $studentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentType  $studentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentType $studentType)
    {
        //
    }
}
