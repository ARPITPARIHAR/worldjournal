<?php

namespace App\Http\Controllers;

use App\Models\JournalData;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JournalDataController extends Controller
{
    public function create()
    {
        return view('user.journaldata.create');
    }

    public function store(Request $request)
    {
            //   dd($request->all());
        $data = new JournalData();
        $data->journal_title = $request->titleor;
        $data->english_title = $request->titleEn;
        $data->short_title = $request->titlesh;
        $data->full_title = $request->titlefu;
        $data->alternative_title = $request->titleal;
        $data->journal_description = $request->description;
        $data->english_description = $request->descriptionEn;
        $data->journal_type = $request->characterJournal;
        $data->main_scientific_profiles = $request->mainprofile;
        $data->scientific_profile = $request->scienceprofile;
        $data->webofscience = $request->webofscience;
        $data->country = $request->country;
      
        $data->publication_language = $request->language;
        $data->issn = $request->issn;
       
        $data->doi = $request->doi;
        $data->journal_creative = $request->rapidReview;
        $data->indexing = $request->doibase;
        $data->website = $request->website;
        $data->printed_version = $request->printedVersion;
        $data->electronic_version = $request->electronicVersion;
        $data->free_full_texts = $request->freeFullText;
        $data->published_form = $request->firstIssueYear;
        $data->published_frequency = $request->freq;
        $data->circulation = $request->circulation;
        $data->review_procedure_model = $request->reviewProcedure;
        $data->initial_time = $request->initial_assessment_time;
        $data->review_time = $request->review_time;
        $data->published_time = $request->published_time;
    
        if ($request->hasFile('image')) {
          $file = $request->file('image');
          $filename = date('YmdHi') . $file->getClientOriginalName();
          $file->move(public_path('Image'), $filename);
          $data->image = $filename;
      } 
        $data->save();
    
        $request->session()->flash('centerSuccess', 'Journal data has been submitted successfully!');

        return redirect()->back()->with('showSuccessModal', true);
    }
    

}