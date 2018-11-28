<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support;
class SupportController extends Controller
{
    public function index()
    {   
        $supports = Support::all();
        return view('Support.index',[
            'supports' => $supports
        ]);
        
    }
    public function update(Request $request)
    {   
        $validated = $request->validate([
            'support_name'=>'required|min:3',
            'support_mail'=>'required|min:3',
            'support_questions'=>'required|min:3'
        ]);
        $support = Support::create($validated);

        return redirect('support');

        // $todo = Todo::create([
        //     'account'=> $request->account,
        // ]);

        // $support = new Support();
        // $support->support_name = $request->support_name;
        // $support->support_mail = $request->support_mail;
        // $support->support_questions = $request->support_questions;
        // $support->save();
    }

    public function destroy(Request $request, Support $support)
    {
        $support->delete('delete from support where support_id = ?',[16]);
        return redirect('support');
    }
}
