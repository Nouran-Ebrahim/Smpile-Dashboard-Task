<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $original = Attachment::count();
        if ($original == 0) {
            File::deleteDirectory(public_path('Attachments'));
        }

        return view('home');
    }

    public function store(Request $request)
    {

        $file = time() . '.' . $request->file_name->extension();

        $rowscount = Attachment::where('type', $request->type)->count();

        if ($rowscount == 0) {
            Attachment::create([
                'title' => $request->title,
                'file_name' => $file,
                'type' => $request->type,
                'status' => "new"
            ]);

        } else if ($rowscount == 1) {
            $row1 = Attachment::where('status', 'new')->where('type', $request->type)->first();
            $row1->update([
                'status' => "old"
            ]);
            Attachment::create([
                'title' => $request->title,
                'file_name' => $file,
                'type' => $request->type,
                'status' => "new"
            ]);
        } else {
            $seletedrow = Attachment::where('status', 'old')->where('type', $request->type)->first();
            $deletedfile = $seletedrow->file_name;
            File::delete(public_path('Attachments/' . $deletedfile));
            $seletedrow->delete();
            $row2 = Attachment::where('status', 'new')->where('type', $request->type)->first();
            $row2->update([
                'status' => "old"
            ]);

            Attachment::create([
                'title' => $request->title,
                'file_name' => $file,
                'type' => $request->type,
                'status' => "new"
            ]);
        }

        $request->file_name->move(public_path('Attachments/'), $file);
        session()->flash('update', 'successfuly updated');

        return redirect('/home');

    }
}
